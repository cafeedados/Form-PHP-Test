<?php
namespace application\View;
use application\View\View;

class indexView extends View
{
    public function registrado()
    {
        $this->mostrar('registrado');
    }
}