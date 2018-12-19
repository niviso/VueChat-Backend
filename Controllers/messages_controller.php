<?php

include 'dao.php';


    class MessagesController
    {
        private $model;
        private $dataBase;

        function __construct($model)
        {
            $this->model = $model;
        }

        public function Attached($vars)
        {
           $this->dataBase = new dao();
        }

        public function getThread($from,$to){
          $dataBase = new dao();
          $sel = $dataBase->select("message" ,"fromId=".$from." AND toId=".$to,"" ) or die('error from here');
          return $result = mysqli_fetch_object($sel);
        }


    }

?>
