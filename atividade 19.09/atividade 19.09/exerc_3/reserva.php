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
         <li><a href="../exerc_2/feedback.php">Atividade 2</a></li>
         <li><a href="reserva.php">Atividade 3</a></li>
      </ul>
   </nav>
</header>

<body id="bodyReserva">
   <form id="form" action="processar_reserva.php" method="post">
   <label for="nome">Nome do Solicitante: </label>
   <input type="text" id="nome" name="nome" placeholder="Nome do Solicitante " required>

   <label for="data">Data: </label>
   <input type="date" id="data" name="data" required>

   <label for="horario">Horario: </label>
   <input type="time" id="horario" name="horario" required>

   <button type="submit">Confirmar</button>
   </form>

</body>

</html>