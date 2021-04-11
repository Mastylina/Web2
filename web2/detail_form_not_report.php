<?php
require_once("report.php");
require_once("Acount.php");
session_start();
include_once('header.html');
$db=new PDO('pgsql:host=127.0.0.1;dbname=conference','user','qwertyuiop');
$query2='SELECT * FROM "report" WHERE "email_user"=:email AND name_report=:name_rep';
$qw2=$db->prepare($query2);
$qw2->bindParam(':email', $_POST['email']);
$qw2->bindParam(':name_rep', $_POST['name_report']);
$qw2->execute();
$_use=$qw2->fetch();
?>
<div class="container-xxl">
<a class="btn btn-primary" href="index.php" role="button">Назад</a>
<form action="detail_form_action.php" method="post">
<div class="row mb-3">
    <label for="inputName3" class="col-sm-2 col-form-label">Название доклада</label>
    <div class="col-sm-10">
    <input type="name" name ="name_report" class="form-control" id="inputName3" readonly='true' value="<?=$_POST['name_report']?>">
    </div>
</div>
<div class="row mb-3">
  <label for="inputName3" class="col-sm-2 col-form-label">Место работы или учёбы</label>
  <div class="col-sm-10">
    <input type="name" name ="stydy_or_job" class="form-control" id="inputName3" readonly='true' value="<?=$_use['stydy_or_job']?>">
  </div>
</div>
<div class="row mb-3">
  <label for="inputName3" class="col-sm-2 col-form-label">Должность</label>
  <div class="col-sm-10">
    <input type="name" name ="post" class="form-control" id="inputName3" readonly='true' value="<?= $_use['post']?>">
  </div>
</div>
<div class="row mb-3">
  <label for="inputName3" class="col-sm-2 col-form-label">Достижения</label>
  <div class="col-sm-10">
    <input type="name" name ="progress" class="form-control" id="inputName3" readonly='true' value="<?= $_use['progress']?>">
  </div>
</div>
<div class="row mb-3">
  <label for="inputName3" class="col-sm-2 col-form-label">Тематика доклада</label>
  <div class="col-sm-10">
    <input type="name" name ="thematics" class="form-control opisanie" id="inputName3" readonly='true' value="<?=$_POST['thematics']?>">
  </div>
  </div>
  <div class="row mb-3">
    <label for="inputName3" class="col-sm-2 col-form-label">Краткое описание доклада</label>
    <div class="col-sm-10">
      <input type="name" name ="description" class="form-control opisanie" id="inputName3" readonly='true' value="<?= $_POST['description']?>">
    </div>
  </div>
  <a name="file_name_txt" href="<?= $_use['file_name_txt']?>">Ссылка на файл с текстом доклада</a><br>
  <a name="file_name_ppt" href="<?= $_use['file_name_ppt']?>">Ссылка на презентацию</a>
</form>
</div>