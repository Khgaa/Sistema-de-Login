<?php

require('../../select.php');

$nome = '';
$tabela = '';
$i = 1;
$id = '';
$escondido = 'hidden';
$naoescondido = '';
$escondido2 = 'hidden';
$dentidade = '';

$select = new Banco();
$getinfo = $select->procurarUsuario();

$id = $_GET['id'];



foreach($getinfo as &$value){

  $nome = $value->nome; 
    
  if($naoescondido == 'hidden'){
      $escondido = 'hidden';
      $escondido2 = 'hidden';
  }

    if(isset($_POST['mudar'])){
      if($i == $_POST['mudar']){
        if($value->id_perm == 1){
         $escondido = '';
         $naoescondido = 'hidden';
         $dentidade = $value->id; 
         echo $dentidade;     
         header('Location: /teste/perfil/usuarios/promover?id='.$id.'&value='.$dentidade.'');
        }
        
        if($value->id_perm == 2){
          $escondido2 = '';
          $naoescondido = 'hidden';
          $dentidade = $value->id; 
          echo $dentidade;
          header('Location: /teste/perfil/usuarios/rebaixar?id='.$id.'&value='.$dentidade.'');
        }
      }
    }

    $tabela .= '<tr>
    <th scope="row">'.$i.'</th>
    <td>'.$nome.'</td> <th scope="col"> <td> <form class="text-center" method="post"> <button class="btn btn-danger" value="'.$i.'" type="submit" name="mudar" '.$naoescondido.' >Mudar Permissão</button> </th> </form> 
    ';

  $i++; 

  }


include('usuarios.php');
?>