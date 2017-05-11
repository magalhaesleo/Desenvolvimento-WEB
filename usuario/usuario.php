<div class="row">
    <!--Botão Cadastrar-->
    <button type="button" class="btn btn-default pull-left" data-toggle="modal" data-target="#myModal" data-placement="right">
        Cadastrar novo
    </button>

    <!-- Modal -->
    <div class="modal fade bs-example-modal-lg"  tabindex="-1" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form method="post" action="usuario\salva_usuario.php">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Preencha os dados do Formulário</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nome">Nome do usuário:</label>
                            <input type="text" class="form-control" name="nome" placeholder="Seu nome">
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="email" placeholder="email@example.com">
                        </div>

                        <div class="form-group">
                            <label for="endereco">Telefone:</label>
                            <input type="tel" class="form-control" maxlength="15" name="phone" placeholder="12345678910" required/>
                        </div>

                        <div class="form-group">
                            <label for="nome">Login:</label>
                            <input type="text" class="form-control" name="login" placeholder="Login">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" placeholder="***************" name="senha" required>
                        </div>
                        <div class="form-group">
                            <label for="sel2">Selecione o tipo de usuario:</label>
                            <select class="form-control" name="tipo">
                                <option>tipo 1</option>
                                <option>tipo 2</option>
                                <option>tipo 3</option>
                                <option>tipo 4</option>
                            </select>
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

        <h3><center>Usuarios cadastrados:</center></h3>
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