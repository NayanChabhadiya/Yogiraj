$(document).ready(function (e) {

    let $uploadfile = $('.upload-profile-image input[type="file"]');

    $uploadfile.change(function () {
        readURL(this);
    });



});

function readURL(input) {
    if(input.files && input.files[0]){
        let reader = new FileReader();
        reader.onload = function (e) {
            $(".upload-profile-image .img").attr('src', e.target.result);
            $(".upload-profile-image .camera-icon").css({display: "none"});
        }

        reader.readAsDataURL(input.files[0]);

    }
}
