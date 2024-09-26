<!-- Júlia Fortunato dos Santos -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body id="bodyProcessar">
    <div id="divProcessar">
    <?php //Inicia o bloco de código PHP. Tudo o que estiver dentro deste bloco será processado como PHP.
    if ($_SERVER['REQUEST_METHOD'] == "POST") { //superglobal do PHP que contém informações sobre o 
        //método de requisição
        $nome = $_POST["nome"]; //através do metodo post o que esta no id nome passa a pertencer a variavel $nome
        $data = $_POST["data"]; //através do metodo post o que esta no id data passa a pertencer a variavel $data
        $horario = $_POST["horario"]; //através do metodo post o que esta no id horario passa a 
        //pertencer a variavel $horario

        echo "Olá " . $nome . " sua reserva foi marcada para: <br>"; // esta imprimindo uma mensagem na tela e utilizando a 
        //concatenação (texto + variavel)
        echo " Dia: " . $data . "<br>"; // esta imprimindo uma mensagem na tela e utilizando a 
        //concatenação (texto + variavel)
        echo " Horario: " . $horario . "<br>"; // esta imprimindo uma mensagem na tela e utilizando a 
        //concatenação (texto + variavel)
    } else { // se o metodo não for post o else sera exibido
        echo "Algo deu errado";
    }
    ?>
    </div>
    

</body>

</html>