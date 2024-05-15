<?php

require('../../select.php');

if(!isset($_GET['id'])){
    header('Location: /teste/');
}

$nome = '';
$lista = '';
$id = '';
$escondido = 'hidden';
$dentidade = '';

$select = new Banco();
$getinformation = $select->procurarLista();
$getinfo = $select->procurarUsuario();
$dentidade = $_GET['id'];

foreach($getinfo as &$value){
    if(md5($value->id) == $_GET['id']){
        if($value->id_perm == 1){
            header('Location: /teste/');
        }
    }
}

foreach($getinformation as &$value){
    $id = $value->id;
    $nome = $value->participante; 
    $lista .= '<option value='.$id.'>'.$nome.'</option>';
    if(isset($_POST['remover']) && $id == $_POST['nomepar']){
        $id = $_POST['nomepar'];
        $lista .= '<option value='.$id.' selected>'.$nome.'</option>';
    }
}

if(isset($_POST['remover'])){
    $escondido = '';
}
 
if(isset($_POST['deletapar'])){
    $participante = $_POST['nomepar'];
    $select->delete($participante);
    header('Location: /teste/participantes?id='.$_GET['id'].'');
}

include('delete.php');
?>