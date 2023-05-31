<?php

session_start();

$operadores = [
    'borrar' => $_SESSION['num1'] = null,
    'retro' => $_SESSION["num1"] = substr($_SESSION['num1'], 0, -1),
    
];


  
    if (isset($_SESSION['num1'])) {
        $_SESSION['num1'] .= $_POST['numero'];
    } else {
        $_SESSION['num1'] =  $_POST['numero'];
    }
   


    $operadores[$_POST['numero']];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css">
    <title>Mis aplicaciones</title>
</head>

<body>

    <div class="contenedorCalculadora">
        <div class="cuerpoCalculadora">

            <div class="contenedorPantalla">
                <div class="pantalla">
                    <div class="Mostrar" id="imprimir" style="font-size: 50px;">
                        <?php echo isset($_SESSION['num1']) ? $_SESSION['num1'] : 0; ?>
                    </div>
                    <div class="Mostrar" id="acumular">

                    </div>

                </div>
            </div>

            <div class="contenedorBotones">
                <form method="POST">
                    <div class="botones" id="botones">
                        <button name="numero" id="seven" value="7">
                            <span class="button_top"> 7
                            </span>
                        </button>
                        <button name="numero" id="eight" value="8">
                            <span class="button_top"> 8
                            </span>
                        </button>
                        <button name="numero" id="nine" value="9">
                            <span class="button_top"> 9
                            </span>
                        </button>

                        <button name="numero" id="four" value="4">
                            <span class="button_top"> 4
                            </span>
                        </button>
                        <button name="numero" id="five" value="5">
                            <span class="button_top"> 5
                            </span>
                        </button>
                        <button name="numero" id="six" value="6">
                            <span class="button_top"> 6
                            </span>
                        </button>

                        <button name="numero" id="one" value="1">
                            <span class="button_top"> 1
                            </span>
                        </button>
                        <button name="numero" id="two" value="2">
                            <span class="button_top"> 2
                            </span>
                        </button>
                        <button name="numero" id="three" value="3">
                            <span class="button_top"> 3
                            </span>
                        </button>

                        <button name="numero" id="zero" value="0">
                            <span class="button_top"> 0
                            </span>
                        </button>

                        <button class="operadores" value="." id="point">

                            <span class="button_operadores"> <a href="https://www.instagram.com/bynicolazz/" style="background-color: transparent; text-decoration: none; color: aliceblue;" target="_blank">INST</a>

                            </span>
                        </button>

                        <button class="operadores" value="=" id="equal" name="numero">
                            <span class="button_operadores"> =
                            </span>
                        </button>
                        <button class="operadores" value="*" id="multiply" name="numero">
                            <span class="button_operadores"> *
                            </span>
                        </button>
                        <button class="operadores" value="/" id="div" name="numero">
                            <span class="button_operadores"> /
                            </span>
                        </button>
                        <button class="operadores" value="+" id="sum" name="numero">
                            <span class="button_operadores"> +
                            </span>
                        </button>
                        <button class="operadores" value="-" id="restar" name="numero">
                            <span class="button_operadores"> -
                            </span>
                        </button>
                        <button class="operadores" value="retro" id="retro" name="numero">
                            <span class="button_operadores"> retro
                            </span>
                        </button>
                        <button class="operadores" value="borrar" id="borrar" name="numero">
                            <span class="button_operadores"> DELETE
                            </span>
                        </button>

                    </div>

                </form>


            </div>


        </div>


    </div>



</body>

</html>