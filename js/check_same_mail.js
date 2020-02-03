$('#btnsubmit').click(function () {
    //debugger;
        for (var i = 1; i <= 6; i++) {
            var id = "email_" + i;
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
            allTextBoxes.push($(this).val());
        });
        var sorted_arr = allTextBoxes.sort();
        for (var ii = 0; ii < allTextBoxes.length - 1; ii++) {
            if (sorted_arr[ii + 1] == sorted_arr[ii]) {
                alert("Please enter different value in each TextBox.");
                console.log(sorted_arr[ii]);
                return false;
            }
        }
    });