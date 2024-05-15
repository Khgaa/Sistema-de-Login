<?php

require('../../select.php');

if(!isset($_GET['id'])){
    header('Location: /teste/');
}

$id = '';
$nome = '';

$select = new Banco();
$getinformation = $select->procurarUsuario();

foreach($getinformation as &$value){

    if(md5($value->id) == $_GET['id']){
        $id = md5($value->id);
        $nome = $value->nome; 
    } 
}

if($_GET['id'] =! $id){
    header('Location: /teste/');
}

if(isset($_POST['nomepessoa'])){
    header('Location: /teste/perfil/editar/confirmar?id='.$id.'&nome='.$_POST['nomepessoa'].'');
}

 include('editar.php');
?>