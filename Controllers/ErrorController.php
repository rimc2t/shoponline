<?php

class ErrorController extends BaseController
{
    public function index()
    {
        $viewPath = [
            'Views/frontend/other/404.php',
        ];
        $this->view($viewPath);
    }
}

?>