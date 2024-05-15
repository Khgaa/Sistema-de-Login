<?php

require('../../../select.php');

if(!isset($_GET['id'])){
    header('Location: /teste/');
}

$id = '';
$senha = '';
$pass = '';
$nome = '';
$valor = '';

$select = new Banco();
$getinformation = $select->procurarUsuario();

foreach($getinformation as &$value){

    if(md5($value->id) == $_GET['id']){
        $id = md5($value->id);
        $senha = $value->senha;
        $valor = $value->id;
    }
}


if(isset($_POST['senha'])){
    $pass = md5($_POST['senha']);
    if($senha == $pass){
        $nome = $_GET['nome'];
        $select->editarnome($nome, $valor);
        header('Location: /teste/perfil?id='.$id.'');
        echo $nome;
    }
}

 include('confirmar.php');
?>