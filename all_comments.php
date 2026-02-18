<!DOCTYPE html>
<html>
<head>
    <title>PHP Comments Demo</title>
</head>
<body>

<h1>PHP Comments Example</h1>

<?php
// This is a single-line comment using //

# This is another single-line comment using #

/*
This is a multi-line comment.
You can write multiple lines of text here.
PHP will ignore all of this.
*/

echo "Hello, World!<br>"; // This will display text on the page

$name = "Chandrakant";
echo "My name is " . $name . "<br>"; # Displaying a variable

/*
You can also temporarily disable code using comments:
echo "This line will not run.";
*/

$sum = 5 + 10;
echo "Sum of 5 and 10 is: " . $sum;
?>

</body>
</html>
