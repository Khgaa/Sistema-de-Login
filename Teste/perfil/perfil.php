<html>
    <head>
        <meta charset="utf-8">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <div class="bg-primary">
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <body>
            <nav>    
            <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          </button>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
</nav>
            <div class="container bg-primary-subtle border border-primary-subtle rounded-3 position-absolute top-50 start-50 translate-middle">
                <h1 class="text-center">Perfil de <?=$nomeusuario?> </h1>
                <br/>   
                <a class="mb-2" href="/teste/participantes?id=<?=$id?>"> Lista de Participantes </a>
                <div>
                <a class="btn btn-light btn-sm mb-1 mt-3" href="../">Sair</a>
                <a class="btn btn-primary btn-sm mb-1 mt-3" href="/teste/perfil/editar?id=<?=$id?>">Editar Conta</a>
                <a class="btn btn-success btn-sm mb-1 mt-3" href="/teste/perfil/usuarios?id=<?=$id?>">Usuarios</a>
            </div></div>    
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            </body>
    </div>           
</html>