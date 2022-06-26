var swiper2 = new Swiper(".connectionwiper", {
    slidesPerView: "auto",
    spaceBetween: 0,
    pagination: false
});


$(document).ready(function () {

});

function modal_surat(id) {
    $.ajax({
        url: BASE_URL + "surat/modal_detail",
        method: "POST",
        data: {
            id_surat_ijin: id
        },
        cache: false,
        beforeSend() {
            $('#display_ijin').html(html_loader);
        },
        success: function (msg) {
            $('#display_ijin').html(msg);
        }
    })
}