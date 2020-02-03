<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>test_same_input</h1>
    <div><input type="text" id="txt1" /></div>
    <div><input type="text" id="txt2" /></div>
    <div><input type="text" id="txt3" /></div>
    <div><input type="text" id="txt4" /></div>
    <div><input type="text" id="txt5" /></div>
    <div><input type="text" id="txt6" /></div>
    <div><input type="text" id="txtname" /></div>
    <input type='button' id='chkDuplicate' value="Click Me">
</body>
<script src="vendor/jquery/jquery.min.js"></script>
<script>
    // var a = document.getElementById("txt1");
    // var b = document.getElementById("txt2");
    
    // document.getElementById("txt1").addEventListener("blur", checkmail);
    //     function checkmail(){
    //     console.log("txt1 : "+a.value);
    //     }
    // document.getElementById("txt2").addEventListener("blur", checkmail2);
    //     function checkmail2() {
    //     console.log("txt2 : "+b.value);
    //     } 
    // if(a = b){
    //     console.log(a+"="+b);
    // }
    $('#chkDuplicate').click(function () {
    //debugger;
        for (var i = 1; i <= 6; i++) {
            var id = "txt" + i;
            var txtbox = document.getElementById(id);
            if (txtbox) {
                if (txtbox.value != null && txtbox.value.trim() == "") {
                    alert("Serial Number field cannot be empty");
                    return false;
                }
            }
        }
        var allTextBoxes = [];
        $('input[type=text]').each(function () {
            allTextBoxes.push($(this).val())
        });
        var sorted_arr = allTextBoxes.sort();
        for (var i = 0; i < allTextBoxes.length - 1; i++) {
            if (sorted_arr[i + 1] == sorted_arr[i]) {
                alert("Please enter different value in each TextBox.");
                console.log(sorted_arr[i])
                return false;
            }
        }
    });
</script>
</html>