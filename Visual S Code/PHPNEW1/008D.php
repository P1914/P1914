<?php
    function Average_Sub($k, $g, $p, $q) {
        $Avg= ($k+$g+$p+$q) / 4;
        return $Avg;
    }
    //--------
    $M=23;
    $L=13;
    $F=24;
    $G=23;
    $T=Average_Sub($F, $M,$L,$G);
    if($T>=10){
        echo ("Pass");
    }else{
        echo("Fail");
    }
