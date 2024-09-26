<!-- Júlia Fortunato dos Santos -->
<?php //Inicia o bloco de código PHP. Tudo o que estiver dentro deste bloco será processado como PHP.
if ($_SERVER['REQUEST_METHOD'] == "POST") { //superglobal do PHP que contém informações sobre o 
    //método de requisição
    $nome = $_POST["nome"]; //através do metodo post o que esta no id nome passa a pertencer a variavel $nome
    $nota = $_POST["nota"]; //através do metodo post o que esta no id nota passa a pertencer a variavel $nota
    $comentario = $_POST["comentario"]; //através do metodo post o que esta no id comentario passa a 
    //pertencer a variavel $comentario
} else {  // se o metodo não for post o else sera exibido
    echo "Algo deu errado";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./style.css">
<title>Document</title>
</head>
<body id="bodyDoProcessar">

<form action="mensagem.php">

    <ul>
        <h2>Informações sobre seu Feedback: </h2>
        <li><strong>Nome do Produto: </strong><?php echo $nome; ?></li>
        <li><strong>Nota do Produto: </strong><?php echo $nota; ?></li>
        <li><strong>Comentário: </strong><?php echo $comentario; ?></li>
        <button type="submit" >Enviar</button>
    </ul>

</form>

    
</body>
</html>