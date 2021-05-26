<?php 

if (isset($_POST['btnCadastrar'])){
    cadastrar ();
}

function cadastrar(){
    require_once '../Model/ClasseUsuario.php';
    
    $usuario = new Usuario;
    
    $usuario->nome = $_POST['NomeCompleto'];
    $usuario->email = $_POST['email'];
    $usuario->senha = $_POST['senha'];
}