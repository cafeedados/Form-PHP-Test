<?php

namespace application\Controller;
use application\Controller\Controller;
use application\View\IndexView;

Class PageController extends Controller
{

	//Função que redireciona o usuario para paginas especificas via get
	public function view($p)
	{
		if (empty($p))
		{
			$p = new FormController;
			$p->index();
		}else
		{
			
			$i = new IndexView();
			$i->mostrar($p);
		}
	}	
}
