<?php

class PostagemService {

    function __construct()
    {    
        require_once 'PostagemDAO.php';
    }

    public function cadastrarPostagem($postagem)
    {

        if (!empty($postagem->titulo) and !empty($postagem->conteudo) and !empty($postagem->arquivo)){

            $dao = new PostagemDAO();

            $pasta = "../View/Postagens";

            move_uploaded_file($postagem->arquivo,$pasta);
            
            $cadastro = $dao->cadastrarPostagemDAO($postagem);

            if (!empty($cadastro)){
                echo "Cadastrado com sucesso";

            } else {
                echo "Não foi cadastrado";

            }
        }

    }
}