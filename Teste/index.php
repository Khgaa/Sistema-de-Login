<?php

require('select.php');

$nome = '';
$pass = '';
$mensagem = 'hidden';
$escondido = 'hidden';
$id = '';

if(isset($_POST['nomepessoa'])){ 

    $select = new Banco();
    $getinformation = $select->search($_POST['nomepessoa'], $_POST['senha']);
    if(($_POST['nomepessoa']) && ($_POST['senha'])){
        $nome = $_POST['nomepessoa'];
        $pass = $_POST['senha'];
        //print_r($getinformation);
        foreach($getinformation as $value){
            //$resultado = array_intersect($getinformation , $conta);
            //print_r($resultado);
            $pass = md5($_POST['senha']);
            if($value->usuario == $nome && $value->senha == $pass){ 
                $id = $value->id;
                header('Location: /teste/perfil?id='.md5($id).'');
            }else{
            $mensagem = 'Usuário e/ou senha incorretos';
            $escondido = '';
            }
            }
        }
        
    }

 include('inicio.php');
?>