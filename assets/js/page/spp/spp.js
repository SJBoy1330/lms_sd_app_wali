var swiper2 = new Swiper(".connectionwiper", {
    slidesPerView: "auto",
    spaceBetween: 0,
    pagination: false
});

$(document).ready(function () {
    $('.button_detail_ajax').on('click', function () {
        var id = $(this).data('id');
        // console.log(id);
        $('#tampil_sementara').text("ID nya : " + id);
    })
});
