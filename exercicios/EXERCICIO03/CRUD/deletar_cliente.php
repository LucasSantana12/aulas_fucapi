<?php

require_once('classes/cliente.php');
print_r($_GET);

$cli = new Cliente;
$cli->loadById($_GET['idCliente']);
$cli->delete();

header('Location: clientes.php');
exit;

?>