<?php

    class MessageView
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
        public function insert($vars){
          $fromId = $vars[0];
          $toId = $vars[1];
          $message = $vars[2];
          $data = $this->controller->addMessage($fromId,$toId,$message);
          echo json_encode($data);

        }


    }
