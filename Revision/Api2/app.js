const BASE_URL ="https://192.168.1.140/videojuegos_app/"

async function buscarVideojuegos(){
    const tbody = document.querySelector(`#resultado-1 tbody`);
    if(!tbody){return;}
    try{
        const response  = await fetch(`${BASE_URL}api-videojuego.php`);
        const data = await response.json();
        tbody.innerHTML='';
        if (response.ok && Array.isArray(data) && data.length > 0){
            data.forEach(juego => {
                const tr = document.createElement('tr');
                tbody.innerHTML = `
                    <td>${juego.id}</td>
                    <td>${juego.titulo}</td>
                    <td>${juego.descripcion}</td>
                    <td> $${juego.precio}</td>
                    <td> ${juego.lanzamiento}</td>
                    <td ${juego.calificacion}</p>
                    <td> ${juego.imagen}</td>
                    <td> ${juego.id_genero}</td>
                    <td> ${juego.id_plataforma}</td>      
                `;
                tbody.appendChild(tr);
            });
        }else{
            tbody.innerHTML = `
                <tr>
                    <td colspan="4" style="text-align:center;color:#666;">No se encontraron categorías</td>
                </tr>
            `;
        }
    }catch (error) {
        console.error('Error al buscar videojuegos: ', error);
        tbody.innerHTML = `
            <tr>
                <p style="text-align:center;color:#666;">Error al buscar videojuegos</p>
            </tr>
        `;
    }       
}

async function buscarJuegosPorNombre(nombre) {
    const tbody = document.querySelector('#resultados-1 tbody');
    if (!tbody) {
        return;
    }
    try {
        const response = await fetch(`${URL_BASE}api-videojuego.php?nombre=${encodeURIComponent(nombre)}`);
        const data = await response.json();
        tbody.innerHTML = '';
        if(response.ok){
             data.forEach(juego => {
            const tr = document.createElement('tr');
            tbody.innerHTML = `
                <td>${juego.id}</td>
                <td>${juego.titulo}</td>
                <td>${juego.descripcion}</td>
                <td> $${juego.precio}</td>
                <td> ${juego.lanzamiento}</td>
                <td ${juego.calificacion}</p>
                <td> ${juego.imagen}</td>
                <td> ${juego.id_genero}</td>
                <td> ${juego.id_plataforma}</td>      
            `;
            tbody.appendChild(tr);
            });
        }else{
            tbody.innerHTML = `
                <p style="text-align:center;color:#666;">No se encontraron juegos</p>
            `;
        }
    }catch (error) {
        console.error('Error al buscar videojuegos: ', error);
        tbody.innerHTML = `
            <p style="text-align:center;color:#666;">Error al buscar videojuegos</p>
        `;
    }       
}

async function buscarImagenDeJuegosPorNombre(nombre){
    const contenedor = document.querySelector('#resultados-2 contenedor');
    if(!contenedor) {
        return;
    }
    try{
        const response = await fetch(`${URL_BASE}api-imagen.php?nombre=${encodeURIComponent(nombre)}.jpg`);
        const data = await response.json();
        contenedor.innerHTML = '';
        
        if (response.ok){
            contenedor.innerHTML = "<h3> Imagen </h3>";
            data.forEach(juego => {
                const img = document.createElement("img");
                img.src = juego.imagen;
                img.alt = juego.nombre;
                img.width = 150;
                img.classList.add("img-thumbnail", "m-2");
                
                const card = document.createElement("div")
                card.classList.add("card", "p-2", "mb-3");
                card.appendChild(img);

                contenedor.appendChild(card);
            });
        }else{
            contenedor.innerHTML = `
                <p style="text-align:center;color:#666;">No se encontraron imagenes</p>
            `;
        }
    }catch(error){
        console.error('Error al buscar imagenes: ', error);
        contenedor.innerHTML = `
            <p style="text-align:center;color:#666;">Error al buscar imagenes</p>
        `;
    }
}
document.getElementById('#btn-get-all').addEventListener("click", async() => {
    buscarVideojuegos();
})
document.getElementById('#btn-get-one').addEventListener("click", async() => {
    buscarImagenDeJuegosPorNombre();
})
document.getElementById('#btn-clear').addEventListener("click", () => {
    const Contenedor = document.getElementById('#resultados-1', '#resultados-2');
    Contenedor.innerHTML = '';
})
document.addEventListener('DOMContentLoaded', () => {
    //getVideojuegos();

    const searchInput = document.getElementById('#search-input');
    if(searchInput){
        searchInput.addEventListener('input', (event) => {
            const valor = event.target.value.trim();
            if(valor){
                buscarJuegosPorNombre(valor);
            }//else{
               // buscarVideojuegos();
            //}
        });
    }
})