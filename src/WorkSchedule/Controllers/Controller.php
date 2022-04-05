<?php

namespace WorkSchedule\Controllers;

class Controller {

    protected $viewpath = ROOT . "/src/WorkSchedule/Views/";
    protected $model;

    public function __construct()
    {
        
    }

    public function render($path, $variables = [])
    {
        ob_start();

        extract($variables);

        require $this->viewpath . "$path.php";

        $content = ob_get_clean();

        require $this->viewpath . "layout.php";

    }
}