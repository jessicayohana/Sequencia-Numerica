<?php

$numeros= $_POST["numeros"]; // = name do form


$consolidado = "$numeros";
$file = 'dados.txt';
file_put_contents($file, $consolidado);
header('Location: ../resposta.php');





    ?>