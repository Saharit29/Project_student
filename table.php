<?php 
require('dbconnect.php');
require('nav.php');
$sql = "select * from student";

$result=mysqli_query($connect,$sql);
?>
<?php if (mysqli_num_rows($result) > 0) : ?>
<?php while ($row = mysqli_fetch_assoc($result)) : ?>


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"> <?php echo $row['idpj'] ?>  </th>
      <td><?php echo $row['namepj'] ?></td>
      <td><?php echo $row['username'] ?></td>
      <td>@<?php echo $row['date'] ?></td>
    </tr>

  </tbody>
</table>


<?php endwhile; ?>
<?php endif; ?>