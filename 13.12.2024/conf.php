<?php
define('SERVERNAME','127.0.0.1:3306');
define('USERNAME','root');
define('PASSWORD','mariadb');
define('DNAME','icae02');


$connection = mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DNAME);
?>