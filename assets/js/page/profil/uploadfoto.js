function previewImage() {
    const photo = document.querySelector('#photo');
    const getPhoto = document.querySelector('#photouser');

    getPhoto.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(photo.files[0]);

    oFReader.onload = function (oFREvent) {
        getPhoto.src = oFREvent.target.result;
    }
}
console.log('ok');