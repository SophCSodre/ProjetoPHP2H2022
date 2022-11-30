<?php

//Criando uma conexão ocm o banco de dados

$con = mysqli_connect("localhost", "etecia", "123456", "db_2h2022");

//Checando conexãp

if (mysqli_connect_errno()){

    echo "Erro ao conectar com a base de dados: ",

    mysqli_connect_error();

} else {
    //echo "Conexão Aberta";
    echo "Conexão Fechada";

    mysqli_close($con);
}

?>