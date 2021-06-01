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

    

}