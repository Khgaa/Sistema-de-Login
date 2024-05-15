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
            <div class="container bg-primary-subtle border border-primary-subtle rounded-3 position-absolute top-50 start-50 translate-middle">
                <h1 class="text-center">Lista de Participantes</h1>
                <br/>   
                <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome do participante</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?=$tabela?></tr>
                </tbody>
                </table>
                <div>
                <a class="btn btn-light btn-sm mb-1" href="/teste/perfil?id=<?=$id?>">Voltar</a>
                <a class="btn btn-success btn-sm mb-1" href="/teste/participantes/criar?id=<?=$id?>" <?=$escondido?>>Criar</a>
                <a class="btn btn-danger btn-sm mb-1" href="/teste/participantes/deletar?id=<?=$id?>" <?=$escondido?>>Remover</a>
                <a class="btn btn-primary btn-sm mb-1" href="/teste/participantes/modificar?id=<?=$id?>" <?=$escondido?>>Modificar</a>
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