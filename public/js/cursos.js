const cursos = [
    {
        titulo:'Hapkido',
        imagen:'images/hapkido.jpg',
        descripcion:'Arte marcial coreano',
        enlace:'hapkido.html',
    },
    {
        titulo:'Artistica',
        imagen:'images/artistica.jpg',
        descripcion:'Creaciones Unicas',
        enlace:'artistica.html',
    },
    {
        titulo:'Tecnologia',
        imagen:'images/tecnologia.jpeg',
        descripcion:'Conocimientos y habilidades',
        enlace:'tecnologia.html',
    },
    {
        titulo:'Educacion Fisica',
        imagen:'images/educacionfisica.jpg',
        descripcion:'Disciplina pedagogica',
        enlace:'edufisica.html',
    },
    {
        titulo:'Ingles',
        imagen:'images/ingles.avif',
        descripcion:'Lenguaje de comunicacion',
        enlace:'ingles.html',
    },
    {
        titulo:'Musica',
        imagen:'images/musica.jpg',
        descripcion:'Expresion Artistica',
        enlace:'musica.html',
    }
];

let card = document.getElementById("contcursos")

for(let i = 0; i < cursos.length; i++){
    let creatarjeta = document.createElement("div");
    creatarjeta.className = "creartarjeta";
        let titulo = document.createElement("h3");
        let imagen = document.createElement("img");
        let descripcion = document.createElement("p");
        let enlace = document.createElement("a");
        
        titulo.textContent = cursos[i].titulo;
        imagen.setAttribute('src', cursos[i].imagen);
        descripcion.textContent = cursos[i].descripcion; 
        enlace.setAttribute('href', cursos[i].enlace);
        enlace.textContent = ("Click Aqui");
                     
        creatarjeta.appendChild(titulo);
        creatarjeta.appendChild(imagen);
        creatarjeta.appendChild(descripcion);
        creatarjeta.appendChild(enlace);
        card.appendChild(creatarjeta);
        
}