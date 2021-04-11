<?php
    require_once('./report.php');
    require_once('./Acount.php');
    require_once('funGetName.php');
    function setTable($array) {
        for($i=0; $i<Count($array); $i++ ) {
            $report = new Report();
            $report->us_name = getName($array[$i]["email_user"]);
            $report->email = $array[$i]["email_user"];
            $report->name_report = $array[$i]["name_report"];
            $report->number_thematics = $array[$i]["number_thematics"];
            $report->description = $array[$i]["description"];
            $_SESSION['row'] = $report;
            $_SESSION['i'] = $i;
            include('setRow.php');
        }   
    } 
?>
    

     