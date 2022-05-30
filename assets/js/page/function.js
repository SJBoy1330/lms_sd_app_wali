
function submit_form(element, id_form, num = 0) {
    // console.log('ok');
    var url = $(id_form).attr('action');
    var method = $(id_form).attr('method');
    // console.log(url);

    var form = $('form')[num];
    var form_data = new FormData(form);

    // console.log(form);
    $.ajax({
        url: url,
        method: method,
        data: form_data,
        contentType: false,
        cache: false,
        processData: false,
        dataType: 'json',
        beforeSend: function () {
            $('#' + element.id).prop('disabled', true);
        },
        success: function (data) {
            console.log(data);
            $('#' + element.id).prop('disabled', false);

            $('.fadedin').remove();

            if (data.status == 200 || data.status == true) {
                var icon = 'success';
            } else {
                var icon = 'warning';
            }
            if (data.alert) {
                Swal.fire({
                    title: data.alert.title,
                    text: data.alert.message,
                    icon: icon,
                    buttonsStyling: !1,
                    confirmButtonText: "Ok",
                    customClass: {
                        confirmButton: "btn btn-primary"
                    }
                }).then(function () {
                    if (data.redirect) {
                        location.href = data.redirect;
                    }
                    if (data.reload == true) {
                        location.reload();
                    }
                });
            } else {
                if (data.required) {
                    const array = data.required.length;
                    for (var i = 0; i < array; i++) {
                        $('#' + data.required[i][0]).append('<span class="text-danger fadedin">' + data.required[i][1] + '</span>');
                    }
                }
                if (data.redirect) {
                    location.href = data.redirect;
                }
            }
        }
    });

}


function search(element, id_tabel, property = 'tbody tr') {
    $(id_tabel + ' ' + property).filter(function () {
        $(this).toggle($(this).text().toLowerCase().indexOf(element.value.toLowerCase()) > -1);
    });
}