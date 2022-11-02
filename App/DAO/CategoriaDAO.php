<?php
namespace AppWeb\App\DAO;
use AppWeb\App\Model\CategoriaModel;
use \PDO;

class CategoriaDAO
{
    private $conexao;

    public function __construct()
    {
        $dsn = "mysql:host=localhost:3307;dbname=db_mvc";
        $this->conexao = new PDO ($dsn, 'root', 'etecjau');
    }

    public function insert(CategoriaModel $model)
    {
        $sql = "INSERT INTO Categoria (nome) VALUES (?)";
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
    }

    public function update(CategoriaModel $model)
    {
        $sql = "UPDATE Categoria SET nome=? WHERE id=?";
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->id);

        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM Categoria";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->FetchAll(PDO::FETCH_CLASS);
    }

    public function selectById(int $id)
    {
        include_once 'Model/CategoriaModel.php';
        $sql = "SELECT * FROM Categoria WHERE id=?";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("CategoriaModel");
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM Categoria WHERE id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }

}