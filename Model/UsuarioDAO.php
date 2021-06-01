<?php 

class UsuarioDAO{

    protected $conectar;
    protected $conectafuncao;

    function __construct()
    {
        require_once 'conexaoDB.php';
        $this->conectar = new ConexaoDB();
        $this->conectafuncao = $this->conectar->getInstance();
    }

    function cadastrarUsuarioDAO($usuario){

        $sql = "INSERT INTO usuario (nome_de_usuario, nome_completo, email, telefone, senha) VALUES (:nome_de_usuario, :nome_completo, :email, :telefone, :senha)";
        
        $stmt = $this->conectafuncao->prepare($sql);
        
        $stmt->bindParam(":nome_de_usuario", $nome_de_usuario);
        $stmt->bindParam(":nome_completo", $nome_completo);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":telefone", $telefone);
        $stmt->bindParam(":senha", $senha);
        
        $nome_de_usuario = $usuario->nomeUsuario;
        $nome_completo = $usuario->nomeCompleto;
        $email = $usuario->email;
        $telefone = $usuario->telefone;
        $senha = $usuario->senha;

        $stmt->execute();

        return $stmt->fetchAll();

    }

    function consultarUsuarioDAO($campo, $registro){

        $sql = "SELECT * FROM usuario WHERE $campo = :registro";

        $stmt = $this->conectafuncao->prepare($sql);

        $stmt->bindParam(":registro", $registro);
        
        $stmt->execute();

        return $stmt->fetchAll();

        // $resultado = $stmt->fetchAll();
        // print_r($resultado);
        // exit;
    }
}
