<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Sorteador de Números</title>
  <link rel="stylesheet" href="stayle.css"> <!-- Seu CSS aqui -->
</head>
<body>
  <header><h1>Sorteador de Números</h1></header>
  
  <section>
    <form method="get">
      <h2>Sorteando números entre 1 e o número informado</h2>
      <label for="numero">
        <input type="number" name="numero" placeholder="Digite um número" required>
      </label>
      <br><br>
      <button type="submit">Sortear</button>
    </form>

    <?php
      if (isset($_GET["numero"])) {
          $limite = $_GET["numero"];

          if (is_numeric($limite) && $limite > 0) {
              $sorteado = rand(1, $limite);
              echo "<p>Você digitou: <strong>$limite</strong></p>";
              echo "<p>Número sorteado: <strong>$sorteado</strong></p>";
          } else {
              echo "<p>Digite um número válido maior que zero.</p>";
          }
      }
    ?>
  </section>
</body>
</html>