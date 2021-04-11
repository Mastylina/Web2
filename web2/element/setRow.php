<?php
require_once("./Acount.php");
require_once("./report.php");
require_once("./config.php");
session_start();
$thematic=array_t();
?>
<form action="detail_form_not_report.php" method="post">
<div class="container">
  <div class="row">
    <div class="col-1" >
    <textarea  style="background-color:lightblue; width:110px" readonly scope="row" name ="number" value=<? echo($_SESSION['i']+1)?>><?=($_SESSION['i']+1)?></textarea>
    </div>
    <div class="col-2"> 
    <p><input style="background-color:lightblue; width:217px; height:54px" name="name_report" type="submit" value=<?echo($_SESSION['row']->name_report)?>></p>
    </div>
    <div class="col-2">
    <textarea style="background-color:lightblue; width:217px" readonly value=<? echo($_SESSION['row']->us_name)?> name ="user_name"><?=($_SESSION['row']->us_name)?></textarea>
    </div>
    <div class="col-2" >
    <textarea style="background-color:lightblue; width:217px" readonly value=<? echo($_SESSION['row']->email)?> name="email"><?=($_SESSION['row']->email)?></textarea>
    </div>
    <div class="col-2">
    <textarea style="background-color:lightblue; width:217px" readonly value=<? echo($thematic[($_SESSION['row']->number_thematics)-1])?> name="thematics"><?=($thematic[($_SESSION['row']->number_thematics)-1])?></textarea>
    </div>
    <div class="col-3">
    <textarea style="background-color:lightblue; width:300px" readonly value=<? echo($_SESSION['row']->description)?> name="description"><?=($_SESSION['row']->description)?></textarea>
    </div>
  </div>
</div>    
</form>  
  
  