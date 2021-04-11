<?php
session_start();
include_once('header.html')?>
<div class="container-xxl">
<a class="btn btn-primary" href="registration.php" role="button">Регистрация</a>
<form  action="inp.php" method="post">
<?php
    if ($_SESSION['message']) {
        echo '<p class="message"> ' . $_SESSION['message'] . '</p>';
    }
    unset($_SESSION['message']);
    ?>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Электронная почта</label>
    <div class="col-sm-10">
      <input type="email" name ="email" class="form-control" id="inputEmail3">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Пароль</label>
    <div class="col-sm-10">
      <input type="password" name ="password" class="form-control" id="inputPassword3">
    </div>
  </div>
  <p><input name="submit" type="submit" value="Вход"></p>
</div>
</form>