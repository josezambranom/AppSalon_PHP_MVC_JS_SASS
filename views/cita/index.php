<h1 class="nombre-pagina">Crear Nueva Cita</h1>
<p class="descripcion-pagina">Elige tus servicios y coloca tus datos</p>

<div id="app">
    <nav class="tabs">
        <button class="actual" type="buton" data-paso="1">Servicios</button>
        <button type="buton" data-paso="2">Información Cita</button>
        <button type="buton" data-paso="3">Resumen</button>
    </nav>
    <div class="seccion" id="paso-1">
        <h2>Servicios</h2>
        <p class="text-center">Elige tus servicios a continuación</p>
        <div id="servicios" class="listado-servicios"></div>
    </div>
    <div class="seccion" id="paso-2">
        <h2>Tus Datos y Cita</h2>
        <p class="text-center">Coloca tus datos y fecha de tu cita</p>
        <form class="formulario">
            <div class="campo">
                <label for="nombre">Nombre</label>
                <input 
                    type="text" 
                    id="nombre" 
                    placeholder="Tu Nombre" 
                    value="<?php echo $nombre; ?>"
                    disabled
                />
            </div>   
            <div class="campo">
                <label for="fecha">Fecha</label>
                <input type="date" id="fecha" min="<?php echo date('Y-m-d'); ?>"/>
            </div>
            <div class="campo">
                <label for="hora">Hora</label>
                <input type="time" id="hora"/>
            </div>
        </form>
    </div>
    <div class="seccion contenido-resumen" id="paso-3">
        <h2>Resumen</h2>
        <p class="text-center">Verifica que la información sea correcta</p>
    </div>
    <div class="paginacion">
        <button class="boton" id="anterior">&laquo; Anterior</button>
        <button class="boton" id="siguiente">Siguiente &raquo;</button>
    </div>
</div>

<?php 
    $script = "
        <script src='build/js/app.js'></script>
    " 
?>