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
        $dao = new UsuarioDAO();
        
        $campo = "email";
        $registro = $usuario->email;
        
        $consulta = $dao->consultarUsuarioDAO($campo, $registro);
        
        if ($consulta != null){

            $senhaCadastrada = $consulta[0]['senha']; //NÃO ENTENDI O PORQUE TIVE QUE COLOCAR ESSE ZERO ANTES DE DECLARAR O CAMPO SENHA

            if(strcmp($senhaCadastrada, $usuario->senha) == 0){
                
                header('Location: ../View/ViewFeed.php');

            } else {
                echo "Seus dados estão incorretos";
            }
        } else{
            echo "Seus dados estão incorretos";
        }
    }
}
