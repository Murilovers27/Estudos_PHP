<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Matematica</title>
</head>
<body>
    <?php
      $soma = 3 + 2;
      $Multiplicacao = 3 * 2;
      $divisao = 3 / 2;
      $resto = 3 % 2;
      $subtração = 3 - 2;
      $potencia = 3 ** 2;
      $raiz = 3 ** (1/2);
      
      //funções matematicas
      $raiz = sqrt(16);
      $potencia = pow(3, 2);
      $NumeroAbsoluto = abs(-3);
      $ArredondamentoParaCima = ceil(3.2);
      $AredondamentoParaBaixo = floor(3.2); 
      $ArrendondamentoInteiro = round(3.2);
      $ConverssaoDeBases = base_convert(10, 10, 2); //Primeiro numero e oque voce quer, o segundo e da base que vecê esta, o terceiro a base que deseja converter, por exemplo, se eu quiesse de decimal para exadecimal ficaria assim: base_convert(10, 10, 16);

      //prioridades
      $media = (3 + 2) / 2; //a prioridade e sempre o paranteses, assim como na matematica.
      //order: () > ** > * > / > + > -

      min(5, 2);//Verifica o manor valor da sequencia, possivelmente pode ser usado em uma lista/array
      max(5, 2);//o maximo da sequencia
      pi();//valor de pi
      M_PI;//contante pi
      sin(19);
      cos(13);
      tan(2); //seno coseno e tangente

      
    ?>
  
</body>
</html>