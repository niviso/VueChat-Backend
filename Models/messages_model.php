<?php

    class MessagesModel
    {

        private $message = 'Messages!';

        function __construct()
        {

        }

        public function Attached()
        {
            return $this->message;
        }

    }
