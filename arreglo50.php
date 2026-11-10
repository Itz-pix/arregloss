
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Numeros aleatorios</title>

    <style>
        body {
            background-color: #e59fec;
            font-family: Arial;
            text-align: center;
            padding: 50px;
        }

        h1 {
            color: #562071;
        }
    </style>
</head>
<body>

    <h1>Generador de numeros aleatorios</h1>

<?php


$numeros = array();

for ($i = 0; $i < 50; $i++) {
    $numeros[] = rand(1, 100);
}

echo implode(", ", $numeros);
?>
