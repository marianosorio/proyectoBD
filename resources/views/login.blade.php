<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="\proyectoBD\public\styles\styles.css">
    <title>Inicio de Sesión</title>
    
</head>
<body>
    <div class="form-container">
        <h2 style="font-family:Inter, sans-serif;color:white; text-align: center;">Inicio de Sesión</h2>
        <form>
            @csrf
            <p style= "font-family:Inter, sans-serif; color:white; text-align: center;" >Inicia sesión con tu cuenta</p>
            <p style= "font-family:Inter, sans-serif; color:white" >Recuerda especificar tu credencial para acceso</p>
            <p style= "font-family:Inter, sans-serif; color:white" >Tipo de credencial:</p>
            <div class="credential-options">
                <label>
                    <input style= "font-family:Inter, sans-serif; color:white"  type="radio" name="credential-type" value="marketing" checked>
                    Marketing
                </label>
                <label>
                    <input style= "font-family:Inter, sans-serif; color:white" type="radio" name="credential-type" value="cliente">
                    Cliente
                </label>
            </div>
            <label style= "font-family:Inter, sans-serif; color:white" for="id-asignada">Id asignada:</label>
            <input type="text" id="id-asignada" name="id-asignada" style="width:93%" required>
            <button style= "font-family:Inter, sans-serif; color:white" type="submit">Iniciar sesión</button>
        </form>
    </div>
</body>
</html>

<style>
        body {
            background-image: url('/proyectoBD/public/img/loginImg.png');
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-container {
            background-color: rgba(103, 119, 143, 0.7); /* Color con opacidad */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 300px;
         }

        h2 {
            text-align: center;
            margin-top: 0;
        }

        input[type="text"], input[type="password"], button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .credential-options {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .credential-options label {
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .credential-options input[type="radio"] {
            margin-right: 5px;
        }

        button {
            background-color: #57090b;
            cursor: pointer;
        }

        button:hover {
            background-color: #890507;
        }
    </style>