<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de la página</title>
    
</head>
<body>
    <h1>Conoce nuestros vehículos y <br> proveedores</h1>
    <a href="\proyectoBD\resources\views\buscador.blade.php" class="button">Verifica nuestros vehículos</a> 
    <a href="\proyectoBD\resources\views\concesionario.blade.php" class="button">Verifica ubicaciones de concesionarios</a> <!-- Enlace añadido -->
    <button class="button">Cerrar sesión</button> 
</body>
</html>

<style>
        body {
            background-image: url('/proyectoBD/public/img/inicioImg.png');
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            display: flex;
            flex-direction: column; /* Cambiado a columna para apilar elementos */
            justify-content: center;
            align-items: center;
            position: relative;
        }

        h1 {
            color: white;
            font-family: "Inter", sans-serif;
            font-size: 3rem;
            margin-bottom: 20px; /* Espacio entre el título y el botón */
        }

        .button {
            padding: 10px 20px; 
            background-color: #acb6c5; /* Color de fondo corregido */
            color: black; 
            font-family: "Inter", sans-serif; 
            border: none; 
            border-radius: 5px; 
            cursor: pointer; 
            font-size: 16px;
            text-decoration: none; /* Sin subrayado */
            display: inline-block; /* Para que el padding funcione correctamente */
        }

        .button:hover {
            background-color: #495a75; 
            color: white;
        }
    </style>



