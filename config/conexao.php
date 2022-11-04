<?php

$porta="localhost:8889";
$nBanco="conexao";
$usuario="root";
$senha="root";

$conexao=new PDO("mysql:host=$porta;dbname=$nBanco","$usuario","$senha");
?>