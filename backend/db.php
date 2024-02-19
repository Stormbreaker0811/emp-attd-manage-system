<?php
$emp_id = $_POST['emp_id'];
$emp_pass = $_POST['emp_pass'];
$db_user = "root";
$db_host = "localhost";
$db_pass = "nimish81";
$db_name = "employees";
// Create connection
$conn = new mysqli($db_host,$db_user,$db_pass,$db_name);
?>