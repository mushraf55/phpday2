<?php
//basic if-else condition

$age = 20;
if ($age >= 18) {
  echo "You can get a driving license <br>";
} else {
  echo "You cannot get a driving license <br>";
}

//else-if

$grade = "C";

if ($grade == "A") {
  echo "Excellent";
} elseif ($grade == "B") {
  echo "Very Good";
} elseif ($grade == "C") {
  echo "Good";
} elseif ($grade == "D") {
  echo "Try doing better";
} elseif ($grade == "F") {
  echo "You are Failed";
} else {
  echo "$grade is not a grade";
}
