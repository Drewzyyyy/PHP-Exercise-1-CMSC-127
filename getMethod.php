<?php

$fname = $lname = $address = $occupation = "";
$age = $telnum = 0;

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$age = $_POST["age"];
$address = $_POST["address"];
$telnum = $_POST["telnum"];
$occupation = $_POST["occupation"];

echo "First Name: ".$fname."<br>";
echo "Last Name: ".$lname."<br>";
echo "Age: ".$age."<br>";
echo "Address: ".$address."<br>";
echo "Contact Number: ".$telnum."<br>";
echo "Occupation: ".$occupation."<br>";
?>