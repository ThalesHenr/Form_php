<?php
//variaveis globais 
//$nome = $_GET['nome'];
//$sexo = $_GET['sexo'];
$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$senha = $_POST['senha'];


//echo "<p><strong> Nome: ".$nome."</strong></p>";
//echo "<p><strong> Sexo: ".$sexo."</strong></p>";
//echo "<p><strong> senha: ".$_GET['senha']"</strong></p>";
//echo "<p><strong> ?:".$_REQUEST['nome']."</strong></p>";

//echo strlen($nome);//Quantidade de caracteres
//echo "<br>";
//echo (int)empty($nome);

if (strlen($nome)==0){
    //echo "campo obrigatório";
    header ("location:aula.php?erro=Nome");
}

//if (strlen($sexo) ==0 ){
    //echo "campo obrigatório";
//}

//senha mínimo 6 caracteres 

if (strlen($senha)<=3){
  echo "campo obrigatório";
}

?>
