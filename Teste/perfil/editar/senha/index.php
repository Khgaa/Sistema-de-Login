<?php

require('../../../select.php');

if(!isset($_GET['id'])){
    header('Location: /teste/');
}

$id = '';
$senha = '';
$pass = '';
$nova = '';
$escondido = 'hidden';
$mensagem = '';
$dentidade = '';

$select = new Banco();
$getinformation = $select->procurarUsuario();
$dentidade = $_GET['id'];

foreach($getinformation as &$value){

    if(md5($value->id) == $_GET['id']){
        $id = $value->id;
        $senha = $value->senha;
    }
}

if($_GET['id'] =! $id){
    header('Location: /teste/');
}

if(isset($_POST['senha'])){
    $pass = md5($_POST['senha']);
    if($senha == $pass && $_POST['senhau'] == $_POST['senhad']){
        $nova = $_POST['senhau'];
        $select->editarsenha($nova, $id);
        header('Location: /teste/perfil/editar/senha/finalizar?id='.$id.'');
    } else if($senha =! $pass){
        $escondido = '';
        $mensagem = 'Senha inválida';
    }

    if($_POST['senhau'] =! $_POST['senhad']){
        $escondido = '';
        $mensagem = 'A repetição da nova senha não coincide com a mesma';
    }
}

 include('senha.php');
?>