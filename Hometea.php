<?php 
require('dbconnect.php');
require('navtea.php');
$sql = "select * from student";
$result=mysqli_query($connect,$sql);
?>

<div class="content">
  <h2 class="text-center">ประการผลการพิจารณา</h2>
<table class="table">
  <thead class="table-dark">
    <tr>
        <th>รหัสนักศึกษา</th>
        <th>ชื่อ</th>
        <th>สกุล</th>
        <th>การอนุมัติ</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            
            <td><?php echo $row['student_id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['lastname'] ?></td>
            <td><?php echo $row['consider']?></td>
        </tr>
    <?php } ?>
  </tbody>
</table>
</div>