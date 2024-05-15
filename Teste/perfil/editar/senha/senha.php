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
                <a class="btn btn-light mt-2" href="/teste/perfil/editar/?id=<?=$dentidade?>">Voltar</a>
                 <h1 class="text-center">Mudar senha</h1>
                 <br/>   
                 <h5 class="text-center mb-5" <?=$escondido?> ><?=$mensagem?></h5>
                    <form class="text-center" method='post'>
                    <label class="form-label">Digite sua senha:</label>
                    <input class="form-control mb-3 mx-auto p-2" style="width: 200px;" type='password' name='senha' required/>
                    <label class="form-label">Digite sua nova senha:</label>
                    <input class="form-control mb-3 mx-auto p-2" style="width: 200px;" type='password' name='senhau' required/>
                    <label class="form-label">Digite novamente sua nova senha:</label>
                    <input class="form-control mb-3 mx-auto p-2" style="width: 200px;" type='password' name='senhad' required/>
                    <div class="d-flex justify-content-center">
                       <button class="btn btn-primary mb-2" style="width: 200px;" type='submit'>Enviar</button>
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