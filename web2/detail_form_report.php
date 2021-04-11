<?php
require_once("report.php");
require_once("Acount.php");
session_start();
include_once('header.html');
require_once("config.php");
$thematic=array_t();
?>
<div class="container-xxl">
<a class="btn btn-primary" href="index.php" role="button">Назад</a>
<form action="detail_form_action.php" method="post">
<div class="row mb-3">
    <label for="inputName3" class="col-sm-2 col-form-label">Название доклада</label>
    <div class="col-sm-10">
    <input type="name" name ="name_report" class="form-control" id="inputName3" readonly='true' value="<?=$_SESSION['report']->name_report?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputName3" class="col-sm-2 col-form-label">Место работы или учёбы</label>
    <div class="col-sm-10">
      <input type="name" name ="stydy_or_job" class="form-control" id="inputName3" readonly='true' value="<?= $_SESSION['report']->stydy_or_job?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputName3" class="col-sm-2 col-form-label">Должность</label>
    <div class="col-sm-10">
      <input type="name" name ="post" class="form-control" id="inputName3" readonly='true' value="<?= $_SESSION['report']->post?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputName3" class="col-sm-2 col-form-label">Достижения</label>
    <div class="col-sm-10">
      <input type="name" name ="progress" class="form-control" id="inputName3" readonly='true' value="<?= $_SESSION['report']->progress?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputName3" class="col-sm-2 col-form-label">Тематика доклада</label>
    <div class="col-sm-10">
      <input type="name" name ="thematics" class="form-control opisanie" id="inputName3" readonly='true' value="<?=$thematic[($_SESSION['report']->number_thematics)-1]?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputName3" class="col-sm-2 col-form-label">Краткое описание доклада</label>
    <div class="col-sm-10">
      <input type="name" name ="description" class="form-control opisanie" id="inputName3" readonly='true' value="<?= $_SESSION['report']->description?>">
    </div>
  </div>
  <a  href="<?=$_SESSION['report']->txt_file?>">Ссылка на файл с текстом доклада</a><br>
  <a  href="<?=$_SESSION['report']->ppt_file?>">Ссылка на презентацию</a>
</form>
</div>