$(document).ready(function() {

        $('#reg').click(function () {
        //alert('hi');
            var unames = $("#uname").val();
            var emails = $("#email").val();
            var password = $("#pass").val();
            var numbers = $("#phone").val();
            var address = $("#addr").val();
            alert()
       //     ajax body
                $.ajax({

                    url: 'insert.php',
                    type: 'post',
                    dataType: 'json',
                    data: {
                        unames: unames,
                        emails: emails,
                        password: password,
                        numbers: numbers,
                        address:address

                    },
                    success: function (result) {
                        if (result) {
                            alert("success");
                        }
                        else {
                            alert("failed to get data");
                        }
                    }
                })
    })
    })

