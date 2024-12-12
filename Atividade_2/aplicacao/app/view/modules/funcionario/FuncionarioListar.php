<?php include __DIR__ . '/../../includes/header.php'?>
    <main>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>

        <?php foreach($funcionarios as $funcionario): ?>
        <tr>
            <td><?=$funcionario->nome ?></td>
            <td><?=$funcionario->email ?></td>
            <td>
                <a href="/funcionario/form?edit=<?=$funcionario->id?>">
                    <button>Editar</button>
                </a> 

                <a href="/funcionario/delete?id=<?=$funcionario->id?>">
                    <button>Excluir</button>
                </a> 
            </td>
        </tr>
        <?php endforeach ?>
        
    </table>
    </main>
    
<?php include __DIR__ . '/../../includes/footer.php'?>