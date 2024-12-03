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
            position: absolute; 
            top: 20px; 
            right: 20px; 
            padding: 10px 20px; 
            background-color: acb6c5 
            color: white; 
            border: none; 
            border-radius: 5px; 
            cursor: pointer; 
            font-size: 16px;
        }

        .button:hover {
            background-color: #0056b3; 
        }
    </style>
</head>
<body>
    <h1>Conoce nuestros vehículos y <br> proveedores</h1>
    <button class="button">Cerrar sesión</button> 
</body>
</html>