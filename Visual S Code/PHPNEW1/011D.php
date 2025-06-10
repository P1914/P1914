<?php
  function sum_increase($n) {
      if($n==0){
          return 1;
        }
        return ((2*$n)+1)+sum_increase($n-1);
  }
  
    echo(sum_increase(2));
?>