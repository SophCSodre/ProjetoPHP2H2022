<?php

$con = mysqli_connect("localhost", "etecia", "123456", "db_2h2022");

if (mysqli_connect_errno()){

    echo "Erro ao conectar com a base de dados: ",

    mysqli_connect_error();

} else {
    $sql="CREATE DATABASE db_2h2022";

    if(mysqli_query($con, $sql)){

        echo "</br>Base de Dados criada com sucesso!";
    
    }else {
        mysqli_close($con);
    }

}

?>