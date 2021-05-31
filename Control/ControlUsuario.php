<?php 
session_start();

if (isset($_POST['btnCadastrar'])){
    cadastrarUsuario();

} elseif (isset($_POST['btnLogin'])){
    efetuarLogin();

}

function cadastrarUsuario(){
    require_once '../Model/ClasseUsuario.php';
    require_once '../Model/ServiceUsuario.php';
    
    $usuario = new Usuario;
    $service = new UsuarioService();
    
    $usuario->nomeCompleto = $_POST['NomeCompleto'];
    $usuario->nomeUsuario = $_POST['NomeUsuario'];
    $usuario->email = $_POST['email'];
    $usuario->telefone = $_POST['telefone'];
    $usuario->senha = $_POST['senha'];
    
    $service->cadastrarUsuario($usuario);
}

function efetuarLogin(){
    require_once '../Model/ClasseUsuario.php';
    require_once '../Model/ServiceUsuario.php';
    
    $usuario = new Usuario;
    $service = new UsuarioService();

    $usuario->email = $_POST['email'];
    $usuario->senha = $_POST['senha'];
    
    $service->efetuarLoginUsuario($usuario);
}
