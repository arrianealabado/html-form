<?php
$First_name = $_POST ["Fullname"];
$Last_name = $_POST["LastName"];
$email = $_POST ["email"];
$password = $_POST ["password"];
$date = $_POST ["date"];
$yearLvl = $_POST ["year-level"];



echo "checkbox" .json_encode($_POST["checkbox"]);
echo "First Name: ". $First_name . "<br>";
echo "Last Name: ". $Last_name . "<br>";
echo "email: ". $email . "<br>";
echo "password: ". $password . "<br>";
echo "date: ". $date . "<br>";
echo "yearlvl:" .$yearLvl. "<br>";

?>