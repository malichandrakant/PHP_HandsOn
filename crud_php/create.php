<?php
include "config.php";

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $sql = "INSERT INTO students (name, email, course) 
            VALUES ('$name', '$email', '$course')";

    mysqli_query($conn, $sql);
}
?>

<form method="POST">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="text" name="email"><br><br>
    Course: <input type="text" name="course"><br><br>
    <button type="submit" name="submit">Save</button>
</form>