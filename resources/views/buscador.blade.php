<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="\proyectoBD\public\styles\styles.css">
    <title>Interfaz de Usuario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f4f4f4;
        }
        h1 {
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top:5rem;
            margin-left:0rem;
        }
        .search-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        input[type="text"] {
            width: 70%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            background-color: #007BFF;
            color: white;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body style="background-color:white">
<nav id="navprincipal">
        <div id="logonav">
            <div id="logonavprincipal">
                <div class="logo">
                <img src="\proyectoBD\public\img\logo.png" alt="">
                </div>
            </div>
            <input type="text" id="search" placeholder="Buscar vehículo..." style="width:50%; margin-top:4rem">
            <a onclick="cerrarSesion()" class="btn btn-primary d-flex align-items-center justify-content-center" id="loginboton" style="height: 50px;">Cerrar sesión</a>
    </nav>
       
        <table id="data-table">
            <thead>
                <tr>
                    <th>ID Modelo</th>
                    <th>Color</th>
                    <th>No. Motor</th>
                    <th>Transmisión</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
    <script>
        
        function cerrarSesion() {
            alert("Sesión cerrada.");
            
        }

        
        document.getElementById('search').addEventListener('input', function() {
            
        });
    </script>
</body>
</html>
