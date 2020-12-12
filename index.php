<html lang="pt-BR">
    <head>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <meta charset="UTF-8">

      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <style>
      body {
      background-image: url('https://images.pexels.com/photos/639110/pexels-photo-639110.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
      }
      </style>

    </head>

    <body>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
  </html>
        
            <title>Doação de Natal</title>
        </head>
        <body>






        
        <div class="slider">
    <ul class="slides">
    <li>
        <img src="https://wallpapercave.com/wp/wp5056375.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3>Doação de natal da comunidade!</h3>
          <h5 class="light grey-text text-lighten-3">Doe alimentos, roupas ou dinheiro</h5>
        </div>
      </li>
      <li>
        <img src="https://fotospublicas.com/wp-content/uploads/2014/12/Papai-Noel-entrega-presentes-para-criancas-de-instiutuicoes-carentes-de-Porto-Alegre-foto-Luciano-Lanes-PMPA_201412220002.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>Nos ajude!</h3>
          <h5 class="light grey-text text-lighten-3">Precisamos de você.</h5>
        </div>
      </li>
    
      <li>
        <img src="https://64.media.tumblr.com/a786ed45cae4825728115e04d77dbffa/tumblr_p1iulsQ55c1sk1rjvo1_500.gif"> <!-- random image -->
        <div class="caption right-align">
          <h3>Desde já agradecemos!</h3>
        </div>
    </ul>
  </div>
      


        <div class="container">


        <h5>Faça um doação! Você vai tornar alguém da comunidade de Passo Largo mais feliz.
Cadastre aqui o que você vai doar do dia 18/12.</h5>

        <div class="row card">
    <form class="col s12 m7" method="post" action="resposta.php" enctype="multipart/form-data">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" name="nome" class="validate">
          <label for="icon_prefix">Nome completo</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input id="icon_telephone" type="tel" required pattern="[0-9]+$" name="telefone"class="validate">
          <span class="helper-text" data-error="Digite um número!"></span>

          <label for="icon_telephone">Telefone</label>
        </div>
      </div>

    <div class="file-field input-field">
      <div class="btn red lighten-2">
      <i class="material-icons left">attach_file</i>
        <span>Procurar</span>
        <input type="file" name="image" >
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Anexe aqui sua foto">
      </div>
      </div>
      
      <div class="row">
        <div class="col s12">
          Roupas:
          <div class="input-field inline">
          <input type="number" id="roupas" name="roupa" class="validate" required pattern="[0-9]+$" required min="0">
          <span class="helper-text" data-error="Digite um número!"></span>
          
            <label for="roupas">Unidades</label>
          </div>
        </div>
        <div class="col s12">
          Alimentos:    
          <div class="input-field inline">
          <input type="number" id="alimentos" name="alimento" class="validate" required pattern="[0-9]+$" required min="0">
          <span class="helper-text" data-error="Digite um número!"></span>


            <label for="alimentos">KG</label>
          </div>
        </div>
        <div class="col s12">
          Dinheiro:
          <div class="input-field inline">
          <input type="number" id="dinheiro" name="dinheiro" class="validate" required pattern="[0-9]+$" required min="0" >
          <span class="helper-text" data-error="Digite um número!"></span>


            <label for="dinheiro">Reais</label>
          </div>
        </div>
      </div>
      <button class="btn waves-effect waves-light red lighten-2" type="submit" name="botao" >Enviar
    <i class="material-icons right">send</i>
  </button>

    <a class="waves-effect waves-light btn modal-trigger red lighten-2" href="#modal1">Como funciona?<i class="material-icons right">help_outline</i>
</a>


<div id="modal1" class="modal modal-fixed-footer">
  <div class="modal-content">
    <h4>Precisamos de você!</h4>
    <p>Para melhor organizar nosso evento de natal da comunidade, precisamos ter uma média do que será arrecado.
        Caso você deseje realizar uma doação, por favor nos informe através desse formulário! Estamos contando com sua ajuda!
    </p>
    <img src="https://media1.tenor.com/images/50ca43dc140f1c06855ea4ddaedc6c5c/tenor.gif?itemid=15781949">
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Entendível, tenha um ótimo natal</a>
  </div>
</div>

    </form>
    
  </div>
  

  
        
            

        </div>
            <script>
   document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.slider');
    var instances = M.Slider.init(elems);
  });
            </script>
            <script> document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems);
  });</script>
        </body>
        </html>