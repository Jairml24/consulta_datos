<!DOCTYPE html>
<html lang="es">
    <?php include './partials/cabecera.html'; ?>
<body>
    <div class="flex ">
        <!-- MENU -->
        <?php include './partials/menu.html'; ?>
        <!-- CONSULTA RENIEC  -->
        <div class='p-3 w-6/6 sm:w-5/6'>
            <h3 class=' text-[30px] no_print font-thin'>CONSULTA POR NOMBRES</h3>
            <div class='contenedor-formulario no_print'>
                <form class="flex gap-5">
                    <div>
                        <input placeholder="Nombres apellidos" type="text" id='nombres' name='nombres' class="border p-2 w-[350px] ">
                    </div>
                    <div class="text-center">
                        <button id='btn_buscar'
                            class='boton-busqueda inline-block  bg-red-600 p-2 w-[100px] text-white'>Buscar</button>
                        <a href="javascript:window.print()" id='btn_imprimir'
                            class="boton-imprimir inline-block p-2 w-[100px] bg-lime-600 text-white">Imprimir</a>
                    </div>
                </form>
            </div>

            <!-- mensajes de estado -->
            <div id='nombres_error' class="hidden text-red-600">
                <p class='' for="">Ingrese  nombres</p>
            </div>

            <!-- respuesta de web service  -->
            <div class='mt-5 bg-gray-100 w-100 p-3 text-center' id='datos'></div>
        </div>

    </div>

    <script src="./../src/js/nombres.js"></script>
</body>

</html>