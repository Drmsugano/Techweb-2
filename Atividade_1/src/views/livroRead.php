<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Livro</title>
</head>

<body>
    <div class="container">
        <h4 class="mb-3">Livros</h4>
        <button class="btn btn-danger w-100 mb-3" onclick="permitirEdit()">Permitir Edição</button>
        <form action="/livro/update" method="post">
            <input type="text" name="id" value="<?= $livro->id ?>" hidden>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Titulo</span>
                <input type="text" class="form-control" id="titulo" name="titulo" value="<?= $livro->titulo ?>" readonly>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Autor</span>
                <input type="text" class="form-control"  id="autor" name="autor" value="<?= $livro->autor ?>" readonly>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Preço</span>
                <input type="text" class="form-control" id="preco" name="preco" value="<?= $livro->preco ?>" readonly>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" type="submit" id="editarLivro" name="editarLivro" disabled>Edição Bloqueada</button>
            </div>
        </form>
    </div>
    <script src="/public/js/permitirEdit.js"></script>
</body>

</html>