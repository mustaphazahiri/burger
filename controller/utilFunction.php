<?php

function autoIsset($array){
    if(!empty($array)){
        foreach($array as $value){
            if(!isset($value)){
                return false;
            }
        }
    }else{
        return false;
    }

    return true;
}
