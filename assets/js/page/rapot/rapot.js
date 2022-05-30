function materi(evt, page) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent-ujian");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    document.getElementById(page).style.display = "block";

}

function filter_rapot(property) {
    const prop_display = document.querySelectorAll("#display_ujian_detail .zoom-filter");
    var status = $('#status_ujian').val();
    var modal = new bootstrap.Modal(document.getElementById('filterUjian'))
    modal.hide()
    // console.log(status);
    prop_display.forEach((div) => {
        let attr_prop_display = div.getAttribute("data-status"); //getting image data-name value
        //if user selected item data-name value is equal to images data-name value
        //or user selected item data-name value is equal to "all"
        if ((attr_prop_display == status) || (status == "all")) {
            div.classList.remove("hiding"); //first remove the hide class from the image
            div.classList.add("showing"); //add show class in image
        } else {
            div.classList.add("hiding"); //add hide class in image
            div.classList.remove("showing"); //remove show class from the image
        }
    });
}