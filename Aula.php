<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="proc.php" method="post">
    <div>
        <label for="s"> Nome: </label>
        <input type="text" id="s" name="nome"/>
    </div> 
    
    <div>
        <label> Sexo: </label>
        <input type="radio" id="sexo" name="sexo" value="F"/> feminino
        <input type="radio" id="sexo" name="sexo" value="M"/> masculino  
    </div>


    <div>
    <label for="x"> Senha: </label>

    <input type="password" id="x"name="senha" /> 

    </div>
    
    <input type="submit" value="Cadastro"/>

</form>

</body>
</html>