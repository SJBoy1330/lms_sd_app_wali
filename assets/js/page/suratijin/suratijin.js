var swiper2 = new Swiper(".connectionwiper", {
    slidesPerView: "auto",
    spaceBetween: 0,
    pagination: false
});


$(document).ready(function () {
    $('.detail_surat').on('click', function () {
        var id = $(this).data('id');
        $.ajax({
            url: BASE_URL + "surat/modal_detail",
            method: "POST",
            data: {
                id_surat_ijin: id
            },
            cache: false,
            success: function (msg) {
                $('#display_ijin').html(msg);
            }
        })
    });
});
