<?php
session_start();
$email="rpererah@123.com";
$senha=1234;
$emailRecebido=$_POST["teste"];
$senhaRecebida=$_POST["teste2"];
if($email==$emailRecebido && $senha==$senhaRecebida)
{
    $_SESSION['logado']=1;
    header("location:index.php");
}else{
    $_SESSION['logado']=0;
    header("location:login.php");
}

?>