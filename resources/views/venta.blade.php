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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <title>Ventas</title>
</head>
<body style="background-color:white">

    <nav id="navprincipal" class="navbar navbar-expand-lg navbar-light bg-light">
        <div id="logonav" class="d-flex justify-content-between align-items-center w-100">
            <div id="logonavprincipal" class="logo">
                <img src="\proyectoBD\public\img\logo.png" alt="Logo" style="height: 50px;">
            </div>
            <a href="{{ url('/landing/inicio') }}" class="btn btn-primary" id="loginboton" style="height: 50px;">Cerrar sesión</a>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="text-center">Lista de Ventas</h1>
        <table id="data-table" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID Venta</th>
                    <th>Fecha</th>
                    <th>ID Concesionario</th>
                    <th>ID Cliente</th>
                    <th>VIN</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ventas as $venta)
                    <tr>
                        <td>{{ $venta->idVenta }}</td>
                        <td>{{ $venta->fecha }}</td>
                        <td>{{ $venta->idConcesionario }}</td>
                        <td>{{ $venta->idCliente }}</td>
                        <td>{{ $venta->VIN }}</td>
                        <td>${{ number_format($venta->precio, 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
       
    </div>

    <script>
        function cerrarSesion() {
            alert("Sesión cerrada.");
        }
    </script>

</body>
</html>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
    }
    h1 {
        color: #333;
        margin-bottom: 30px;
    }
    .container {
        background: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        padding: 12px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
        font-weight: bold;
    }
    tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    tr:hover {
        background-color: #f1f1f1;
    }
    .btn {
        margin-top: 20px;
    }
    #loginboton {
        margin-left: auto;
        margin-right: 30px;
    }
</style>
