
const Regusername = /^[a-z]{5,15}$/i;
var username;
var password;


var mytime = setInterval(myTimer,1000);

function myTimer(){
    let date = new Date();
    let time = date.toLocaleTimeString();
    document.getElementById("time").innerHTML = time;

}

function validate(){

    username = document.getElementById("logname").value;
    password = document.getElementById("logpassword").value;

    if(username===""){
        
        swal({
            title:"Username error",   
            text:"Enter the User Name please",
            icon:"warning",
            type: "error",
            confirmButtonText: "Ok",
        });

        return false;
    }
    
    
    else if(!(Regusername.test(username))){
        
        swal({
                        title:"Error",   
                        text:"Name should be between 5 to 15 characters and contains Alphabets only",
                        icon:"warning",
                        type: "error",
                        confirmButtonText: "Ok",
                    });
                    
        return false;

    }
    
    else if(password===""){
        
        swal({
            title:"Password error",   
            text:"Enter the password please",
            icon:"warning",
            type: "error",
            confirmButtonText: "Ok",
        });

        return false;
    }

    swal({
        title:"Login Successfully",   
        text:"You have successfully loged in",
        icon:"success",
        type: "error",
        confirmButtonText: "Ok",
    });

    return true;


}