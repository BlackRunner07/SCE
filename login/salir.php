<?php
session_start();

session_destroy();

header("location: ../index_publico.php");
exit();

?>