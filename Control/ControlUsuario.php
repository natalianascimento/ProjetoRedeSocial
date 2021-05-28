<?php 
session_start();

if (isset($_POST['btnCadastrar'])){
    cadastrar ();
}

function cadastrar(){
    require_once '../Model/ClasseUsuario.php';
    require_once '../Model/ServiceUsuario.php';
    
    $usuario = new Usuario;
    $service = new UsuarioService();
    
    $usuario->nome = $_POST['NomeCompleto'];
    $usuario->email = $_POST['email'];
    $usuario->senha = $_POST['senha'];
    
    $service->cadastrarUsuario($usuario);
}