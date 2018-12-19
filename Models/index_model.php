<?php

    /**
    * The home page model
    */
    class IndexModel
    {

        private $message = 'VueChat API 1.0<br>Add documentation in the future';

        function __construct()
        {

        }

        public function Attached()
        {
            return $this->message;
        }

    }
