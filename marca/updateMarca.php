<?php
    include '..\Data\ConnectDataBase.php';

   $resultado = mysqli_query( $DBConn, "UPDATE marcas SET nome = '{$_POST['nome']}' where id_marca= '{$_POST['idmarca']}'" );
   $redirect = "..\index.php";
   header("location: $redirect");