<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Processamento</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
      <header><h1>Resultado do processamento</h1></header>
      <main>
        <?php
            if (isset($_GET["numero"])){
                $numero = $_GET["numero"] ?? -1;
                if(is_numeric($numero) && $numero > 0){
                    $antecessor = $numero - 1;
                    $sucessor = $numero + 1;
                    echo "<p>Você selecionou o número: <strong>$numero</strong></p>";
                    echo "<p>O antecessor de <strong>$numero</strong> é: <strong>$antecessor</strong></p>";
                    echo "<p>O sucessor de <strong>$numero</strong> é: <strong>$sucessor</strong></p>";
                }else{
                  echo "<p>Digite um número valido maior que zero.</p>";
                }
            } 
        ?>
        <button><a href="javascript:history.go(-1)">Voltar</a></button>
      </main>
</body>
</html>