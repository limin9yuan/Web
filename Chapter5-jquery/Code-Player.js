function updateOutput() {
    $("iframe").contents().find("html").html("<html><head><style type='text/css'>"
    + $("#cssTextArea").val()
    + "</style></head><body>"
    + $("#htmlTextArea").val()
    + "</body></html>");
    // document.getElementById("outputTextArea").contentWindow.
    // eval($("#javascriptTextArea").val());

}
$(".buttons").hover(function () {
    $(this).addClass("highLightedButton");
},
function () {
    $(this).removeClass("highLightedButton");

})
$(".buttons").click(function () {
    $(this).toggleClass("active");
    $(this).removeClass("highLightedButton");
    var clickID = $(this).attr("id") + "TextArea";
    $("#" + clickID).toggleClass("hidden");
    var numberOfActiveArea = 4 - $(".hidden").length;
    $(".panel").width($(window).width() / numberOfActiveArea - 5);

})
$(".panel").height($(window).height() - $("#header").height());
$(".panel").width($(window).width() / 2 - 5);
updateOutput();
$("textarea").on("change keyup paste", function() {
    updateOutput();
})
