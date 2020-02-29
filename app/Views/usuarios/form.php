<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Usuário</title>
</head>
<body>

    <h1>Novo Usuário</h1>
    <?php echo form_open('usuario/store') ?>
        <p>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="<?php echo isset($usuario['nome']) ? $usuario['nome'] : ''; ?>">
        </p>
        <p>
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" value="<?php echo isset($usuario['email']) ? $usuario['email'] : ''; ?>">
        </p>
        <p>
            <input type="submit" value="Salvar">
        </p>
        <input type="hidden" name="id" value="<?php echo isset($usuario['id']) ? $usuario['id'] : ''; ?>">
    </form>

</body>
</html>