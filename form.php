<html>
<head>
</head>
<body>

<form action="dashboard.php" method="post">
<h1> LOGIN</h1>
<?php
if ( isset($_GET['error'])){
		echo '<p style="color:red">WEW</p>';
}
?>

<p> USERNAME
	<br/><input type="text" name="username"></p>
	</p>

<p> PASSWORD
<br/><input type="password" name="password"></p>

<p>
	<input type="submit" value="login"/>
	<input type="reset" value="clear"/>

</p> 
</form>
<?php
//require "db.php";
?>

<p> Password: 1234</p>
<?php echo "<Encrypted shal: ".sha1('12345')."</p>";?>
<?php echo "<Encrypted md5: ".md5('12345')."</p>";?>
</body>
</html>