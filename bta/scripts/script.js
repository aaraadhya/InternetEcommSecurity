$('#submit').click(function () {
    window.location.href = "pass.php";
    return false;
 });
$('#submitPass').click(function () {
    window.location.href= "catalogue.html";
    return false;
});



function validateSignInForm() {
    var x = document.forms["signIn"]["userName"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }

    var iChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?";

	for (var i = 0; i < document.signIn.userName.value.length; i++) {
    	if (iChars.indexOf(document.signIn.userName.value.charAt(i)) != -1) {
      	  alert ("Your username has special characters. \nThese are not allowed.\n Please remove them and try again.");
      	  return false;
    	}
	}

	for (var i = 0; i < document.signIn.securityAnswer.value.length; i++) {
    	if (iChars.indexOf(document.signIn.securityAnswer.value.charAt(i)) != -1) {
      	  alert ("Your username has special characters. \nThese are not allowed.\n Please remove them and try again.");
      	  return false;
    	}
	}

    var y = document.forms["signIn"]["securityAnswer"].value;
    if (y == null || y == "") {
        alert("Name must be filled out");
        return false;
    }
}

function validatePassForm() {
    var x = document.forms["passForm"]["pass"].value;
    if (x == null || x == "") {
        alert("Password must be filled out");
        return false;
    }
}

function validateSignUpForm() {
    var x = document.forms["signUpForm"]["lastName"].value;
    if (x == null || x == "") {
        alert("Last Name must be filled out");
        return false;
    }

    var x = document.forms["signUpForm"]["firstName"].value;
    if (x == null || x == "") {
        alert("First Name must be filled out");
        return false;
    }

    var x = document.forms["signUpForm"]["userName"].value;
    if (x == null || x == "") {
        alert("User Name must be filled out");
        return false;
    }

    var x = document.forms["signUpForm"]["emailId"].value;
    if (x == null || x == "") {
        alert("Email ID must be filled out");
        return false;
    }

    var x = document.forms["signUpForm"]["pass"].value;
    if (x == null || x == "") {
        alert("Password must be filled out");
        return false;
    }

    var x = document.forms["signUpForm"]["confPass"].value;
    if (x == null || x == "") {
        alert("Confirm Password must be filled out");
        return false;
    }

    // var iChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?";

    // for (var i = 0; i < document.signIn.userName.value.length; i++) {
    //     if (iChars.indexOf(document.signIn.userName.value.charAt(i)) != -1) {
    //       alert ("Your username has special characters. \nThese are not allowed.\n Please remove them and try again.");
    //       return false;
    //     }
    // }

    // for (var i = 0; i < document.signIn.securityAnswer.value.length; i++) {
    //     if (iChars.indexOf(document.signIn.securityAnswer.value.charAt(i)) != -1) {
    //       alert ("Your username has special characters. \nThese are not allowed.\n Please remove them and try again.");
    //       return false;
    //     }
    // }
}