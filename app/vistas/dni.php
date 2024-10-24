<!DOCTYPE html>
<html lang="es">
    <?php include './partials/cabecera.html'; ?>
<body>
    <div class="flex ">
        <!-- MENU -->
        <?php include './partials/menu.html'; ?>
        <!-- CONSULTA RENIEC  -->
        <div class='p-3 w-6/6 sm:w-5/6'>
            <h3 class=' text-[30px] no_print font-thin'>CONSULTA POR DNI</h3>
            <div class='contenedor-formulario no_print'>
                <form class="flex gap-5">
                    <div>
                        <input placeholder="Ingrese DNI" type="number" id='dni' name='dni' class="border p-2 w-[163px] ">
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
            <div id='dni_error' class="hidden text-red-600">
                <p class='' for="">Ingrese numero de Dni</p>
            </div>
            <div id='dni_digitos_error' class="hidden text-red-600">
                <p class='' for="">Dni debe de tener 8 digitos</p>
            </div>

            <!-- respuesta de web service  -->
            <div class='mt-5 bg-gray-100 w-100 p-3 text-center' id='datos'></div>
        </div>

    </div>

    <script src="./../src/js/dni.js"></script>
</body>

</html>