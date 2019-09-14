<?php

if (isset($_POST["nome"])){
$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$idade = $_POST["idade"];
$sexo = $_POST["sexo"];
$senha = $_POST["senha"];

echo "$nome";
echo " $sobrenome <br>";
echo " $idade <br>";
echo " $sexo <br>";
echo " $senha <br>";

if ($idade <18){
    echo " Você ainda é um gerino!!!";
}
else if ($idade >=18){
    echo " Parabéns, você já um jovem gafanhoto! S2";
}
}

?>


<html>

    <head>

        <title> aula04 </title>

        <h1> Faça seu cadastro! </h1>

    </head>

<body>

    <form action= "" method= "post">

        <label> Digite seu nome </label>
        <input type = "text" name = "nome" placeholder = "nome">
        <input type = "text" name = "sobrenome" placeholder = "sobrenome"> <br>
        <label> Sua idade e Sexo </label>
        <input type = "text" name = "idade" placeholder = "idade">
        <select name = "sexo">Selecione
        <option value="1"></option> <br>
        <option value="Feminino">Feminino</option> <br>
        <option value="Masculino">Masculino</option> <br>
        </select> <br>
        <label> Digite sua senha </label>
        <input type = "password" name = "senha" placeholder = "senha"> <br>
        <input type = "submit" value = "Enviar">
        <input type = "submit" value = "Cancelar">

    </form>

</body>

</html>