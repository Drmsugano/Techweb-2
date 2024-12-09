<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem All</title>
</head>

<body>
    <h1>Livros</h1>
    <?php foreach ($livro as $livros) { ?>
        <p><?= var_dump($livros) ?></p>
        <br>
    <?php } ?>
</body>

</html>