var contactMeBtn = document.getElementById("contact-me");
var form = document.getElementById("contact-form");
contactMeBtn.addEventListener('click', contactMeBtnClicked);

function contactMeBtnClicked() {
    form.classList.toggle('form-active');
}