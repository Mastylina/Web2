<?php
require_once("Acount.php");
session_start();
include_once('header.html')?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<?php
if (!$_SESSION['user']) {
    include_once("element/not_autorize.php");
} 
if ($_SESSION['user'] && strcasecmp($_SESSION['user']->name,'админ') == 0) {
    include_once("element/autorize_us_admin.php");
}
elseif ($_SESSION['user']) {
    unset($_SESSION['report']);
include_once("element/autorize_us.php");
} 
?>
</body>
</html>