function materi(evt, page) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent-ujian");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    document.getElementById(page).style.display = "block";

}