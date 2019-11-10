<?php

namespace application\Controller;
use application\Controller\Controller;
use application\Model\FormModel;
use application\View\indexView;

class MethodController extends Controller
{
    //Função que redireciona os metodos via get pra metodos especificos
    public function MethodController($m)
    {
        if ($m == 'recebeForm')
        {
			$mth = new FormController();
			$mth->recebeForm();
        }

        if ($m == 'exclui'){
            $mth = new FormModel;
            $mth->Exclui($_GET['ID']);
            header("Location: /");
        }

        if ($m == 'registrado'){
            $mth = new indexView;
            $mth->registrado();
        }

    }   

}