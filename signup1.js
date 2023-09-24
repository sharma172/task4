function validate() {

    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var pass = document.getElementById("pass").value;
    var cpass = document.getElementById("cpass").value;
    var dob = document.getElementById("dob").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var address = document.getElementById("address").value;
    var city = document.getElementById("city").value;
    var state = document.getElementById("state").value;
    var pincode = document.getElementById("pincode").value;
    var experience = document.getElementById("experience").value;
    window.alert(experience);

    if((fname == null || fname == "")||(pass == null || pass == "")||(experience == null || experience == "")||(email == null || email == "")||(phone == null || phone == "")||(address == null || address == "")||(city == null || city == "")||(state == null || state == "")||(pincode == null || pincode == "")){
        window.alert("Pls fill all the fields");
    }
    else {

        window.alert("Form validated successfully");
        document.getElementById("submit").disabled=false;
        
    }

    if(document.getElementById("male").checked){

        var gender = "Male";
        window.alert(gender);
    }
    else if(document.getElementById("female").checked){

        var gender = "Female";
        window.alert(gender);
    }
    else if(document.getElementById("others").checked) {

        var gender = "others";
        window.alert(gender);
    }
    else {

        window.alert("Select a Gender");
    }

    
}

function checkpass() {

    var pass = document.getElementById("pass").value;
    var passstatus = document.getElementById("passstatus");

    for (var i=0;i<pass.length;i++){

        if((pass.charAt(i)=="1"||pass.charAt(i)=="2"||pass.charAt(i)=="3"||pass.charAt(i)=="4"||pass.charAt(i)=="5"||pass.charAt(i)=="6"||pass.charAt(i)=="7"||pass.charAt(i)=="8"||pass.charAt(i)=="9")&&pass.length>= "6") {

            passstatus.innerHTML="Password Strong";
            return true;
        }
        else if(pass.length >=7) {

            passstatus.innerHTML="Password Strengh Medium";
        }
        else{

            passstatus.innerHTML="Password Week and Short";
            return false;
        }
    }

}

function matchpass() {

    var cpass = document.getElementById("cpass").value;
    var pass = document.getElementById("pass").value;
    var passmatch = document.getElementById("passmatch");

    if(cpass==pass) {

        passmatch.innerHTML="Passwords Match";
        return true;
    }
    else {

        passmatch.innerHTML="Passwords Don't Match";
        return false;
    }
}

function checknumber() {

    var phone = Number(document.getElementById("phone").value);
    var checkphone = document.getElementById("checkphone");
    if(!isNaN(phone) && (phone.toString().length == 10)) {

        checkphone.innerHTML="Valid Number";
        return true;
    }
    else {

        checkphone.innerHTML="Not a Valid Number";
        return false;
    }

}

function checkpin()  {

    var pincode = Number(document.getElementById("pincode").value);
    var checkpincode = document.getElementById("checkpincode");

    if(!isNaN(pincode) && (pincode.toString().length == 6)) {

        checkpincode.innerHTML="Valid Number";
        return true;
    }
    else {

        checkpincode.innerHTML="Invalid Number";
        return false;
    }
}
