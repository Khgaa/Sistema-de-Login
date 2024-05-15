<?php

require('../../../select.php');

$id_perm = '';
$id = '';

$select = new Banco();
$getinformation = $select->procurarLista();
$id = $_GET['id'];

if(isset($_POST['mudar'])){
    $id_perm = 1;
    $select->mudarPermissao($id_perm, $_GET['value']);
    header('Location: /teste/perfil?id='.$_GET['id'].'');
}

include('rebaixar.php');
?>