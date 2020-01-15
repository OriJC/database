<?php
    $db_host='127.0.0.1';
    $db_user='root';
    $db_pass='';
    $db_name='gamedb';
    $conn = mysqli_connect($db_host, $db_user, $db_pass);
    if (!$conn)
    {
        echo 'in Sponsor_insert.php not connected to server';
    }

    if (!mysqli_select_db($conn, $db_name))
    {
        echo 'Database Not Selected';
    }

    $Sponsor_ID = $_POST['Sponsor_ID'];
    $Sponsor_Name = $_POST['Sponsor_Name'];

    $sql = "INSERT INTO sponsor (Sponsor_ID, Sponsor_Name) 
            VALUES ('$Sponsor_ID', '$Sponsor_Name')";

    if(!mysqli_query($conn, $sql))
    {
        echo 'in Sponsor_insert.php Not Inserted';
    }
    else
    {
        echo 'in Sponsor_insert.php Inserted';
    }

    header("refresh:2; url = Sponsor.php");
