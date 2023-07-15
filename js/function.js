
$(document).ready(function(){
    $('.nope').mask('000-0000-0000000');
});

let btnLogin = document.getElementById("send_data");
let inputTlp = document.getElementById("nope");
btnLogin.disabled = true;
inputTlp.addEventListener("input", function() {
    if (inputTlp.value.length < 10) {
        btnLogin.disabled = true;
    } else {
        btnLogin.disabled = false;
    }
});

inputTlp.addEventListener("input", function() {
    if (inputTlp.value == '0') {
        inputTlp.value = '';
    } else if (inputTlp.value == '62') {
        inputTlp.value = '';
    }
});

btnLogin.addEventListener('click', showLoad)
function showLoad(){
    inputTlp.readOnly = true;
    let xx = document.getElementById('process');
    xx.style.display = 'flex';
}