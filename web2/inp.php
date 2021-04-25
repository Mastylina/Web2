<?php
require_once("Acount.php");
require_once('connect.php');
session_start();
$user = new Acount();
global $db;
$query2 = 'SELECT "password_user" FROM "user_conference" WHERE "email_user"=:email';
$qw2 = $db->prepare($query2);
$qw2->bindParam(':email', trim($_POST['email']));
$qw2->execute();
$password_use = $qw2->fetch();
$fl = password_verify(trim($_POST['password']),$password_use[0]);
if ($fl == true) {
    $user->email = trim($_POST['email']);
    $user->password = $password_use[0];
    $query2 = 'SELECT "name_user" FROM "user_conference" WHERE "email_user"=:email';
    $qw2 = $db->prepare($query2);
    $qw2->bindParam(':email', trim($_POST['email']));
    $qw2->execute();
    $name_use = $qw2->fetch();
    $user->name = $name_use[0];
    $_SESSION['user'] = $user;
    header('Location: index.php');
} else {
    $_SESSION['message'] = "Неправильно введён логин или пароль";
    header('Location: input.php');
}
?>
