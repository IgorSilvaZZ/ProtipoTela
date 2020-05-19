<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Mercadorias</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

  <nav class="navMenu">
    <img src="img/bompreco.png" style="width: 25%;height: 100%;">
    <div class="imagemProd">
      <img src="img/carrinho.png" style="width: 100%;height: 100%;">
    </div>
  </nav>

  <div style="border-top: 3px solid white;width: 100%;height: 10px;"></div>

  <div class="conteudo">
    <div class="tela">
      <div class="infoProd">
        <div class="desc">
          <h1 style="font-size: 50px;" id="titulo">Mercado Bom Preço!</h1>
          <input id="info" type="text" style="background-color:transparent;border: none;margin-left: 30%;" readonly></input>
        </div>
      </div>
      <div class="imgprod">
        <img src="img/carrinho.png"  id="imgProd" style="width: 100%;height: 100%;">
      </div>
      <div class="preco">
        <div class="price">
          <input id="preco" type="text" style="text-align: center;border: none;width: 50%;margin-left: 25%;background-color:transparent;color: black;font-size: 35px;" readonly></input>
        </div>
        <div class="cod">
          <h4 style="color: white;border-bottom: solid 1px white;text-align: center;">Código</h4>
          <p id="codigo" style="color: white;font-size: 35px;"></p>
        </div>
        <div class="quantidade">
          <h4 style="color: white;border-bottom: solid 1px white;text-align: center;">Quantidade</h4>
          <input id="quantidade" type="text" style="text-align: center;border: none;width: 50%;margin-left: 25%;background-color:transparent;color: white;font-size: 35px;" onblur="Mudar()"></input>
        </div>
        <div class="data">
          <h4 style="color: white;border-bottom: solid 1px white;text-align: center;">Data - Hora</h4>
          <p id="data" style="color: white;font-size: 25px;text-align: center;"></p>
        </div>
        <select class="browser-default custom-select" style="width: 50%;margin-left: 15%;margin-top: 1%;" id="select" onChange="carregarProdutos()">
          <option selected>Selecione o Produto</option>
          <option value="Tempero">Tempero Arisco</option>
          <option value="Caldo">Caldo Arisco</option>
          <option value="Maionese">Maionese Arisco</option>
        </select>
        <button type="button" class="btn btn-light" style="height: 17%;" id="registrar">Registar</button>
      </div>
      <div class="regProd" id="regProd">
        <ul>
          <li><p style="font-size: 25px;">Itens Registrados</p></li>
          <!-- <li style="float: right;"><p style="font-size: 25px;" id="relogio"></p></li> -->
        </ul>
        <p style="border-top: solid 2px black;margin-top: -2%;"></p>
        
      </div>
    </div>
  </div>
    

    <!-- <div class="container">
      <div class="row">
        <div class="col-sm">
          One of three columns
        </div>
        <div class="col-sm">
          One of three columns
        </div>
        <div class="col-sm">
          One of three columns
        </div>
      </div>
    </div> -->  


  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script src="js/script.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>
</html>
