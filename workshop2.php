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
        margin-top: 100px;
      }

      .modal-dialog {
        max-width: 800px !important;
      }
    }

    @media (max-width: 991px) {
      section {
        margin-top: 100px;
      }

      .modal-dialog {
        max-width: 800px !important;
      }
    }

    /* @media (min-width: 576px) {
      .modal-dialog .modal-content{
        max-width: 700px !important ; 
      }
    } */

    @media (min-width: 320px) and (max-width: 480px) {
      section {
        /* padding: 80px 0 !important; */
        margin-top: 50px;
      }
    }

    .bg-2nd {
      background-color: #FEF5E7;
    }
  </style>
</head>

<body id="page-top">
<?php 

$n=date("Y-m-d-his");
echo $n;

?>
  <div class="form-row col-12 mt-2">
    <div class="card col-md-8 col-sm-12">
      <div class="card-header bg-info">
        Upload บทความตีพิมพ์
      </div>
      <form method="post" name="Form" action="check_upload.php" enctype="multipart/form-data" onSubmit="return validate();">
      <div class="card-body">
        <!-- <h5 class="card-title">Upload บทความตีพิมพ์</h5> -->
        <!-- <p class="card-text">** maximum 2MB. Type .doc .docx </p> -->
        <input type="file" name="paper_upload" id="paper_upload" />
        <p class="card-text">**ไฟล์ขนาดไม่เกิน 2MB. Type .doc .docx </p>
        <span id="file_error"></span>
      <input type="submit"  name="submit" value="ok">
      </div>
      </form>
    </div>
  </div>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <script src="js/agency.min.js"></script>
  <script src="js/top_page.js"></script>
  <script src="js/check_regis.js"></script>
  <script>
function validate() {
	$("#file_error").html("");
	$(".demoInputBox").css("border-color","#F0F0F0");
	var file_size = $('#paper_upload')[0].files[0].size;
	if(file_size>2097152) {
		$("#file_error").html("<font color='#F31616'>รูปภาพของท่านมีขนาดใหญ่เกิน 2 MB</font>");
		$(".demoInputBox").css("border-color","#FF0000");
		return false;
	} 
	return true;
}
</script>

</body>

</html>