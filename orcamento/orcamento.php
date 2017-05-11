<div class="row">
    <!--Botão Cadastrar-->
    <button type="button" class="btn btn-default pull-left" data-toggle="modal" data-target="#myModal" data-placement="right">
        Cadastrar novo
    </button>

    <!-- Modal -->
    <div class="modal fade bs-example-modal-lg"  tabindex="-1" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form method="post" action="orcamento\salva_orcamento.php">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Novo Orçamento</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="sel2">Selecione o produto:</label>
                            <select class="form-control" name="produto">
                                <option>Produto 1</option>
                                <option>Produto 2</option>
                                <option>Produto 3</option>
                                <option>Produto 4</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="sel2">Selecione a quantidade:</label>
                            <input type="number" class="form-control" name="qtda" min="1">
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

        <h3><center>Marcas cadastradas:</center></h3>
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