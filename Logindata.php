<?php 
session_start();
    if (isset($_POST['username'])) {

        include('dbconnect.php');

        $username = $_POST['username'];
        $password = $_POST['password'];
    

        $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";

        $result = mysqli_query($connect, $query);

        if (mysqli_num_rows($result) == 1) {

            $row = mysqli_fetch_array($result);

            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['status'] = $row['status'];
            
            if ($_SESSION['status'] == 'student') {
                header("Location: Profile.php");
            }
            if ($_SESSION['status'] == 'teacher') {
                header("Location: Profiletaa.php");
            }
            if ($_SESSION['status'] == 'admin') {
                header("Location: admin.php");
            }
        } else {
            echo "<script>apert('ชื่อผู้ใช้ หรือ รหัสผ่านไม่ถูกต้อง');</script>";
        }
    } else {
        header("Location: Login.php");
    }
?>