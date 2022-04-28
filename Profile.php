<?php
require("./services/session.php");
require('dbconnect.php');
require('nav.php');

$sql = "select * from student where user_id = '" . $_SESSION['user_id'] . "';";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($result);

$sql2 = "select * from branch where student_id = '" . $row["student_id"] . "';";
$result2 = mysqli_query($connect, $sql2);
$branch = mysqli_fetch_array($result2);
?>

<div class="content">
    <h3>คุณคือนักศึกษา</h3>
    <div style="width: 600px; padding: 3px; font-size: small;" align="left">
        <table cellpadding="0" cellspacing="0" class="style16">
            <tbody>

                <tr>
                    <td class="style17" valign="top" align="center">
                        <div style="border-right: dotted 1px #b7b7b7">
                            <img id="ctl00_ContentPlaceHolder1_Image1" title="รูปภาพนักศึกษา" src="http://aris.snru.ac.th/image_std/63102105132.JPG" alt="รูปภาพนักศึกษา" style="width:136px;border-width:0px;">

                        </div>
                    </td>
                    <td valign="top">
                        <div style="padding-left: 5px;">
                            ชื่อ-นามสกุล :
                            <span><?php echo $row['name'] ?> <?php echo $row['lastname'] ?></span>
                            <br>
                            รหัสนักศึกษา :
                            <span><?php echo $row['student_id'] ?></span>

                            <br>
                            คณะ :
                            <span><?php echo $branch['party'] ?></span>
                            <br>
                            สาขาวิชา :
                            <span><?php echo $branch['branch_name'] ?></span>
                            <br>
                        </div>
                        <br>
                        <div style="padding-left: 5px;">
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>