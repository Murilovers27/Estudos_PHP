<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Processamento</title>
  <link rel="stylesheet" href="stayle.css">
</head>
<body>
    <header><h1>Resultado</h1></header>
    <main>
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
        <button><a href="javascript:history.go(-1)">Voltar</a></button>
        
    </main>
</body>
</html>

