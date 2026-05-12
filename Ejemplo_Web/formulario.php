<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario - Serie Preferida</title>
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
        
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }
        
        h1 {
            color: #333;
            margin-bottom: 20px;
            font-size: 24px;
        }
        
        label {
            display: block;
            margin-bottom: 10px;
            color: #666;
            font-size: 16px;
        }
        
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }
        
        .botones {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        
        input[type="submit"] {
            background-color: #e74c3c;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        
        input[type="submit"]:hover {
            background-color: #c0392b;
        }
        
        input[type="reset"] {
            background-color: #95a5a6;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        
        input[type="reset"]:hover {
            background-color: #7f8c8d;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1> Series de TV</h1>
        <form action="verificar_campo.php" method="POST">
            <label for="serie">¿Cuál es tu serie preferida?</label>
            <input type="text" id="serie" name="serie" required placeholder="Ej: Breaking Bad, Stranger Things...">
            
            <div class="botones">
                <input type="submit" value="Enviar">
                <input type="reset" value="Limpiar">
            </div>
        </form>
    </div>
</body>
</html>