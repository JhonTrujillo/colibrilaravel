/*Array card index.html */
const programas = [
    {
        titulo:'Primaria',
        imagen:'images/primaria.jpg',
        descripcion:'Jardin a Quinto',
        enlace:'primaria',
    },
    {
        titulo:'Secundaria',
        imagen:'images/secundaria.avif',
        descripcion:'Sexto a Once',
        enlace:'secundaria',
    },
    {
        titulo:'Cursos',
        imagen:'images/clasesvacacionales.jpg',
        descripcion:'Cursos - Refuerzo',
        enlace:'cursos',
    }
];

let card = document.getElementById("contcard")

for(let i = 0; i < programas.length; i++){
    let creatarjeta = document.createElement("div");
    creatarjeta.className = "creartarjeta";
        let titulo = document.createElement("h3");
        let imagen = document.createElement("img");
        let descripcion = document.createElement("p");
        let enlace = document.createElement("a");
        
        titulo.textContent = programas[i].titulo;
        imagen.setAttribute('src', programas[i].imagen);
        descripcion.textContent = programas[i].descripcion; 
        enlace.setAttribute('href', programas[i].enlace);
        enlace.textContent = ("Click Aqui");
                     
        creatarjeta.appendChild(titulo);
        creatarjeta.appendChild(imagen);
        creatarjeta.appendChild(descripcion);
        creatarjeta.appendChild(enlace);
        card.appendChild(creatarjeta);
        
}

 