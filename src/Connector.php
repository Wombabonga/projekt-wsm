<?php

    class DBconnector{
        
        public $x = "45";
        
        function DBconnector(){
            echo "Konstruktor";
        }
        
        function test(){
            echo "Hello world";
            echo '<br> ' . $this->x;
        }
        
        function setX($x){
            $this->x = $x;
        }
        
        function getX(){
            return $this->x;
        }
        
    }



?>