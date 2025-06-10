<?php
  $k=array(2,-8,9,17,24,4);
  $len=count($k);
  //1.Elements can divide with 2;
  echo("1.Elements can divide with 2 <br>");
  for($i=0;$i<$len;$i=$i+1){
    if($k[$i] % 2 ==0){
      echo($k[$i].", ");
    }
  }
  echo("<br>2.odd number <br>");
  //odd number
  for($i=0;$i<$len;$i=$i+1){
    if($k[$i] % 2 !=0){
      echo($k[$i].", ");
    }
  }
  
  //តាង sum ជាកន្លែងផ្ទុក ឬហោប៉ៅ
  echo("<br>3.Count of odd number <br>");
  $sum=0;
  for($i=0;$i<$len;$i=$i+1){
    if($k[$i] % 2 !=0){
      $sum=$sum+1;
    }
  }
  echo("ចំនួនធាតុដែលជាចំនួនសេស គឺ ".$sum)
  
?>