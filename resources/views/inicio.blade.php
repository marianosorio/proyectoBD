<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de la página</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
</head>
<body>
    <h1>Conoce nuestros vehículos y <br> proveedores</h1>
    <a href="\proyectoBD\public\modelo\mostrar" class="button"><i class="fas fa-car"></i> Verifica nuestros vehículos</a>
    <a href="\proyectoBD\public\concesionario\mostrar" class="button1"><i class="fas fa-map-marker-alt"></i> Verifica ubicaciones de concesionarios</a>
    <button class="buttoncerrar" href="{{ url('/landing/inicio') }}" >Cerrar sesión</button>
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
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        h1 {
            color: white;
            font-family: "Inter", sans-serif;
            font-size: 3rem;
            margin-bottom: 20px;
            margin-left: -35rem;
        }

        .buttoncerrar {
            padding: 10px 20px;
            background-color: #acb6c5;
            color: black;
            font-family: "Inter", sans-serif;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
            display: inline-block;
            position: absolute;
            top: 20px;
            right: 20px;
        }

        .button, .button1 {
            padding: 15px 30px;
            font-family: "Inter", sans-serif;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            margin: 10px;
        }

        .button {
            background: linear-gradient(to right, #161616, #020202);
            color: white;
            position: absolute;
            bottom: 20px;
            left: 20px;
        }

        .button1 {
            background: linear-gradient(to right, #465457, #020202);
            color: white;
            position: absolute;
            bottom: 20px;
            right: 20px;
        }

        .button i, .button1 i {
            margin-right: 8px;
        }

        .button:after, .button1:after {
            content: "\f061";
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            margin-left: 8px;
        }

        .button:hover, .button1:hover {
            background-color: rgba(73, 90, 117, 0.8);
        }
    </style>



