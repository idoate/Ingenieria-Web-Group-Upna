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
            $navBar =file_get_contents("./Views/navBar.html");
            return ($navBar);
        }
        
    }

?>