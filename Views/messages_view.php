<?php

    class MessagesView
    {

        private $model;

        private $controller;


        function __construct($controller, $model)
        {
            $this->controller = $controller;

            $this->model = $model;
        }

        public function index()
        {
            return $this->controller->Attached();
        }
        public function thread($vars){
          //from id
          //to id
          $fromId = $vars[0];
          $toId = $vars[1];

          //EXAMPLE JSON OBJ
          $thread = "
          {
            fromId: ".$fromId.",
            toId: ".$toId.",
            message: 'test',
            timestamp: '2018-01-01'
          }
          ";


          echo ($thread);
        }


    }
