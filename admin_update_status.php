<?php
    session_start();
    // session_destroy();
    if(!isset($_SESSION['id'])){
        header('location:admin_login.php');
    }
    // echo $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>THRF14</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet'
        type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/jquery.dataTables.css" />
    <!-- Custom styles for this template -->
    <link href="css/agency.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
        .btnBack {
            display: flex;
            /* align-self: right; */
            margin-right: 0 px;
        }
    </style>
</head>

<body id="page-top">
    <a id="button"></a>
    <?php include "navbar.html"; ?>
    <?php include "connect.php"; ?>
    <?php 
        $id = $_GET['id'];
        // $stmt = $conn->query("SELECT * FROM register where id = '".$_GET['id']."' ");
        $stmt = $conn->query("SELECT register.id,register.regis_title_name,register.regis_name,register.regis_lastname,
        publications.paper_id,publications.paper_name,publications.paper_status
        FROM register 
        LEFT JOIN  publications
        ON  publications.register_id = register.id 
        where register.id = '".$_GET['id']."' ");
        $row = $stmt->fetch();

        $register_id = $row['id'];
        $paper_id = $row['paper_id'];

        $paper_name = explode( '.', $row['paper_name'], -1 );
        $paper_name = $paper_name[0];
        // $file = $_FILES['file_array']['name']; 
        // $name = explode( '.', $row['paper_name'], -1 );
        // print_r (explode( '.', $paper_name, -1 ));
        // $paper_info = explode(".",$paper_name); 
        // $paper_type = end($paper_info);
       
        // $ee = date("Y-m-d");
        // echo $ee;
        if (isset($_POST['save'])) {
            // $payment_date = date("Y-m-d");
            // $payment = $_POST['payment_status'];
            // echo "save";
            $sql = "UPDATE publications SET paper_status = :paper_status WHERE register_id = :id";
            $query = $conn->prepare($sql);
            $query->bindParam(":id",$id);
            $query->bindParam(":paper_status",$_POST["paper_status"]);
            if ($query->execute()){
                echo "<script>
                alert('Saved');
                window.location='admin_update_status.php?id=$id;';
            </script>";
                // header('Refresh:0; url=admin_publication_info.php');
              } else {
                echo "<script> alert('Save Error'); </script>";
                header('Refresh:0; url=admin_publication_info.php');
              }
        }

        // upload process
        if(isset($_POST['upload'])) {
            // echo $_FILES["paper_upload"]["name"];
            if((empty($_FILES["paper_upload"]["name"]))) {
                echo"
                <script>
                alert('กรุณาเลือกไฟล์ที่ต้องการ Upload ');
                window.history.back();
                </script>";
            }else if((!empty($_FILES["paper_upload"]["name"]))) {
                $tmp_name=$_FILES['paper_upload']['tmp_name'];
                $ext = pathinfo($_FILES['paper_upload']['name'])['extension'];
                if($ext=="docx" or $ext=="doc") { 
                    $file_name = $paper_name."_revision.".$ext;
                    $moved = move_uploaded_file($tmp_name,"publications/".$file_name);
                    // UPDATE publications SET paper_name=:name, paper_subtheme=:surname, paper_upload_date=:sex WHERE id=:id
                    if($moved) {
                        $upload_date = date("Y-m-d");
                        $stmt_publications = $conn->prepare("INSERT INTO revision (paper_id,register_id,revision_file_name,revision_upload_date)
                        VALUES (?,?,?,?)");
                        $stmt_publications->bindParam(1,$paper_id);
                        $stmt_publications->bindParam(2,$register_id);
                        $stmt_publications->bindParam(3,$file_name);
                        $stmt_publications->bindParam(4,$upload_date); 
                        $upload_status = $stmt_publications->execute();
                        // include "sendmail_regis.php";
                        // if ($upload_status) {
                        //     echo 'Status :'.$upload_status;
                        //     echo $_POST["inputId"]."-".$file_name."-".$_POST["subtheme"]."-".$regis_date;
                        //     echo 'It worked!';
                        //  } else {
                        //     echo 'It failed!';
                        //  }
        
                        echo "<script>
                        alert('การ Upload เสร็จสมบูรณ์');
                        </script>";         
                        header('Refresh:0; url=admin_update_status.php?id='.$register_id);
                      } else {
                        echo "<script>
                        alert('การ Upload ผิดพลาด กรุณา Upload อีกครั้งหรือติดต่อเจ้าหน้าที่');
                        window.history.back();
                        </script>";
                      }
        
                }else{
                    echo "<script>
                    alert('การ Upload ผิดพลาด กรุณาตรวจสอบประเภทไฟล์ของท่าน');
                    window.history.back();
                    </script>";
                }
        
            }      
        }
    ?>
    <section class="bg-light" id="regis" style="margin-bottom: 200px;">
        <div class="container">
            <div class="row mt-4">
                <div class="col-md-10 mx-auto">
                    <div class="card  mb-4">
                        <h5 class="card-header text-center text-uppercase bg-info">Update สถานะบทความ</h5>
                        <div class="card-body font-weight-bold">
                            <form action="" method="post">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="fname_eng">ชื่อ-สกุล</label>
                                        <input type="text" class="form-control" id="fname" name="fname"
                                            value="<?php echo $row['regis_name']." ".$row['regis_lastname'];?>"
                                            disabled>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="fname_eng">สถานะบทความ</label>
                                        <select class="form-control" id="paper_status" name="paper_status">
                                            <option value="<?php echo $row['paper_status']; ?>">
                                                <?php echo $row['paper_status']; ?></option>
                                            <option value="uploaded">uploaded</option>
                                            <option value="reviewing">reviewing</option>
                                            <option value="accept">accept</option>
                                            <option value="accept with minor revisions">accept with minor revisions</option>
                                            <option value="accept with major revisions">accept with major revisions</option>
                                            <option value="reject">reject</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="fname_eng" class="hide-font">.</label>
                                        <input type="submit" name="save" class="btn btn-primary mb-2 btn-block"
                                            value="Save">
                                    </div>
                                    <!-- <div id="revisions" class="form-group col-md-12">
                                        <a href="#">123</a>
                                    </div> -->
                                    <div class="form-group col-md-6">
                                        <!-- <label for="fname_eng">สถานะบทความ</label> -->
                                        <button type="button" class="btn btn-info" data-toggle="modal"
                                            data-target="#uploadform">
                                            Upload Publication Revisions
                                        </button>
                                    </div>
                                    <div class="form-group col-md-6 text-right">
                                        <a href="admin_publication_info.php" class="btn btn-danger"> Back</a>
                                    </div>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal upload -->
    <div class="modal fade" id="uploadform" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog  modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Upload Publication Revisions</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="" enctype="multipart/form-data">
                        <input type="file" name="paper_upload" id="paper_upload" />
                        <p class="card-text">**File size up to 5MB. Type .doc .docx </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" name="upload" class="btn btn-primary mb-2 btn-block" value="upload">
                    <!-- <button type="button" id="upload_revisions" class="btn btn-primary">Upload</button> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php 
        include "footer.html";
    ?>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/agency.min.js"></script>
    <script src="js/top_page.js"></script>
    <script src="js/check_regis.js"></script>
    <script>
        $(document).ready(function () {
            $('#upload_revisions').click(function () {
                confirm("Press a button!");
            });
            // var callback_id = $("#callback_id").val();
            // $.ajax({
            // url: "check_revisions_upload.php",
            // type: "POST",
            // data: {
            //     callback_id: callback_id
            // },
            // dataType: 'json',
            // success: function (data) {
            //     alert(data);
            //     console.log("Save ok");
            //     console.log(data);
            // }
            // });

        });
    </script>
</body>

</html>