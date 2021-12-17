<?php
require_once('Controller\Produtocontroller.php');
//require_once ('Database\Database.php');

@$_POST['produto'];
@$_POST['preco'];
@$_POST['categoria'];
@$_POST['metodo'];
@$_POST['idprod'];

$produto = new Produtocontroller();


if ($_POST['metodo'] == "insert") {

    $produto->salvar($_POST['produto'], $_POST['categoria'], $_POST['preco']);
}

if ($_POST['metodo'] == "update") {

    $produto->autualizar($_POST['produto'], $_POST['categoria'], $_POST['preco'], $_POST['idprod']);
}


if ($_GET['query'] == "delete") {

    $id = $_GET['id'];
    $produto->deletar($id);

}
