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
          $fromId = $vars[0];
          $toId = $vars[1];

          $data = $this->controller->getThread($fromId,$toId);
          echo json_encode($data,JSON_FORCE_OBJECT);

        }


    }
