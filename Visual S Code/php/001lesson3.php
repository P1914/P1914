<?php
  $day = $_POST["day"];
  switch ($day) {
    case 1:
    case 21:
    case 31:
      echo "Today day is " . $day . "st";
      break;

    case 2:
    case 22:
      echo "Today day is " . $day . "nd";
      break;

    case 3:
    case 23:
      echo "Today day is " . $day . "rd";
      break;

    default:
      echo "Today day is " . $day . "th";
      break;
  }
?>