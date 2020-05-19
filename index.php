<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Registro de Clientes</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php require_once('global.php'); ?>

  <!--Navbar -->
  <nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color" >
    <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" href="#">
          <i class="fas fa-user"></i>
            Pessoas
          </a>
        </li>
        <li class="nav-item">
        <a class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" href="#" >
        <i class="fas fa-phone-alt"></i>
            Contato
          </a>
        </li>
        <li class="nav-item">
        <a class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" href="#">
        <i class="fas fa-users"></i>
            Representante
          </a>
        </li>
        <li class="nav-item">
        <a class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" href="#">
        <i class="fas fa-exclamation-circle"></i>
            Interesse
          </a>
        </li>
        <li class="nav-item">
        <a class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" href="#">
        <i class="fas fa-list-ul"></i>
            Tarefas
          </a>
        </li>
        <li class="nav-item">
        <a class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" href="#">
        <i class="fas fa-map-marker-alt"></i>
            Mapa do Google 
          </a>
        </li>
        <li class="nav-item">
        <a class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" href="#">
        <i class="fas fa-undo-alt"></i>
            Backup
          </a>
        </li>
        <li class="nav-item">
        <a class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" href="#">
        <i class="fas fa-sign-out-alt"></i>
            Sair
          </a>
        </li>
      </ul>
        </li>
      </ul>
    </div>
  </nav>
  <!--/.Navbar -->

  <div class="container" style="margin-top: 3%;">
    <div class="row">
      <button type="button" class="btn btn-default">Cliente</button>
      <button type="button" class="btn btn-outline-default waves-effect"><i class="fas fa-door-open"></i>Fechar</button>
      <div class="col">

      </div>
      <button type="button" class="btn btn-default"><i class="fas fa-print"></i>Imprimir</button> 
    </div>
      <hr>
  </div>

  <form method="POST" action="cadastroPessoa.php" onSubmit="return ValidaForm(this)" style="margin-top: 2%;">
    <div class="container">
    <div class="row">
      <div class="col-sm">
        <div class="form-group">
          <label for="formGroupExampleInput" style="font-size: 15px;"><b>Nome</b></label>
          <input class="form-control" type="text" placeholder="Nome" name="txtNome">
        </div>
      </div>
      <div class="col-sm">
        <div class="form-group">
          <label for="formGroupExampleInput" style="font-size: 15px;"><b>Representante</b></label>
          <select class="browser-default custom-select" name="txtRepresentante">
            <option selected>Selecione o Representante</option>
            <option value="Winner">Winner</option>
            <option value="Rock">Rock</option>
            <option value="Jubileu">Jubileu</option>
          </select>
        </div>
      </div>
      <div class="col-sm">
        <div class="form-group">
          <label for="formGroupExampleInput" style="font-size: 15px;"><b>Interesse</b></label>
          <select class="browser-default custom-select" name="txtInteresse">
            <option selected>Funcionário</option>
            <option value="Paulo Vazquez">Paulo Vazquez</option>
            <option value="Carlos Marx">Carlos Marx</option>
            <option value="José Campina">José Campina</option>
          </select>
        </div>
      </div>
      <div class="row">
      <div class="col-sm">
        <div class="form-group">
          <label for="formGroupExampleInput" style="font-size: 15px;"><b>Pedido</b></label>
          <input class="form-control" type="text" placeholder="Valor pedido" name="txtPedido">
        </div>
      </div>
    </div>
    </div>

    <br>

    <div class="container" style="margin-left: -1.5%;">
      <div class="row">
        <div class="col-sm">
          <div class="form-group">
            <label for="formGroupExampleInput" style="font-size: 15px;"><b>Contato</b></label>
            <input class="form-control" type="text" placeholder="Contato" name="txtContato">
          </div>
        </div>
        <div class="col-sm">
          <div class="form-group">
            <label for="formGroupExampleInput" style="font-size: 15px;"><b>Telefone</b></label>
            <input class="form-control" type="text" placeholder="Telefone" name="txtTelefone">
          </div>
        </div>
        <div class="col-sm">
          <div class="form-group">
            <label for="formGroupExampleInput" style="font-size: 15px;"><b>Telefone 2</b></label>
            <input class="form-control" type="text" placeholder="Telefone 2" name="txtTelefone2">
          </div>
        </div>
        <div class="col-sm">
          <div class="form-group">
            <label for="formGroupExampleInput" style="font-size: 15px;"><b>Telefone Celular</b></label>
            <input class="form-control" type="text" placeholder="Telefone Celular" name="txtCelular">
          </div>
        </div>
        <div class="col-sm">
          <div class="form-group">
            <label for="formGroupExampleInput" style="font-size: 15px;"><b>Fax</b></label>
            <input class="form-control" type="text" placeholder="Fax" name="txtFax">
          </div>
        </div>
        <div class="col-sm">
          <div class="form-group">
            <label for="formGroupExampleInput" style="font-size: 15px;"><b>Email</b></label>
            <input class="form-control" type="text" placeholder="Email" name="txtEmail">
          </div>
        </div>
        <div class="col-sm">
          <div class="form-group">
            <label for="formGroupExampleInput" style="font-size: 15px;"><b>Email 2</b></label>
            <input class="form-control" type="text" placeholder="Email 2" name="txtEmail2">
          </div>
        </div>
      </div>
    </div>
    
    <br>

    <div class="container" style="margin-left: -1.5%;">
      <div class="row">
        <div class="col-sm">
          <label for="formGroupExampleInput" style="font-size: 15px;"><b>Endereço</b></label>
              <input class="form-control" type="text" placeholder="Endereço" name="txtEndereco">
        </div>
        <div class="col-sm">
          <label for="formGroupExampleInput" style="font-size: 15px;"><b>Bairro</b></label>
              <input class="form-control" type="text" placeholder="Bairro" name="txtBairro">
          </div>
        <div class="col-sm">
          <label for="formGroupExampleInput" style="font-size: 15px;"><b>Cidade</b></label>
              <input class="form-control" type="text" placeholder="Cidade" name="txtCidade">
        </div>
        <div class="col-sm">
          <label for="formGroupExampleInput" style="font-size: 15px;"><b>UF</b></label>
              <input class="form-control" type="text" placeholder="UF" name="txtUf">
        </div>
        <div class="col-sm">
          <label for="formGroupExampleInput" style="font-size: 15px;"><b>Cep</b></label>
              <input class="form-control" type="text" placeholder="Cep" name="txtCep">
        </div>
      </div>
    </div>

    <br>

    <div class="container" style="margin-top: 3%;">
    <div class="row">
      <button type="button" class="btn btn-default"><i class="fas fa-user"></i>Pessoa Fisica</button>
      <button type="button" class="btn btn-outline-default waves-effect"><i class="fas fa-phone-alt"></i>Pessoa Juridica</button>
      <div class="col">

      </div>
    </div>
      <hr>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm">
        <div class="form-group">
          <label for="formGroupExampleInput" style="font-size: 15px;"><b>Nascimento</b></label>
          <input class="form-control" type="text" placeholder="Nascimento" name="txtNasc">
        </div>
      </div>
      <div class="col-sm">
        <div class="form-group">
          <label for="formGroupExampleInput" style="font-size: 15px;"><b>Sexo</b></label>
          <select class="browser-default custom-select" name="txtSexo">
            <option selected>Selecione o Sexo</option>
            <option value="Feminino">Feminino</option>
            <option value="Masculino">Masculino</option>
          </select>
        </div>
      </div>
      <div class="col-sm">
        <div class="form-group">
          <label for="formGroupExampleInput" style="font-size: 15px;"><b>Cpf</b></label>
          <input class="form-control" type="text" placeholder="Cpf" name="txtCpf">
        </div>
      </div>
      <div class="col-sm">
        <div class="form-group">
          <label for="formGroupExampleInput" style="font-size: 15px;"><b>Estado Civil</b></label>
          <select class="browser-default custom-select" name="txtCivil">
            <option selected>Selecione o Estado Civil</option>
            <option value="Solteiro">Solteiro</option>
            <option value="Casado(a)">Casado(a)</option>
            <option value="Viúvo(a)">Viúvo(a)</option>
            <option value="Divorciado(a)">Divorciado(a)</option>
          </select>
        </div>
      </div>
      <div class="col-sm">
        <div class="form-group">
          <label for="formGroupExampleInput" style="font-size: 15px;"><b>Cargo</b></label>
          <input class="form-control" type="text" placeholder="Cargo" name="txtCargo">
        </div>
      </div>
    </div>
  </div>

  <button type="submit" style="margin-left: 40%;margin-top: 3%;" class="btn btn-default"><i class="fas fa-save"></i>Salvar</button> 
  
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
  </form>

  <div class="container" style="margin-top: 3%;">
    <div class="row">
      <button type="button" class="btn btn-default"><i class="fas fa-user"></i>Pessoa Fisica</button>
      <button type="button" class="btn btn-outline-default waves-effect"><i class="fas fa-phone-alt"></i>Observação</button>
      <div class="col">

      </div>
    </div>
      <hr>
  </div>

  <div class="container" style="margin-top: 3%;">
    <div class="row">
      <button type="button" class="btn btn-outline-default waves-effect"><i class="fas fa-file"></i>Novo</button>
      <button type="button" class="btn btn-outline-default waves-effect"><i class="fas fa-folder-open"></i>Abrir</button>
      <div class="col">
      </div>
    </div>
      <hr>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm">
        <div class="form-group">
          <select class="browser-default custom-select">
            <option selected>Dado do Contato</option>
          </select>
        </div>
      </div>
      <div class="col-sm">
        <div class="form-group">
            <select class="browser-default custom-select">
              <option selected>Tipo de Contato</option>
            </select>
        </div>
      </div>
      <div class="col-sm">
        <div class="form-group">
            <select class="browser-default custom-select">
              <option selected>Contato</option>
            </select>
        </div>
      </div>
      <div class="col-sm">
        <div class="form-group">
            <select class="browser-default custom-select">
              <option selected>Usuario</option>
            </select>
        </div>
      </div>
      <div class="col-sm">
        <div class="form-group">
            <select class="browser-default custom-select">
              <option selected>Telefone</option>
            </select>
        </div>
      </div>
      <div class="col-sm">
        <div class="form-group">
            <select class="browser-default custom-select">
              <option selected>Data do Aviso</option>
            </select>
        </div>
      </div>
    </div>
  </div>

  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>
  <script src="js/validacao.js"></script>

</body>
</html>
