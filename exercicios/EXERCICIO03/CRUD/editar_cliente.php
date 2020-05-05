<?php
require_once('classes/cliente.php');

if($_SERVER["REQUEST_METHOD"]=="POST"){
    print_r($_POST);
    $clyn = new Cliente;

    $clyn->loadById($_POST['idCliente']);
    $clyn->setnome($_POST['nome']);
    $clyn->setcpf($_POST['cpf']);
    $clyn->setemail($_POST['email']);
    $clyn->setsenha($_POST['senha']);
    $clyn->setcidade($_POST['cidade']);
    $clyn->setestado($_POST['estado']);
    $clyn->setcelular($_POST['celular']);
    $clyn->update();

    header("Location: clientes.php");
    exit;   
}

$clyn = new Cliente;
$clyn->loadById($_GET['idCliente']);
?>


<!DOCTYPE html>
<!-- saved from url=(0053)https://getbootstrap.com/docs/4.4/examples/dashboard/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>ATUALIZAR CLIENTE</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/dashboard/">

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/favicon.ico">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="dashboard/dashboard.css" rel="stylesheet">
  <style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style></head>
  <body cz-shortcut-listen="true">
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="https://getbootstrap.com/docs/4.4/examples/dashboard/#">Company name</a>
</nav>
<br><br>
<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">

          <li class="nav-item">
            <a class="nav-link" href="categoria.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
              Categorias
            </a>
          </li>



          <li class="nav-item">
            <a class="nav-link" href="produto.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
              Produtos
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="cliente.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
              Clientes
            </a>
          </li>

        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <h2>ATUALIZAR CLIENTE</h2>


<form class="container" method="post" action = "editar_cliente.php"> 

<div class="form-group">
<label>ID</label>
<input type="text" class="form-control" id="idCliente" name="idCliente" readonly="true" value="<?php 
echo $clyn->getIdCliente();
?>">
</div>

<div class="form-group">
<label>Nome</label>
<input type="text" class="form-control" id="nome" name="nome" required="true"value="<?php 
echo $clyn->getnome();
?>">
</div>

<div class="form-group">
<label>CPF</label>
<input type="text" class="form-control" id="cpf" name="cpf" readonly="true"value="<?php 
echo $clyn->getcpf();
?>">
</div>

<div class="form-group">
<label>Email</label>
<input type="text" class="form-control" id="email" name="email" required="true"value="<?php 
echo $clyn->getemail();
?>">
</div>

<div class="form-group">
<label>Senha</label>
<input type="text" class="form-control" id="senha" name="senha" required="true"value="<?php 
echo $clyn->getsenha();
?>">
</div>

<div class="form-group">
<label>Cidade</label>
<input type="text" class="form-control" id="cidade" name="cidade" required="true"value="<?php 
echo $clyn->getcidade();
?>">
</div>

<div class="form-group">
<label>Estado</label>
<input type="text" class="form-control" id="estado" name="estado" required="true"value="<?php 
echo $clyn->getestado();
?>">
</div>

<div class="form-group">
<label>Celular</label>
<input type="text" class="form-control" id="celular" name="celular" required="true"value="<?php 
echo $clyn->getcelular();
?>">
</div>


<button type="submit" class="btn btn-success">Atualizar</button>
</form>


    </main>
  </div>
</div>

<script src="dashboard/jquery-3.4.1.slim.min.js.download" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="dashboard/bootstrap.bundle.min.js.download" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
        <script src="dashboard/feather.min.js.download"></script>
        <script src="dashboard/Chart.min.js.download"></script>
        <script src="dashboard/dashboard.js.download"></script>

</body></html>