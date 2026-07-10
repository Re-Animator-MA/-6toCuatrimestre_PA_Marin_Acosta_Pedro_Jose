<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch API</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body >
    <div class="" >
        <header>
            <h1>Videojuegos</h1>
            <p>Api ejemplos</p>
        </header>
        <main>
            <div style="display:flex;gap:12px;align-items:center">
                <input type="text" id="search-input" placeholder="Buscar..."
                style="padding:10px 14px;border:2px solid #e2e8f0;border-radius:8px;font-size:14px;width:260px">
            </div>
            <section class="card">
                <h2>Obtener posts</h2>
                <p>lee los recursos del servideor</p>
                <div class="controls">
                    <button id="btn-get-all">Obtener videojuegos</button>
                    <button id="btn-clear">Limpiar</button>
                    <button id="btn-get-one">Obtener imagen</button>
                </div>

                <div id="resultados-1">
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tutulo</th>
                                <th>Descripción</th>
                                <th>Precio</th>
                                <th>Lanzamiento</th>
                                <th>Calificación</th>
                                <th>Imagen</th>
                                <th>Genero</th>
                                <th>Plataforma</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
                <div id="resultados-2"> </div>
            </section>
        </main>
        
    </div>
   <script src="app.js">
    
    </script>
</body>
</html>