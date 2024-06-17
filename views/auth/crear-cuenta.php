<h1 class="nombre-pagina">Crear Cuenta</h1>
<p class="descripcion-pagina">Llena el siguiente formulario para crear una cuenta</p>

<?php 
    include_once __DIR__ . "/../templates/alertas.php";
?>

<form action="/crear-cuenta" method="POST" class="formulario">
    <div class="campo">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" 
            value="<?php echo s($usuario->nombre) ?>"/>
    </div>

    <div class="campo">
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" placeholder="Tu Apellido"
            value="<?php echo s($usuario->apellido) ?>"/>
    </div>

    <div class="campo">
        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" placeholder="Tu Teléfono" name="telefono" 
            value="<?php echo s($usuario->telefono) ?>" minlength="10"/>
    </div>

    <div class="campo">
        <label for="email">Email:</label>
        <input type="email" id="email" placeholder="Tu Email" name="email" 
            value="<?php echo s($usuario->email) ?>"/>
    </div>

    <div class="campo">
        <label for="password">Clave:</label>
        <input type="password" id="password" placeholder="Tu Password" name="password" minlength="6"/>
    </div>

    <input type="submit" class="boton" value="Crear Cuenta">
</form>

<div class="acciones">
    <a href="/">¿Ya tienes tienes una cuenta? Inicia sesión aquí</a>
    <a href="/olvide">¿Olvidaste tu contraseña?</a>
</div>