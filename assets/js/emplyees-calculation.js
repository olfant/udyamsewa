
var mybutton = document.getElementById("myBtnTop");

setTimeout(function (){
    window.onscroll = function () { scrollFunction();navStick() };
},200);

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}
function topFunction() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}

document.getElementById('num1').value = 0; document.getElementById('num2').value = 0; document.getElementById('num3').value = 0;
function sum() {
    document.getElementById('total_sum').value = parseInt(document.getElementById('num1').value) + parseInt(document.getElementById('num2').value) + parseInt(document.getElementById('num3').value);
}