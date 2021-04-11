<?php
require_once("Acount.php");
session_start();
$user=new Acount();
$user->registrationForm();
try {
    if (!empty($user->email) && !empty($user->password) && !empty($user->name) && $user->flag) {
        if (!preg_match("/^[а-яА-я_\-%\s]+$/iu", $user->name)) {
            throw new Exception(' В имени допустимы только русские буквы, пробелы и дефисы!');
        }
        if (!filter_var($user->email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception('Некорректный адрес электронной почты');
        }
        if (strlen($user->password) < 6) {
            throw new Exception('Пароль должен содержать в себе более шести символов');
           
        } elseif (!preg_match("/[^0-9]/", $user->password)) {
            throw new Exception('Пароль не должен состоять только из цифр');
        }
        if (strcasecmp($_POST['password_replay'], $user->password) != 0) {
            throw new Exception('Пароли не совпадают');
        }
        if (strcasecmp($user->flag, "on") == 0) {
            $user->flag = "true";
        } else {
            $user->flag = "false";
        }
} else {
    throw new Exception('Не все поля заполнены');
}
$_SESSION['user'] = $user;
$db=new PDO('pgsql:host=127.0.0.1;dbname=conference','user','qwertyuiop');
$query='INSERT INTO "user_conference"("email_user","name_user","password_user","flag_user") VALUES(:email_us,:name_us,:password_us,:flag_us)';
$parametr=[ 
    ':email_us'=>$user->email,
    ':name_us'=>$user->name,
    ':password_us'=>password_hash($user->password,PASSWORD_DEFAULT),
    ':flag_us'=>$user->flag
];
    $qw=$db->prepare($query);
    $qw->execute($parametr);
    header('Location: index.php'); 
}
catch(Exception $e) {
    $_SESSION['message'] = $e->getMessage();
    $_SESSION['user_demo'] = $user;
    header('Location: registration.php'); 
}
?>
