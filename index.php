<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
    <style>
        body {
            background-color: #800080; /* Color de fondo morado */
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: white;
        }
        .form-container {
            background-color: rgba(255, 255, 255, 0.2); /* Fondo semi-transparente */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            width: 300px;
            text-align: center; /* Centrar el texto del formulario */
        }
        input, textarea {
            width: 90%; /* Reducir un poco el ancho de los campos */
            padding: 10px;
            margin: 10px auto; /* Centrando los campos de entrada */
            border: none;
            border-radius: 5px;
            display: block;
        }
        input[type="submit"] {
            background-color: #ffffff;
            color: #800080;
            cursor: pointer;
            width: 90%; /* Ajusta el tamaño del botón */
            margin: 20px auto;
            display: block; /* Centra el botón */
        }
    </style>
</head>
<body>
<div class="form-container">
        <h2>Inicio de sesión</h2>
        <form action="procesar.php" method="post">
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="text" name="rut" placeholder="RUT" required>
            <input type="email" name="correo" placeholder="Correo" required>
            <textarea name="comentarios" placeholder="Comentarios" rows="4" required></textarea>
            <input type="submit" value="Enviar">
        </form>
    </div>

</body>
</html>

