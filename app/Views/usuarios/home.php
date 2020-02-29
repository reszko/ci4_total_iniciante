<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
    <script>

        function confirma(){
            if (!confirm("Confirma a exclusão do registros?")) {
                return false;
            }

            return true;
        }

    </script>
</head>
<body>
    <h1>Bem-vindo à tela de usuários</h1>
    
    <p>
        <?php echo anchor('usuario/create', '>>> Novo Usuário') ?>
    </p>

    <h3>Usuários Cadastrados</h3>
    <table>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
        <?php foreach($usuarios as $usuario): ?>
            <tr>
                <td><?php echo $usuario['id'] ?></td>
                <td><?php echo $usuario['nome'] ?></td>
                <td><?php echo $usuario['email'] ?></td>
                <td>
                    <?php echo anchor("usuario/edit/".$usuario['id'], 'Editar') ?>
                    -
                    <?php echo anchor("usuario/excluir/".$usuario['id'], 'Excluir', 'onclick="return confirma()"') ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>


</body>
</html>