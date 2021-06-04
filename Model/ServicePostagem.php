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

            $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
            $novoNomeArquivo = md5(time()).$extensao;
            $diretorio = "../View/Postagens/";

            move_uploaded_file($_FILES['arquivo']['tmp_name'],$diretorio.$novoNomeArquivo);
            
            $cadastro = $dao->cadastrarPostagemDAO($postagem);

            if (!empty($cadastro)){
                echo "Cadastrado com sucesso";

            } else {
                echo "Não foi cadastrado";

            }
        }
    }
    
    public function consultarPostagem() 
    {
        
        $dao = new PostagemDAO();
        
        $consulta = $dao->consultarPostagemDAO();
        
        return $consulta;
    }
}