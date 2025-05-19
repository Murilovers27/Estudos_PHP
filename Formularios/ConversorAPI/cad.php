<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
            <h1>Conversor</h1>
    <?php

    $real = $_GET["din"];
    //Atualizar as datas automaticamente
    $inicio = date("m/d/Y", strtotime("-7 days"));
    $fim = date("m/d/Y");

    //Consumindo uma API e atribuindo ela para a avariavel api_key
    $api_key = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

    //incrementei as variaveis de data atualizadas dantro da api, para ela sempre me retornar a URl atualizada

    //trantando os dados que chegaram da api, por via da função json_decode, ela pega e traduz o conteudo recebido em javaScript, pega o conteudo e transforma em uma json em forma de array ou objct
    $dados = json_decode(file_get_contents($api_key), true);

    //puxando os dados que eu quero isolodamente 
    $cotacao = $dados["value"][0]["cotacaoCompra"];
    $dolar = $real / $cotacao;
    $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY); 

    echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . 
         " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");
         


?>
    <h1><a href="javascript:history.go(-1)"><button>Voltar</button></a></h1>
    </main>
    
</body>
</html>
