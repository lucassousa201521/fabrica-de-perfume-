<?php
session_start();
include_once ("conexao.php");

$agua = filter_input(INPUT_POST, 'agua', FILTER_SANITIZE_NUMBER_INT);
$alcool = filter_input(INPUT_POST, 'alcool', FILTER_SANITIZE_NUMBER_INT);
$fragrancia = filter_input(INPUT_POST, 'fragrancia', FILTER_SANITIZE_NUMBER_INT);

//echo "Água: $agua <br>";
//echo "Álcool: $alcool <br>";
//echo "Fragrância: $fragrancia <br>";

$result_usuarios = "INSERT INTO usuarios (agua, alcool, fragrancia, created) VALUES ('$agua', '$alcool', '$fragrancia', NOW())";
$resultado_usuario = mysqli_query ($conn, $result_usuarios);

if(mysqli_insert_id($conn)){
  $_SESSION['msg'] = "<p style='color: green'> Insumo cadastrado com sucesso <br><br></p>";
  header ("Location: index.php");
}else{
  $_SESSION['msg'] = "<p style='color: red'>Insumo não cadastrado com sucesso <br><br></p>";
  header ("Location: index.php");;
}
