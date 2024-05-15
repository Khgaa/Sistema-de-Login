<?php

require('../select.php');

$nome = '';
$tabela = '';
$i = 1;
$id = '';
$escondido = 'hidden';

$select = new Banco();
$getinformation = $select->procurarLista();
$getinfo = $select->procurarUsuario();

foreach($getinfo as &$value){

  if(md5($value->id) == $_GET['id']){
      $id = md5($value->id);
      if($value->id_perm == 2){
        $escondido = '';
      }
  }
}

foreach($getinformation as &$value){
    $nome = $value->participante; 
    $tabela .= '<tr>
    <th scope="row">'.$i.'</th>
    <td>'.$nome.'</td>
  </tr>';
  $i++;
}


include('participantes.php');
?>