<?php
    require_once get_template_directory() . '/lab2/parts/connect.php';
    $link->query("UPDATE `news-lab-two` SET `count_likes` = {$_POST['count_likes']} WHERE `id` = {$_POST['id']} ");
