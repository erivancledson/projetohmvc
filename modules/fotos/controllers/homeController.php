<?php



/**
 * Description of homeController
 *
 * @author Erivan
 */
class homeController extends controller{
  
    //primeiro metodo que é procurado quando entra no controle
    public function index(){
        $usuario = new usuario();
        $usuario->setNome('Erivan Cledson');
   
        
        
        $dados = array(
            
            'nome' => $usuario->getNome()
        );
        
        $this->loadView('home', $dados);
    }
}
