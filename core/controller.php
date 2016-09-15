<?php


class controller {
    //para carregar a view. quando carregar a view envia o nome e os dados que ele vai 
    //receber se não enviar nada tbm não da erro por conta do array
    public function loadView($viewName, $viewData = array()){
        extract($viewData);
        global $currentModule;
        
        include 'modules/'.$currentModule.'/views/'.$viewName.'.php';
        
    }
}
