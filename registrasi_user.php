<!DOCTYPE html>

<html>

<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<?php
// define variables and set to empty values
$usernameErr = $emailErr = $nameErr = $passwordErr = "";
$username = $email = $name = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if (empty($_POST["username"]))
		{$usernameErr = "* Username is required";}
	else
		{$username = test_input($_POST["username"]);}
   
	if (empty($_POST["email"]))
		{$emailErr = "* Email is required";}
	else
		{$email = test_input($_POST["email"]);}
     
	if (empty($_POST["email"]))
		{$emailErr = "* Email is required";}
	else
		{$email = test_input($_POST["email"]);}
	 
	if (empty($_POST["password"]))
		{$passwordErr = "* Password is required";}
	else
		{$password = test_input($_POST["password"]);}
	 
	if (empty($_POST["name"]))
		{$nameErr = "* Name is required";}
	else
		{$name = test_input($_POST["name"]);}
}

function test_input($data)
{
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
}
?>

<div id="container">

<div id="header">
<h1><b>Ruko_Serba_Ada</b></h1>
</div>

<div id="content"> 
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<br><br>
Username: <input class="text_input" type="text" name="username" value="<?php echo $username;?>">
<span class="error"><?php echo $usernameErr; ?> </span>
<br><br>
Password: <input class="text_input" type="password" name="pass" >
<span class="error"><?php echo $passwordErr; ?> </span>
<br><br>
Re-enter Password: <input class="text_input" type="password" name="pass_check">
<br><br>
Full Name: <input class="text_input" type="text" name="name" value="<?php echo $name;?>">
<span class="error"><?php echo $nameErr; ?> </span>
<br><br>
E-mail: <input class="text_input" type="text" name="email" value="<?php echo $email;?>">
<span class="error"><?php echo $emailErr; ?> </span>
<br><br>
<br>
<input class="submit_button" type="submit">
</form>

<p style="position:absolute;left:500px;">
<?php
echo "<h2>Your Input:</h2>";
echo "name = ". $username;
echo "<br>";
echo "pass = ". $password;
echo "<br>";
echo "fullname = ".$name;
echo "<br>";
echo "email = " .$email;
?>
</p>
<br><br>
</div>

<div id="footer"><p><b>Copyright © Krisna Fathurahman, Mochammad Dikra Prasetya, Bima Laksmana</b></p></div>

</div>
 
</body>
</html>
