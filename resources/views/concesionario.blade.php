<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concesionario</title>
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
<body>
    <div class="container">
        <h1>Concesionario</h1>
        <div class="search-container">
            <input type="text" id="search" placeholder="Buscar...">
            <button onclick="cerrarSesion()">Cerrar Sesión</button>
        </div>
        <table id="data-table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Número de Teléfono</th>
                </tr>
            </thead>
            <tbody>
                <!-- La tabla está vacía, no se muestran datos -->
            </tbody>
        </table>
    </div>
    <script>
        // Función para cerrar sesión
        function cerrarSesion() {
            alert("Sesión cerrada.");
            // Aquí puedes agregar la lógica para cerrar sesión
        }

        // Event listener para el buscador
        document.getElementById('search').addEventListener('input', function() {
            // Aquí puedes agregar lógica para filtrar si decides mostrar datos más adelante
        });
    </script>
</body>
</html>
