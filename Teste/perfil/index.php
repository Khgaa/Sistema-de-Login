<?php

require('../select.php');

if(!isset($_GET['id'])){
    header('Location: /teste/');
}

$nomeusuario = '';
$id = '';
$escondido = 'hidden';

$select = new Banco();
$getinformation = $select->procurarUsuario();

foreach($getinformation as &$value){
    if(md5($value->id) == $_GET['id']){
        $id = md5($value->id);
        $nomeusuario = $value->nome; 
        if($value->id_perm == 2){
            $escondido = '';
          }
    }
}

if($_GET['id'] =! $id){
    header('Location: /teste/');
}

 include('perfil.php');
?>