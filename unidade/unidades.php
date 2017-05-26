
<div class="col-md-3 bg-info">
    <div class="btn-group-vertical">
        <!--Botão Cadastrar-->
        <button type="button" class="btn btn-default pull-left" data-toggle="modal" data-target="#myModal" data-placement="right">
            Cadastrar novo
        </button>
    </div>
    <br><br><br><br><br><br><br><br><br>
</div>
<div class="col-md-9">
    <!-- Modal -->
    <div class="modal fade bs-example-modal-lg"  tabindex="-1" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form method="post" action="unidade\salva_unidade.php">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Preencha os dados do Formulário</h4>
                    </div>
                    <div class="modal-body">
                        <label for="nome">Nome da Unidade:</label>
                        <input type="text" class="form-control" name="nome" placeholder="Nome da Unidade" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Salvar Cadastro</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <h3>Unidades cadastradas:</h3>
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
