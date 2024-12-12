<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <header>Login</header>
    <main>
        <form method="post" action="/autenticar">
            <label>Usuário:
                <input type="text" name="usuario"/>
            </label>

            <label>Senha:
                <input type="password" name="senha"/>
            </label>

            <button type="submit">Entrar</button>
        </form>
    </main>

</body>
</html>