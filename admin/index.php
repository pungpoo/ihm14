<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SOTL6</title>
    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
    <link href="../css/agency.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
</head>

<body id="page-top">
    <a id="button"></a>
    <?php include "../navbar.html"; ?>
    <?php include "../connect.php"; ?>
    <?php 
        if (isset($_POST['submit'])) {
            if($_POST['username'] == "admin" && $_POST['password'] == "1234") {
                $_SESSION['id'] = "admin1234";
                echo "<script> alert('Login Complete'); </script>";
           header('Refresh:0; url=register_info.php');

            }else{
                echo "<script> alert('Login Error'); </script>";
        header('Refresh:0; url=index.php');
            }
            
        }
    ?>
    <section class="bg-light" id="regis" style="margin-bottom: 200px;">
        <div class="container">
            <div class="row mt-4">
                <div class="col-md-10 mx-auto">
                    <div class="card  mb-4">
                        <h5 class="card-header text-center text-uppercase bg-info">Login</h5>
                        <div class="card-body font-weight-bold">
                            <div class="col-md-6 mx-auto">
                                <form class="form" method="post" action="">
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"></div>
                                        </div>
                                        <input type="text" class="form-control" id="username" name="username"
                                            placeholder="Username" required>
                                    </div>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"></div>
                                        </div>
                                        <input type="password" class="form-control" id="password" name="password"
                                            placeholder="Password" required>
                                    </div>
                                    <input type="submit" name="submit" class="btn btn-primary mb-2 btn-block" value="Login">
                                    <!-- <button type="submit" class="btn btn-primary mb-2  btn-block">Login</button> -->
                                </form>
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
  include "../footer.html";
  ?>
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../js/agency.min.js"></script>
    <script src="../js/top_page.js"></script>
    <script src="../js/check_regis.js"></script>
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
                    {
                        "width": "40%",
                        "targets": 1
                    },
                    {
                        "width": "15%",
                        "targets": 4
                    }
                ]
            });
        });
    </script>
</body>

</html>