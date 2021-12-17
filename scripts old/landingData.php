<?php
include_once('database.php');

$valor = 0;
switch ($_POST['cor']) {
    case "azul":
        $valor = ($_POST['preco']) * (20 / 100);
        break;
    case "vermelho":
        if ($_POST['preco'] > 50.00) {

            $valor = ($_POST['preco']) * (5 / 100);
        } else {
            $valor = ($_POST['preco']) * (20 / 100);
        }
        break;

    case "amarelo":
        $valor = ($_POST['preco']) * (10 / 100);
        break;
}

if ($_GET['query'] == "insert") {


    $sql = "INSERT INTO produto (nome,cor) VALUES ( '{$_POST['produto']}', '{$_POST['cor']}');";
    mysqli_query($conn, $sql);


    $sql = "INSERT INTO preco (preco) VALUES ( '$valor');";
    mysqli_query($conn, $sql);
}


if ($_GET['query'] == "update") {

    $id = $_GET['id'];
    $sql = "UPDATE produto SET nome= '{$_POST['produto']}', cor= '{$_POST['cor']}' WHERE idprod=$id";
    mysqli_query($conn, $sql);

}

if ($_GET['query'] == "delete") {

    $id = $_GET['id'];
    echo $sql = "delete FROM produto where idprod=$id";
    mysqli_query($conn, $sql);

}

header('Location: tabela.php');























 




