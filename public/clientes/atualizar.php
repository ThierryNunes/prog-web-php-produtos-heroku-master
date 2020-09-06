<?php

require_once(__DIR__ . '/../../templates/template-html.php');

require_once(__DIR__ . '/../../db/Db.php');
require_once(__DIR__ . '/../../model/Cliente.php');
require_once(__DIR__ . '/../../dao/DaoCliente.php');
require_once(__DIR__ . '/../../config/config.php');

$conn = Db::getInstance();

if (! $conn->connect()) {
    die();
}

$daoCliente = new DaoCliente($conn);
$cliente = $daoCliente->porId( $_POST['id'] );
    
if ( $cliente )
{  
  $cliente->setNome( $_POST['nome'] );
  $cliente->setTelefone( $_POST['telefone'] );
  $cliente->setEndereco( $_POST['endereco'] );
  $cliente->setNumero( $_POST['numero'] );
  $cliente->setBairro( $_POST['bairro'] );
  $cliente->setCidade( $_POST['cidade'] );
  $cliente->setEstado( $_POST['estado'] );
  $cliente->setCep( $_POST['cep'] );  
  $daoCliente->atualizar( $cliente );  
}

header('Location: ./index.php');