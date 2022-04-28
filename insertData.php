<?php
    require('dbconnect.php');
    
    $username=$_POST["username"];
    $password=$_POST["password"];
    $status=$_POST["status"];
    

    $sql = "INSERT INTO user(username,password,status) VALUES('$username','$password','$status')";

    $result=mysqli_query($connect,$sql);

    if($result){
        echo "บันทึกข้อมูลเรียบร้อย";
        header('Refresh:0; url= ./insertForm.php');
    }else{
        echo "ผิดพลาด";
        
    }
?>