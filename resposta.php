<?php
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];

$roupa = $_POST['roupa'].PHP_EOL;
file_put_contents("texts/roupas.txt", $roupa, FILE_APPEND);

$alimento = $_POST['alimento'].PHP_EOL;
file_put_contents("texts/alimentos.txt", $alimento, FILE_APPEND);

$dinheiro = $_POST['dinheiro'].PHP_EOL;
file_put_contents("texts/dinheiro.txt", $dinheiro, FILE_APPEND);

$botao = $_POST['botao'];

error_reporting(0);
    

if(isset($_FILES['image'])){
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
    

    if(empty($errors)==true){
       move_uploaded_file($file_tmp,"images/".$file_name);
    }else{
       print_r($errors);
    }
 }


?>


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
   

        <h5><b>Obrigado por registrar sua doação!</b> No dia 18 leve os itens prometidos
para o Centro Social Anna Neumman, Rua Esteves Jacinto, 18 - Centro!</h5>

     <?php
      echo "<img src='images/".$file_name . "' alt='img' width='200'>";

      ?>
      <h4>Dados da doação:</h4>
        <p  class="flow-text">Nome: <b> <?php echo $nome; ?> </b>  </p>
        <p  class="flow-text">Telefone:<b>  <?php echo $telefone; ?>  </b> </p>
        <p  class="flow-text">Roupas:<b>  <?php echo $roupa; ?> unidades</b> </p>
        <p  class="flow-text">Alimentos:<b>  <?php echo $alimento;?> KG  </b> </p>
        <p  class="flow-text">Dinheiro:<b>  R$ <?php echo $dinheiro; ?> </b>  </p>

        <a href="dados.php">Clique aqui para ver as estatísticas de doação</a>

  </div>
  
        </body>
        </html>

