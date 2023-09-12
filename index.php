<?php 
$insert = false;
if(isset($_POST['name'])){
    // Set Connection variables
$server ="localhost";
$username = "root";
$password = "";

// Create a Database connection

$con = mysqli_connect($server, $username, $password);

// Check for connection Success
if(!$con){
    die("Connection to this database failed due to " .mysqli_connect_error());
}
// echo "Success Connecting to the db";


// Collect Post Variables
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];
$sql = " INSERT INTO `trip`.`trip` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES
('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
//  echo $sql;

// Execute the Query
if($con->query($sql) == True)
//  echo "Successfully Inserted";

// Flag for Successfull Insertion
$insert = true;
else {
    // echo "ERROR: $sql <br> $con->error";
}
// Close the Database Connection
$con-> close();
 }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Sriracha&display=swap" rel="stylesheet">
</head>
<body>
    <img class="bg" src="bg.jpg" alt="IIT Kharagpur">
    <div class="container">
        <h1>Welcome to IIT Kharagpur US Trip Form </h1>
        <p>Enter Your Details and Submit this form to Confirm Your Participation in the Trip</p>
        <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for Submitting your form. We are happy to see you joining for the US Trip</p>";
        }
        ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter Your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your Phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any Other Information here"></textarea>
            <button class="btn">Submit</button>
        </form>
    </div>
    <script src="index.js">
    </script>
   
</body>
</html>