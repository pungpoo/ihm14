<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SOTL6</title>
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
  <!-- Custom styles for this template -->
  <link href="css/agency.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <style>
    @media (min-width: 992px) {
      section {
        padding-top: 200px !important;
        /* margin-top: 120px; */

      }
    }
  </style>
</head>

<body id="page-top">
  <a id="button"></a>
  <?php  include "navbar.html";?>
  <?php  include "connect.php"; ?>
  <?php  include "workshop_count.php"; ?>
  <section class="bg-light" id="regis">
    <div class="container ">
      <div class="row">
        <div class=" col-md-12" id="single_regis">
          <div class="card">
            <h5 class="card-header text-center text-uppercase bg-info">SOTL6 - Regular Registration</h5>
            <div class="card-body font-weight-bold">

=            <input type="submit" name="submit" id="btnsubmit" class="btn btn-success mb-5 col-4 offset-4"
              value="ยืนยันการลงทะเบียน">
            </form>
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
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/agency.min.js"></script>
  <script src="js/top_page.js"></script>
  <script src="js/check_regis.js"></script>

  <script type="text/javascript">
    function checkeng() {
      var obj = document.getElementById("fname_eng");
      var str = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"
      var val = obj.value
      var valOK = true;
      for (i = 0; i < val.length & valOK; i++) {
        valOK = (str.indexOf(val.charAt(i)) != -1)
      }
      if (!valOK) {
        alert("กรุณากรอกภาษาอังกฤษเท่านั้น !!! ")
        document.getElementById('fname_eng').value = "";
        obj.focus()

        return false
      }
      return true
    }

    function checkeng2() {
      var obj = document.getElementById("lname_eng");
      var str = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"
      var val = obj.value
      var valOK = true;

      for (i = 0; i < val.length & valOK; i++) {
        valOK = (str.indexOf(val.charAt(i)) != -1)
      }

      if (!valOK) {
        alert("กรุณากรอกภาษาอังกฤษเท่านั้น !!! ")
        document.getElementById('lname_eng').value = "";
        obj.focus()
        return false
      }
      return true
    }
    $("#food_other").hide();
    $(document).ready(function(){
          $("#food1").click(function(){
              $("#food_other").hide();
              $("#food_other").val("");
          });
          $("#food2").click(function(){
              $("#food_other").hide();
              $("#food_other").val("");
          });
          $("#food3").click(function(){
              $("#food_other").hide();
              $("#food_other").val("");
          });
          $("#food4").click(function(){
              $("#food_other").show();
          });
    })


    $("#Billing_detail").hide();
    $(document).ready(function(){
        $("#Billing1").click(function(){
            $("#Billing_detail").hide();
        });
        $("#Billing2").click(function(){
            $("#Billing_detail").show();
    });
    })

  </script>
</body>

</html>