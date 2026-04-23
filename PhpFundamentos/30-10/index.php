<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
        <div>
            <h1>Exemplo de if</h1>
            <?php
            date_default_timezone_set('America/Sao_Paulo');
            $hora = date('H:i');

            if($hora >= '06:00' && $hora <= '12:00') {echo 'Bom dia';}
            elseif($hora >= '12:00' && $hora <= '18:00') {echo 'Boa tarde';}
            else {echo 'Boa noite';}
            ?>, Caique.

            <?php echo "Agora são $hora horas";   ?>
        </div>


        <div style="margin-top: 50px">
            <h1>Exemplo de Switch</h1>
            <?php
                $numero = rand(0, 3);
                echo "dessa vez o número é: $numero <br>";
                switch($numero) {
                    case 0:
                    case 1://sim, ele encadeia switch, muito maneiro msm
                        echo "Número $numero";
                        break;
                    case 2:
                        echo 'Número maior que 1 e menor que 3, talvez o 2? eu n sei hehe';
                        break;
                    default:
                        echo 'Número 3, é o que sobrou pro beta';
                }
            ?>
        </div>

        <div style="margin-top: 50px">
            <h1>Exemplo de Match</h1>
            <h3>Exemplo 1: Substituindo o Switch</h3>
            <p>
                <?php
                $numero = rand(0, 3);

                $saudacao = match($numero){
                    0, 1 => 'Bom dia, a opção foi 0', //também dá pra encadear valor igual no switch
                    3 => 'Bom dia, a opção foi 3',
                    default => 'O número dessa vez foi 2'
                };

                echo $saudacao;
                ?>
            </p>
            <br>
            <h3>Exemplo substituindo o if</h3>
            <p>
                <?php
                date_default_timezone_set('America/Sao_Paulo');
                $hora = date('H:i');

                $saudacao = match(true){
                    $hora >= '06:00' && $hora <= '12:00' => 'Bom dia',
                    $hora >= '12:00' && $hora <= '18:00' => 'Boa tarde',
                    default                              => 'Boa noite'
                };

                echo "$saudacao, Caique. Agora são $hora horas";
                ?>
            </p>
        </div>
</body>
</html>