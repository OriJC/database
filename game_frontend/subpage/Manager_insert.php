<?php
    $db_host='127.0.0.1';
    $db_user='root';
    $db_pass='';
    $db_name='gamedb';
    $conn = mysqli_connect($db_host, $db_user, $db_pass);
    if (!$conn)
    {
        echo 'in Manager_insert.php not connected to server';
    }

    if (!mysqli_select_db($conn, $db_name))
    {
        echo 'Database Not Selected';
    }

    $Salary  = $_POST['Salary'];
    $Nationality = $_POST['Nationality'];
    $Name = $_POST['Name'];
    $M_SSID = $_POST['M_SSID'];

    $sql = "INSERT INTO manager (Salary, Nationality, Name, M_SSID) 
            VALUES ('$Salary', '$Nationality', '$Name', '$M_SSID')";

    if(!mysqli_query($conn, $sql))
    {
        echo 'in Manager_insert.php Not Inserted';
    }
    else
    {
        echo 'in Manager_insert.php Inserted';
    }

    header("refresh:2; url = Manager.php");
