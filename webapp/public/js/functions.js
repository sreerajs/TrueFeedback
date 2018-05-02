/**
 * Avatar Upload Checker
 * @author Tittu Varghese (tittu@servntire.com)
 **/

if ($("#file_input_avatar").length) {
    document.getElementById("file_input_avatar").onchange = function () {
        document.getElementById("avatarUploadForm").submit();
    };
}

/**
 * Alert Box Automatic Fadeout
 * @author Tittu Varghese (tittu@servntire.com)
 **/

if ($(".c-alert").length) {
    setTimeout(function () {
        $('.c-alert').fadeOut()
    }, 3000);
}

function createSurvey() {
  console.log(JSON.parse(window.sessionStorage.getItem('formData')));
}
