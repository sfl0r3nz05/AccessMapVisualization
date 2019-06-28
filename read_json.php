<?php
    $json = $_POST['json'];
    $data = file_get_contents($json);
    echo $data;
?>