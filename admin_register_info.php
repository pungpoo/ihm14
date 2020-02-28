<?php
    session_start();
    // session_destroy();
    if(!isset($_SESSION['id'])){
        header('location:admin_login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>THRF14-ADMIN</title>
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
    <?php 
        include "navbar.html";
        include "connect.php"; 
    ?>
    <?php 
        if(isset($_POST['checkDay'])){
            if ($_POST['checkDay'] == 0){
                $stmt = $conn->prepare("SELECT register.id,register.regis_title_name,register.regis_name,register.regis_lastname,register.regis_mail,register.regis_phone,
                publications.paper_name,publications.paper_status
                FROM register 
                LEFT JOIN  publications
                ON  publications.register_id = register.id 
                order by register.id asc");
            }else{
            $stmt = $conn->prepare("SELECT register.id,register.regis_title_name,register.regis_name,register.regis_lastname,register.regis_mail,register.regis_phone,
            publications.paper_name,publications.paper_status
            FROM register 
            LEFT JOIN  publications
            ON  publications.register_id = register.id 
            where register.regis_participate = '".$_POST['checkDay']."'
            order by register.id asc");
            // $stmt->execute();
            }
        }
        // else if ($_POST['checkDay'] == 0){
        else if (isset($_POST['checkDay'])){
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

        //Card 2
        if(isset($_POST['checkDay'])){
            if ($_POST['checkDay'] == 0){
                $stmt = $conn->prepare("SELECT register.id,register.regis_title_name,register.regis_name,register.regis_lastname,register.regis_mail,register.regis_phone,
                publications.paper_name,publications.paper_status
                FROM register 
                LEFT JOIN  publications
                ON  publications.register_id = register.id 
                order by register.id asc");
            }else{
            $stmt = $conn->prepare("SELECT register.id,register.regis_title_name,register.regis_name,register.regis_lastname,register.regis_mail,register.regis_phone,
            publications.paper_name,publications.paper_status
            FROM register 
            LEFT JOIN  publications
            ON  publications.register_id = register.id 
            where register.regis_participate = '".$_POST['checkDay']."'
            order by register.id asc");
            // $stmt->execute();
            }
        }
        // else if ($_POST['checkDay'] == 0){
        else if (isset($_POST['checkDay'])){
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

        // if($_POST["register_id"] != ''){  
        if(!empty($_POST["register_id"])){  
            $sql = "UPDATE publications SET paper_status = :paper_status WHERE id = :id";
            $query = $conn->prepare($sql);
            $query->bindParam(":id",$id);
            $query->bindParam(":paper_status",$_POST["paper_status"]);
            
            if ($query->execute()){
                echo "<script> alert('Save complete'); </script>";
                // header('Refresh:0; url=admin_register_info.php');
            } else {
                echo "<script> alert('Save Error'); </script>";
                // header('Refresh:0; url=admin_register_info.php');
            }
        }  
    ?>
    <section class="bg-light" id="regis" style="margin-bottom: 200px;">
        <div class="container">
            <div class="row mt-4">
                <div class="col-md-12 mx-auto">
                    <div class="card  mb-4">
                        <h5 class="card-header text-center text-uppercase bg-info">THRF14 - รายชื่อผู้ลงทะเบียน</h5>
                        <div class="text-center mx-auto">
                            <div class="mt-4 ml-4">
                                <form action="" method="post" name="workday">
                                    <label for="">เลือกตามวันที่เข้าร่วม</label>
                                    <select class="custom-select" name="checkDay" onChange="javascript: submit()"
                                        style="width:70%">
                                        <!-- <option value=""><?php echo $_POST['checkDay'];?></option> -->
                                        <option value="">เลือก</option>
                                        <option value="0">ผู้รวมงานทั้งหมด</option>
                                        <option value="1">งานมหกรรมวิชาการ วันที่ 7,10,11 กันยายน 2563 (3 วัน)</option>
                                        <option value="2">งานเวทีมนุษศาสตร์ วันที่ 8-9 กันยายน 2563 (2 วัน)</option>
                                        <option value="3">เข้ารวมทั้ง 2 งาน วันที่ 7-11 กันยายน 2563 (5 วัน)</option>
                                    </select>
                                    <input type="hidden" name="check" value="True" />
                                    <input type="hidden" name="register_id" id="register_id" />
                                </form>
                                <div>
                                    <?php 
                                    if(isset($_POST['checkDay']) && $_POST['checkDay'] != 0){
                                        if($_POST['checkDay'] == 1){
                                            $workday = "งานมหกรรมวิชาการ วันที่ 7,10,11 กันยายน 2563 (3 วัน)";
                                        }else if($_POST['checkDay'] == 2){
                                            $workday = "งานเวทีมนุษศาสตร์ วันที่ 8-9 กันยายน 2563 (2 วัน)";
                                        }else if($_POST['checkDay'] == 3){
                                            $workday = "เข้ารวมทั้ง 2 งาน วันที่ 7-11 กันยายน 2563 (5 วัน)";
                                        }
                                        echo "<label class='center'> $workday </label>";
                                    }
                                ?>
                                </div>
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
                                            <th class="text-center">#</th>
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
                                                <a href="publications/<?php echo $row['paper_name'];?>"
                                                    class="badge badge-info">Download</a>
                                                <?php }else { ?>
                                                ไม่มีการส่งผลงาน
                                                <?php }?>
                                            </td>
                                            <td class="text-center">
                                                <p class="badge badge-warning"><?php echo $row['paper_status'];?></p>
                                            </td>
                                            <td class="text-center">
                                                <!-- <input type="button" name="edit" value="Edit"
                                                    id="<?php echo $row["id"]; ?>"
                                                    class="btn btn-info btn-xs edit_data" /> -->
                                                    <td class="text-center"> <a href="admin_update_status.php?id=<?php echo $sent_id;?>" class="btn btn-info">Update</a></td>

                                            </td>
                                        </tr>
                                        <?php $i++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="card  mb-4">
                        <h5 class="card-header text-center text-uppercase bg-info">THRF14 - ผู้ส่งบทความตีพิมพ์</h5>
                        <div class="text-center mx-auto">
                            <div class="mt-4 ml-4">
                                <form action="" method="post" name="workday">
                                    <label for="">เลือกตามวันที่เข้าร่วม</label>
                                    <select class="custom-select" name="check_paper" onChange="javascript: submit()"
                                        style="width:70%">
                                        <!-- <option value=""><?php echo $_POST['check_paper'];?></option> -->
                                        <option value="">เลือก</option>
                                        <option value="0">ผู้รวมงานทั้งหมด</option>
                                        <option value="1">งานมหกรรมวิชาการ วันที่ 7,10,11 กันยายน 2563 (3 วัน)</option>
                                        <option value="2">งานเวทีมนุษศาสตร์ วันที่ 8-9 กันยายน 2563 (2 วัน)</option>
                                        <option value="3">เข้ารวมทั้ง 2 งาน วันที่ 7-11 กันยายน 2563 (5 วัน)</option>
                                    </select>
                                    <input type="hidden" name="check" value="True" />
                                    
                                </form>
                                <div>
                                    <?php 
                                    if(isset($_POST['check_paper']) && $_POST['check_paper'] != 0){
                                        if($_POST['check_paper'] == 1){
                                            $workday = "งานมหกรรมวิชาการ วันที่ 7,10,11 กันยายน 2563 (3 วัน)";
                                        }else if($_POST['check_paper'] == 2){
                                            $workday = "งานเวทีมนุษศาสตร์ วันที่ 8-9 กันยายน 2563 (2 วัน)";
                                        }else if($_POST['check_paper'] == 3){
                                            $workday = "เข้ารวมทั้ง 2 งาน วันที่ 7-11 กันยายน 2563 (5 วัน)";
                                        }
                                        echo "<label class='center'> $workday </label>";
                                    }
                                ?>
                                </div>
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
                                            <th class="text-center">บทความ</th>
                                            <th class="text-center">หัวข้อบทความ</th>
                                            <th class="text-center">สถานะบทความ</th>
                                            <th class="text-center">#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $i=1;
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
                                                <a href="publications/<?php echo $row['paper_name'];?>"
                                                    class="badge badge-info">Download</a>
                                                <?php }else { ?>
                                                ไม่มีการส่งผลงาน
                                                <?php }?>
                                            </td>
                                            <td class="text-center">
                                                <p class="badge badge-warning"><?php echo $row['paper_status'];?></p>
                                            </td>
                                            <td class="text-center">
                                                <!-- <input type="button" name="edit" value="Edit"
                                                    id="<?php echo $row["id"]; ?>"
                                                    class="btn btn-info btn-xs edit_data" /> -->
                                                    <td class="text-center"> <a href="admin_update_status.php?id=<?php echo $sent_id;?>" class="btn btn-info">Update</a></td>

                                            </td>
                                        </tr>
                                        <?php $i++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <a href="logout.php" class="btn btn-danger col-md-12 mt-2">Logout</a>
                </div>
            </div>
        </div>
        <!-- </div>
        </div> -->
    </section>
    <!-- Footer -->
    <div id="add_data_Modal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Update สถานะบทความ</h4>
                </div>
                <div class="modal-body">
                    <form method="post" id="insert_form">
                        <label>ชื่อ-สกุล</label>
                        <input type="text" name="name" id="name" class="form-control" disabled/>
                        <br />
                        <label>สถานะบทความ</label>
                        <select name="paper_status" id="paper_status" class="form-control">
                            <option value="Uploaded">Uploaded</option>
                            <option value="Wait for review">Wait for review</option>
                            <option value="Accept">Accept</option>
                            <option value="Accept with minor revisions">Accept with minor revisions</option>
                            <option value="Accept with major revisions">Accept with major revisions</option>
                            <option value="Reject">Reject</option>
                        </select>
                        <br />
                        <input type="hidden" name="register_id" id="register_id" />
                        <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
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
            // update_status
            $(document).on('click', '.edit_data', function () {
                var register_id = $(this).attr("id");
                $.ajax({
                    url: "fetch.php",
                    method: "POST",
                    data: {
                        register_id: register_id
                    },
                    dataType: "json",
                    // contentType: "application/json; charset=utf-8",
                    success: function (data) {
                        $('#name').val(data.regis_name);
                        $('#address').val(data.paper_status);
                        // $('#gender').val(data.gender);
                        // $('#designation').val(data.designation);
                        // $('#age').val(data.age);
                        // $('#employee_id').val(data.id);
                        $('#insert').val("Update");
                        $('#add_data_Modal').modal('show');
                    }
                });
            });


            // DataTable
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