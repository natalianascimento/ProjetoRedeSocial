<?php 

class UsuarioService {

    public function __construct()
    {
        require_once 'UsuarioDAO.php';
    }
    
    public function cadastrarUsuario($usuario)
    {
        
        if (!empty($usuario->nomeCompleto) and !empty($usuario->nomeUsuario) and !empty($usuario->email)  
        and !empty($usuario->telefone)  and !empty($usuario->senha)){
          
            require_once 'UsuarioDAO.php';
            
            $dao = new UsuarioDAO();
            
            $cadastro = $dao->cadastrarUsuarioDAO($usuario);
            
            if (!empty($cadastro)){
                echo "Cadastrado com sucesso";

            } else {
                echo "Não foi cadastrado";

            }
            
        } else {
            echo "campo não foi preenchido";
        }
    }

    public function efetuarLoginUsuario($usuario)
    {
        //require_once 'UsuarioDAO.php';
            
        $dao = new UsuarioDAO();
        
        $campo = "email";
        $registro = $usuario->email;
        
        $consulta = $dao->consultarUsuarioDAO($campo, $registro);
        
        if ($consulta != null){

            $senhaCadastrada = $consulta['senha'];

            if(strcmp($senhaCadastrada, $usuario->senha) == 0){
                echo "Login efetuado com sucesso";

            }
        }
    }
}
