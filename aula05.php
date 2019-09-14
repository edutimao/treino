<?php

if (isset($_POST["nome"])){

    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $idade = $_POST["idade"];
    $sexo = $_POST["sexo"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    echo "Seu nome é $nome";
    echo " $sobrenome <br>";
    echo "Tem $idade anos <br>";
    echo " , sexo $sexo <br>";
    echo "Seu e-mail $email";

    if ($idade <18){
        echo "Você não é digno do nosso site!!!";
    }

    else if ($idade >=18){
        echo "Seja bem vindo, jovem aprendiz!!!";
    }
}

?>


<html>

<head>

    <title> Aula05 </title>

    <h1> INFORMAÇÕES </h1>

</head>

<body>

    <form action = "" method = "post">

    <label> Nome </label>
    <input type = "text" name = "nome" placeholder = "nome">
    <input type = "text" name = "sobrenome" placeholder = "sobrenome"> <br>
    <label> Idade </label>
    <input type = "text" name = "idade" placeholder = "Ex: 18">
    
    <label> Sexo </label>
  
    <select  name = "sexo">
  
        <option value = "1"> <br>
        <option value = "Feminino"> Feminino <br>
        <option value = "Masculino"> Masculino <br>
  
    </select> <br>
  
    <label> E-mail </label>
  
    <input type = "text" name = "email" placeholder = "Ex: emorais091@gmail..."> <br>
  
    <label> Senha </label>
  
    <input type = "password" name = "senha" placeholder = "senha"> <br>
    <input type = "submit" value = "Enviar">
    <input type = "reset" value = "Cancelar">

</body>

</html>