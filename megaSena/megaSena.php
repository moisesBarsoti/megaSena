<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mega Sena</title>
    <style>
    * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
            transition: .5s;
            font-family: sans-serif,arial;
        }


        body {
            background: #060c21;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #fff;
            font-size: 30px;
        }

        /* h1/ sortear com número: */

        h1 {
            color: #000;
            margin-top: 30px;
        }


        /* h4/O sorteio vai de 1 até 60 */

        h4 {
            position: absolute;
            margin-top: 5rem;
            color: #000;
            font-size: 20px;
            margin-top: 100px;
        }


        /* Fundo dos botões */

        #fundo {
            width: 700px;
            height: 650px;
            background: #eee;
            position: relative;
            display: flex;
            justify-content: center;
            border: solid 2px #0ef;
            box-shadow: 0 0 25px #0ef;
        }


        /* Todos os botões */

        #button {
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            top: 12.5rem;
        }


        button {
            width: 15rem;
            height: 2rem;
            margin-top: 20px;
            border-radius: 30px;
            box-shadow: 0 0 25px #0ef;
            font-weight: bold;
            cursor: pointer;
        }


        button:hover {
            background: #27282c;
            color: #fff;
            transition: .7s ease-in-out;
        }

    </style>
</head>
<body>

        <div id="fundo">
            <h1>Sortear número com:</h1>
            <h4>(O sorteio vai do 1 até 60)</h4>
            <div id="button">
                <!-- Mega sena com 1 número -->
                <form action="megaSena1Numero.php" method="POST">
                <button> 1 número</button>
                </form>
                <!-- Mega sena com 2 números -->
                <form action="megaSena2Numeros.php" method="POST">
                <button> 2 números</button>
                </form>
                <!-- Mega sena com 3 números -->
                <form action="megaSena3Numeros.php" method="POST">
                <button> 3 números</button>
                </form>
                <!-- Mega sena com 4 números -->
                <form action="megaSena4Numeros.php" method="POST">
                <button> 4 números</button>
                </form>
                <!-- Mega sena com 5 números -->
                <form action="megaSena5Numeros.php" method="POST">
                <button> 5 números</button>
                </form>
            </div>
        </div>
    
    <?php 
        // echo "Número aleatório: ".rand(1,20)."<br>";
        // echo "Número aleatório: ".rand(21,40)."<br>";
        // echo "Número aleatório: ".rand(41,60)."<br>";
    ?>

</body>
</html>