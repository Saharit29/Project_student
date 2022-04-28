<?php 
require('dbconnect.php');
require('nav.php');
?>
<div class="content">
    <div class="container my-3">
        <h2>แบบฟอร์มประวัติ</h2>
        <br>
        <form class="row g-3">
            <h3>1.ข้อมูลส่วนตัว</h3>            
            <div class="col-md-2">
                <label for="name">ชื่อ</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>
            <div class="col-md-2">
                <label for="lastname">สกุล</label>
                <input type="text" id="lastname" name="lastname"  class="form-control">
            </div>
            <div class="col-md-2">
                <label for="student_id">รหัสนักศึกษา</label>
                <input type="text" id="student_id" name="student_id"  class="form-control">
            </div>
            <div class="col-md-2">
                <label for="religion">ศาสนา</label>
                <input type="text" id="religion" name="religion"  class="form-control">
            </div>
                <div class="row g-3">
                    <div class="col-md-2">
                        <label for="birthday">วัน เดือน ปี เกิด</label>
                        <input type="date"  class="form-control" id="birthday" name="birthday">
                    </div>
                </div>
            <div class="col-md-2">
                <label for="father_name" class="form-label">ชื่อบิดา</label>
                <input type="text" name="father_name" class="form-control" id="">
            </div>
            <div class="col-md-2">
                <label for="father_lname" class="form-label">สกุล</label>
                <input input type="text" name="father_lname" class="form-control" id="">
            </div>
            <div class="col-md-2">
                <label for="fjob" class="form-label">อาชีพ</label>
                <input input type="text" name="fjob" class="form-control" id="">
            </div>
            <div class="row g-3">
                <div class="col-md-2">
                    <label for="mother_name" class="form-label">ชื่อมารดา</label>
                    <input input type="text" name="mother_name" class="form-control" id="">
                </div>
                <div class="col-md-2">
                    <label for="mother_lname" class="form-label">สกุล</label>
                    <input input type="text" name="mother_lname" class="form-control" id="">
                </div>
                <div class="col-md-2">
                    <label for="mjob" class="form-label">อาชีพ</label>
                    <input input type="text" name="mjob" class="form-control" id="">
                </div>
            </div>
            <h3>3.ที่อยู่</h3>
            <div class="col-md-2">
                <label for="housenumber" class="form-label">บ้านเลขที่</label>
                <input input type="text" name="housenumber" class="form-control" id="">
            </div>
            <div class="col-md-2">
                <label for="group" class="form-label">หมู่ที่</label>
                <input input type="text" name="group" class="form-control" id="">
            </div>
            <div class="col-md-2">
                <label for="road" class="form-label">ถนน</label>
                <input input type="text" name="road" class="form-control" id="">
            </div>
            <div class="col-md-2">
                <label for="subdistrict" class="form-label">ตำบล</label>
                <input input type="text" name="subdistrict" class="form-control" id="">
            </div>
            <div class="col-md-2">
                <label for="district" class="form-label">อำเภอ</label>
                <input input type="text" name="district" class="form-control" id="">
            </div>
            <div class="col-md-2">
                <label for="province" class="form-label">จังหวัด</label>
                <input input type="text" name="province" class="form-control" id="">
            </div>
            <div class="col-md-2">
                <label for="zipcode" class="form-label">รหัสไปรษณีย์</label>
                <input input type="text" name="zipcode" class="form-control" id="">
            </div>
            <h3>4.ข้อมูลการศึกษา</h3>
            <div class="col-md-2">
                <label for="educationlevel" class="form-label">ระดับการศึกษา</label>
                <input input type="text" name="educationlevel" class="form-control" id="">
            </div>
            <div class="col-md-2">
                <label for="schoolname" class="form-label">ชื่อสถานศึกษา</label>
                <input input type="text" name="schoolname" class="form-control" id="">
            </div>
            <div class="col-md-2">
                <label for="gap" class="form-label">เกรดเฉลี่ย</label>
                <input input type="text" name="gap" class="form-control" id="">
            </div>
            <div class="col-md-4">
                <label for="currentgap" class="form-label">ปัจจุบันศึกษาชั้นปีที่ 4 เกรดเฉลี่ยปัจจุบัน </label>
                <input input type="text" name="currentgap" class="form-control" id="">
            </div>
            <p>หัวข้องโครงงานวิทยาการคอมพิวเตอร์/โครงงานเทคโนโลยีสารสนเทศ</p>
            <div class="col-md-4">
                <label for="subject" class="form-label">เรื่อง</label>
                <input input type="text" name="subject" class="form-control" id="">
            </div>
            <h3>5.ข้อมูลการทำงาน ประสบการทำงาน</h3>
            <div class="col-md-4">                
                <input input type="text" name="workexp" class="form-control" id="">
            </div>
            <div class="col-12">
                <input type="submit" value="บันทึกข้อมูล" class="btn btn-success">
                <input type="submit" value="ล้างข้อมูล" class="btn btn-danger">
            </div>
        </form>

    </div>
</div>
