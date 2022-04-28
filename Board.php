<?php 
require('dbconnect.php');
require('navtea.php');
$sql = "select * from student";
$result=mysqli_query($connect,$sql);
?>

<div class="content">
<table class="table">
  <thead class="table-dark">
    <tr>
        <th>รหัสนักศึกษา</th>
        <th>ชื่อ</th>
        <th>สกุล</th>
        <th>ดู</th>
        <th>ผลพิจารณา</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            
            <td><?php echo $row['student_id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['lastname'] ?></td>
            <td>
              <a href="editform.php?student_id=<?php echo $row["student_id"]?>" class="btn btn-primary">ดู</a>
            </td>
            <td> 
              <form action="insertData.php" method="POST">
              <div>
                <input type="radio" name="" value="อนุมัติ">อนุมัติ
                <input type="radio" name="" value="ไม่อนุมัติ">ไม่อนุมัติ
            </div>
          </td>
        </tr>
    <?php } ?>
  </tbody>
</table>
</div>