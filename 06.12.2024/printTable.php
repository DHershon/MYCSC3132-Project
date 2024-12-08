<?php
require_once 'dbconf.php';
require_once 'myfunc.php';

// Check if 'id' is passed in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    Studentdetails($id, $connect);
} else {
    echo "Student ID is missing!";
}
?>