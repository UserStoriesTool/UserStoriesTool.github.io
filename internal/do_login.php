Proccessing login.....
<br>

<?php
	$u = $_REQUEST['username'];
	$p = $_REQUEST['pass'];
	
	if($u == 'admin' && $p=='admin') {
		print "Welcome Admin";
		$_SESSION['username'] = 'admin';   
		header('Location: https://users.it.teithe.gr/~it134006/lab4/index.php?p=start');
	}elseif($u=='user' && $p=='123') {
		print "Welcome User";
		$_SESSION['username'] = 'user';
		header('Location: https://users.it.teithe.gr/~it134006/lab4/index.php?p=start');
	} else {
		print "Unknown user";
		$_SESSION['username'] = '?';
		header('Location: https://users.it.teithe.gr/~it134006/lab4/index.php?p=start');
	}


?>