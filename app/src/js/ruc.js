let botonBusqueda = document.getElementById('btn_buscar')
let resultados = document.getElementById('datos')
let errorCampoVacio = document.getElementById('ruc_error')
let errorCaracteres = document.getElementById('ruc_digitos_error')

botonBusqueda.addEventListener('click', e => {
    e.preventDefault()
    let ruc = document.getElementById('ruc').value;
    const params = new URLSearchParams();
    params.append('ruc', ruc)
    errorCampoVacio.style.display = 'none'
    errorCaracteres.style.display = 'none'

    if (ruc.length == '') {
        errorCampoVacio.style.display = 'block'
        resultados.innerHTML = ''
        return false;
    }
    else if (ruc.length != 11) {
        errorCaracteres.style.display = 'block'
        resultados.innerHTML = ''
        return false;
    }
    resultados.innerHTML='<div class="carga"></div>'
    fetch('./../controlador/consulta_ruc.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: params.toString()
    })
        .then(response => response.json())
        .then(data => {
            console.log(data[0])

            if (data.length > 0) {
                let datos = data[0]
                let html = '';
                html = ` 
                    <div class='sm:flex gap-[40px]' >
                        <table class="text-left" >
                            <tr>
                                <th >Ruc</th> <td>${datos.ddp_numruc}</td> 
                            </tr>
                            <tr>
                                <th> Razon social</th> <td>${datos.ddp_nombre}</td> 
                            </tr>

                            <tr>
                                <th >Dirección </th> <td>${datos.ddp_nomvia} ${datos.ddp_numer1} ${datos.ddp_numer1}</td>  
                            </tr>

                            <tr>
                                <th>Rubro </th> <td>${datos.desc_ciiu}</td>    

                            </tr>
                            <tr>
                                <th >Tipo empresa</th> <td>${datos.desc_tpoemp}</td>                                  
                            </tr>
                                 
                            </tr>
                        </table>
                    </div>
                    `
                resultados.innerHTML = html
            }
            else {
                resultados.innerHTML = 'Sin resultados'
            }
        })
});