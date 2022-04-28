<?php
require('dbconnect.php');
require('nav.php');

$student_id = $_GET["student_id"];
$sql = "SELECT * FROM student WHERE student_id = $student_id";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);

$sqlBranch = "SELECT * FROM branch WHERE student_id = $student_id";
$resultBranch =  mysqli_query($connect, $sqlBranch);
$Branch = mysqli_fetch_assoc($resultBranch);

$sqlAgency = "SELECT * FROM agencytrain WHERE id='" . $row['agencytrain_id'] . "';";
$resultAgencytrain =  mysqli_query($connect, $sqlAgency);
$agencytrain = mysqli_fetch_assoc($resultAgencytrain);

?>
<div class="content">
    <div class="container my-3">
        <h2>แบบฟอร์มฝึกประสบการณ์</h2>
        <br>
        <form action="Insert.php" method="POST" class="row g-3">

            <h5>เรียน คณะกรรมการการฝึกประสบการณ์วิชาชีพคอมพิวเตอร์</h5>
            <div class="col-md-2">
                <label for="name">ข้าพเจ้า</label>
                <input type="text" id="name" name="name" class="form-control" value="<?php echo $row["name"]; ?>" readonly>
            </div>
            <div class="col-md-2">
                <label for="lastname">สกุล</label>
                <input type="text" id="lastname" name="lastname" class="form-control" value="<?php echo $row["lastname"]; ?>" readonly>
            </div>
            <div class="col-md-2">
                <label for="idcard">รหัสประจำตัว</label>
                <input type="text" id="idcard" name="idcard" class="form-control" value="<?php echo $row["idcard"]; ?>" readonly>
            </div>
            <div class="col-md-2">
                <label for="phone_number">เบอร์โทร</label>
                <input type="text" id="phone_number" name="phone_number" class="form-control" value="<?php echo $row["phone_number"]; ?>" readonly>
            </div>
            <div class="col-md-2">
                <label for="subdistrict">สาขาวิชา</label>
                <input type="text" id="branch_name" name="branch_name" class="form-control" value="<?php echo $Branch['branch_name'] ?>" readonly>
            </div>
            <div class="col-md-3">
                <label for="subdistrict">มีความประสงค์จะขอฝึกประสบการณ์วิชาที่</label>
                <input type="text" id="agency_name" name="agency_name" class="form-control" value="<?php echo $agencytrain['agency_name'] ?>" readonly>
            </div>

            <h5>ซึ่งหน่วยงานดังกล่าวสังกัดภาค</h5>
            <div class="form-group">
                <label for="region">สาขาวิชา</label>
                <!-- <input type="radio" name="region" value="รัฐบาล">รัฐบาล
                <input type="radio" name="region" value="เอกชน">เอกชน -->
                <input type="radio" name="region" value=" <?php echo $agencytrain['region'] ?>" readonly>
            </div>

            <h5>กิจกรรมหลักของหน่วยงานที่เกี่ยวข้องกับคอมพิวเตอร์</h5>
            <div>
                <div class="col-md-2">
                    <label for="activity">กิจกรรมหลัก</label>
                    <input type="text" id="activity" name="activity" class="form-control" value=" <?php echo $agencytrain['activity'] ?> " readonly>
                </div>
            </div>
            <h5>การติดต่อสถานที่ฝึกงานติดต่อกับ</h5>
            <div class="row g-3">
                <div class="col-md-2">
                    <label for="trainee_name" class="form-label">ชื่อ</label>
                    <input type="text" name="trainee_name" class="form-control" id="trainee_name" value=" <?php echo $agencytrain['contact_name'] ?> " readonly>
                </div>

                <div class="col-md-2">
                    <label for="jobtitle" class="form-label">ตำแหน่ง</label>
                    <input type="text" name="jobtitle" class="form-control" id="jobtitle" value=" <?php echo $agencytrain['contact_position'] ?> " readonly>
                </div>
                <h5>การเสนอหนังสือขอความอนุเคราะห์ต้องเสนอต่อ</h5>
                <div class="col-md-2">
                    <label for="jobtitle" class="form-label"></label>
                    <input type="text" name="jobtitle" class="form-control" id="jobtitle" value=" <?php echo $agencytrain['propose'] ?> " readonly>
                </div>
            </div>
            <div class="col-md-2">
                <label for="housenumber">บ้านเลขที่</label>
                <input type="text" id="housenumber" name="housenumber" class="form-control" value=" <?php echo $agencytrain['housenumber'] ?> " readonly>
            </div>
            <div class="col-md-2">
                <label for="moo">หมู่ที่</label>
                <input type="text" id="moo" name="moo" class="form-control" value=" <?php echo $agencytrain['moo'] ?> " readonly>
            </div>
            <div class="col-md-2">
                <label for="road">ถนน</label>
                <input type="text" id="road" name="road" class="form-control" value="<?php echo $agencytrain['road'] ?>" readonly>
            </div>
            <div class="col-md-2">
                <label for="subdistrict">ตำบล</label>
                <input type="text" id="subdistrict" name="subdistrict" class="form-control" value="<?php echo $agencytrain['subdistrict'] ?>" readonly>
            </div>
            <div class="col-md-2">
                <label for="district">อำเภอ</label>
                <input type="text" id="district" name="district" class="form-control" value="<?php echo $agencytrain['district'] ?>" readonly>
            </div>
            <div class="col-md-2">
                <label for="province">จังหวัด</label>
                <input type="text" id="province" name="province" class="form-control" value="<?php echo $agencytrain['province'] ?>" readonly>
            </div>
            <div class="col-md-2">
                <label for="zipcode">รหัสไปรษณีย์</label>
                <input type="text" id="zipcode" name="zipcode" class="form-control" value="<?php echo $agencytrain['zipcode'] ?>" readonly>
            </div>
            <div class="col-md-2">
                <label for="telephone">เบอร์โทร</label>
                <input type="text" id="telephone" name="telephone" class="form-control" value="<?php echo $agencytrain['telephone'] ?>" readonly>
            </div>
            <div class="col-md-2">
                <label for="fax">โทรสาร</label>
                <input type="text" id="fax" name="fax" class="form-control" value="<?php echo $agencytrain['fax'] ?>" readonly>
            </div>
            <h5>โดยขอฝึกประสบการณ์วิชาชีพฯ พร้อมด้วยนักศึกษา ดังนี้</h5>
            <p>1.</p>
            <div class="col-md-2">
                <label for="name" class="form-label">ชื่อ</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="col-md-2">
                <label for="student_id" class="form-label">รหัส</label>
                <input type="text" name="student_id" class="form-control" id="student_id">
            </div>
            <div class="col-md-2">
                <label for="inputCity" class="form-label">เบอร์โทรศัพท์</label>
                <input type="text" name="phone_number" class="form-control" id="phone_number">
            </div>
            <div class="col-12">
                <a href="Board.php" class="btn btn-primary">กลับ</a>
            </div>
        </form>

    </div>
</div>