<?php 
// include("connect.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->CharSet = "utf-8";  
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;     
    // $mail->Username   = 'il.websystem@gmail.com';                                 // Enable SMTP authentication
    // $mail->Password   = 'BbilkB414148';                               // SMTP password
                  // SMTP username
    $mail->Username   = 'ihumanities14@gmail.com';                     // SMTP username
    $mail->Password   = 'shmahidol2020';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('ihumanities14@gmail.com', 'The 14th Thai Humanities Research Forum');
    $mail->addAddress($email);
    // $mail->addAddress('pungpoo23@gmail.com');     // Add a recipient

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/img/test.png');    // Optional name

    // Content
    $mail->isHTML(true);       
    // $mail->AddEmbeddedImage('img/header-bg.jpg', 'sotl6');                           // Set email format to HTML
    $mail->Subject = 'ยืนยันการลงทะเบียน เวทีวิจัยมนุษยศาสตร์ไทยครั้งที่ 14';
    $mail->Body    = '<h2>เรียนคุณ'.$fname." ".$lname.'</h2>';
    // $mail->Body    = '<h2>เรียนคุณ</h2>';
    $mail->Body    .= '<p><font size ="3px">ขอบคุณสำหรับการลงทะเบียน <br>เวทีวิจัยมนุษยศาสตร์ไทยครั้งที่ 14:The 14th Thai Humanities Research Forum</font></p>';
    // $mail->Body    .= '<img src="cid:sotl6" style="width: 60%;">';
    $mail->Body    .= '<p><font size ="3px">รายละเอียดการลงทะเบียนของท่าน<br>
    <table border ="1"cellpadding="2">
        <tr>
          <th>วัน-เวลา</th>
          <th>หัวข้อ</th>
          <th>ประเภทการลงทะเบียน</th>
        </tr>
        <tr>
          <td>วันอังคารที่ 8 กันยายน 2563 <br>เวลา 08.30 - 12.00 น.</td>
          <td>
            <ul>
                <li>พิธีเปิด</li>
                <li>ปาฐกถานำ หัวข้อ Humanities, Science and Technology : An Inevitable Crossroad</li>
                <li>เสวนากลุ่ม หัวข้อ “มนุษย์ การแพทย์และสุขภาพ: ประเด็นท้าทาย”</li>
            </ul>
          </td>
          <td align="center">'.$session_day8_1_type.'</td>
        </tr>
        <tr>
            <td>วันอังคารที่ 8 กันยายน 2563 <br>เวลา 13.00 - 17.00 น.</td>
            <td>
                '.$session_day8_room.'
            </td>
            <td align="center"> '.$session_day8_type.'</td>
          </tr><tr>
            <td>วันอังคารที่ 9 กันยายน 2563 <br>เวลา 09.00 - 12.00 น.</td>
            <td>
                <ul>
                <li>ปาฐกถานำ หัวข้อ “การศึกษายุคดิจิทัล”</li>
                <li>เสวนาหัวข้อ “เทคโนโลยี ศิลปะและวัฒนธรรม ก้าวหน้าหรือถอยหลัง”</li>
             </ul>
            </td>
            <td align="center">'.$session_day9_1_type.'</td>
          </tr><tr>
            <td>วันอังคารที่ 9 กันยายน 2563 <br>เวลา 13.00 - 15.00 น.</td>
            <td>
            '.$session_day9_room.'
            </td>
            <td align="center">'.$session_day9_type.'</td>
          </tr><tr>
            <td>วันอังคารที่ 9 กันยายน 2563 <br>เวลา 15.00 - 17.00 น.</td>
            <td>
            <ul>
                <li>เทคโนโลยีกับการส่งเสริมโอกาสและศัลยภาพคนพิการ</li>
                <li>โรค-ศิลป์: ชีวิต เทคโนโลยี วัฒนธรรม และสุขภาพ</li>
                <li>ปิดการประชุม</li>
            </ul>
            </td>
            <td align="center">'.$session_day9_3_type.'</td>
          </tr>
      </table>
    </font></p>';   
    $mail->Body    .= '<p><font size ="3px" color="red"><b>สำหรับท่านที่ลงทะเบียนมาร่วมชมการถ่ายทอดสดที่คณะสังคมศาสตร์และมนุษยศาสตร์ มหาวิทยาลัยมหิดล ศาลายา<br>
    ให้ท่านมาตามกำหนดการตามเวลาที่ได้ลงทะเบียนไว้ โดยท่านสามารถดูกำหนดการได้ที่ <a href="https://il.mahidol.ac.th/thrf14/program2.php">CLICK</a>
    </b></font></p>'; 
    // $mail->Body    .= '<p><font size ="3px">ท่านสามารถดูกำหนดการได้ที่ <a href="https://il.mahidol.ac.th/thrf14/program2.php">CLICK</a></font></p>';   
    $mail->Body    .= '<p><font size ="3px"><b>รายละเอียดของห้องสัมมนาออนไลน์ (ZOOM)</b></font></p>';   
    $mail->Body    .= '<p><font size ="3px"><b>วันอังคารที่ 8 กันยายน 2563 เวลา 08.30 - 12.00 น. </b>
    <ul>
        <li>พิธีเปิด</li>
        <li>ปาฐกถานำ หัวข้อ Humanities, Science and Technology : An Inevitable Crossroad</li>
        <li>เสวนากลุ่ม หัวข้อ “มนุษย์ การแพทย์และสุขภาพ: ประเด็นท้าทาย”</li>
    </ul>
    Link : https://zoom.us/j/94693044849?pwd=UVlSM0tYQVZlclppU0dWNUdLVU5FUT09 <br>
    Meeting ID : 946 9304 4849 <br>
    Passcode : 811429
    </font></p>';   
    $mail->Body    .= '<p><font size ="3px"><b>วันอังคารที่ 8 กันยายน 2563 เวลา 13.00 - 17.00 น. </b><br>
    ห้องที่ 1 เกมออนไลน์ สื่อสังคมและแอปพลิเคชั่น (ห้อง 412)<br>
    Link :  https://zoom.us/j/98228804352?pwd=Z29CQ1hVUWFEUjE1alkyb2RMSVIwZz09<br>
    Meeting ID : 982 2880 4352<br>
    Passcode : 424468
    </font></p>';   
    $mail->Body    .= '<p><font size ="3px"><b>วันอังคารที่ 8 กันยายน 2563 เวลา 13.00 - 17.00 น. </b><br>
    ห้องที่ 2 อัตลักษณ์ สังคมและวัฒนธรรม (ห้อง 413)<br>
    Link :  https://zoom.us/j/96343171176?pwd=eGozMlhTZWk4ZzAyc2MrQm8vbU9QQT09<br>
    Meeting ID : 963 4317 1176<br>
    Passcode : 127230
    </font></p>';  
    $mail->Body    .= '<p><font size ="3px"><b>วันอังคารที่ 8 กันยายน 2563 เวลา 13.00 - 17.00 น.</b><br>
    ห้องที่ 3 บทบาทรัฐและพลเมือง (ห้อง 414)<br>
    Link :  https://zoom.us/j/99807533929?pwd=RnFsaWxRVC9wOTdEbmoyYWJMOUxUdz09<br>
    Meeting ID: 998 0753 3929<br>
    Passcode: 897505
    </font></p>';  
    $mail->Body    .= '<p><font size ="3px"><b>วันอังคารที่ 8 กันยายน 2563 เวลา 13.00 - 17.00 น.</b><br>
    ห้องที่ 4 Learning Challenges from Experiences in Southeast Asia and Japan (ห้อง 415)<br>
    Link :  https://zoom.us/j/94360576849?pwd=U0x0UllheC9RQ09TZ0EvYVkyRkk0dz09<br>
    Meeting ID : 943 6057 6849<br>
    Passcode : 792496
    </font><hr></p>';  
    $mail->Body    .= '<p><font size ="3px"><b>วันพุธที่ 9 กันยายน 2563 เวลา 09.00 - 12.00 น.</b>
    <ul>
        <li>ปาฐกถานำ หัวข้อ “การศึกษายุคดิจิทัล”</li>
        <li>เสวนาหัวข้อ “เทคโนโลยี ศิลปะและวัฒนธรรม ก้าวหน้าหรือถอยหลัง”</li>
    </ul>
    Link : https://zoom.us/j/96588838947?pwd=SEl2dHZaaXcydnAxbm9nRHNZbmFIUT09<br>
    Meeting ID : 965 8883 8947<br>
    Passcode : 029058
    </font></p>';   
    $mail->Body    .= '<p><font size ="3px"><b>วันพุธที่ 9 กันยายน 2563 เวลา 13.00 - 15.00 น.</b><br>
    ห้องที่ 1 จริยธรรม ปัญญาประดิษฐ์ การดูแลชีวิต (ห้อง 412)<br>
    Link :  https://zoom.us/j/95039468247?pwd=YWEzZUM1QWFCMzA1RThYYjNlTG9OUT09 <br>
    Meeting ID : 950 3946 8247  <br>
    Passcode : 498723
    </font></p>'; 
    $mail->Body    .= '<p><font size ="3px"><b>วันพุธที่ 9 กันยายน 2563 เวลา 13.00 - 15.00 น.</b><br>
    ห้องที่ 2 โควิด สื่อสังคม อุปลักษณ์การเยียวยา (ห้อง 413)<br>
    Link :  https://zoom.us/j/99807644120?pwd=NGZNZUlFOHU4N3piaDFzamRxS2kxQT09<br>
    Meeting ID : 998 0764 4120 <br>
    Passcode : 994758
    </font></p>'; 
    $mail->Body    .= '<p><font size ="3px"><b>วันพุธที่ 9 กันยายน 2563 เวลา 13.00 - 15.00 น.</b><br>
    ห้องที่ 3 เพศสภาพ แพทยสภาพ ประวัติศาสตร์ไทย (ห้อง 414)<br>
    Link :  https://zoom.us/j/92554948069?pwd=MlBEc3RKRXpPWjIwYWpOU1dBWDlIQT09 <br>
    Meeting ID : 925 5494 8069  <br>
    Passcode : 738050
    </font></p>'; 
    $mail->Body    .= '<p><font size ="3px"><b>วันพุธที่ 9 กันยายน 2563 เวลา 13.00 - 15.00 น.</b><br>
    ห้องที่ 4 พลเมือง การเรียนรู้ การบริหารการศึกษา (ห้อง 415)<br>
    Link :  https://zoom.us/j/97353698433?pwd=NE1ycEtRM0ljdzZzeFMxTFltcTByQT09 <br>
    Meeting ID : 973 5369 8433 <br>
    Passcode : 803692
    </font></p>';   
    $mail->Body    .= '<p><font size ="3px"><b>วันพุธที่ 9 กันยายน 2563 เวลา 15.00 - 17.00 น.</b>
    <ul>
        <li>เทคโนโลยีกับการส่งเสริมโอกาสและศัลยภาพคนพิการ</li>
        <li>โรค-ศิลป์: ชีวิต เทคโนโลยี วัฒนธรรม และสุขภาพ</li>
        <li>ปิดการประชุม</li>
    </ul>
    Link :  https://zoom.us/j/98527107504?pwd=a3lVV1JFQlVtYnhMbXJxMWRHVTQ5UT09 <br>
    Meeting ID : 985 2710 7504 <br>
    Passcode : 281792
    </font><hr></p>';
    $mail->Body    .= '<p><font size ="3px">ประเภทอาหาร :'.$food_type.'</font><hr></p>';

    // $mail->Body    .= '<p><font size ="3px"><b>รายละเอียดของห้องสัมมนาออนไลน์ (ZOOM)</b></font></p>';   
    
    $mail->Body    .= '<p><font size ="3px"><b>ขอแสดงความนับถือ</b></font></p>';
    $mail->Body    .= '<p><font size ="3px"><b>คณะผู้จัดงาน<b></font></p>';
    $mail->Body    .= '<p><font size ="2px">https://il.mahidol.ac.th/thrf14/<br>ihumanities14@gmail.com<br>โทรศัพท์ : 0-2800-2840  ต่อ 1648 , 1645</font> </p>';
    //$mail->send();
    if($mail->send())
    {
        // $sql_sendmail="UPDATE `user` SET `user_sendmail_status` = 1 where `USER_ID` = '$id' ";
        // $result_sendmail = mysqli_query($con,$sql_sendmail);
        // echo 'การลงทะเบียนของท่านเรียบร้อยแล้ว กรูณาตรวจสอบ Inbox ใน Email';
        // header( "Location: index.php" );
         echo "<script>
                    alert('การลงทะเบียนของท่านเรียบร้อยแล้ว กรูณาตรวจสอบ Email ของท่าน');
                    window.location='register_list_update.php';
				</script>";
    }
    // echo 'การลงทะเบียนของท่านเรียบร้อยแล้ว กรูณาตรวจสอบ Inbox ใน Email';
    // header( "Location: index.php" );
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>

