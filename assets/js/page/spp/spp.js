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
            cache: false,
            success: function (data) {
                $('#display_content').html(data);
            }
        })
    })


    $('#select_metode').on('change', function () {
        var id_metode = $(this).val();
        // console.log(id_metode);
        const div = document.querySelector('#bank_display_' + id_metode);
        const active_div = document.querySelector('.active_div');
        active_div.classList.add('d-none');
        active_div.classList.remove('active_div');
        if (id_metode != '') {
            $('#input-file').prop("disabled", false);
            button_upload_bukti.classList.remove("btn-disabled");
            div.classList.remove('d-none');
            div.classList.add('active_div');
        }
    });


    $('.button_bayar_ajax').on('click', function () {
        var id_siswa = $(this).data('siswa');
        var id_tagihan = $(this).data('tagihan');
        const button_upload_bukti = document.querySelector("#button_upload_bukti");
        $.ajax({
            url: BASE_URL + "spp/modal_bayar_tagihan",
            method: "POST",
            data: {
                id_siswa: id_siswa,
                id_tagihan: id_tagihan
            },
            dataType: 'json',
            cache: false,
            success: function (data) {
                $('#no_tagihan').text(data.no_tagihan);
                $('#kategori_pembayaran').text(data.nama_kategori);
                $('#jumlah_pembayaran').text(data.jumlah);
                $('#input_id_tagihan').val(data.id_tagihan);
            }
        })
    })


    $('#input-file').on('change', function () {
        const bukti = document.querySelector('#input-file');

        let file = bukti.files[0];

        let formdata = new FormData();
        formdata.append("bukti", file);
        formdata.append("id_tagihan", $('#input_id_tagihan').val());
        formdata.append("id_metode_bayar", $('#select_metode').val());

        $.ajax({
            url: BASE_URL + "spp/bayar",
            data: formdata,
            processData: false,
            contentType: false,
            method: 'POST',
            dataType: 'json',
            cache: false,
            success: function (data) {
                if (data.status == 200 || data.status == true) {
                    Swal.fire({
                        title: 'PEMBERITAHUAN',
                        text: data.message,
                        icon: 'success',
                        buttonsStyling: !1,
                        confirmButtonText: "Ok",
                        customClass: {
                            confirmButton: css_button
                        }
                    }).then(function () {
                        location.reload();
                    });

                } else {
                    Swal.fire({
                        title: 'PERINGATAN',
                        text: data.message,
                        icon: 'warning',
                        buttonsStyling: !1,
                        confirmButtonText: "Ok",
                        customClass: {
                            confirmButton: css_button
                        }
                    })
                }
            }
        })
    });

});
