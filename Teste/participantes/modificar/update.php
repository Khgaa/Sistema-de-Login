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
                <a class="btn btn-light mt-2" href="/teste/participantes?id=<?=$dentidade?>">Voltar</a>
                 <h1 class="text-center">Modificar Participante</h1>
                 <br/>   
                <form class="text-center" method='post'>
                    <label class="form-label">Escolha um participante que deseja modificar</label>
                    <select class="form-select mb-3" name='nomepar' aria-label="Selecione um Participante">
                    <option>Selecione um Participante</option>
                    <?=$lista?></select>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary" style="width: 200px;" type="submit" name='modifica'>Modificar</button>
                    </div>
                    </form>
                    <form class="text-center" method='post'>
                    <label class="form-label" <?=$escondido?>>Digite o novo nome do participante</label>
                    <input class="form-control mb-3 mx-auto p-2" style="width: 200px;" type='text' name='nomepessoa' <?=$escondido?> required/>
                    <div class="d-flex justify-content-center" <?=$escondido?>>
                       <button class="btn btn-primary" style="width: 200px;" type='submit' <?=$escondido?> >Enviar</button>
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