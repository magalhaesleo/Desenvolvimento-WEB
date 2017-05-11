<?php
    include '..\Data\ConnectDataBase.php';

   $resultado = mysqli_query( $DBConn, "DELETE from marcas WHERE id_marca = '{$_POST['idmarca']}'" );
   $redirect = "..\index.php";
   header("location: $redirect");