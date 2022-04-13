<?php include_once("header.php"); ?>
<div id="reload-content">
    <?php

    echo alert_show($this->session->flashdata('judul'), $this->session->flashdata('message'), $this->session->flashdata('icon'), $this->session->flashdata('image'));

    ?>
    <?php
    if (isset($css_add) && is_array($css_add)) {
        foreach ($css_add as $css) {
            echo $css;
        }
    } else {
        echo (isset($css_add) && ($css_add != "") ? $css_add : "");
    }
    ?>
    <?php echo $content; ?>
    <?php include_once("javascript.php"); ?>
</div>

<?php include_once("footer.php"); ?>