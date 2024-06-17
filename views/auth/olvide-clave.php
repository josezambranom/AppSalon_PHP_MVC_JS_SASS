<h1 class="nombre-pagina">Olvidé mi Clave</h1>
<p class="descripcion-pagina">Reestablece tu clave escribiendo tu email a continuación</p>

<?php 
    include_once __DIR__ . "/../templates/alertas.php";
?>

<form class="formulario" method="POST" action="/olvide">
    <div class="campo">
        <label for="email">Email:</label>
        <input type="email" id="email" placeholder="Tu Email" name="email" />
    </div>

    <input type="submit" class="boton" value="Enviar instrucciones">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes tienes una cuenta? Inicia sesión aquí</a>
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crea una aquí</a>
</div>