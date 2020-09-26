<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
$name = $pass = $choose = $color "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $pass = test_input($_POST["pass"]);
  $choose = test_input($_POST["choose"]);
  $color1 = test_input($_POST["color1"]);
  $color2 = test_input($_POST["color2"]);
  $color3 = test_input($_POST["color3"]);
  $color4 = test_input($_POST["color4"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  Password: <input type="password" name="pass">
  <br><br>
  Choose one:
  <input type="radio" name="choose" value="Usa">USA
  <input type="radio" name="choose" value="Canada">Canada
  <input type="radio" name="choose" value="Other">Other
  <br><br>
  Choose your colors:<br>
  <input type="checkbox" id="color1" name="color1" value="Green">
  <label for="color1">Green</label><br>
  <input type="checkbox" id="color2" name="color2" value="Yellow">
  <label for="color2">Yellow</label><br>
  <input type="checkbox" id="color3" name="color3" value="Red">
  <label for="color3">Red</label><br>
  <input type="checkbox" id="color4" name="color4" value="Gray">
  <label for="color3">Gray</label><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $pass;
echo "<br>";
echo $choose;
echo "<br>";
echo $color1;
echo "<br>";
echo $color2;
echo "<br>";
echo $color3;
echo "<br>";
echo $color4;
?>

</body>
</html>