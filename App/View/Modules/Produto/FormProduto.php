<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <style>
        label,
        input {
            display: block;
        }
    </style>
</head>

<body>
    <form action="/Produto/save" method="post">
        <fieldset>
            <legend>Cadastro de Produto</legend>
            <input type="hidden" name="id" id="id" value="<?= $model->id ?>" />

            <label for="nome">Nome:</label>
            <input name="nome" id="nome" type="text" value="<?= $model->nome ?>" />

            <label for="valor">Valor:</label>
            <input name="valor" id="valor" type="text" value="<?= $model->valor ?>" />

            <label for="descricao">Descricao:</label>
            <input name="descricao" id="descricao" type="text" value="<?= $model->descricao ?>" />

            <label for="data_adicionado">Data de Adição:</label>
            <input name="data_adicionado" id="data_adicionado" type="date" value="<?= $model->data_adicionado ?>" />

            <label for="id_categoria">Categoria:</label>
            <select name="id_categoria" id="id_categoria">
            <?php foreach ($modelCategoria->rows as $item) : ?>
                    <option value="<?= $item['id'] ?>"><?= $item['nome'] ?></option>
            <?php endforeach ?>
            </select>

            <button type="submit">Enviar</button>

        </fieldset>
    </form>

</body>

</html>