<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lendo Formularios</title>
  <link rel="stylesheet" href="stayle.css">
</head>
<body>
  <header><h1>Se apresente para nós </h1></header>
  <section>
    <form action="cad.php" method="get">
          <label for="Nome">Nome</label>
          <input type="text" name="name" id="idNome" placeholder="Digite seu nome" required>

          <label for="SobreNome">Sobrenome</label>
          <input type="text" name="SobreNome" id="idSobreNome" placeholder="Digite seu sobrenome" required> 
          <input type="submit" value="enviar" placeholder="Enviar">
    </form>
  </section>
  <?php
    //Dados de entrada em php, consumindo formulários, os dados de entrada no php, diferente de javaScript, eles são tratados no servidor e mandados por metodos HHTP, como GET e POST.

  ?>
</body>
</html>


