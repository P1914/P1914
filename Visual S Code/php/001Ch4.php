<?php
  $B=array(
    array(-1,11,22),
    array(62,36,14),
    array(92,105,-1),
  );
  $len=count($B);
  //---------------------------------
  //echo($len);
  //1.output: 22, 62, 36, 14, 92,(even number)
  //តាង​ i ជាជួរដេក និង j ជាជួរឈរ
  
  $i=0;
  echo("<table border=1><tr>");
  while($i<$len){
    for($j=0;$j<$len;$j=$j+1){
      if($B[$i][$j] % 2==0){
        echo("<td>".$B[$i][$j]."</td>");
      }
    }
    $i=$i+1;
  }
  echo("</tr></table>");
  
  
  
?>