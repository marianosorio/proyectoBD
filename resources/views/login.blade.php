<section class="contenedor-bienvenida"> 
<div class="login-container"> 
  <h1>Inicio de sesión</h1> 
  <p>Inicia sesión con tu cuenta</p> 
  <p>Recuerda especificar tu credencial para acceso</p> 
 
  <form> 
    <div class="form-group"> 
      <label for="credential-type">Tipo de credencial:</label> 
      <div class="credential-options"> 
        <div class="credential-option"> 
          <input type="radio" id="credential-marketing" name="credential-type" value="marketing" checked> 
          <label for="credential-marketing">Marketing</label> 
        </div> 
        <div class="credential-option"> 
          <input type="radio" id="credential-cliente" name="credential-type" value="cliente"> 
          <label for="credential-cliente">Cliente</label> 
        </div> 
      </div> 
    </div> 
 
    <div class="form-group"> 
      <label for="assigned-id">ID asignada:</label> 
      <input type="text" id="assigned-id" name="assigned-id" placeholder="Ingresa tu ID asignada"> 
    </div> 
 
    <button type="submit" class="btn-login">Iniciar sesión</button> 
  </form> 
</div> 
<div id="contenedor-cel"> 
  <img class="" style="width:101%;" src="/proyectoBD/public/img/Landingimg.png"> 
</div> 
</section> 
 
<style> 
/* General Styles */ 
body { 
  font-family: Arial, sans-serif; 
  background-color: #000; 
  margin: 0; 
  padding: 0; 
} 
 
/* Login Container */ 
.login-container { 
  background-color: rgba(31, 41, 55, 0.8); /* Fondo semi-transparente */
  background-image: url('ruta/a/tu/imagen-de-fondo.jpg'); /* Cambia esta ruta */
  background-size: cover;
  background-position: center;
  padding: 40px; 
  border-radius: 8px; 
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.4); 
  max-width: 400px; 
  margin: 100px auto; 
  position: relative; 
  z-index: 1; 
} 
 
/* Headings */ 
h1 { 
  text-align: center; 
  color: #f3f4f6; 
  margin-bottom: 20px; 
} 
 
/* Form Styles */ 
.form-group { 
  margin-bottom: 20px; 
} 
 
label { 
  display: block; 
  font-weight: bold; 
  color: #9ca3af; 
  margin-bottom: 5px; 
} 
 
.credential-options { 
  display: flex; 
  justify-content: space-between; 
} 
 
.credential-option { 
  display: flex; 
  align-items: center; 
} 
 
.credential-option input[type="radio"] { 
  margin-right: 5px; 
  accent-color: #6b7280; 
} 
 
input[type="text"] { 
  width: 100%; 
  padding: 10px; 
  border: 1px solid #4b5563; 
  border-radius: 4px; 
  background-color: #1f2937; 
  color: #f3f4f6; 
} 
 
/* Button Styles */ 
.btn-login { 
  display: block; 
  width: 100%; 
  background-color: #8e1d2b; 
  color: #fff; 
  padding: 10px 20px; 
  border: none; 
  border-radius: 4px; 
  cursor: pointer; 
  font-size: 16px; 
} 
 
.btn-login:hover { 
  background-color: #480b0e; 
} 
</style>
