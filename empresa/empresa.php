<div class="row">
    <!--Botão Cadastrar-->
    <button type="button" class="btn btn-default pull-left" data-toggle="modal" data-target="#empresaModal" data-placement="right">
        Cadastrar novo
    </button>

    <!-- Modal -->
    <div class="modal fade bs-example-modal-lg"  tabindex="-1" id="empresaModal" tabindex="-1" role="dialog" aria-labelledby="empresaModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form method="post" action="empresa\salva_empresa.php">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="empresaModalLabel">Cadastro de Empresa</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nome">Nome da empresa:</label>
                            <input type="text" class="form-control" name="nome" placeholder="Empresa" required>
                        </div>
                        <div class="form-group">
                            <label for="nome">CNPJ:</label>
                            <input type="text" class="form-control" name="cnpj" placeholder="44.217.701/0001-52" required>
                        </div>

                        <div class="form-group">
                            <label for="nome">Endereço:</label>
                            <input type="text" class="form-control" name="endereco" placeholder="Endereço">
                        </div>

                        <div class="form-group">
                            <label for="endereco">Telefone:</label>
                            <input type="number" class="form-control" maxlength="15" name="phone" placeholder="12345678910"/>
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="email@example.com.br">
                        </div>

                        <div class="form-group">
                            <label for="contato">Contato:</label>
                            <input type="text" class="form-control" name="contato" placeholder="Contato" required>
                        </div>
                        <div class="form-group">
                            <label for="logo">Selecione a logo da empresa:</label>
                            <input type="file" id="logo" accept="image/*">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Salvar Cadastro</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-12">

        <h3><center>Empresas cadastradas:</center></h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Marca</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Marca 1</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Marca 2</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Marca 3</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>