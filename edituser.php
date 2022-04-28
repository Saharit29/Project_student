<?php 
require('dbconnect.php');
require('nav.php');
$user_id=$_GET["user_id"];
$sql ="SELECT * FROM user WHERE user_id = $user_id";
$result=mysqli_query($connect,$sql);

$row=mysqli_fetch_assoc($result);
?>
<div class="content">
    <div class="container my-3">
        <h3 class="text-center ">แก้ไข</h3>
        <form action="insertData.php" method="POST">
            <div class="form-group my-3">
                <label for="username">ชื่อผู้ใช้</label>
                <input type="text" id="username" name="username" placeholder="username..." class="form-control" value="<?php echo $row["username"];?>">
            </div>
            <div class="form-group my-3">
                <label for="password">รหัสผ่าน</label>
                <input type="text" id="password" name="password" placeholder="password..."class="form-control" value="<?php echo $row["password"];?>">
            </div>
            <div class="form-group">
                <label for="status">สาขาวิชา</label>
                <input type="radio" name="status" value="student">นักศึกษา
                <input type="radio" name="status" value="teacher">คณะกรรมการ 
            </div>
            <input type="submit" value="บันทึก" class="btn btn-success">
            <input type="reset" value="ล้างข้อมูล" class="btn btn-danger">
            <a href="admin.php" class="btn btn-primary">กลับ</a>
        </form>
    </div>
</div>