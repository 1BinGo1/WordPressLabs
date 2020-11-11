<?php
    $files = explode(',', $_POST['files']);
    unlink( get_template_directory() . "/lab3/images/" . $files[1]);
    unlink(get_template_directory() . "/lab3/pdf/" . $files[0] . ".pdf");
    if (isset($files[2])){
        unlink(get_template_directory() . "/lab3/images/" . $files[3]);
        unlink(get_template_directory() . "/lab3/pdf/" . $files[2] . ".pdf");
    }









