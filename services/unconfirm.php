<?php
require '../dbconnect.php';
$id = $_POST['id'];

$sql = "UPDATE `student` SET `is_confirm` = '0', `is_send` = '0' WHERE `student`.`student_id` = $id";
$result = mysqli_query($connect, $sql);

echo("test".$result)
?>