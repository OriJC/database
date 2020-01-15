<?php
    $db_host='127.0.0.1';
    $db_user='root';
    $db_pass='';
    $db_name='gamedb';
    $conn = mysqli_connect($db_host, $db_user, $db_pass);
    if (!$conn)
    {
        echo 'in Game_insert.php not connected to server';
    }

    if (!mysqli_select_db($conn, $db_name))
    {
        echo 'Database Not Selected';
    }

    $Game_title = $_POST['Game_title'];
    $Category = $_POST['Category'];
    $Game_ID  = $_POST['Game_ID'];
    $G_Producer_ID = $_POST['G_Producer_ID'];

    $sql = "INSERT INTO game (Game_title, Category, Game_ID, G_Producer_ID) 
            VALUES ('$Game_title', '$Category', '$Game_ID', '$G_Producer_ID')";

    if(!mysqli_query($conn, $sql))
    {
        echo 'in Game_insert.php Not Inserted';
    }
    else
    {
        echo 'in Game_insert.php Inserted';
    }

    header("refresh:2; url = Game.php");
