<?php session_start(); ?>
<!DOCTYPE html>
<?php
      if(isset($_SESSION['visitas'])){
        $_SESSION['visitas']++;
    }else{
        $_SESSION['visitas'] = 1;
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a>Visitas:<?php echo $_SESSION['visitas']; ?></a>
    <a>Dirección IP:<?php echo  $_SERVER["REMOTE_ADDR"]; ?></a>
    <a>Navegador:<?php echo  $_SERVER["HTTP_USER_AGENT"]; ?></a>
    <a>HOST:
