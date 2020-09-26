<?php
// Grab User submitted information
$email = $_POST["usersemail"];
$pass = $_POST["userspass"];
// Connect to the database
$con = mysqli_connect('localhost', 'root', '');
// Make sure we connected successfully
if(!$con)
{
    die('Connection Failed'.mysqli_error());
}
// Select the database to use
mysqli_select_db($con,"emp");
$query = "Select * from users WHERE users_email='$email' and users_pass='$pass'";
$result = mysqli_query($con,$query) or die(mysqli_error($con));
$count = mysqli_num_rows($result);
if ($count<=0)
{
echo"Sorry, your credentials are not valid, Please try again.";
}
else {
echo"You are a validated user.";
}

?>

 