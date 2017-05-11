
<div class="col-sm-3 bg-info">
    <!--Botão Cadastrar-->
    <br>
    <div class="btn-group-vertical">
        <button type="button" class="btn btn-default btn-block" data-toggle="modal" data-target="#myModal" data-placement="right">
            Nova Marca
        </button>
    </div>
    <br><br><br><br><br><br><br><br><br>
</div>

<!-- Modal -->
<div class="col-sm-9">
    <div class="modal fade bs-example-modal-lg"  tabindex="-1" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form method="post" action="marca\salva_marca.php">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Cadastro de Marca</h4>
                    </div>
                    <div class="modal-body">
                        <label for="nome">Nome da marca:</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome da Marca" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary" name="submit">Salvar Cadastro</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <h3>Marcas cadastradas:</h3>
    <table class="table">
<!--        <thead>
            <tr>
                <th><center>ID</center></th>
        <th><center>MARCA</center></th>
        <th><center>OPÇÕES</center></th>
        </tr>
        </thead>
        <tbody>-->
            <?php
            $sql = "select * from marcas";
            $result = mysqli_query($DBConn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                echo "<thead>
                        <tr>
                        <th><center>ID</center></th>
                        <th><center>MARCA</center></th>
                        <th><center>OPÇÕES</center></th>
                        </tr>
                        </thead>
                        <tbody>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td><center>" . $row["id_marca"] . "</center></td>";
                    echo "<td><center>" . $row["nome"] . "</center></td>";
                    echo "<td><center>";
                    echo "<button type='button' class='btn btn-default btn-xs' ";
                    echo 'onclick="updateMarca(' . $row["id_marca"] . ',\'' . $row["nome"] . '\')" data-toggle="modal" >';
                    echo '<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>';
                    echo '</button>';
                    echo "<button type='button' class='btn btn-default btn-xs' ";
                    echo 'onclick="deleteMarca(' . $row["id_marca"] . ',\'' . $row["nome"] . '\')" data-toggle="modal" >';
                    echo '<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>';
                    echo '</button></center>';
                    echo '</td>';
                    echo "</tr>";
                }
                echo '</tbody>';
            } else {
                echo "0 Marcas cadastradas!";
            }
            ?>
        </tbody>
    </table>

    <div class="modal fade bs-example-modal-lg" tabindex="-1" id="ModalUpdateMarca" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Editar Marca</h4>
                </div>
                <form method="post" action="marca\updateMarca.php">
                    <div class="modal-body">
                        <input type="hidden" name="idmarca" id="idmarca">
                        <label for="nome">Nome da marca:</label>
                        <input type="text" class="form-control" id="nomemarca" name="nome" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary" name="submit">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade bs-example-modal-sm" tabindex="-1" id="ModalDeleteMarca" tabindex="-1" role="dialog" aria-labelledby="ModalDeleteMarca">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="LabelHeaderRemoveMarca"></h4>
                </div> 
                <div class="modal-body">
                    <form method="post" action="marca\deleteMarca.php">
                        <input type="hidden" name="idmarca" id="idmarca1">
                        <center>
                            <button type="button" class="btn btn-default" data-dismiss="modal">NÃO</button>
                            <button type="submit" class="btn btn-danger" name="submit">SIM</button>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function updateMarca(arg1, arg2)
    {
        $('#ModalUpdateMarca').modal('show');
        document.getElementById("idmarca").value = arg1;
        document.getElementById("nomemarca").value = arg2;
    }
    function deleteMarca(arg1, arg2)
    {
        $('#ModalDeleteMarca').modal('show');
        document.getElementById("idmarca1").value = arg1;
        document.getElementById("LabelHeaderRemoveMarca").innerHTML = "Tem certeza que deseja remover a marca: " + arg2;
    }
</script>
