<?php
require_once('./connect.php');
   function getName($emai)
   {
      global $db;
      $query2 = 'SELECT name_user FROM "user_conference" WHERE "email_user"=:email';
      $qw2 = $db->prepare($query2);
      $qw2->bindParam(':email',$emai);
      $qw2->execute();
      $_use = $qw2->fetch();
      return $_use["name_user"];
   }
?>
    

     