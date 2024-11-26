<?php
//switch case

$grade = "C";

switch ($grade) {
  case "A";
    echo "Excellent";
    break;
  case "B";
    echo "Very Good";
    break;
  case "C";
    echo "Good";
    break;
  case "D";
    echo "Try doing better";
    break;
  case "F";
    echo "You are Failed";
    break;
  default:
    echo "$grade is not a valid grade";
}
