<?php
require_once('Database/Database.php');

class Produtos
{
    private $produto;
    private $preco;
    private $categoria;

    public function __construct($produto = null, $categoria = null, $preco = null)
    {
        $this->produto = $produto;
        $this->categoria = $categoria;
        $this->preco = $preco;
    }


    public function salvarProduto()
    {

        $dbHandle = new DBConnection();
        $sql = "INSERT INTO produto (nome,categoria,preco) VALUES (?,?,?)";
        $stmt = $dbHandle->prepare($sql);
        $stmt->execute([$this->produto, $this->categoria, $this->preco]);

    }

    public function atualizarProduto($nome, $categoria, $preco, $idprod)
    {
        $dbHandle = new DBConnection();
        $sql = "UPDATE produto SET nome=?, categoria=?, preco=? WHERE idprod=?";
        $stmt = $dbHandle->prepare($sql);
        $stmt->execute([$nome, $categoria, $preco, $idprod]);
    }

    public function deletarProduto($id)
    {

        $dbHandle = new DBConnection();
        $sql = "DELETE FROM produto WHERE idprod=?";
        $stmt = $dbHandle->prepare($sql);
        $stmt->execute([$id]);
    }

    public function BuscarTodosProdutos()
    {
        $dbHandle = new DBConnection();

        $sql = "SELECT 
produto.nome,
produto.idprod,
produto.categoria,
produto.preco,
categorias.categoria AS nomecat,
categorias.idcateg
FROM produto, categorias 
WHERE produto.categoria= categorias.idcateg";
        $statement = $dbHandle->prepare($sql);
        $statement->execute();
        $dados = $statement->fetchAll();
        return $dados;

    }

    public function filtarProdutobyid($id)
    {
        $dbHandle = new DBConnection();

        $sql = "SELECT * FROM produto WHERE idprod =$id";

        $statement = $dbHandle->prepare($sql);
        $statement->bindParam(':idprod', $id, PDO::PARAM_INT);
        $statement->execute();
        $dados = $statement->fetchAll();

        return $dados;

    }

    public function filterProd_byCategoria($idcateg)
    {
        $dbHandle = new DBConnection();

        $sql ="SELECT 
produto.nome,
produto.idprod,
produto.categoria,
produto.preco,
categorias.categoria AS nomecat,
categorias.idcateg
FROM produto, categorias 
WHERE produto.categoria= categorias.idcateg
and categorias.idcateg=$idcateg";
        $statement = $dbHandle->prepare($sql);
        $statement->execute();
        $dados = $statement->fetchAll();
        return $dados;

    }

    public function filtroCategorias()
    {

        $dbHandle = new DBConnection();

        $sql = "SELECT idcateg,categoria FROM categorias";
        $statement = $dbHandle->prepare($sql);
        $statement->execute();
        $dados = $statement->fetchAll();
        return $dados;
    }

}