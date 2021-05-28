<?php 

class UsuarioService {
    
    public function cadastrarUsuario($usuario)
    {
        print_r($usuario);
        if (!empty($usuario->nome) and !empty($usuario->email) and !empty($usuario->senha)){
          
            require_once 'UsuarioDAO.php';
            
            $dao = newUsuarioDAO();
            
            $cadastro = $dao->cadastrarUsuarioDAO($usuario);
            
            
            
            echo "campo nome foi preenchido";
            
        } else {
            
            echo "campo não foi preenchido";
        }
    }
}