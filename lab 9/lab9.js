
let event = document.querySelector('#button');
event.addEventListener('click',printStudent);
event.addEventListener('click', document.querySelector("#display").style.color = "blue");

function printStudent() {
    const student = new Student(
        document.getElementById("surname").value,
        document.getElementById("name").value,
        document.getElementById("mathMark").value,
        document.getElementById("physicsMark").value,
        document.getElementById("informaticsMark").value
    );

    document.getElementById("display").innerHTML =
       "Hello," + student.name + " " + student.surname + "<br/>" +
        student.mathMark + "<br/>" +
        student.physicsMark + "<br/>" +
       student.informaticsMark + "<br/>"
}


