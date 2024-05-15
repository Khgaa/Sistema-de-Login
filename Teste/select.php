<?php
require('conexao/db.php');

class Banco{
    public function search($nome, $pass){
        $getinfo = "SELECT * FROM login WHERE login.usuario = '".$nome."' AND senha = '".md5($pass)."'";
        $db = new Database();
        $sendinfo = $db->selectDados($getinfo)->fetchALL(PDO::FETCH_CLASS,self::class);
        
        return $sendinfo;
    }    

    public function procurarLista(){
        $getinfo = "SELECT * FROM participantes";
        $db = new Database();
        $sendinfo = $db->selectDados($getinfo)->fetchALL(PDO::FETCH_CLASS,self::class);

        return $sendinfo;
    }

    public function create($nome){
        $getinfo = "SELECT * FROM participantes";
        $db = new Database();
        $insert = "INSERT INTO `bootstrap-demo`.`participantes` (`participante`) VALUES ('".$nome."')";
        $sendinfo = $db->selectDados($insert)->fetchALL(PDO::FETCH_CLASS,self::class);

    }

    public function delete($id){
        $getinfo = "SELECT * FROM participantes";
        $db = new Database();
        $deletar = "DELETE FROM participantes WHERE id = '".$id."'";
        $sendinfo = $db->selectDados($deletar)->fetchALL(PDO::FETCH_CLASS,self::class);
    }

    public function update($nome, $id){
        $getinfo = "SELECT * FROM participantes";
        $db = new Database();
        $modificar = "UPDATE participantes SET participante = '".$nome."' WHERE id = '".$id."'";
        $sendinfo = $db->selectDados($modificar)->fetchALL(PDO::FETCH_CLASS,self::class);
    }

    public function criarconta($nome, $user, $pass){
        $getinfo = "SELECT * FROM login";
        $db = new Database();
        $criar = "INSERT INTO `bootstrap-demo`.`login` (`nome`, `usuario`, `senha`) VALUES ('".$nome."', '".$user."', '".md5($pass)."')";
        $sendinfo = $db->selectDados($criar)->fetchALL(PDO::FETCH_CLASS,self::class);
    }

    public function procurarUsuario(){
        $getinfo = "SELECT * FROM login";
        $db = new Database();
        $sendinfo = $db->selectDados($getinfo)->fetchALL(PDO::FETCH_CLASS,self::class);

        return $sendinfo;
    }

    public function editarnome($nome, $id){
        $getinfo = "SELECT * FROM login";
        $db = new Database();
        $update = "UPDATE login SET nome = '".$nome."' WHERE id = '".$id."'";
        $sendinfo = $db->selectDados($update)->fetchALL(PDO::FETCH_CLASS,self::class);
    }

    public function editarsenha($pass, $id){
        $getinfo = "SELECT * FROM login";
        $db = new Database();
        $update = "UPDATE login SET senha = '".md5($pass)."' WHERE id = '".$id."'";
        $sendinfo = $db->selectDados($update)->fetchALL(PDO::FETCH_CLASS,self::class);
    }

    public function mudarPermissao($id_perm, $id){
        $getinfo = "SELECT * FROM login";
        $db = new Database();
        $update = "UPDATE login SET id_perm = '".$id_perm."' WHERE id = '".$id."'";
        $sendinfo = $db->selectDados($update)->fetchALL(PDO::FETCH_CLASS,self::class);
    }
}