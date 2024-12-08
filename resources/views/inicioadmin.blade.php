<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   
</head>
<body>
    @csrf
    <div class="container text-center mt-5">
        <h1>Men&uacute; Principal Concesionario</h1>
        <br>
        <div class="d-flex flex-wrap justify-content-center gap-3">
            <a class="btn btn-custom px-4 py-2" href="\proyectoBD\public\planta\admin"><i class="fas fa-industry"></i> Plantas</a>
            <a class="btn btn-custom px-4 py-2" href="\proyectoBD\public\modelo\admin"><i class="fas fa-car"></i> Modelos</a>
            <a class="btn btn-custom px-4 py-2" href="\proyectoBD\public\enum_color\admin"><i class="fas fa-palette"></i> Enum Color</a>
            <a class="btn btn-custom px-4 py-2" href="\proyectoBD\public\enum_marca\admin"><i class="fas fa-pin"></i> Enum Marca</a>
            <a class="btn btn-custom px-4 py-2" href="\proyectoBD\public\enum_transmision\admin"><i class="fas fa-cogs"></i> Enum Transmisi&oacute;n</a>
            <a class="btn btn-custom px-4 py-2"><i class="fas fa-car-side"></i> Veh&iacute;culos</a>
            <a class="btn btn-custom px-4 py-2" href="\proyectoBD\public\concesionario\admin"><i class="fas fa-store"></i> Concesionarios</a>
            <a class="btn btn-custom px-4 py-2" href="\proyectoBD\public\cliente\admin"><i class="fas fa-user"></i> Clientes</a>
            <a class="btn btn-custom px-4 py-2" href="\proyectoBD\public\venta"><i class="fas fa-money-check-alt"></i> Ventas</a>
            <a class="btn btn-custom px-4 py-2" href="\proyectoBD\public\proveedor\admin"><i class="fas fa-handshake"></i> Proveedores</a>
            <a class="btn btn-custom px-4 py-2"><i class="fas fa-link"></i> Modelos x Plantas</a>
            <a class="btn btn-custom px-4 py-2"><i class="fas fa-handshake"></i> Modelos x Proveedores</a>
        </div>
    </div>
</body>
</html>

<style>
        .btn-custom {
            background: linear-gradient(45deg, #007bff, #0056b3);
            color: white;
            border: none;
            transition: all 0.3s ease;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .btn-custom:hover {
            background: linear-gradient(45deg, #0056b3, #007bff);
            transform: scale(1.05);
            color: white;
        }

        .btn-custom i {
            margin-right: 5px;
        }
    </style>