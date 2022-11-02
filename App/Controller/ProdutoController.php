<?php
namespace AppWeb\App\Controller;
use AppWeb\App\Model\ProdutoModel;

class ProdutoController
{
    public static function index()
    {
        include 'Model/ProdutoModel.php';
        $model = new ProdutoModel();
        $model-> getAllRows();

        include 'View/Modules/Produto/ListaProduto.php';
    }

    public static function form()
    {
        include 'Model/ProdutoModel.php';
        $model = new ProdutoModel();

        if(isset($_GET['id']))
            $model = $model->getById((int) $_GET['id']);

        include 'View/Modules/Produto/FormProduto.php';
    }

    public static function save()
    {
        include 'Model/ProdutoModel.php';
        $model = new ProdutoModel();

        $model->id = $_POST['id'];
        $model->nome = $_POST['nome'];
        $model->cpf = $_POST['data_fabricacao'];
        $model->data_nascimento = $_POST['data_validade'];

        $model->save();
        header("Location: /Produto");
    }

    public static function delete()
    {
        include 'Model/ProdutoModel.php';
        $model = new ProdutoModel();

        $model->delete((int) $_GET['id']);
        header("Location: /Produto");
    }
}