<?php
class Usuario
{
    private $id;
    private $nomeCompleto; 
    private $nomeUsuario; 
    private $email;
    private $telefone;
    private $senha;

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }
}
