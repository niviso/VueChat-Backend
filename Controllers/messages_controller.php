<?php

include 'dao.php';

$d = new dao();

    class MessagesController
    {
        private $model;

        function __construct($model)
        {
            $this->model = $model;
        }

        public function Attached()
        {
            return $this->model->Attached();
        }


    }

?>
