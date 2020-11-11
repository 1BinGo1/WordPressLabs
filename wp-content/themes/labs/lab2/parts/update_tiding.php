<?php
    require_once get_template_directory() . '/lab2/parts/connect.php';
    $id = (int)$_POST['id'];
    $tiding = $link->query("SELECT * FROM `news-lab-two` WHERE `id` = {$id} ")->fetch_assoc();
    if ($tiding['status'] == 1){
        $link->query("UPDATE `news-lab-two` SET `status` = 2 WHERE `id` = {$id} ");
    }
    else{
        $link->query("UPDATE `news-lab-two` SET `status` = 1 WHERE `id` = {$id} ");
    }
