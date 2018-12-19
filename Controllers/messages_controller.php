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
          $select = "message";
          $and = "fromId IN (" . $from . "," . $to . ") AND toId IN (" . $to . "," . $from . ")";
          $order = "ORDER BY timestamp ASC";
          //          $thread = $dataBase->insert($select,"fromId,toId,message","1,0,'DU E COOL'","" );

          $thread = $dataBase->select($select,$and,$order ) or die('Error on select');
          $data = array();

          while ($row = $thread->fetch_assoc()) {
            $data[] = $row;
          }
          return $data;
        }



    }

?>
