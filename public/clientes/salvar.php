<?php

require_once(__DIR__ . '/../../db/Db.php');
require_once(__DIR__ . '/../../model/Cliente.php');
require_once(__DIR__ . '/../../dao/DaoCliente.php');
require_once(__DIR__ . '/../../config/config.php');

$conn = Db::getInstance();

if (! $conn->connect()) {
    die();
}

$daoCliente = new DaoCliente($conn);
$daoCliente->inserir( new Cliente($_POST['nome'], $_POST['telefone'], $_POST['endereco'], $_POST['numero'], $_POST['bairro'], $_POST['cidade'], $_POST['estado'], $_POST['cep']));
    
header('Location: ./index.php');

?>