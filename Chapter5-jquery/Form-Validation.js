function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}
$("#submitButton").click(function () {
    $("#sucessMessage").hide();
    $("errorMessage").hide();
    var errorMessage = "";
    var fieldMessing = "";
    if ($("#email").val() == "") {
        fieldMessing += "<br>email";

    }
    if ($("#phone").val() == "") {
        fieldMessing += "<br>phone";

    }
    if ($("#password").val() == "") {
        fieldMessing += "<br>password";

    }
    if ($("#passwordConfirm").val() == "") {
        fieldMessing += "<br>confirm password";

    }
    if (fieldMessing != "") {
        errorMessage += "<p>The following fileds are missing:" + fieldMessing;

    }
    if (isEmail($("#email").val()) == false){
        errorMessage += "<p>Your email address is not valid<p>";
    }
    if ($.isNumeric($("#phone").val()) == false) {
        errorMessage += "<p>Your phone number is not valid<p>";

    }
    if ($("#password").val() != $("#passwordConfirm").val()) {
        errorMessage += "<p>Your password are not match<p>";

    }
    if (errorMessage != "") {
        $("#errorMessage").html(errorMessage);
    }else {
        $("#sucessMessage").show();
        $("#errorMessage").hide();
    }
    if ($("#errorMessage").is(":hidden") && $("#sucessMessage").is(":hidden")) {
        $("#errorMessage").show();
    }
});
