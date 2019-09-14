<?php

if (isset($_POST["email"])){
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    if($email == "cleitondemelo@live.com" && $senha = "12345678") {
        echo "WELCOME: $email <br>";
        echo "$senha";
    } else if($email == "emorais091@gmail.com" && $senha == "87654321") {
        echo "WELCOME: $email <br>";
        echo "$senha";
    }
     else {
        echo "Email ou senha incorreto";
    }
    

}
?>


<html>

    <head>

        <title> aula03 </title>

    </head>

    <body>

        <form action= "" method= "post">

        <label> E-mail </label>
        <input type = "text" name = "email" placeholder = "email"> <br>
        <label> Senha </label>
        <input type = "password" name = "senha" placeholder = "senha"> <br>
        <input type = "submit" value = "Enviar">
        <input type = "submit" value = "cancelar">

        </form>

    </body>

</html>