<?php
require_once("report.php");
require_once("Acount.php");
session_start();
include_once('header.html');
require_once("config.php");
$g=array_t();
?>
<div class="container-xxl">
<a class="btn btn-primary" href="index.php" role="button">Назад</a>
<form action="add_application.php" method="post" enctype="multipart/form-data">
<?php
    if ($_SESSION['message']) {
        echo '<p class="message"> ' . $_SESSION['message'] . '</p>';
    }
    unset($_SESSION['message']);
    ?>
    <input type="hidden" name="MAX_FILE_SIZE"  value="10485760">
    <div class="row mb-3">
    <label for="inputName3" class="col-sm-2 col-form-label">Файл с текстом выступления</label>
    <div class="col-sm-10">
      <input type="file" name ="file_name_txt" class="form-control">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputName3" class="col-sm-2 col-form-label">Файл с презентацией</label>
    <div class="col-sm-10">
      <input type="file" name ="file_name_ppt" class="form-control">
    </div>
  </div>
<div class="row mb-3">
    <label for="inputName3" class="col-sm-2 col-form-label">Название доклада</label>
    <div class="col-sm-10">
      <input type="name" name ="name_report" class="form-control" id="inputName3" value="<?= $_SESSION['report_demo']->name_report?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputName3" class="col-sm-2 col-form-label">Место работы или учёбы</label>
    <div class="col-sm-10">
      <input type="name" name ="stydy_or_job" class="form-control" id="inputName3"  value="<?= $_SESSION['report_demo']->stydy_or_job?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputName3" class="col-sm-2 col-form-label">Должность</label>
    <div class="col-sm-10">
      <input type="name" name ="post" class="form-control" id="inputName3"  value="<?= $_SESSION['report_demo']->post?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputName3" class="col-sm-2 col-form-label">Достижения</label>
    <div class="col-sm-10">
      <input type="name" name ="progress" class="form-control" id="inputName3"  value="<?= $_SESSION['report_demo']->progress?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputName3" class="col-sm-2 col-form-label">Тематика доклада</label>
    <div class="col-sm-10">
  <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="number_thematics">
  <option value="1"><?= $g[0] ?></option>
  <option value="2"><?= $g[1] ?></option>
  <option value="3"><?= $g[2] ?></option>
  <option value="4"><?= $g[3] ?></option>
  <option value="5"><?= $g[4] ?></option>
</select>
    </div>
</div>
  <div class="row mb-3">
    <label for="inputName3" class="col-sm-2 col-form-label">Краткое описание доклада</label>
    <div class="col-sm-10">
      <input type="name" name ="description" class="form-control opisanie" id="inputName3" value="<?= $_SESSION['report_demo']->description?>">
    </div>
  </div>
<p><input name="submit" type="submit" value="Добавить"></p>
<?php
    unset($_SESSION['report_demo']);
?>
</form>
</div>
  