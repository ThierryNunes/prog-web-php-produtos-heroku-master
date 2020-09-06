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
$clientes = $daoCliente->todos();

ob_start();

?>
    <div class="container">
        <div class="py-5 text-center">
            <h2>Cadastro de Clientes</h2>
        </div>
        <div class="row mb-2">
            <div class="col-md-12" >
                <a href="novo.php" class="btn btn-primary active" role="button" aria-pressed="true">Novo Cliente</a>
            </div>
        </div>

<?php 
    if (count($clientes) >0) 
    {
?>
        <div class="row">
            <div class="col-md-12" >

                <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Nº</th>
                        <th scope="col">Bairro</th>
                        <th scope="col">Cidade</th>
                        <th scope="col">Estado</th>
                        <th scope="col">CEP</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
<?php 
        foreach($clientes as $c) {
?>                    
                    <tr>
                        <th scope="row"><?php echo  $c->getId(); ?></th>
                        <td><?php echo $c->getNome(); ?></td>
                        <td><?php echo $c->getTelefone(); ?></td>
                        <td><?php echo $c->getEndereco(); ?></td>
                        <td><?php echo $c->getNumero(); ?></td>
                        <td><?php echo $c->getBairro(); ?></td>
                        <td><?php echo $c->getCidade(); ?></td>
                        <td><?php echo $c->getEstado(); ?></td>
                        <td><?php echo $c->getCep(); ?></td>
                        <td>
                            <a class="btn btn-danger btn-sm active" 
                                href="apagar.php?id=<?php echo $c->getId();?>">
                                Apagar
                            </a>
                            <a class="btn btn-secondary btn-sm active" 
                                href="editar.php?id=<?php echo $c->getId();?>">
                                Editar
                            </a>                        
                        </td>
                    </tr>
<?php
        } // foreach
?>                    
                </tbody>
                </table>

            </div>
        </div>
<?php 
    
    }  // if 
?>        
    </div>
<?php

$content = ob_get_clean();
echo html( $content );
    
?>


