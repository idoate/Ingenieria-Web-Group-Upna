<?php

    /**
    * The home page view
    */
    class IndexView
    {

        private $model;
        private $controller;

        private $page;

        function __construct($controller, $model)
        {
            $this->controller = $controller;

            $this->model = $model;
        }

        public function index()
        {
            return "¡Hola mundo!";
        }
        
    }

?>