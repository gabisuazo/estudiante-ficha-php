<?php
// Constantes
define("UNIVERSIDAD", "Universidad Tecnológica");
define("ASIGNATURA", "Programación Web");

// Variables con tipos de datos apropiados
$nombre = "Ana";                     // string
$apellido = "García";                // string
$edad = (int) 20;                   // int
$carrera = "Ingeniería de Sistemas"; // string
$semestre = (int) 4;                // int
$promedioAcademico = (float) 9.4;   // float
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha del estudiante</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #bcd008;
            display: flex;
            justify-content: center;
            padding: 30px;
        }
        .ficha {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 25px 30px;
            width: 500px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        p {
            font-size: 18px;
            margin: 10px 0;
            color:#222;
        }
        strong {
            color: #222;
        }
    </style>
</head>
<body>
    <div class="ficha">
        <h1>Ficha del estudiante</h1>

        <p><strong>Universidad:</strong>
            <?php echo UNIVERSIDAD; ?>
        </p>
        <p><strong>Nombre:</strong>
            <?php echo $nombre . " " . $apellido; ?>
        </p>
        <p><strong>Edad:</strong>
            <?php echo $edad . " años"; ?>
        </p>
        <p><strong>Carrera:</strong>
            <?php echo $carrera; ?>
        </p>
        <p><strong>Semestre:</strong>
            <?php echo $semestre; ?>
        </p>
        <p><strong>Promedio académico:</strong>
            <?php echo $promedioAcademico; ?>
        </p>
        <p><strong>Asignatura:</strong>
            <?php echo ASIGNATURA; ?>
        </p>
    </div>
</body>
</html>