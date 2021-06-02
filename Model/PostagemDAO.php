<?php

class PostagemDAO{

    protected $conectar;
    protected $conectafuncao;

    function __construct()
    {
        require_once 'conexaoDB.php';
        $this->conectar = new ConexaoDB();
        $this->conectafuncao = $this->conectar->getInstance();
    }

    function cadastrarPostagemDAO($postagem)
    {
        $sql = "INSERT INTO postagem (id_usuario, titulo, conteudo, arquivo, status_post, data_postagem) VALUES ( :id_usuario, :titulo, :conteudo, :arquivo, :status_post, :data_postagem)";
        
        $stmt = $this->conectafuncao->prepare($sql);
        
        $stmt->bindParam(":id_usuario", $id_usuario);
        $stmt->bindParam(":titulo", $titulo);
        $stmt->bindParam(":conteudo", $conteudo);
        $stmt->bindParam(":arquivo", $arquivo);
        $stmt->bindParam(":status_post", $status_post);
        $stmt->bindParam(":data_postagem", $data_postagem);
        
        $id_usuario = $postagem->id_usuario; 
        $titulo = $postagem->titulo;
        $conteudo = $postagem->conteudo;
        $arquivo = $postagem->arquivo;
        $status_post = $postagem->status;
        $data_postagem = $postagem->data;

        $stmt->execute();

        return $stmt->fetchAll();
    }
}