<?php 
    require('dbconnect.php');
    require('navtea.php');
    $board_id=$_GET["board_id"];
    $sql ="SELECT * FROM board WHERE board_id = $board_id";
    $result=mysqli_query($connect,$sql);

    $row=mysqli_fetch_assoc($result);


?>
<div class="content">
    <h3>คุณ คือ คณะกรรมการ</h3>
    <div style="width: 600px; padding: 3px; font-size: small;" align="left">
                <table cellpadding="0" cellspacing="0" class="style16">
                    <tbody><tr>
                        <td class="style17" valign="top" align="center">
                            <div style="border-right: dotted 1px #b7b7b7">
                                <img id="ctl00_ContentPlaceHolder1_Image1" title="รูปภาพนักศึกษา" src="https://yt3.ggpht.com/ytc/AKedOLSWI-QAgxLRwkmcfqxV7SGzywVortNAqtbuZTGy_w=s900-c-k-c0x00ffffff-no-rj" alt="รูปภาพคณะกรรมการ" style="width:136px;border-width:0px;">
                        
                            </div>
                        </td>
                        <td valign="top">
                            <div style="padding-left: 5px;">
                                ชื่อ-นามสกุล :
                                <span><?php echo $row['board_name'] ?></span>
                                <br>
                                รหัสนักศึกษา :
                                <span><?php echo $row['board_id'] ?></span>
                                <br>
                                E-mail :
                                <span></span>
                                <br>
                                คณะ :
                                <span></span>
                                <br>
                                สาขาวิชา :
                                <span></span>
                                <br>
                            </div>
                            <br>
                            <div style="padding-left: 5px;">
                            </div>
                        </td>
                    </tr>
                </tbody></table>
            </div>
    </div>
</div>
    