<?php
    $url = "http://168.254.169.254/latest/meta-data/instance-id";
    $instance_id = file_get_contents($url);
    echo " <h1> <font color='black'> Instance ID: <b>" . $instance_id . "</b><br/></font></h1>";
?>