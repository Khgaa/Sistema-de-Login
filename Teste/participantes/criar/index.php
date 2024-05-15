<?php

require('../../select.php');

$nome = '';
$id = '';

if(!isset($_GET['id'])){
    header('Location: /teste/');
}

$select = new Banco();
$getinformation = $select->procurarUsuario();

foreach($getinformation as &$value){

    if(md5($value->id) == $_GET['id']){
        $id = md5($value->id);
        $senha = $value->senha;
        $valor = $value->id;
        if($value->id_perm == 1){
            header('Location: /teste/');
        }
    }
}


if(isset($_POST['nomepessoa'])){ 

    if($_POST['nomepessoa']){
        $nome = $_POST['nomepessoa'];
        $select->create($nome);
        header('Location: /teste/participantes?id='.$id.'');
    }    
}

include('create.php');
?>