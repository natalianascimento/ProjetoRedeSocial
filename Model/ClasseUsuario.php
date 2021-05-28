<?php
class Usuario
{
    public $id; //Esse ID será AI na base, neste caso, não deveria ter uma função que puxa o id para a classe? Pq neste caso ele ficará vazio!
    public $nome; //Tive que alterar para public pq na ServiceUsuario.php aporesentava como empty.
    public $email;
    public $senha;

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }
}
