<?php

 if (isset($_POST["nome"])){
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $moro = $_POST["moro"];
    $amigo = $_POST["amigo"];
    
    echo "O meu nome é $nome,";
    echo " eu tenho $idade anos. <br>";
    echo "Moro em $moro com meu amigo";
    echo " e o nome dele é $amigo";

 }
?>


<html>

    <head>
        <title> aula02 </title>
    </head>

    <body>

        <form action= "" method= "post">

            <label> Nome e Idade </label>
            <input type = "text" name = "nome" value = "nome">
            <input type = "text" name = "idade" value = "idade"> <br>
            <label> Local e Companheiro </label>
            <input type = "text" name = "moro" value = "local">
            <input type = "text" name = "amigo" value = "amigo"> <br>
            <input type = "submit" value = "enviar">

        </form>

    </body>

</html>