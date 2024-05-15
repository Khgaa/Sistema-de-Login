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
    if(isset($_POST['modifica']) && $id == $_POST['nomepar']){
        $id = $_POST['nomepar'];
        $lista .= '<option value='.$id.' selected>'.$nome.'</option>';
    }
}


if(isset($_POST['modifica'])){
    header('Location: /teste/participantes/modificar/mudar?id='.$_POST['nomepar'].'');
}

if(isset($_POST['nomepessoa'])){
    $select->update($_POST['nomepessoa'], $id);
    header('Location: /teste/participantes/');
    echo $id;
}

include('update.php');
?>