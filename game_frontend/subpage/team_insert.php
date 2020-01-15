<?php
    $db_host='127.0.0.1';
    $db_user='root';
    $db_pass='';
    $db_name='gamedb';
    $conn = mysqli_connect($db_host, $db_user, $db_pass);
    if (!$conn)
    {
        echo 'in team_insert.php not connected to server';
    }

    if (!mysqli_select_db($conn, $db_name))
    {
        echo 'Database Not Selected';
    }

    $Team_Color = $_POST['Team_Color'];
    $Team_Name = $_POST['Team_Name'];
    $Team_ID  = $_POST['Team_ID'];
    $T_M_SSID = $_POST['T_M_SSID'];
    $T_Coach_ID = $_POST['T_Coach_ID'];
    $T_Game_ID = $_POST['T_Game_ID'];

    $sql = "INSERT INTO team (Team_Color, Team_Name, Team_ID, T_M_SSID, T_Coach_ID, T_Game_ID) 
            VALUES ('$Team_Color', '$Team_Name', '$Team_ID', '$T_M_SSID', '$T_Coach_ID', '$T_Game_ID')";

    if(!mysqli_query($conn, $sql))
    {
        echo 'in team_insert.php Not Inserted';
    }
    else
    {
        echo 'in team_insert.php Inserted';
    }

    header("refresh:2; url = team.php");
