<div class="row">
    <!--Botão Cadastrar-->
    <button type="button" class="btn btn-default pull-left" data-toggle="modal" data-target="#myModal" data-placement="right">
        Novo Produto
    </button>

    <!-- Modal -->
    <div class="modal fade bs-example-modal-lg"  tabindex="-1" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form method="post" action="produto\salva_produto.php">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Cadastro de Produto</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nome">Nome do produto:</label>
                            <input type="text" class="form-control" name="nome" placeholder="Produto" required>
                        </div>
                        <div class="form-group">
                            <label for="valor">Valor:</label>
                            <input type="number" step="0.01" class="form-control" name="valor" placeholder="R$ 9.99" min="00.01" required>
                        </div>
                        <div class="form-group">
                            <label for="sel1">Selecione uma marca:</label>
                            <select class="form-control" name="marca">
                                <?php
                                $sql = "select id_marca, nome from marcas";
                                $result = mysqli_query($DBConn, $sql);
                                if (mysqli_num_rows($result) > 0) 
                                {
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                        echo "<option value=". $row["id_marca"] .">".$row["nome"]."</option>";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="sel2">Selecione um tipo de unidade:</label>
                            <select class="form-control" name="id_unidade">
                                <option>unidade 1</option>
                                <option>unidade 2</option>
                                <option>unidade 3</option>
                                <option>unidade 4</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="descricao">Descrição do produto:</label>
                            <input type="text" class="form-control" name="descricao" placeholder="Descrição do Produto">
                        </div>
                        <div class="form-group">
                            <label for="foto">Selecione uma imagem do produto:</label>
                            <input type="file" id="foto" accept="image/*">
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

        <h3><center>Produtos cadastrados:</center></h3>
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