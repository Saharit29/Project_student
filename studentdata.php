<?php
    require('dbconnect.php');
    $father_name=$_POST["father_name"];
    $father_lname=$_POST["father_lname"];
    $fjob=$_POST["fjob"];
    $sql = "INSERT INTO `father` (`father_name`, `father_lname`, `fjob`) VALUES ('$father_name','$father_lname','$fjob')";
    
    $result=mysqli_query($connect,$sql);
    if($result){
        echo "บันทึกข้อมูลเรียบร้อย";
        header('Refresh:0; url= ./insertForm.php');
    }else{
        echo "ผิดพลาด";
        
    }



    $idcard=$_POST["idcard"];
    $name=$_POST["name"];
    $lastname=$_POST["lastname"];
    $birthday=$_POST["birthday"];
    $phone_number=$_POST["phone_number"];
    $religion=$_POST["religion"];
    $housenumber=$_POST["housenumber_stu"];
    $moo=$_POST["moo_stu"];
    $road=$_POST["road_stu"];
    $subdistrict=$_POST["subdistrict_stu"];
    $district=$_POST["district_stu"];
    $province=$_POST["province_stu"];
    $zipcode=$_POST["zipcode_stu"];

    $sql = "INSERT INTO `student`(`idcard`, `name`, `lastname`, `birthday`, `phone_number`,`religion`, `housenumber_stu`, `moo_stu`, `road_stu`, `subdistrict_stu`, `district_stu`, `province_stu`, `zipcode_stu`) VALUES ('$idcard','$name','$lastname','$birthday','$phone_number','$religion','$housenumber','$moo','$road','$subdistrict','$district','$province','$zipcode')";

    $result=mysqli_query($connect,$sql);

    if($result){
        echo "บันทึกข้อมูลเรียบร้อย";
        header('Refresh:0; url= ./insertForm.php');
    }else{
        echo "ผิดพลาด";
        
    }
?>