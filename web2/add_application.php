<?php
require_once("Acount.php");
session_start();
require("config.php");
require_once('connect.php');
require_once("report.php");
$report = new Report();
$report->add_report();
try {
    if (empty($report->name_report) || empty($report->stydy_or_job) || empty($report->post) || empty($report->progress) || empty($report->number_thematics) || empty($report->description)) {
        throw new Exception('Не все поля заполнены');  
    } 
    if ($_FILES['file_name_txt']['size'] == 0 || $_FILES['file_name_txt']['size'] > 10485760) {
        throw new Exception('Размер файла не соответсвует');  
    }
    if ($_FILES['file_name_ppt']['size'] == 0 || $_FILES['file_name_ppt']['size'] > 31457280) {
        throw new Exception('Размер файла не соответсвует');  
    }
    if (($_FILES['file_name_ppt']['type'] == 'application/vnd.openxmlformats-officedocument.presentationml.presentation' || $_FILES['file_name_ppt']['type'] == 'application/vnd.ms-powerpoint' || $_FILES['file_name_ppt']['type']=='application/pdf') && ($_FILES['file_name_txt']['type'] == 'application/pdf' || $_FILES['file_name_txt']['type'] == 'application/vnd.openxmlformats-officedocument.wordprocessingml.document' || $_FILES['file_name_txt']['type'] == 'application/msword')) {
        $_SESSION['report']=$report;
        move_uploaded_file($_FILES['file_name_txt']['tmp_name'],'temp/'.$_FILES['file_name_txt']['name']);
        move_uploaded_file($_FILES['file_name_ppt']['tmp_name'],'temp/'.$_FILES['file_name_ppt']['name']);
        $report->txt_file = 'temp/'.$_FILES['file_name_txt']['name'];
        $report->ppt_file = 'temp/'.$_FILES['file_name_ppt']['name'];
        global $db;
        $query = 'INSERT INTO "report"("name_report","stydy_or_job","post","progress","number_thematics","description","email_user","file_name_txt","file_name_ppt") VALUES(:name_rep,:stydy_or_job_us,:post_us,:progress_us,:number_thematics_rep,:description_rep,:email_us,:file_txt,:file_ppt)';
        $parametr = [
            ':name_rep'=>$report->name_report,
            ':stydy_or_job_us'=>$report->stydy_or_job,
            ':post_us'=>$report->post,
            ':progress_us'=>$report->progress,
            ':number_thematics_rep'=>$report->number_thematics,
            ':description_rep'=>$report->description,
            ':email_us'=>$_SESSION['user']->email,
            ':file_txt'=>$report->txt_file,
            ':file_ppt'=>$report->ppt_file
        ];
        $qw = $db->prepare($query);
        $qw->execute($parametr);
        header('Location: detail_application_form.php');    
    }
    else {
        $_SESSION['message'] = 'Формат файла не верен';
        $_SESSION['report_demo'] = $report;
        header('Location: form_add_application.php'); 
    }
    } catch(Exception $e) {
        $_SESSION['message'] = $e->getMessage();
        $_SESSION['report_demo'] = $report;
        header('Location: form_add_application.php'); 
    }
?>
