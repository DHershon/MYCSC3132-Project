<!DOCTYPE html>
<html>
<head>
    <title>printtable</title>
</head>
<body>
   
<?php

require_once 'dbconf.php'; 
require_once 'myfunc.php';

//PrintTable ("student",$connect);
//employee($connect);
 
 $id = $_GET['id'];

StudentDetails($id,$connect);

?>

</body>
</html>
