<?php
session_start();

session_destroy();

header("location: loginagent.php");
exit();
?>