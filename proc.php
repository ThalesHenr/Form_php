<?php
//variaveis globais 
//$nome = $_GET['nome'];
//$sexo = $_GET['sexo'];
$nome = $_POST['nome'];
$sexo = $_POST['sexo'];


echo "<p><strong> Nome: ".$nome."</strong></p>";
echo "<p><strong> Sexo: ".$sexo."</strong></p>";
//echo "<p><strong> senha: ".$_GET['senha']"</strong></p>";
echo "<p><strong> ?:".$_REQUEST['nome']."</strong></p>";


?>