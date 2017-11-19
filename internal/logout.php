<p>
	<h2>Bye bye!</h2>
	<br>Redirecting shortly...
<?php
	$_SESSION['username'] = '';
	$_SESSION['pass'] = '';
	if($_SESSION['username'] == ''){
		header( "refresh:1;url=index.php?p=start" );
	}
?>
</p>