<!doctype html>
<html lang="en">
<head>
    <?php include('inc/head.php') ?>
   <?php $config  = include('inc/config.php') ?>
    <title>Include</title>
</head>
<body>
    <div>
        <h1><?= 'Include' ?></h1>

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
</body>
</html>