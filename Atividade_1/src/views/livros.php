<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Livros</title>
</head>

<body>
    <div class="container">
        <h4 class="mb-3">Livros</h4>
        <form action="/livro/store" method="post">
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Titulo</span>
                <input type="text" class="form-control" name="titulo">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Autor</span>
                <input type="text" class="form-control" name="autor">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Preço</span>
                <input type="text" class="form-control" name="preco">
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" type="submit" name="cadastrarLivro">Cadastrar Livro</button>
            </div>
        </form>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($livro as $livros) { ?>
                    <tr>
                        <td>
                            <a href="/livro/read?id=<?= $livros->id ?>">
                                <?= $livros->id ?>
                            </a>
                        </td>
                        <td><?= $livros->titulo ?></td>
                        <td><?= $livros->autor ?></td>
                        <td>R$<?= $livros->preco ?></td>
                        <td>
                            <a class="btn btn-danger" href='/livro/remove?id=<?= $livros->id ?>'
                                onclick="return confirm('Confirma a Exclusão?')">Excluir
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>