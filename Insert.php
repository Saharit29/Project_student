<?php
    require('dbconnect.php');
    
    $idcard=$_POST["idcard"];
    $name=$_POST["name"];
    $lastname=$_POST["lastname"];
    $phone_number=$_POST["phone_number"];

    $sql = "INSERT INTO student(`idcard`, `name`, `lastname`,`phone_number`) VALUES ('$idcard','$name','$lastname','$phone_number')";

    $result=mysqli_query($connect,$sql);

    if($result){
        echo "บันทึกข้อมูลเรียบร้อย";
        header('Refresh:0; url= ./test.php');
    }else{
        echo "ผิดพลาด";
        
    }

    $agency_name=$_POST["agency_name"];
    $region=$_POST["region"];
    $telephone=$_POST["telephone"];
    $fax=$_POST["fax"];
    $housenumber=$_POST["housenumber"];
    $moo=$_POST["moo"];
    $road=$_POST["road"];
    $subdistrict=$_POST["subdistrict"];
    $district=$_POST["district"];
    $province=$_POST["province"];
    $zipcode=$_POST["zipcode"];
    $day=$_POST["day"];
    $activity=$_POST["activity"];
    


    $sql = "INSERT INTO agencytrain(`agency_name`, `region`, `telephone`, `fax`, `housenumber`, `moo`, `road`, `subdistrict`, `district`, `province`, `zipcode`,`day`,`activity`) 
    VALUES ('$agency_name','$region','$telephone','$fax','$housenumber','$moo','$road','$subdistrict','$district','$province','$zipcode','$day','$activity')";

    $result=mysqli_query($connect,$sql);

    if($result){
        echo "บันทึกข้อมูลเรียบร้อย";
    }else{
        echo "ผิดพลาด";
        
    }

?>