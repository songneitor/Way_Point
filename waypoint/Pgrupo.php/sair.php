<?php

session_start();
ob_start();

unset($_SESSION['usuario'], $_SESSION['senha']);

header("Location: index.php");

?>