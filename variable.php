<!DOCTYPE html>
<html>
<head>
    <title>PHP Variables Demo</title>
</head>
<body>

<h1>PHP Variables Example</h1>

<?php
// String variable
$name = "Chandu";
echo "Name: " . $name . "<br>";

// Integer variable
$age = 30;
echo "Age: " . $age . "<br>";

// Float variable
$height = 6.1;
echo "Height: " . $height . " feet<br>";

// Boolean variable
$is_student = false;
echo "Student? " . ($is_student ? "Yes" : "No") . "<br>";

// Email (fake)
$email = "chandu@example.com";
echo "Email: " . $email . "<br>";

// Address (fake)
$city = "Pune";
$country = "India";
echo "Location: " . $city . ", " . $country . "<br>";

// Fake arithmetic
$num1 = 15;
$num2 = 20;
$sum = $num1 + $num2;
echo "Sum of $num1 and $num2 is: $sum<br>";

// Using new line for console (CLI)
echo "This is a new line using PHP_EOL." . PHP_EOL;
?>

</body>
</html>
