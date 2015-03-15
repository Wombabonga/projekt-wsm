<?php 

    function getProductCode(){
        
        $length = 8;
        $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        
        $code = substr(str_shuffle(str_repeat($chars, $length)), 0, $length);
        
        return $code;
    }
    

?>