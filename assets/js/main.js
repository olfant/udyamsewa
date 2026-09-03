
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
document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("main-form");
    const submitButton = document.getElementById("ApplicationFormsubmitButton");
    const originalText = submitButton.textContent;
    
    form.addEventListener("submit", function (event) {
        submitButton.textContent = "Please wait...";
        submitButton.disabled = true;
        setTimeout(() => {
            submitButton.textContent = originalText;
            submitButton.disabled = false;
        }, 3000);
    });

    form.addEventListener("reset", function () {
        submitButton.textContent = originalText;
        submitButton.disabled = false;
    });
});
