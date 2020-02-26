  <?php  
 //fetch.php  
// include("connect.php"); 
$connect = mysqli_connect("localhost", "root", "BbilkB414148", "thrf14"); 
mysqli_set_charset($connect,"utf8");
 if(isset($_POST["register_id"]))  
 {  
     //  $query = "SELECT * FROM register WHERE id = '".$_POST["register_id"]."'";  
      $query = "SELECT register.id,register.regis_title_name,register.regis_name,register.regis_lastname,register.regis_mail,register.regis_phone,
      publications.paper_name,publications.paper_status
      FROM register 
      LEFT JOIN  publications
      ON  publications.register_id = register.id 
      WHERE id = '".$_POST["register_id"]."' ";  
      

      $result = mysqli_query($connect, $query);  
      mysqli_set_charset($connect,"utf8");
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
 ?>