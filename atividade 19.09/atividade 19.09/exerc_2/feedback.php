<!-- Júlia Fortunato dos Santos -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<header>
    <nav>
        <ul>
            <li><a href="../paginaWeb.php">Home</a></li>
            <li><a href="../exerc_1/form.php">Atividade 1</a></li>
            <li><a href="feedback.php">Atividade 2</a></li>
            <li><a href="../exerc_3/reserva.php">Atividade 3</a></li>
        </ul>
    </nav>
</header>
<body>

    <div class="produto-container">
        <div class="produtos">
            <img src="./imgescova.png" alt="Produto 1" class="produto-img">
            <form action="processar_feedback.php" method="post">
                <label for="nome1">Digite aqui o nome do produto: </label>
                <input type="text" id="nome1" name="nome" required><br>

                <label id="select" >Quantas estrelas você acha que esse produto merece: </label>
                <select name="nota" id="nota">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
               </select>

                <label for="comentario1">Faça um comentário sobre o produto: </label>
                <input type="text" id="comentario1" name="comentario" placeholder="Adicione aqui um comentário" required><br>

                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>

</body>
</html>