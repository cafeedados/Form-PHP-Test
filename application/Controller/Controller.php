<?php

namespace application\Controller;

use application\View\IndexView;

class Controller 
{

    //Mostra um arquivo html pelo get
    public function view($p)
    {
        $view = new IndexView;
        $view->mostrar($p);
    }
    //Captura todos os posts, tornar a variavel $allPost Global.
    public function getPost()
    {
        foreach ($_POST as $key => $value) {
            $this->allPost[$key] = $value; 
        }
        return $this->allPost;
    }

}   
