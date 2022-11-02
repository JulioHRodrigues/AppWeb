<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <h1>Lista de Produtos</h1>
        <table class="bordered striped centered highlight responsive-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descricao</th>
                    <th>Valor</th>
                    <th>Data Adicionado</th>
                    <th>Categoria</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($model->rows as $item) : ?>
                    <tr>
                        <td><?= $item['id'] ?></td>
                        <td><?= $item['nome'] ?></td>
                        <td><?= $item['descricao'] ?></td>
                        <td><?= $item['valor'] ?></td>
                        <td><?= $item['data_adicionado'] ?></td>
                        <td><?= $item['categoria'] ?></td>
                        <td>
                            <a href="/Produto/form?id=<?= $item['id'] ?>" class="waves-effect waves-light btn"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="/Produto/excluir?id=<?= $item['id'] ?>" class="waves-effect waves-light btn"><i class="fa-solid fa-trash-can"></i></a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>

</html>