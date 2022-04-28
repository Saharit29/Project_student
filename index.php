<?php
require('dbconnect.php');
$query = "select * from student";

$result = mysqli_query($connect, $query);
if (mysqli_num_rows($result) == 1) {

    $row = mysqli_fetch_array($result);

    $_SESSION['student_id'] = $row['student_id'];
    $_SESSION['name'] = $row['name'];
    $_SESSION['lastname'] = $row['lastname'];
}


header("Location: Login.php");

// session_start();
// if (!isset($_SESSION['user_id'])) {
//     header("Location: Login.php");
// }
?>
<!-- <!DOCTYPE html>
<html>
<div class="content">
    <h1 class="hello">hello world</h1>
</div>

</body>
</html> -->