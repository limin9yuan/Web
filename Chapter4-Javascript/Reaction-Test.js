var startTime = performance.now();
function randomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++ ) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}
function appear() {
    var top = Math.random() * 300;
    var left = Math.random() * 500;
    var width = Math.random() * 400 + 100;
    if (Math.random() > 0.5) {
        document.getElementById("shape").style.borderRadius = "50%";

    }
    else {
        document.getElementById("shape").style.borderRadius = "0";
    }
    document.getElementById("shape").style.backgroundColor = randomColor();
    document.getElementById("shape").style.width = width + "px";
    document.getElementById("shape").style.height = width + "px";
    document.getElementById("shape").style.top = top + "px";
    document.getElementById("shape").style.left = left + "px";
    document.getElementById("shape").style.display = "block";
    startTime = performance.now();

}
function appearAgain() {
    setTimeout(appear, Math.random() * 2000);
}
appearAgain();
document.getElementById("shape").onclick = function () {
    var endTime = performance.now();
    var result = (endTime - startTime) / 1000;
    document.getElementById("shape").style.display = "none";
    document.getElementById("timeUsed").innerHTML = result + " s";
    appearAgain();
}
