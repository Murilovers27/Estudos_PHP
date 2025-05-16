<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Processamento</title>
  <link rel="stylesheet" href="stayle.css">
</head>
<body>

  <header><h1>Resultado do preocesamento</h1></header>

  <main>
      <?php
      //SuperGlobais, variaveis que podem ser acessadas em qualquer lugar do sistema, nesse caso o get reupera os dados insiridos nos inouts no html
      var_dump($_GET); 
      var_dump($_REQUEST); //$_REQUEST e os tres metodos HTTP, GET, POST e COOKIE, ela requisita todos od dados que ja foram ultraporcessador pelo servidor.

      $nome = $_GET['name'] ?? "Nome invalido/Não inserido"; //O ?? e um operador de coolenscencia, ele funciona quase com =um try catch, ele vai tentar pegar o valor, caso não consiga ele atribui o valor a variavel com oque voce preferir
      $Sobrenome = $_GET['SobreNome'] ?? "Sobrenome invalido";
      //Funciona como o tratamendo de execessoes bem vagabundo

      //essa e uma meneira de interatividade, eu pego o nome especifico do input e trabalho emcima dele, um getElementById simplificado, e assim que os sites referenciam seu nome apartit do login

      echo "<h1>E um prazer $nome $Sobrenome<h1/>";

      for($i = 0; $i < 10; $i++){
        echo "<h2>" . ($i * 2) . "<h2/>";
      }

      ?>
      <!--Maneira de retornar parginas com javaScript, o history.go(-1) e uma funçao que recebe a quantidade de paginas que devem ser retornadas ao clicar, no caso e -1, ele navega pelo historico do navegado/localStorage.-->

      
      <a href="javascript:history.go(-1)">Voltar para pagina anterior</a>
  </main>
</body>
</html>