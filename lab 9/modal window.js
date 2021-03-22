var modal = document.getElementById('myModal');
var myBtn = document.getElementById('myBtn');
var span = document.getElementsByClassName("close")[0];

myBtn.onclick = function () {
    modal.style.display = "block";
}
span.onclick = function () {
    modal.style.display = "none";
}
window.onclick = function (event) {
    if(event.target == modal) {
        modal.style.display = "none";
    }
}