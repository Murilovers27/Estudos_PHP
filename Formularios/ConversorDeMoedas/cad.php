<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Processamento</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
      <main>
        <h1>Conversor de moedas</h1>
      <?php 
    //Exercicio com cotação fixa, não esta consumindo uma api para a atualização comtinua 
    $cotacao = 5.17;
    $real = $_REQUEST["din"] ?? 0;
    $dolar = $real / $cotacao;

    $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY); 

    echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . 
         " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD"); 
      ?>
       h1><a href="javascript:history.go(-1)"><button>Voltar</button></a></h1>
      </main>
      
  
</body>
</html>