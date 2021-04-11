<?php
include_once('./header.html');
require_once('setTable.php');
?>
<div class="container-xxl">
<div class="row">
<div class="col-11">
<p class="card-text">Приветствую вас на сайте </p>
</div>
<div class="col-1">
<a class="btn btn-primary" href="logout.php" role="button">Выход</a>
</div>
</div>
<div class="container">
  <div class="row">
    <div class="col-1" >
    <textarea style="background-color:lightblue; width:110px" readonly scope="row" value=#>#</textarea>
    </div>
    <div class="col-2">
    <textarea style="background-color:lightblue; width:217px" readonly value="Название доклада" >Название доклада</textarea>
    </div>
    <div class="col-2">
    <textarea style="background-color:lightblue; width:217px" readonly value="Имя">Имя</textarea>
    </div>
    <div class="col-2">
    <textarea style="background-color:lightblue; width:217px" readonly value="Почта">Почта</textarea>
    </div>
    <div class="col-2">
    <textarea style="background-color:lightblue; width:217px" readonly value="Тематика доклада">Тематика доклада</textarea>
    </div>
    <div class="col-3">
    <textarea style="background-color:lightblue; width:300px" readonly value="Краткое описание доклада">Краткое описание доклада</textarea>
    </div>
  </div>
</div>  
<?php
    $db = new PDO('pgsql:host=127.0.0.1;dbname=conference','user','qwertyuiop');
    $query2 = 'SELECT * FROM "report"';
    $qw2 = $db->prepare($query2);
    $qw2->execute();
    $_use = $qw2->fetchAll();
    setTable($_use);
?>
 </div>
   