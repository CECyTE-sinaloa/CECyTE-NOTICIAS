<?php

    define('DB_SERVER', 'sql310.tonohost.com');
    define('DB_USERNAME', 'ottos_24538487');
    define('DB_PASSWORD', '27mayo2002');
    define('DB_NAME', 'ottos_24538487_login_tuto');

    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if($link === false){
        die("ERROR EN LA CONEXION" . mysqli_connect_error());
    }
?>