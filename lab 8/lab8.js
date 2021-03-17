const c = 2.34
const k = 2.57
function calc1(form) {
    form.result.value= Math.exp(c) + (4-Math.sin(c*k))/Math.pow(Math.sin(k), 2) }
function calc2(form2) {
    form2.result.value= Math.pow(k,2)/(Math.pow(4+k,2)) + c }
