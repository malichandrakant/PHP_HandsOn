<?php
include "config.php";

if(isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    die("ID not found!");
}

// When Update button is clicked
if(isset($_POST['update'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $sql = "UPDATE students 
            SET name='$name', email='$email', course='$course' 
            WHERE id=$id";

    mysqli_query($conn, $sql);

    echo "Data Updated Successfully!";

    header("refresh:2; url=read.php");
}

// Fetch old data
$result = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>

<h2>Update Student</h2>

<form method="POST">
    Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>
    Email: <input type="text" name="email" value="<?php echo $row['email']; ?>"><br><br>
    Course: <input type="text" name="course" value="<?php echo $row['course']; ?>"><br><br>
    <button type="submit" name="update">Update</button>
</form>