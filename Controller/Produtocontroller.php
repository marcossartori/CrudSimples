<?php
//require_once ('Database/Database.php');
require_once('Model/Produtos.php');

class Produtocontroller
{

    public function salvar($produto, $categoria, $preco)
    {

        $produto = new Produtos($produto, $categoria, $preco);
        $produto->salvarProduto();
        header('Location: index.php');

    }

    public function deletar($id)
    {

        $produto = new Produtos();
        $produto->deletarProduto($id);
        header('Location: index.php');

    }

    public function autualizar($nome, $categoria, $preco, $idprod)
    {

        $produto = new Produtos();
        $produto->atualizarProduto($nome, $categoria, $preco, $idprod);
        header('Location: index.php');
    }

    public function filtro($id)
    {
        $produto = new Produtos();
        $dados = $produto->filtarProdutobyid($id);
        // print_r($dados);
        return $dados;
    }

    public function filtrarCategorias($idcateg = null)
    {
        $produto = new Produtos();
        if ($idcateg != null) {

            $dados = $produto->filterProd_byCategoria($idcateg);

        } else {
            $dados = $produto->BuscarTodosProdutos();

        }
        return $dados;
    }

    public function busca()
    {
        $produto = new Produtos();
        $dados = $produto->filtroCategorias();

        return $dados;


    }

}