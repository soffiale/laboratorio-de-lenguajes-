<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Serie Preferida</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        
        .result-container {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 500px;
        }
        
        .mensaje {
            font-size: 20px;
            color: #333;
            line-height: 1.6;
        }
        
        .serie-destacada {
            font-weight: bold;
            font-style: italic;
            color: red;
        }
        
        .btn-volver {
            display: inline-block;
            margin-top: 20px;
            background-color: #3492d1;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        
        .btn-volver:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="result-container">
        <h2> Resultado</h2>
        
        <?php
        // Verificar si se envió el formulario
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Verificar que el campo 'serie' existe y no está vacío
            if (isset($_POST['serie']) && !empty($_POST['serie'])) {
                // Obtener y sanitizar el nombre de la serie
                $nombre_serie = htmlspecialchars($_POST['serie']);
                
                // Mostrar el mensaje con el formato solicitado
                echo '<p class="mensaje">Tu serie preferida es: <span class="serie-destacada">' . $nombre_serie . '</span>.</p>';
            } else {
                echo '<p class="mensaje" style="color: orange;"> No ingresaste el nombre de una serie.</p>';
            }
        } else {
            // Si se accede directamente sin enviar el formulario
            echo '<p class="mensaje" style="color: orange;"> Acceso no permitido. Por favor, completa el formulario primero.</p>';
        }
        ?>
        
        <a href="formulario.php" class="btn-volver">← Volver al formulario</a>
    </div>
</body>
</html>