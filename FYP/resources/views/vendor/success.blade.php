<?php
	session_start();
	if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] == false)
	{
		header("Location: Login.blade.php");
	}
?>
<h2>SUCCESSFUL</h2>