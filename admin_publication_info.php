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
 
        if(isset($_POST['check_paper'])){
            if ($_POST['check_paper'] == 0){
                $stmt_paper = $conn->prepare("SELECT register.id,register.regis_title_name,register.regis_name,register.regis_lastname,regis_publication,
                publications.paper_name,publications.paper_subtheme,publications.paper_status
                FROM register 
                LEFT JOIN  publications
                ON  publications.register_id = register.id 
                WHERE register.regis_publication IS NOT NULL
                order by register.id asc");
            }else{
            $stmt_paper = $conn->prepare("SELECT register.id,register.regis_title_name,register.regis_name,register.regis_lastname,register.regis_mail,register.regis_phone,
            publications.paper_name,publications.paper_subtheme,publications.paper_status
            FROM register 
            LEFT JOIN  publications
            ON  publications.register_id = register.id 
            where publications.paper_subtheme = '".$_POST['check_paper']."'
            order by register.id asc");
            }
        }
        else {
            $stmt_paper = $conn->prepare("SELECT register.id,register.regis_title_name,register.regis_name,register.regis_lastname,regis_publication,
            publications.paper_name,publications.paper_subtheme,publications.paper_status
            FROM register 
            LEFT JOIN  publications
            ON  publications.register_id = register.id 
            WHERE register.regis_publication IS NOT NULL
            order by register.id asc");
        }

        if(!empty($_POST["register_id"])){  
            $sql = "UPDATE publications SET paper_status = :paper_status WHERE id = :id";
            $query = $conn->prepare($sql);
            $query->bindParam(":id",$id);
            $query->bindParam(":paper_status",$_POST["paper_status"]);
            
            if ($query->execute()){
                echo "<script> alert('Save complete'); </script>";
                header('Refresh:0; url=admin_register_info.php');
            } else {
                echo "<script> alert('Save Error'); </script>";
                header('Refresh:0; url=admin_register_info.php');
            }
        }  
    ?>
    <section class="bg-light" id="regis" style="margin-bottom: 200px;">
        <div class="container">
            <div class="row mt-4">
                <div class="col-md-12 mx-auto">
                    <div class="card  mb-4">
                        <h5 class="card-header text-center text-uppercase bg-info">THRF14 - ผู้ส่งบทความตีพิมพ์</h5>
                        <div class="text-center mx-auto">
                            <div class="mt-4">
                                <form action="" method="post" name="workday">
                                    <label for="">เลือกตามขัวข้อย่อยบทความ</label>
                                    <select class="custom-select" name="check_paper" onChange="javascript: submit()"
                                        style="width:70%">
                                        <!-- <option value=""><?php echo $_POST['check_paper'];?></option> -->
                                        <option value="">เลือก</option>
                                        <option value="0">ทั้งหมด</option>
                                        <option value="1">1. สังคมพหุวัฒนธรรม อัตลักษณ์ และภาวะข้ามชาติในยุคดิจิทัล (Multicultural Society, Identity and Transnationalism in the Era of Digital Technology)</option>
                                        <option value="2">2. ภาษาและภาษาศาสตร์ในยุคเทคโนโลยีเปลี่ยนโลก (Language and Linguistics in the Age of World-disrupting Technology)</option>
                                        <option value="3">3. สุนทรียศาสตร์ อารมณ์ และสุขภาวะของสังคม (Aesthetics, Emotion and Implications on Social Well-Being)</option>
                                        <option value="4">4. iMindfulness: ความตระหนักรู้ในตนสู่หนทางการเปลี่ยนแปลง (iMindfulness: Self-awareness toward Transformation)</option>
                                        <option value="5">5. มนุษย์กับการอยู่ร่วมกับเทคโนโลยี (Humans and their Co-existence with Technology)</option>
                                        <option value="6">6. โลกออนไลน์กับเสถียรภาพของสังคมและความมั่นคงของประเทศ (Online World, Social Stability and National Security)</option>
                                        <option value="7">7. เทคโนโลยีและการดูแลสุขภาพในสังคมประชาธิปไตย (Technology and Healthcare in Democratic Society)</option>
                                        <option value="8">8. เทคโนโลยีกับสิทธิมนุษยชนและสันติภาพ (Technologies, Human Rights and Peace)</option>
                                        <option value="9">9. เทคโนโลยีกับความสามารถที่แตกต่างของมนุษย์: แบ่งแยกหรืออยู่ร่วม (Technology and Human (this)Ability: Dividing or Including)</option>
                                        <option value="10">10. เทคโนโลยี การดูแลสุขภาพ กับสังคมผู้สูงอายุ (Technology, Healthcare and Aging Society)</option>
                                        <option value="11">11. เทคโนโลยีและการแพทย์ที่มีหัวใจความเป็นมนุษย์ (Technology and Humanized Medicine)</option>
                                    </select>
                                    <input type="hidden" name="check" value="True" />
                                </form>
                                <div>
                                    <?php 
                                    if(isset($_POST['check_paper']) && $_POST['check_paper'] != 0){
                                        if($_POST['check_paper'] == 1){
                                            $subtheme = "สังคมพหุวัฒนธรรม อัตลักษณ์ และภาวะข้ามชาติในยุคดิจิทัล (Multicultural Society, Identity and Transnationalism in the Era of Digital Technology)";
                                        }else if($_POST['check_paper'] == 2){
                                            $subtheme = "ภาษาและภาษาศาสตร์ในยุคเทคโนโลยีเปลี่ยนโลก (Language and Linguistics in the Age of World-disrupting Technology)";
                                        }else if($_POST['check_paper'] == 3){
                                            $subtheme = "สุนทรียศาสตร์ อารมณ์ และสุขภาวะของสังคม (Aesthetics, Emotion and Implications on Social Well-Being)";
                                        }else if($_POST['check_paper'] == 4){
                                            $subtheme = "iMindfulness: ความตระหนักรู้ในตนสู่หนทางการเปลี่ยนแปลง (iMindfulness: Self-awareness toward Transformation)";
                                        }else if($_POST['check_paper'] == 5){
                                            $subtheme = "มนุษย์กับการอยู่ร่วมกับเทคโนโลยี (Humans and their Co-existence with Technology)";
                                        }else if($_POST['check_paper'] == 6){
                                            $subtheme = "โลกออนไลน์กับเสถียรภาพของสังคมและความมั่นคงของประเทศ (Online World, Social Stability and National Security)";
                                        }else if($_POST['check_paper'] == 7){
                                            $subtheme = "เทคโนโลยีและการดูแลสุขภาพในสังคมประชาธิปไตย (Technology and Healthcare in Democratic Society)";
                                        }else if($_POST['check_paper'] == 8){
                                            $subtheme = "เทคโนโลยีกับสิทธิมนุษยชนและสันติภาพ (Technologies, Human Rights and Peace)";
                                        }else if($_POST['check_paper'] == 9){
                                            $subtheme = "เทคโนโลยีกับความสามารถที่แตกต่างของมนุษย์: แบ่งแยกหรืออยู่ร่วม (Technology and Human (this)Ability: Dividing or Including)";
                                        }else if($_POST['check_paper'] == 10){
                                            $subtheme = "เทคโนโลยี การดูแลสุขภาพ กับสังคมผู้สูงอายุ (Technology, Healthcare and Aging Society)";
                                        }else if($_POST['check_paper'] == 11){
                                            $subtheme = "เทคโนโลยีและการแพทย์ที่มีหัวใจความเป็นมนุษย์ (Technology and Humanized Medicine)";
                                        }
                                        echo "<div class='p-4' ><h5 class='center mark'> $subtheme </h5></div> ";
                                    }
                                ?>
                                </div>
                            </div>
                        </div>
                        <div class="card-body font-weight-bold">
                            <div class="col-md-12">
                                <table id="table_publication" class="table table-responsive display responsive no-wrap"
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
                                            $stmt_paper->execute();
                                            while($row = $stmt_paper->fetch(PDO::FETCH_ASSOC)){
                                            //print_r($row);
                                            $title = explode(" ",$row['regis_title_name']);
                                            $title = $title[0];
                                            $sent_id = $row['id'] ;

                                            if($row['paper_subtheme'] == 1){
                                                $theme = "สังคมพหุวัฒนธรรม อัตลักษณ์ และภาวะข้ามชาติในยุคดิจิทัล (Multicultural Society, Identity and Transnationalism in the Era of Digital Technology)";
                                            }else if($row['paper_subtheme'] == 2){
                                                $theme = "ภาษาและภาษาศาสตร์ในยุคเทคโนโลยีเปลี่ยนโลก (Language and Linguistics in the Age of World-disrupting Technology)";
                                            }else if($row['paper_subtheme'] == 3){
                                                $theme = "สุนทรียศาสตร์ อารมณ์ และสุขภาวะของสังคม (Aesthetics, Emotion and Implications on Social Well-Being)";
                                            }else if($row['paper_subtheme'] == 4){
                                                $theme = "iMindfulness: ความตระหนักรู้ในตนสู่หนทางการเปลี่ยนแปลง (iMindfulness: Self-awareness toward Transformation)";
                                            }else if($row['paper_subtheme'] == 5){
                                                $theme = "มนุษย์กับการอยู่ร่วมกับเทคโนโลยี (Humans and their Co-existence with Technology)";
                                            }else if($row['paper_subtheme'] == 6){
                                                $theme = "โลกออนไลน์กับเสถียรภาพของสังคมและความมั่นคงของประเทศ (Online World, Social Stability and National Security)";
                                            }else if($row['paper_subtheme'] == 7){
                                                $theme = "เทคโนโลยีและการดูแลสุขภาพในสังคมประชาธิปไตย (Technology and Healthcare in Democratic Society)";
                                            }else if($row['paper_subtheme'] == 8){
                                                $theme = "เทคโนโลยีกับสิทธิมนุษยชนและสันติภาพ (Technologies, Human Rights and Peace)";
                                            }else if($row['paper_subtheme'] == 9){
                                                $theme = "เทคโนโลยีกับความสามารถที่แตกต่างของมนุษย์: แบ่งแยกหรืออยู่ร่วม (Technology and Human (this)Ability: Dividing or Including)";
                                            }else if($row['paper_subtheme'] == 10){
                                                $theme = "เทคโนโลยี การดูแลสุขภาพ กับสังคมผู้สูงอายุ (Technology, Healthcare and Aging Society)";
                                            }else if($row['paper_subtheme'] == 11){
                                                $theme = "เทคโนโลยีและการแพทย์ที่มีหัวใจความเป็นมนุษย์ (Technology and Humanized Medicine)";
                                            }
                                        ?>
                                        <tr>
                                            <!-- <td class="text-center"><?php echo $i;?> -->
                                            </td>
                                            <td class="text-center"><?php 
                                                $register_number = sprintf('%04d',$row['id']);
                                                echo $register_number;?>
                                            </td>
                                            <td><?php echo  $title.$row['regis_name']." ".$row['regis_lastname'];?></td>
                                            <td class="text-center">
                                                <?php if (!empty($row['paper_name'])) { ?>
                                                <a href="publications/<?php echo $row['paper_name'];?>"
                                                    class="badge badge-info">Download</a>
                                                <?php }else { ?>
                                                ไม่มีการส่งผลงาน
                                                <?php }?>
                                            </td>
                                            <td><?php echo $theme;?></td>
                                            <td class="text-center">
                                                <p class="badge badge-warning"><?php echo $row['paper_status'];?></p>
                                            </td>
                                            <td class="text-center"> <a href="admin_update_status.php?id=<?php echo $sent_id;?>" class="btn btn-info">Update</a></td>
                                        </tr>
                                        <?php $i++; } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <a href="admin_register_info.php" class="btn btn-info col-md-12 mt-2">ดูหน้าผู้ลงทะเบียน</a>
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
                            <option value="Reviewing">Reviewing</option>
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
            // DataTable
            $('#table_publication').DataTable({
                "order": [
                    [0, "asc"]
                ],
                "columnDefs": [
                    { "width": "5%","targets": 0},
                    { "width": "20%", "targets": 1 },
                    { "width": "5%", "targets": 2 },
                    { "width": "30%", "targets": 3 },
                    { "width": "10%", "targets": 4 },
                    { "width": "5%", "targets": 5 },
                ]
            });
        });
    </script>
</body>

</html>