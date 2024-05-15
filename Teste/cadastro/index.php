<?php

require('../select.php');

$nome = '';
$user = '';
$pass = '';
$escondido = 'hidden';
$mensagem = '';

if(isset($_POST['nomepessoa'])){ 

    $select = new Banco();
    if($_POST['nomepessoa'] && $_POST['login'] && $_POST['senha'] && $_POST['repetir']){
        if($_POST['senha'] == $_POST['repetir']){
            $nome = $_POST['nomepessoa'];
            $user = $_POST['login'];
            $pass = $_POST['senha'];
            $select->criarconta($nome, $user, $pass);
            header('Location: /teste/');
        } else{
            $mensagem = 'As senhas não são iguais. Tente novamente.';
        }
        
    }    
}

include('cadastrar.php');
?>