<?php
    $db_host='127.0.0.1';
    $db_user='root';
    $db_pass='';
    $db_name='gamedb';
    $conn = mysqli_connect($db_host, $db_user, $db_pass);
    if (!$conn)
    {
        echo 'in Is_sponsor_of_insert.php not connected to server';
    }

    if (!mysqli_select_db($conn, $db_name))
    {
        echo 'Database Not Selected';
    }

    $Team_ID = $_POST['Team_ID'];
    $Sponsor_ID = $_POST['Sponsor_ID'];

    $sql = "INSERT INTO is_sponsor (Team_ID, Sponsor_ID) 
            VALUES ('$Team_ID', '$Sponsor_ID')";

    if(!mysqli_query($conn, $sql))
    {
        echo 'in Is_sponsor_of_insert.php Not Inserted';
    }
    else
    {
        echo 'in Is_sponsor_of_insert.php Inserted';
    }

    header("refresh:2; url = Is_sponsor_of.php");
