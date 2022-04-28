<?php 
require('dbconnect.php');
require('nav.php');
$sql = "select * from user";
$result=mysqli_query($connect,$sql);
?>
<div class="content">
<h2 class="text-center">ข้อมูลผู้ใช้</h2>
<a href="insertForm.php>" class="btn btn-success">เพิ่งผู้ใช้</a>
<table class="table">
  <thead class="table-dark">
    <tr>
        <th>รหัสผู้ใช้</th>
        <th>ชื่อ</th>
        <th>สกุล</th>
        <th>แก้ไข</th>
        <th>ลบ</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            
            <td><?php echo $row['user_id'] ?></td>
            <td><?php echo $row['username'] ?></td>
            <td><?php echo $row['password'] ?></td>
            <td>
            <a href="edituser.php?user_id=<?php echo $row["user_id"]?>" class="btn btn-primary">แก้ไข</a>
            </td>
            <td>
            <a href="" class="btn btn-danger">ลบ</a>
            </td>
        </tr>
    <?php } ?>
  </tbody>
</table>
</div>