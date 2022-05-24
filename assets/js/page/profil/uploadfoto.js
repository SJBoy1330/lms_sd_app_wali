function previewImage(id_sekolah, id_wali) {
    const photo = document.querySelector('#photo');
    const getPhoto = document.querySelector('#photouser');

    getPhoto.style.display = 'block';

    let file = photo.files[0];
    const oFReader = new FileReader();
    oFReader.readAsDataURL(file);

    let formdata = new FormData();
    formdata.append("id_sekolah", id_sekolah);
    formdata.append("id_wali", id_wali);
    formdata.append("foto", file);

    $.ajax({
        url: "https://sd.klasq.id/api/wali/profil/edit_foto/",
        data: formdata,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function (data) {
            console.log("sukses update");
        },
        error: function (e) {
            console.log(e);
        }
    })

    oFReader.onload = function (oFREvent) {
        getPhoto.src = oFREvent.target.result;
    }
}
console.log('ok');