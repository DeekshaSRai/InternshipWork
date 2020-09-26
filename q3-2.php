<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["city"] = "Mumbai";
$_SESSION["pet"] = "dog";
echo "Session variables are set. <br>";
echo "I stay in " . $_SESSION["city"] . ".<br>";
echo "My pet is a  " . $_SESSION[""] ;
?>

</body>
</html>