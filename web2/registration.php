<?php
require_once("Acount.php");
session_start();
include_once('header.html');
?>
<div class="container-xxl">
<a class="btn btn-primary" href="input.php" role="button">Вход</a>
<form action="registr.php" method="post">
    <!-- PHP проверка валидации формы регистрации -->
    <?php
    if ($_SESSION['message']) {
        echo '<p class="message"> ' . $_SESSION['message'] . '</p>';
    }
    unset($_SESSION['message']);
    ?>
  <div class="row mb-3">
    <label for="inputName3" class="col-sm-2 col-form-label">Имя</label>
    <div class="col-sm-10">
      <input type="name" name ="name" class="form-control" id="inputName3" value="<?= $_SESSION['user_demo']->name?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Электронная почта</label>
    <div class="col-sm-10">
      <input type="email"name="email" class="form-control" id="inputEmail3"value="<?= $_SESSION['user_demo']->email?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Пароль</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control" id="inputPassword3"value="<?= $_SESSION['user_demo']->password?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPasswordReplay3" class="col-sm-2 col-form-label">Повторите пароль</label>
    <div class="col-sm-10">
      <input type="password" name="password_replay" class="form-control" id="inputPasswordReplay3">
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-sm-10 offset-sm-2">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="checkbox"id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          Согласие на обработку данных
        </label>
      </div>
    </div>
  </div>
 <p><input name="submit" type="submit" value="Зарегистрироваться"></p>
</div>
<?php
    unset($_SESSION['user_demo']);
?>
</form>
