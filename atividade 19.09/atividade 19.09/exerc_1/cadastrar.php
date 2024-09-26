<!-- Júlia Fortunato dos Santos -->
<?php //Inicia o bloco de código PHP. Tudo o que estiver dentro deste bloco será processado como PHP.
if ($_SERVER['REQUEST_METHOD'] == "POST"){ //superglobal do PHP que contém informações sobre o 
    //método de requisição
    $nome = $_POST["nome"]; //através do metodo post o que esta no id nome passa a pertencer a variavel $nome
    $email = $_POST["email"]; //através do metodo post o que esta no id email passa a pertencer a variavel $email
    $telefone = $_POST["telefone"]; //através do metodo post o que esta no id telefone passa a pertencer a 
    //variavel $telefone

} else { // se o metodo não for post o else sera exibido
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
<body id="bodyDoCadastrar">
    <ul>
        <li><strong>Nome: </strong><?php echo $nome ?></li>
        <li><strong>Email: </strong><?php echo $email ?></li>
        <li><strong>Telefone: </strong><?php echo $telefone ?></li>
        <p>Você foi cadastrado com sucesso!</p>
    </ul>
    



</body>
</html>