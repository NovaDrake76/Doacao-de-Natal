<html lang="pt-BR">
    <head>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <meta charset="UTF-8">

      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <style>
          p{
              margin: 0px;
          }
 
      body {
     background-image: url('https://images.pexels.com/photos/639110/pexels-photo-639110.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
      }
      .container{
        padding: 20px;
        margin-top: 20px;
      }

      .progress{
        width: 30%;
      }

      </style>

    </head>

    <body>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
  </html>

            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Doação de Natal</title>
        </head>
        <body>


        <div class="container white">
        <h3>Total de doações cadastradas até agora:</h3>




        <p  class="flow-text">Roupas: <b> 
        <?php
        $a = file("texts/roupas.txt");
        echo array_sum($a) . "\n";
        ?>
         unidades </b> </p>
        <p  class="flow-text">Alimentos: <b>     <?php
        $b= file("texts/alimentos.txt");
        echo array_sum($b) . "\n";

        ?> KG </b> </p>
        <p  class="flow-text">Dinheiro: <b> R$ <?php
        
        $c = file("texts/dinheiro.txt");
        echo array_sum($c) . "\n";
        ?> </b> </p>

        <?php
          $porcentagemroupa = array_sum($a);

          $porcentagemcomida = array_sum($b) / 3;

          $porcentagemdinheiro = array_sum($c) / 10;
          
        ?>
<div class="row">
        <h4 class="blue-text">Meta:</h4>
        <p  class="flow-text blue-text">Roupas: <b> 100 unidades </b> </p>


        <p class="blue-text">Porcentagem de conclusão da média: <?php echo $porcentagemroupa?>%</p>
        <div class="progress">
          
        <!--  -->
        
      <div class="determinate " style="width: <?php echo $porcentagemroupa."%"?>"></div>
      </div>
     
        
        <p  class="flow-text blue-text">Alimentos: <b> 300 KG </b> </p>
        <p class="blue-text">Porcentagem de conclusão da média:  <?php echo $porcentagemcomida?>%</p> </p>

        <div class="progress">
        
        <div class="determinate " style="width: <?php echo $porcentagemcomida."%"?> "></div>
        </div>
       
        <p  class="flow-text blue-text">Dinheiro: <b> R$ 1000  </b> </p>
        <p class="blue-text">Porcentagem de conclusão da média:  <?php echo $porcentagemdinheiro?>%</p></p>

        <div class="progress">
        
        <div class="determinate " style="width: <?php echo $porcentagemdinheiro ."%"?> "></div>


        </div>
        </div>
        <a href="index.php">Voltar para a página inicial</a>

        </div>
        </body>
        </html>

