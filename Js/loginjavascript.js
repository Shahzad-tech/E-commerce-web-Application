const Regusername = /^[a-z]{5,15}$/i;
var username;
var password;
var view = 0;

var mytime = setInterval(myTime, 1000);

function myTime() {

    let date = new Date();
    let time = date.toLocaleTimeString();
    $("#time").html(time);

}

$(document).ready(function () {
    $("#loginForm").submit(function (e) {
        var username = $("#logname").val();
        var password = $("#logpassword").val();
        if (username == "") {
            swal({

                title: "Username error",
                text: "Enter the User Name please",
                icon: "warning",
                type: "error",
                confirmButtonText: "Ok",
            });

            e.preventDefault();


        }
        else if (!(Regusername.test(username))) {

            swal({
                title: "Error",
                text: "Name should be between 5 to 15 characters and contains Alphabets only",
                icon: "warning",
                type: "error",
                confirmButtonText: "Ok",
            });

            e.preventDefault();


        }

        else if (password === "") {

            swal({
                title: "Password error",
                text: "Enter the password please",
                icon: "warning",
                type: "error",
                confirmButtonText: "Ok",
            });

            e.preventDefault();

        }

        else {


            swal({
                title: "Login Successfully",
                text: "You have successfully loged in",
                icon: "success",
                type: "error",
                confirmButtonText: "Ok",
            });



        }


    });


});

