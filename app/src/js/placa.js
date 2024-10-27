let botonBusqueda = document.getElementById('btn_buscar')
let resultados = document.getElementById('datos')
let errorCampoVacio = document.getElementById('placa_error')
let errorCaracteres = document.getElementById('placa_digitos_error')

botonBusqueda.addEventListener('click', e => {
    e.preventDefault()
    let placa = document.getElementById('placa').value;
    const params = new URLSearchParams();
    params.append('placa', placa)
    errorCampoVacio.style.display = 'none'
    errorCaracteres.style.display = 'none'

    if (placa.length == '') {
        errorCampoVacio.style.display = 'block'
        resultados.innerHTML = ''
        return false;
    }
    else if (placa.length != 6) {
        errorCaracteres.style.display = 'block'
        resultados.innerHTML = ''
        return false;
    }
    resultados.innerHTML='<div class="carga"></div>'
    fetch('./../controlador/consulta_placa.php', {
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
                                <th >Placa</th> <td>${datos.placa}</td> 
                            </tr>
                            <tr>
                                <th> Propietario</th> <td>${datos.propietario}</td> 
                            </tr>

                            <tr>
                                <th >Marca</th> <td>${datos.marca}</td>  
                            </tr>

                            <tr>
                                <th>Modelo </th> <td>${datos.modelo}</td>    

                            </tr>
                            <tr>
                                <th >Sede</th> <td>${datos.sede}</td>                                  
                            </tr>
                            <tr>
                                <th >Color</th> <td>${datos.color}</td>     
                            </tr>
                            <tr>
                                <th>Año</th> <td>${datos.anio}</td>    
                            </tr>
                            <tr>
                                <th>Categoria</th> <td>${datos.categoria}</td>      
                            </tr>
                            <tr>
                                <th>Carroceria</th> <td>${datos.carroceria}</td>      
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