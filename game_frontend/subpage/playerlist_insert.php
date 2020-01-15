<?php
    $db_host='127.0.0.1';
    $db_user='root';
    $db_pass='';
    $db_name='gamedb';
    $conn = mysqli_connect($db_host, $db_user, $db_pass);
    if (!$conn)
    {
        echo 'in playerlist_insert.php not connected to server';
    }

    if (!mysqli_select_db($conn, $db_name))
    {
        echo 'Database Not Selected';
    }

    $Name = $_POST['Name'];
    $Salary = $_POST['Salary'];
    $Nationality  = $_POST['Nationality'];
    $P_SSID = $_POST['P_SSID'];
    $P_Team_ID = $_POST['P_Team_ID'];
    $P_Game_ID = $_POST['P_Game_ID'];

    $sql = "INSERT INTO player (Name, Salary, Nationality, P_SSID, P_Team_ID, P_Game_ID) 
            VALUES ('$Name', '$Salary', '$Nationality', '$P_SSID', '$P_Team_ID', '$P_Game_ID')";

    if(!mysqli_query($conn, $sql))
    {
        echo 'in playerlist_insert.php Not Inserted';
    }
    else
    {
        echo 'in playerlist_insert.php Inserted';
    }

    header("refresh:2; url = playerlist.php");
