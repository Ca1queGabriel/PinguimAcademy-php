<!doctype html>
<html lang="en">
<head>
    <?php $nome = null; ?>
    <?php include('inc/head.php') ?>
    <?php $config  = include('inc/config.php') ?>
    <?php include_once('inc/greetings.php') ?>

    <title>Include</title>
</head>
<body>
        <h1><?= 'Include' ?></h1>

        <div>
            <table>
                <thead>
                <th>Usuário</th>
                <th>Senha</th>
                </thead>
                <tbody>
                <tr>
                    <td><?= $config['username'] ?></td>
                    <td><?= $config['password'] ?></td>
                </tr>
                </tbody>
            </table>
        </div>

        <div style="margin-top: 53px">
            <h2>Olá, <?= $nome ?> </h2>

        </div>
</body>
</html>