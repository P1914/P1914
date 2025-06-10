<?php
  $Avg;
  $Math=$_POST['math'];
  $Physic=$_POST['physic'];
  $English=$_POST['english'];
  $total= ($Math + $Physic + $English);
  $Avg=$total/3;
  //echo $b;
  if($Avg>=95){
    echo("Superior");
    
  }else if($Avg>=90){
    echo("Excellent");

  }else if($Avg>=85){
    echo("Very Good");

  }else if($Avg>=80){
    echo("Good");

  }else if($Avg>=75){
    echo("Medium Good");

  }else if($Avg>=60){
    echo("Medium ");

  }
  else{
    echo("Very Bad");}
?>