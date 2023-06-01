<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola </title>
</head>

<body>
    <div id="titulo">Hola</div>

    <form method="POST">
        <input type="number" name="1" placeholder="ingrese su nombre"><br>
        <input type="number" name="2" placeholder="ingrese su apellido"><br>
        <input type="radio" name="operacion" value="sumar"> <label>sumar</label>
        <input type="radio" name="operacion" value="restar"> <label>restar</label>
        <input type="radio" name="operacion" value="div"> <label>dividir</label>
        <input type="radio" name="operacion" value="multiplicar"> <label>multiplicar</label><br>
        <input type="submit" value="Enviar">
    </form>

    <?php

    $operar = [
        'sumar' => intval($_POST['1'] + $_POST['2']),
        'restar' => intval($_POST['1'] - $_POST['2']),
        'div' => intval($_POST['1'] / $_POST['2']),
        'multiplicar' => intval($_POST['1'] * $_POST['2'])
    ];

    echo $operar[$_POST['operacion']];

    echo '<h1>Hola</h1>';


    // Cargar el documento HTML
    $dom = new DOMDocument();
    $dom->loadHTMLFile('index.html');

    // Obtener el elemento con el ID "titulo"
    $titulo = $dom->getElementById('titulo');

    // Modificar el contenido del elemento
    $titulo->nodeValue = 'Hola mundo';

    // Guardar los cambios en el documento
    $dom->save('index.html');

    ?>

</body>

</html>