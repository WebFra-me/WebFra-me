<?php
include("protect.php");
$color = test_input($_POST["color"]);
file_put_contents($wd_root . '/User/' . $_SESSION["user"] . '/Admin/Pcolor.txt', $color);
header('Location: desktop.php');
?>

