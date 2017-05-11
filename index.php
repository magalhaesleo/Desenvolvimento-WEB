<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
        <title>Administração de Produtos</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
        <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <header>
                        <h2><center><a href="index.php">Controle de Produtos</a></center></h2>
                    </header>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div role="main">
                        <form method="post" action="index.php">
                            <div class="btn-group btn-group-justified" role="group" aria-label="...">
                                <div class="btn-group" role="group">
                                    <button type="submit" class="btn btn-primary">Home</button>
                                </div>
                                <div class="btn-group" role="group">
                                    <button type="submit" class="btn btn-primary" name="marcas">Marcas</button>
                                </div>
                                <div class="btn-group" role="group">
                                    <button type="submit" class="btn btn-primary" name="unidade">Unidades</button>
                                </div>
                                <div class="btn-group" role="group">
                                    <button type="submit" class="btn btn-primary" name="produto">Produtos</button>
                                </div>
                                <div class="btn-group" role="group">
                                    <button type="submit" class="btn btn-primary" name="empresa">Empresa</button>
                                </div>
                                <div class="btn-group" role="group">
                                    <button type="submit" class="btn btn-primary" name="usuario">Usuario</button>
                                </div>
                                <div class="btn-group" role="group">
                                    <button type="submit" class="btn btn-primary" name="orcamento">Orçamento</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            

            
                <?php
                include 'Data\ConnectDataBase.php';
                if (isset($_POST['marcas'])) {
                    include 'marca\marcas.php';
                } elseif (isset($_POST['unidade'])) {
                    include 'unidade\unidades.php';
                } elseif (isset($_POST['produto'])) {
                    include 'produto\produto.php';
                } elseif (isset($_POST['orcamento'])) {
                    include 'orcamento\orcamento.php';
                } elseif (isset($_POST['empresa'])) {
                    include 'empresa\empresa.php';
                } elseif (isset($_POST['usuario'])) {
                    include 'usuario\usuario.php';
                } else {
                    include 'Home\homepage.php';
                }
                ?>


        </div>
        <div class="row">
            <div class="col-sm-12">
                <footer class="row">
                    <div >
                        <p><center>&COPY; Desenvolvido por Leonardo Magalhães.</center></p>
                    </div>
                </footer>
            </div>
        </div>
        <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
        <script src="js/jquery.min.js"></script>
        <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>