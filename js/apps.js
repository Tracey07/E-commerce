$(document).ready(() => {
   let error_msg,
        login_email,
        login_password,
        register_email,
        register_password,
        register_country,
        register_city,
        register_contact,
        register_fullname = "";


  // * Validation for Login Form
  $("#login_email").on("keyup", () => {
    let regex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;

     //getting the value of the password and the email
    login_email = $("#login_email").val();

    //email validation
    let check = regex.test(login_email);
    if (check) {
      console.log("email valid");
      $("#error_msg").hide();
    } else {
      error_msg = "Enter a valid value";
      console.log("email invalid");
       $("#error_msg").html(`<p style='color: red'>${error_msg}</p>`);
    }
  });

    //password validation
   $("#login_password").on("keyup", () => {
        login_password = $("#login_password").val();

        if (login_password.length < 6) {
            error_msg = "Password length should be at least 6 characters";
            $("#error_msg_pass").html(`<p style='color: red'>${error_msg}</p>`);
        } else {
            $("#error_msg_pass").hide();
        }
    });

    $("form#login_form").submit(function(e) {
        console.log(login_email, login_password);
        if (login_email != "" && login_password != "") {
            return;
        } else {
            alert("Fill all input fields");
            e.preventDefault();
        }
    });

    // * Validation for Registration Form
    $("#register_email").on("keyup", () => {
        let regex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
        //getting the value of the password and the email
        register_email = $("#register_email").val();

        let check = regex.test(register_email);
        if (check) {
            console.log("email valid");
            error_msg = "";
            $("#error_msg_email").hide();
        } else {
            error_msg = "Enter a valid email";
            $("#error_msg_email").html(`<p style='color: red'>${error_msg}</p>`);
        }
    });

    $("#register_password").on("keyup", () => {
        register_password = $("#register_password").val();

        if (register_password.length < 6) {
            error_msg = "Password length should be at least 6 characters";
            $("#error_msg_pass").html(`<p style='color: red'>${error_msg}</p>`);
        } else {
            error_msg = "";
            $("#error_msg_pass").hide();
        }
    });

    //fullname validation
    $("#register_fullname").on("keyup", () => {
        let regex = /^[ A-Za-z]+$/;
        //getting the value of the password and the email
        register_fullname = $("#register_fullname").val();

        let check = regex.test(register_fullname);
        if (check) {
            error_msg = "";
            $("#error_msg_name").hide();
        } else {
            error_msg = "Enter a valid name";
            $("#error_msg_name").html(`<p style='color: red'>${error_msg}</p>`);
        }
    });

    //country validation
    $("#register_country").on("keyup", () => {
        let regex = /^[ a-zA-Z-]*$/;
        //getting the value of the password and the email
        register_country = $("#register_country").val();

        let check = regex.test(register_country);
        if (check) {
            error_msg = "";
            $("#error_msg_country").hide();
        } else {
            error_msg = "Enter a valid country name";
            $("#error_msg_country").html(`<p style='color: red'>${error_msg}</p>`);
        }
    });

    //city validation
    $("#register_city").on("keyup", () => {
        let regex = /^[ A-Za-z z.,\/+-]*$/;
        //getting the value of the password and the email
        register_city = $("#register_city").val();

        let check = regex.test(register_city);
        if (check) {
            error_msg = "";
            $("#error_msg_city").hide();
        } else {
            error_msg = "Enter a valid city name";
            $("#error_msg_city").html(`<p style='color: red'>${error_msg}</p>`);
        }
    });

    //contact validation
    $("register_contact").on("keyup", () => {
        let regex = /^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$/;
        //getting the value of the password and the email
        register_contact = $("register_contact").val();

        let check = regex.test(register_contact);
        if (check) {
            error_msg = "";
            $("error_msg_contact").hide();
        } else {
            error_msg = "Enter a valid contact";
            $("error_msg_contact").html(`<p style='color: red'>${error_msg}</p>`);
        }

        var cont = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{10,20}$/;
        if(inputtxt.value.match(cont)) 
        { 
        return true;
        }
        else
        { 
        alert('Number must be at least ten digits')
        return false;
        }
    });

    $("form#regis_form").submit(function(e) {
        if (error_msg == "") {
            return;
        } else {
            alert("Fill all input fields");
            e.preventDefault();
        }
    });

});

function CheckPassword(inputtxt) 
{ 
var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{7,20}$/;
if(inputtxt.value.match(passw)) 
{ 
return true;
}
else
{ 
alert('Password must be at last seven characters and contain at least one numeric digit, one uppercase and one lowercase letter')
return false;
}
}

