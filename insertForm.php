<?php 
require('dbconnect.php');
require('nav.php');
?>
<div class="content">
    <div class="container my-3">
        <h3 class="text-center ">เพิ่งผู้ใช้</h3>
        <form action="insertData.php" method="POST">
            <div class="form-group my-3">
                <label for="username">ชื่อผู้ใช้</label>
                <input type="text" id="username" name="username" placeholder="username..." class="form-control">
            </div>
            <div class="form-group my-3">
                <label for="password">รหัสผ่าน</label>
                <input type="password" id="password" name="password" placeholder="password..."class="form-control">
            </div>
            <div class="form-group">
                <label for="status">สาขาวิชา</label>
                <input type="radio" name="status" value="student">นักศึกษา
                <input type="radio" name="status" value="teacher">คณะกรรมการ 
            </div>
            <input type="submit" value="บันทึก" class="btn btn-success">
            <input type="reset" value="ล้างข้อมูล" class="btn btn-danger">
        </form>
    </div>
</div>