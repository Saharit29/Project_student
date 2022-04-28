<?php
require '../dbconnect.php';
$id = $_POST['id'];

$sql = "UPDATE `student` SET `is_confirm` = '1' WHERE `student`.`student_id` = $id";
$result = mysqli_query($connect, $sql);

echo("test".$result)
?>