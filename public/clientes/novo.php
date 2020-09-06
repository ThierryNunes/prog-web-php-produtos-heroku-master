<?php

require_once(__DIR__ . '/../../templates/template-html.php');

ob_start();

?>
    <div class="container">
        <div class="py-5 text-center">
            <h2>Cadastro de Clientes</h2>
        </div>
        <div class="row">
            <div class="col-md-12" >

                <form action="salvar.php" method="POST">

                    <div class="form-group">
                        <label for="nome">Nome do cliente</label>
                        <input type="text" class="form-control" id="nome"
                            name="nome" placeholder="Nome" required>
                    </div>

                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="text" class="form-control" id="telefone"
                            name="telefone" placeholder="Telefone" required>
                    </div>

                    <div class="form-group">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" id="endereco"
                            name="endereco" placeholder="Rua" required>
                    </div>

                    <div class="form-group">
                        <label for="numero">Número</label>
                        <input type="text" class="form-control" id="numero"
                            name="numero" placeholder="Nº" required>
                    </div>

                    <div class="form-group">
                        <label for="bairro">Bairro</label>
                        <input type="text" class="form-control" id="bairro"
                            name="bairro" placeholder="Bairro" required>
                    </div>

                    <div class="form-group">
                        <label for="cidade">Cidade</label>
                        <input type="text" class="form-control" id="cidade"
                            name="cidade" placeholder="Cidade" required>
                    </div>

                    <div class="form-group">
                        <label for="estado">UF</label>
                        <input type="text" class="form-control" id="estado"
                            name="estado" placeholder="Estado" required>
                    </div>

                    <div class="form-group">
                        <label for="cep">CEP</label>
                        <input type="text" class="form-control" id="cep"
                            name="cep" placeholder="CEP" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <a href="index.php" class="btn btn-secondary ml-1" role="button" aria-pressed="true">Cancelar</a>

                </form> 


            </div>
        </div>
    </div>
<?php

$content = ob_get_clean();
echo html( $content );
    
?>


