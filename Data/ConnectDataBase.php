<?php
    $DBHost = "localhost:3306";
    $DBUser = "root";
    $DBPass = "";
    $DBName = "teste";
    
    //global $DBConn
    $DBConn = mysqli_connect( $DBHost, $DBUser, $DBPass, $DBName ) or die( "Não foi Possivel a conexão com o MySQL" );
    
    if ( !$DBConn )
    {
        printf( "Não foi possivel a conexão com o banco MySQL: %s\n", mysqli_connect_error() );
        exit();
    }
