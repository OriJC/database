<?php
    $db_host='127.0.0.1';
    $db_user='root';
    $db_pass='';
    $db_name='gamedb';
    $conn = mysqli_connect($db_host, $db_user, $db_pass);
    if (!$conn)
    {
        echo 'in coach_insert.php not connected to server';
    }

    if (!mysqli_select_db($conn, $db_name))
    {
        echo 'Database Not Selected';
    }

    $Coach_ID = $_POST['Coach_ID'];
    $Coach_Name = $_POST['Coach_Name'];

    $sql = "INSERT INTO coach (Coach_Name, Coach_ID) 
            VALUES ('$Coach_Name', '$Coach_ID')";

    if(!mysqli_query($conn, $sql))
    {
        echo 'in coach_insert.php Not Inserted';
    }
    else
    {
        echo 'in coach_insert.php Inserted';
    }

    header("refresh:2; url = coach.php");
