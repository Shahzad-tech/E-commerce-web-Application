const Regusername = /^[a-z\s]{5,15}$/i;
const passwordReg = /^[0-9a-z@-]{6,15}$/i; //alpha numeric character alog with some special character.
const Reguserid = /^[0-9]{5}$/;

var username;
var password;
var userid;
var usercity;
var address;


$("#registerForm").submit(function (e) {

    username = $("#username").val();
    password = $("#password").val();
    userid = $("#Userid").val();
    usercity = $("#Usercity").val();
    address = $("#Address").val();


    if (username == "") {

        swal({
            title: "Error",
            text: "Enter the User Name",
            icon: "warning",
            type: "error",
            confirmButtonText: "Ok",
        });

        e.preventDefault();


    }

    else if (!(Regusername.test(username))) {

        swal({
            title: "Error",
            text: "Name should be between 5 and 15 characters and contains Alphabets only",
            icon: "warning",
            type: "error",
            confirmButtonText: "Ok",
        });


        e.preventDefault();


    }

    else if (password == "") {

        swal({
            title: "Error",
            text: "Enter the password",
            icon: "warning",
            type: "error",
            confirmButtonText: "Ok"
        });

        e.preventDefault();


    }

    else if (!(passwordReg.test(password))) {

        swal({
            title: "Error",
            text: "Password could be alpha numeric. @ , - can also be used. should have 6 to 15 characters",
            icon: "warning",
            type: "error",
            confirmButtonText: "Ok",
        });


        e.preventDefault();


    }

    else if (userid == "") {

        swal({
            title: "Error",
            text: "Enter the your id",
            icon: "warning",
            type: "error",
            confirmButtonText: "Ok"
        });


        e.preventDefault();

    }

    else if (!(Reguserid.test(userid))) {

        swal({
            title: "Error",
            text: "User Id should contain only numbers upto 5",
            icon: "warning",
            type: "error",
            confirmButtonText: "Ok",
        });


        e.preventDefault();


    }

    else if (usercity == "") {

        swal({
            title: "Error",
            text: "Select your city",
            icon: "warning",
            type: "error",
            confirmButtonText: "Ok"
        });


        e.preventDefault();

    }

    else if (address == "") {

        swal({
            title: "Error",
            text: "Enter your Address",
            icon: "warning",
            type: "error",
            confirmButtonText: "Ok"
        });


        e.preventDefault();
    }

    else {
        swal({
            title:"SUCCESS",   
            text:"User Created.",
            icon:"success",
            type: "error",
            confirmButtonText: "Ok"
        });

        // e.preventDefault();

    }

});

document.getElementById("eye").addEventListener("click", function () {

    document.getElementById("eye").classList.toggle('fa-eye-slash');
    password = document.getElementById("password");

    if (password.type === "password") {
        password.type = "text";
    }
    else {
        password.type = "password";
    }

});   