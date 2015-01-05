<?php
require '../include/common.inc.php';
print_r("--------");
$lang=$_SESSION["lang"];
session_destroy();
WindowRedirect("login.php?lang=".$lang);
?>