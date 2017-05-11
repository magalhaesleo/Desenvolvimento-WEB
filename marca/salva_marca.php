<?php
    include '..\Data\ConnectDataBase.php';

   $resultado = mysqli_query( $DBConn, "insert into marcas (nome) values ('{$_POST['nome']}')" );
   $redirect = "..\index.php";
   header("location: $redirect");