let botonBusqueda = document.getElementById('btn_buscar')
let resultados = document.getElementById('datos')
let errorCampoVacio = document.getElementById('nombres_error')


botonBusqueda.addEventListener('click', e => {
    e.preventDefault()
    let nombres = document.getElementById('nombres').value;
    const params = new URLSearchParams();
    params.append('nombres', nombres)
    errorCampoVacio.style.display = 'none'

    if (nombres.length == '') {
        errorCampoVacio.style.display = 'block'
        resultados.innerHTML = ''
        return false;
    }

    resultados.innerHTML='<div class="carga"></div>'
    fetch('./../controlador/consulta_nombres.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: params.toString()
    })
        .then(response => response.json())
        .then(data => {
            if (data.length > 0) {
                let datos = data[0]
                let html = '';
                html = ` 
                    <div class='sm:flex gap-[40px]' >
                        <table class="text-left" >
                            <tr>
                                <th >DNI</th> <td>${datos.dni}</td> 
                            </tr>
                            <tr>
                                <th> Nombres</th> <td>${datos.nombres}</td> 
                            </tr>

                            <tr>
                                <th >Apellido Paterno </th> <td>${datos.apellido_paterno}</td>  
                            </tr>

                            <tr>
                                <th>Apellido Materno </th> <td>${datos.apellido_materno}</td>    

                            </tr>
                            <tr>
                                <th >Dirección</th> <td>${datos.direccion}</td>                                  
                            </tr>
                            <tr>
                                <th >Estado Civil</th> <td>${datos.estado_civil}</td>     
                            </tr>
                            <tr>
                                <th>Ubigeo</th> <td>${datos.ubigeo}</td>    
                            </tr>
                            <tr>
                                <th>Restriccion</th> <td>${datos.restriccion}</td>      
                            </tr>
                        </table>
                        <div class="col-5 mt-4 sm:m-0 text-center"> 
                        <img id='foto' width="260px" style='border:1px solid #ccc' src="data:image/png;base64,${datos.foto}" >
                        </div>
                    </div>
                    `
                resultados.innerHTML = html
            }
            else {
                resultados.innerHTML = 'Sin resultados'
            }
        })
});