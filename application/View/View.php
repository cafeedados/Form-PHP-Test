<?php

namespace application\View;

abstract class View 
{
    public function mostrar($name = 'index')
    {
        $file2 = file_get_contents("application/View/$name.php");
        echo($file2);
    }

}