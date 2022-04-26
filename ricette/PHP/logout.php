<?php
#esegui il logout dalla sessione corrente 
session_start();
session_destroy();
header("Location: /PHP_Zaniolo/ricette/index.php");
?>