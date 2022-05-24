<?php
    $url = "http://168.254.169.254/latest/meta-data/instance-id";
    $instance_id = file_get_contents($url);
    echo " <h1> <font color='blue'> Instance ID: <b>" . $instance_id . "</b></font></h1>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="grey">
    <div>
       <h1><a href="https://microsoft.com">MICROSOFT MICHEL</a></h1>
    </div>
</body>
</html>