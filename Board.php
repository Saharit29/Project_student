<?php
require('dbconnect.php');
require('navtea.php');
$sql = "select * from student";
$result = mysqli_query($connect, $sql);
?>

<script>
  function confirm(id) {
    $.ajax({
      method: "post",
      url: "./services/confirm.php",
      data: {
        id: id
      }
    }).done(resp => {
      window.location.reload();

    })
  }

  function unconfirm(id) {
    $.ajax({
      method: "post",
      url: "./services/unconfirm.php",
      data: {
        id: id
      }
    }).done(resp => {
      window.location.reload();
    })
  }
</script>

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
            <a href="editform.php?student_id=<?php echo $row["student_id"] ?>" class="btn btn-primary">ดู</a>
          </td>
          <td>
            <form action="insertData.php" method="POST">
              <div>
                <?php if ($row['is_confirm'] == 0) : ?>
                  <button type="button" class="btn btn-success" onclick="confirm(<?php echo $row['student_id'] ?>)">อนุมัติ</button>

                <?php endif; ?>

                <?php if ($row['is_confirm'] == 1) : ?>
                  <button type="button" class="btn btn-danger" onclick="unconfirm(<?php echo $row['student_id'] ?>)">ไม่อนุมัติ</button>
                <?php endif; ?>

              </div>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>