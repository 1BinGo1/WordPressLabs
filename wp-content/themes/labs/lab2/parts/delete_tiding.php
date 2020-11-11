<?php
    require_once get_template_directory() . '/lab2/parts/connect.php';
    $link->query("DELETE FROM `news-lab-two` WHERE id = {$_POST['id']} ");
