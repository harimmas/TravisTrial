<?php

namespace Sample;

class Calc {
    function add($a, $b) {
        return $a + $b;
    }

    function sub($a, $b) {
        return $a - $b;
    }

    function times($a, $b) {
        return $a * $b;
    }

    function devidedBy($a, $b) {
        if($b==0){
            return "0 error";
        }else{
            return $a / $b;
        }
        
    }

}
