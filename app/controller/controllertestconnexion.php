<?php
	function isconnected(){
        if(isset($_COOKIE("info")) AND isset($_COOKIE("droit"))){
            return true;
        }else{
            return false;
        }
    }
?>