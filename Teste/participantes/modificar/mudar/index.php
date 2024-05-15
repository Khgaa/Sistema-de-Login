<?php

require('../../../select.php');

$nome = '';
$lista = '';
$id = '';
$escondido = 'hidden';
$dentidade = '';

$select = new Banco();
$getinformation = $select->procurarLista();

if(isset($_POST['nomepessoa'])){
    $select->update($_POST['nomepessoa'], $_GET['id']);
    header('Location: /teste/participantes/');
}

include('mudar.php');
?>