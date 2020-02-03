<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>1</title>
</head>

<body>
    <div id="frmCheckUsername">
        <label>Check Username:</label>
        <input name="username" type="text" id="username" class="demoInputBox" onBlur="checkAvailability()"><span
            id="user-availability-status"></span>
    </div>
    <p><img src="LoaderIcon.gif" id="loaderIcon" style="display:none" /></p>

    <?php
        require_once("DBController.php");
        // $db_handle = new DBController();

        if(!empty($_POST["username"])) {
        $query = "SELECT * FROM users WHERE userName='" . $_POST["username"] . "'";
        $user_count = $db_handle->numRows($query);
        if($user_count>0) {
            echo "<span class='status-not-available'> Username Not Available.</span>";
        }else{
            echo "<span class='status-available'> Username Available.</span>";
        }
        }
    ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        function checkAvailability() {
            $("#loaderIcon").show();
            jQuery.ajax({
                url: "1.php",
                data: 'username=' + $("#username").val(),
                type: "POST",
                success: function (data) {
                    $("#user-availability-status").html(data);
                    $("#loaderIcon").hide();
                },
                error: function () {}
            });
        }
    </script>
    
</body>

</html>