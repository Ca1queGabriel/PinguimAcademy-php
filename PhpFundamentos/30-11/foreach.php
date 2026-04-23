<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <div>
        <h3>Foreach Simples</h3>
        <?php
            $users =[
                ['nome' => 'John Doe', 'email' => 'john.doe@email.com'],
                ['nome' => 'Marie Doe', 'email' => 'marie.doe@email.com'],
            ];

            foreach($users as $user){
                echo "Meu nome é $user[nome] e meu email é: $user[email] <br>";
            }
        ?>
    </div>
    <div style="border-top: 50px">
        <h3>Foreach com Esteroides</h3>
        <?php
        //literal a única diferença é tu saber que tu pode referenciar e obter o valor do índice se fizer $index => objeto
            $users =[
                'User A' => ['nome' => 'John Doe', 'email' => 'john.doe@email.com'],
                'User B'=> ['nome' => 'Marie Doe', 'email' => 'marie.doe@email.com'],
            ];

            $index = "texto";
            foreach ($users  as $index => $user){
                echo " $index: Meu nome é $user[nome] e meu email é: $user[email] <br>";
            }
        ?>
    </div>
</body>
</html>
