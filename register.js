// const form = document.getElementById("registerForm");

const Regusername = /^[a-z]{5,15}$/i;
const passwordReg = /^[0-9a-z@-]{6,15}$/i; //alpha numeric character alog with some special character.
const Reguserid = /^[0-9]{5}$/;

var username;
var password;
var userid;
var usercity;
var address;



function show(){
    
    document.getElementById("eye").classList.toggle('fa-eye-slash');
    
    password = document.getElementById("password");


    if(password.type==="password"){
                password.type = "text";
            }
    else{
                password.type = "password";
            }   

}



function registerValidate(){
    
        
     username = document.getElementById("username").value;
     password = document.getElementById("password").value;
     userid = document.getElementById("Userid").value;
     usercity = document.getElementById("Usercity").value;
     address = document.getElementById("Address").value;
    
  
    if (username == ""){

        swal({
            title:"Error",   
            text:"Enter the User Name",
            icon:"warning",
            type: "error",
            confirmButtonText: "Ok",
        });

        return false;
    }

    else if(!(Regusername.test(username))){
        
        swal({
                        title:"Error",   
                        text:"Name should be between 5 and 15 characters and contains Alphabets only",
                        icon:"warning",
                        type: "error",
                        confirmButtonText: "Ok",
                    });
                    
                    return false;

    }

    else if(password == ""){
        
        swal({
            title:"Error",   
            text:"Enter the password",
            icon:"warning",
            type: "error",
            confirmButtonText: "Ok"
            });
        return false;
    
    }
    
    else if(!(passwordReg.test(password))){
        
        swal({
                        title:"Error",   
                        text:"Password could be all numeric or string. @ , - can also be used. should have 6 to 15 characters",
                        icon:"warning",
                        type: "error",
                        confirmButtonText: "Ok",
                    });
                    
        return false;

    }

    else if(userid==""){
       
        swal({
            title:"Error",   
            text:"Enter the your id",
            icon:"warning",
            type: "error",
            confirmButtonText: "Ok"
            });
        return false;
    }

    else if(!(Reguserid.test(userid))){
        
        swal({
                        title:"Error",   
                        text:"User Id should contain only numbers upto 5",
                        icon:"warning",
                        type: "error",
                        confirmButtonText: "Ok",
                    });
                    
                    return false;

    }

    else if(usercity==""){
        
        swal({
            title:"Error",   
            text:"Select your city",
            icon:"warning",
            type: "error",
            confirmButtonText: "Ok"
            });
        return false;
    }

    else if(address==""){
        
        swal({
            title:"Error",   
            text:"Enter your Address",
            icon:"warning",
            type: "error",
            confirmButtonText: "Ok"
            });
       
        return false;
    }

    else{
       
        swal({
            title:"Submitted",   
            text:"Your form has been successfully submitted",
            icon:"success",
            type: "error",
            confirmButtonText: "Ok"
            });
        return false;
    }

}