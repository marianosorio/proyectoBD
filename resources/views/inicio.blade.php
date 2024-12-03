<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de la página</title>
    <style>
        body {
            background-image: url('/proyectoBD/public/img/inicioImg.png');
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative; /* Añadido para el posicionamiento absoluto del botón */
        }

        h1 {
            color: white;
            font-family: "Inter", sans-serif;
            margin-right: 35rem;
            font-size: 3rem;
        }

        .button {
            position: absolute; /* Posiciona el botón de forma absoluta */
            top: 20px; /* Espacio desde la parte superior */
            right: 20px; /* Espacio desde la derecha */
            padding: 10px 20px; /* Espaciado del botón */
            background-color: #007BFF; /* Color de fondo del botón */
            color: white; /* Color del texto del botón */
            border: none; /* Sin borde */
            border-radius: 5px; /* Bordes redondeados */
            cursor: pointer; /* Cambia el cursor al pasar sobre el botón */
            font-size: 16px; /* Tamaño de la fuente */
        }

        .button:hover {
            background-color: #0056b3; /* Color de fondo al pasar el mouse */
        }
    </style>
</head>
<body>
    <h1>Conoce nuestros vehículos y <br> proveedores</h1>
    <button class="button">Mi Botón</button> <!-- Botón añadido -->
</body>
</html>