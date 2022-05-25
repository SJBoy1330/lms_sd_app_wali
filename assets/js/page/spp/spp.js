var swiper2 = new Swiper(".connectionwiper", {
    slidesPerView: "auto",
    spaceBetween: 0,
    pagination: false
});

$(document).ready(function () {
    $('.button_detail_ajax').on('click', function () {
        var id_siswa = $(this).data('siswa');
        var id_tagihan = $(this).data('tagihan');

        $.ajax({
            url: BASE_URL + "spp/modal_detail_tagihan",
            method: "POST",
            data: {
                id_siswa: id_siswa,
                id_tagihan: id_tagihan
            },
            success: function (data) {
                $('#display_content').html(data);
            }
        })
    })
});
