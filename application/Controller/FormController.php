<?php
namespace application\Controller;
use application\Controller\Controller;
use application\Model\FormModel;
use application\View\FormView;

class FormController extends Controller
{
    //Insere o formulario recebido no banco de dados
    public function recebeForm()
    {
        $FormModel = new FormModel;
        $bool = $FormModel->Insere($_POST['nome'], $_POST['sobrenome'], $_POST['convidados'], $_POST['status']);
        
        if ($bool == 1){
            header("Location: /?m=registrado&p");
        }else{
            header("Location: /");
        }
    }

    //Função padrão que apresenta o form e lista os convidados
    public function index()
    {
        $FormModel = new FormModel;
        $resultado = $FormModel->ListaConvidados();

        $FormView = new FormView;
        $FormView->Index($resultado);

    }
}