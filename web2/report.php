<?php
class Report 
{
public $name_report;
public $us_name;
public $stydy_or_job;
public $post;
public $progress;
public $number_thematics;
public $description;
public $email;
public $txt_file;
public $ppt_file;
function add_report()
{
    $this->name_report = ($_POST['name_report']);
    $this->stydy_or_job = ($_POST['stydy_or_job']);
    $this->post = ($_POST['post']);
    $this->progress = ($_POST['progress']);
    $this->number_thematics = $_POST['number_thematics'];
    $this->description = $_POST['description'];
}
}
