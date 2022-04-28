<?php 
require('dbconnect.php');
require('nav.php');
?>
<div class="content">
    <h3 class="text-center ">แบบฟอร์มฝึกประสบการณ์</h3>
    <div class="container-xxl">
        <form action="Insert.php" method="POST">
            <div class="form-group my-3">
                <label for="idcard">รหัสประจำตัว</label>
                <input type="text" id="idcard" name="idcard"  class="form-control">
            </div>
            <div class="form-group my-3">
                <label for="name">ข้าพเจ้า</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>
            
            <div class="form-group my-3">
                <label for="lastname">สกุล</label>
                <input type="text" id="lastname" name="lastname"  class="form-control">
            </div>
            <div class="form-group my-3">
                <label for="agency_name">ชื่อหน่วยงาน</label>
                <input type="text" id="agency_name" name="agency_name" class="form-control">
            </div>

            <div class="form-group my-3">
                <label for="activity">กิจกรรมหลัก</label>
                <input type="text" id="activity" name="activity" class="form-control">
            </div>
            <div class="form-group my-3">
                <label for="region">สังกัดภาค</label>
                <input type="text" id="region" name="region" class="form-control">
            </div>
            <div class="form-group my-3">
                <label for="telephone">เบอร์โทร</label>
                <input type="text" id="telephone" name="telephone" class="form-control">
            </div>
            <div class="form-group my-3">
                <label for="fax">โทรสาร</label>
                <input type="text" id="fax" name="fax" class="form-control">
            </div>
            <div class="form-group my-3">
                <label for="housenumber">บ้านเลขที่</label>
                <input type="text" id="housenumber" name="housenumber" class="form-control">
            </div>
            <div class="form-group my-3">
                <label for="moo">หมู่ที่</label>
                <input type="text" id="moo" name="moo" class="form-control">
            </div>
            <div class="form-group my-3">
                <label for="road">ถนน</label>
                <input type="text" id="road" name="road" class="form-control">
            </div>
            <div class="form-group my-3">
                <label for="subdistrict">ตำบล</label>
                <input type="text" id="subdistrict" name="subdistrict" class="form-control">
            </div>
            <div class="form-group my-3">
                <label for="district">อำเภอ</label>
                <input type="text" id="district" name="district" class="form-control">
            </div>
            <div class="form-group my-3">
                <label for="province">จังหวัด</label>
                <input type="text" id="province" name="province" class="form-control">
            </div>
            <div class="form-group my-3">
                <label for="zipcode">รหัสไปรษณีย์</label>
                <input type="text" id="zipcode" name="zipcode" class="form-control">
            </div>
            <input type="submit" value="บันทึก" class="btn btn-success">
            <input type="reset" value="ล้างข้อมูล" class="btn btn-danger">
        </form>
    </div>
</div>