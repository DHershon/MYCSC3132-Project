<!DOCTYPE html>
<html>
<head>
	<title>Student List</title>
</head>
<body>

	<?php
//get the db connection file

require_once 'dbconf.php';
require_once 'myfunc.php';

//PrintTable ("student",$connect);
student($connect);

?>



</body>
</html>