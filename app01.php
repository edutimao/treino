<?php
if (isset($_GET["nome"])){ 
    $nome = $_GET["nome"];
    $idade = $_GET["idade"];
    echo "meu nome é $nome";
    echo " e eu tenho $idade anos. <br>";
}
?>

<html>

    <head>
        <title>Aula PHP</title>
    </head>

    <body>
    
        <form action= "" method= "get">
            
            <label>Enviar</label>
            <input type = "text" name = "nome" placeholder = "digite o nome">
            <input type = "text" name = "idade" placeholder = "digite a idade">
            <input type = "submit" value = "Enviar">

        </form>

    </body>

</html>