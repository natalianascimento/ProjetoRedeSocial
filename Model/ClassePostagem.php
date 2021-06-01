<?php

class Postagem
{
    private $id_post;
    private $id_usuario; 
    private $titulo; 
    private $conteudo;
    private $arquivo;
    private $status;
    private $data;

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }
}
