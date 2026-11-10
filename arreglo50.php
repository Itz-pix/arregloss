

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Numeros aleatorios</title>

    <style>
        body {
            background-color: #efdcff;
            font-family: Arial;
            text-align: center;
            padding: 50px;
        }

        h1 {
            color: #7d4fe6;
        }

        button {
            background-color: #ea84f0;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <h1>Numeros aleatorios</h1>

    <?php
    $numeros = array();

    for ($i = 0; $i < 50; $i++) {
        $numeros[] = rand(1, 100);
    }

    echo implode(", ", $numeros);
    ?>

    <br><br>

<form method="POST">
        <input type="hidden" name="numeros"
        value="<?php echo implode(",", $numeros); ?>">

        <button type="submit" name="mayores">
            Mostrar los 3 numeros mas grandes
        </button>
    </form>

    <?php
    if (isset($_POST["mayores"])) {
        $numeros = explode(",", $_POST["numeros"]);

        rsort($numeros);

        echo "<h2>Los 3 numeros mas grandes son:</h2>";
        echo $numeros[0] . ", " . $numeros[1] . ", " . $numeros[2];
    }
    ?>

</body>
</html>
