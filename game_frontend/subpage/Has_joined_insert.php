<?php
    $db_host='127.0.0.1';
    $db_user='root';
    $db_pass='';
    $db_name='gamedb';
    $conn = mysqli_connect($db_host, $db_user, $db_pass);
    if (!$conn)
    {
        echo 'in Has_joined_insert.php not connected to server';
    }

    if (!mysqli_select_db($conn, $db_name))
    {
        echo 'Database Not Selected';
    }

    $T_SSID = $_POST['T_SSID'];
    $Com_ID = $_POST['Com_ID'];

    $sql = "INSERT INTO has_joined (T_SSID, Com_ID) 
            VALUES ('$T_SSID', '$Com_ID')";

    if(!mysqli_query($conn, $sql))
    {
        echo 'in Has_joined_insert.php Not Inserted';
    }
    else
    {
        echo 'in Has_joined_insert.php Inserted';
    }

    header("refresh:2; url = Has_joined.php");
