<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mega Sena com 3 números</title>
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
            color: #8959f3;
            font-size: 30px;
        }

        /* h1/ sortear com número: */

        h1 {
            color: #27282c;
            margin-top: -17rem;
            margin-left: -15rem;
            position: absolute;
        }


        /* Fundo dos botões */

        #fundo::before {
            content: "";
            width: 900px;
            height: 650px;
            background: #eee;
            position: absolute;
            margin-top: -19rem;
            margin-left: -19rem;
            border: solid 2px #0ef;
            box-shadow: 0 0 25px #0ef;
            z-index: -1;
        }


        /* Todos os botões */

        button {
            position: absolute;
            width: 15rem;
            height: 2rem;
            margin-top: 17rem;
            margin-left: 1rem;
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


        /* Botao de sortear */

        button#sortear {
            margin-top: 14rem;
        }

    </style>
</head>
<body>

        <div id="fundo">
            <h1>Sorteio com três números:</h1>
        </div>

        <!-- Botão de voltar -->

        <form action="megaSena.php">
            <button>Voltar</button>
        </form>

         <!-- Botão de sortear de novo -->
    
         <form action="megaSena3Numeros.php">
            <button id="sortear">Sortear de novo</button>
        </form>
    
    <?php 
         echo "Número aleatório: ".rand(1,20)."<br>";
         echo "Número aleatório: ".rand(21,40)."<br>";
         echo "Número aleatório: ".rand(41,60)."<br>";
    ?>

</body>
</html>