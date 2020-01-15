<?php
    $db_host='127.0.0.1';
    $db_user='root';
    $db_pass='';
    $db_name='gamedb';
    $conn = mysqli_connect($db_host, $db_user, $db_pass);
    if (!$conn)
    {
        echo 'in producer_insert.php not connected to server';
    }

    if (!mysqli_select_db($conn, $db_name))
    {
        echo 'Database Not Selected';
    }

    $Company_Name = $_POST['Company_Name'];
    $Company_ID = $_POST['Company_ID'];

    $sql = "INSERT INTO game_producer (Company_Name, Company_ID) 
            VALUES ('$Company_Name', '$Company_ID')";

    if(!mysqli_query($conn, $sql))
    {
        echo 'in producer_insert.php Not Inserted';
    }
    else
    {
        echo 'in producer_insert.php Inserted';
    }

    header("refresh:2; url = producer.php");
