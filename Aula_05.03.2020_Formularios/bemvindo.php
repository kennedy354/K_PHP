<?php
$log = $_POST["log"];
$sen = md5($_POST["sen"]);//md5 serve para criptogafar senhas
if($log=="gmail.com" && $sen==md5("123")){
    echo "<center><h1>Bem Vindo</h1></center>";
}
else{
    header('Location: index.php?erro=1');
}
?>