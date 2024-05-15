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
                <div class="container bg-primary-subtle border border-primary-subtle rounded-3">
                    <a class="btn btn-light mt-2" href="/teste/participantes?id=<?=$id?>">Voltar</a>
                    <h1 class="text-center">Registro de Participante</h1>
                    <br/>   
                <form class="text-center" method='post'>
                    <label class="form-label">Digite o nome do participante</label>
                    <input class="form-control mb-3 mx-auto p-2" style="width: 200px;" type='text' name='nomepessoa' required/>
                    <div class="d-flex justify-content-center">
                    <a class="btn btn-light" href="/teste/perfil?id=<?=$id?>">Voltar</a>   <button class="btn btn-primary" type='submit' >Enviar</button>
                    </div>

                 </form>
                </div>
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