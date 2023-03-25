<?php
// start a session
session_start();
?>
<!DOCTYPE html>
<html>
<body> 

<?php
	//Set session variables
	$_SESSION["myuniversity"] = "BMCC";
	$_SESSION["status"] = "Senior";
	echo "Session variables are set.";
?>

</body>
</html>