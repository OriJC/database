<?php
    $db_host='127.0.0.1';
    $db_user='root';
    $db_pass='';
    $db_name='gamedb';
    $conn = mysqli_connect($db_host, $db_user, $db_pass);
    if (!$conn)
    {
        echo 'in comp_insert.php not connected to server';
    }

    if (!mysqli_select_db($conn, $db_name))
    {
        echo 'Database Not Selected';
    }

    $Arena = $_POST['Arena'];
    $Regional = $_POST['Regional'];
    $Name  = $_POST['Name'];
    $prize = $_POST['prize'];
    $Com_ID = $_POST['Com_ID'];
    $Game_ID = $_POST['Game_ID'];

    $sql = "INSERT INTO competition (Arena, Regional, Name, prize, Com_ID, Game_ID) 
            VALUES ('$Arena', '$Regional', '$Name', '$prize', '$Com_ID', '$Game_ID')";

    if(!mysqli_query($conn, $sql))
    {
        echo 'in comp_insert.php Not Inserted';
    }
    else
    {
        echo 'in comp_insert.php Inserted';
    }

    header("refresh:2; url = competition.php");
