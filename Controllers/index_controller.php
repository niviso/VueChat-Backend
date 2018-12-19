<?php

    /**
    * The home page controller
    */
    class IndexController
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
