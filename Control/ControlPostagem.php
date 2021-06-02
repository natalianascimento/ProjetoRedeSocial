<?php

session_start();

if(isset($_POST['btnPostagem'])){
    cadastrarPostagem();
}

function cadastrarPostagem(){
    require_once '../Model/ClassePostagem.php';
    require_once '../Model/ServicePostagem.php';

    $postagem = new Postagem;
    $service = new PostagemService;

    $postagem->id_usuario = 1; 
    $postagem->titulo = $_POST['titulo'];
    $postagem->conteudo = $_POST['conteudo'];
    $postagem->arquivo = $_FILES['arquivo']['name'];
    $postagem->status = 1;
    $postagem->data = NOW(); //Data de hoje

    $service->cadastrarPostagem($postagem);

}