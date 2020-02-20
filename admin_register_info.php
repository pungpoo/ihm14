<?php
    session_start();
    // session_destroy();
    if(!isset($_SESSION['id'])){
        header('location:admin_login.php');
    }
    echo $_SESSION['id'];
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
</head>

<body id="page-top">
    <a id="button"></a>
    <?php include "navbar.html"; ?>
    <?php include "connect.php"; ?>
    <?php 
        if(isset($_POST['checkDay'])){
            $stmt = $conn->prepare("SELECT register.id,register.regis_title_name,register.regis_name,register.regis_lastname,register.regis_mail,register.regis_phone,
            publications.paper_name,publications.paper_status
            FROM register 
            LEFT JOIN  publications
            ON  publications.register_id = register.id 
            where register.regis_participate = '".$_POST['checkDay']."'
            order by register.id asc");
            // $stmt->execute();
        }
        else if ($_POST['checkDay'] == 4){
            $stmt = $conn->prepare("SELECT register.id,register.regis_title_name,register.regis_name,register.regis_lastname,register.regis_mail,register.regis_phone,
            publications.paper_name,publications.paper_status
            FROM register 
            LEFT JOIN  publications
            ON  publications.register_id = register.id 
            order by register.id asc");
        }
        else {
            $stmt = $conn->prepare("SELECT register.id,register.regis_title_name,register.regis_name,register.regis_lastname,register.regis_mail,register.regis_phone,
            publications.paper_name,publications.paper_status
            FROM register 
            LEFT JOIN  publications
            ON  publications.register_id = register.id 
            order by register.id asc");
        }
    ?>
    <section class="bg-light" id="regis" style="margin-bottom: 200px;">
        <div class="container">
            <div class="row mt-4">
                <div class="col-md-12 mx-auto">
                    <div class="card  mb-4">
                        <h5 class="card-header text-center text-uppercase bg-info">THRF14 - รายชื่อผู้ลงทะเบียน</h5>
                        <div class="mx-auto">
                            <div class="mt-4 ml-4">
                                <form action="" method="post" name="workday">
                                    <label for="">เลือกตามวันที่เข้าร่วม</label>
                                    <select class="custom-select" name="checkDay" onChange="javascript: submit()"
                                        style="width:70%">
                                        <option value=""><?php echo $_POST['checkDay'];?></option>
                                        <option value="">เลือก</option>
                                        <option value="4">ผู้รวมงานทั้งหมด</option>
                                        <option value="1">งานมหกรรมวิชาการ วันที่ 7,10,11 กันยายน 2563 (3 วัน)</option>
                                        <option value="2">งานเวทีมนุษศาสตร์ วันที่ 8-9 กันยายน 2563 (2 วัน)</option>
                                        <option value="3">เข้ารวมทั้ง 2 งาน วันที่ 7-11 กันยายน 2563 (5 วัน)</option>
                                        
                                    </select>
                                    <input type="hidden" name="check" value="True" />
                                </form>
                            </div>
                        </div>
                        <div class="card-body font-weight-bold">
                            <div class="col-md-12">
                                <table id="table_register" class="table table-responsive display responsive no-wrap"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <!-- <th class="text-center">ลำดับ</th> -->
                                            <th class="text-center">รหัสลงทะเบียน</th>
                                            <th class="text-center">ชื่อ-สกุล</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">โทร.</th>
                                            <th class="text-center">บทความ</th>
                                            <th class="text-center">สถานะบทความ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            
                                            $i=1;
                                            // $stmt = $conn->prepare("SELECT register.id,register.regis_title_name,register.regis_name,register.regis_lastname,register.regis_mail,register.regis_phone,
                                            // publications.paper_name,publications.paper_status
                                            // FROM register 
                                            // LEFT JOIN  publications
                                            // ON  publications.register_id = register.id 
                                            // order by register.id asc");
                                            $stmt->execute();
                                            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                                            //print_r($row);
                                            $title = explode(" ",$row['regis_title_name']);
                                            $title = $title[0];
                                            $sent_id = $row['id'] ;
                                        ?>
                                        <tr>
                                            <!-- <td class="text-center"><?php echo $i;?> -->
                                            </td>
                                            <td class="text-center"><?php 
                                                $register_number = sprintf('%04d',$row['id']);
                                                echo $register_number;?>
                                            </td>
                                            <td><?php echo  $title.$row['regis_name']." ".$row['regis_lastname'];?></td>
                                            <td><?php echo $row['regis_mail'];?></td>
                                            <td><?php echo $row['regis_phone'];?></td>
                                            <td class="text-center"> 
                                                <?php if (!empty($row['paper_name'])) { ?>
                                                    <a href="publications/<?php echo $row['paper_name'];?>" class="badge badge-info">Download</a>
                                                <?php }else { ?>
                                                    ไม่มีการส่งผลงาน
                                                <?php }?>
                                            </td>
                                            <td class="text-center">
                                                <p class="badge badge-warning"><?php echo $row['paper_status'];?></p>
                                            </td>
                                        </tr>
                                        <?php $i++; } ?>
                                    </tbody>
                                </table>
                                <a href="logout.php" class="btn btn-danger col-md-12 mt-2">Logout</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>

    </section>
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
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function () {
            $('#table_register').DataTable({
                "order": [
                    [0, "asc"]
                ],
                "columnDefs": [{
                        "width": "5%",
                        "targets": 0
                    },
                    // { "width": "40%", "targets": 1 },
                    // { "width": "15%", "targets": 4 }
                ]
            });
        });
    </script>
</body>

</html>