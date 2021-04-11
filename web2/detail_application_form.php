<?php
require_once("report.php");
require_once("Acount.php");
session_start();
include_once('header.html');
require_once("config.php");
$thematic=array_t();
if ($_SESSION['report']) {
    include_once("detail_form_report.php");
} else  {
    include_once("detail_form_not_report.php");
} 
?>

