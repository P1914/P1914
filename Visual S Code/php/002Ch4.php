<?php
$k =array (
    array(-3, 9, 12, 21),
    array(31, 71, 83, 14),
    array(92, 11, 54, 17),
    array(21, 72, -20, -11),
);
$len=count($k);
echo("find odd number<br>"),
$i=0;
echo("<table border=1><tr>");
while($i<$len){
  for($j=0;$j<$len;$j=$j+1){
    if($k[$i][$j] % 2!==0){
      echo("<td>".$k[$i][$j]."</td>");
    }
  }
  $i=$i+1;
}
echo("</tr></table>");
echo"<br>";
echo("find element divide with 3<br>"),
$i=0;
echo("<table border=1><tr>");
while($i<$len){
  for($j=0;$j<$len;$j=$j+1){
    if($k[$i][$j] % 3==0){
      echo("<td>".$k[$i][$j]."</td>");
    }
  }
  $i=$i+1;
}
echo("</tr></table>");
echo"<br>";
echo("find element <br>");
$elementsToFind = array(-3, 71, 54, -11);
echo("<table border=1><tr>");
for ($i = 0; $i < $len; $i++) {
    for ($j = 0; $j < $len; $j++) {
        if (in_array($k[$i][$j], $elementsToFind)) {
            echo("<td>".$k[$i][$j]."</td>");
        }
    }
}
echo("</tr></table>");
echo "<br>";

?>