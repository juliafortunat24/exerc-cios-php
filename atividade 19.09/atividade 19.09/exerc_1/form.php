<!-- Júlia Fortunato dos Santos -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css"/>
    <title>Document</title>
 </head>
 <header>
      <nav>
         <ul>
            <li><a href="../paginaWeb.php">Home</a></li>
            <li><a href="form.php">Atividade 1</a></li>
            <li><a href="../exerc_2/feedback.php">Atividade 2</a></li>
            <li><a href="../exerc_3/reserva.php">Atividade 3</a></li>
         </ul>
      </nav>
 </header>
 <body id="bodyDoForm">
    <form action="cadastrar.php"  method="post">
        <label for="nome">Nome: </label>
        <input type="text" id="nome" name="nome" placeholder="Seu nome" required>

        <label for="email">Email: </label>
        <input type="email" id="email" name="email" placeholder="Seu email" required>

        <label for="telefone">Telefone: </label>
        <input type="text" id="telefone" name="telefone" placeholder="Seu telefone" required>

        <button type="submit">Enviar</button>
    </form>

 </body>
 <script>
    

 </script>
 </html>