// se crea evento del boton buscar que se encuentra en index.html
function realizarBusqueda() {
    console.log("realizarBusqueda");
    //se crea constante del input con su id buscador
    //guarda la informacion digitada en el input
    //el .value accede al valor del input   
    const infoBusqueda = document.getElementById("buscador").value;
    //creacion del arreglo de busqueda
    const datos = [
        {
            titulo: 'Hapkido',
            enlace: 'hapkido.html',
        },
        {
            titulo: 'Artistica',
            enlace: 'artistica.html',
        },
        {
            titulo: 'Tecnologia',
            enlace: 'tecnologia.html',
        },
        {
            titulo: 'Educacion Fisica',
            enlace: 'edufisica.html',
        },
        {
            titulo: 'Ingles',
            enlace: 'ingles.html',
        },
        {
            titulo: 'Musica',
            enlace: 'musica.html',
        },
        {
            titulo: 'Mision',
            enlace: 'quienessomos.html',
        },
        {
            titulo: 'Vision',
            enlace: 'quienessomos.html',
        },
        {
            titulo: 'Cursos',
            enlace: 'cursos.html',
        }
    ]
    //creamos una instancia de la clase buscador
    const buscador = new Buscador(datos);
    // se crea constructor de busqueda
    const resultados = buscador.buscar(infoBusqueda)
    mostrarInformacion(resultados);
}
function mostrarInformacion(informacion) {
    const mostrarInfo = document.getElementById("listadoBusqueda");
    for (let i = 0; i < informacion.length; i++) {
        const objeto = informacion[i];
        const enlace = document.createElement("a");
        enlace.textContent = objeto.titulo;
        enlace.href = objeto.enlace;
        mostrarInfo.appendChild(enlace)
    }
}
//Funcion buscar con enter
function capturaTecla(evento) {
    let teclaEnter = evento.keyCode;
    if (teclaEnter == 13) {
        // console.log("Enter Presionado", evento);
        realizarBusqueda();

    }
}




