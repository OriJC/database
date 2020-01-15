<html lang="zh-TW">
    <head>
        <title>Database Project</title>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatiable" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/index.css">
    </head>

    <body>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            
            <a class="navbar-brand" href="../index.php"><img src="../img/db.png" class="logo">Esports Database</a>
           
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                       Team
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="./team.php">List</a>
                        <a class="dropdown-item" href="./Manager.php">Manager</a>
                        <a class="dropdown-item" href="./playerlist.php">Player</a>
                        <a class="dropdown-item" href="./Sponsor.php">Sponsor</a>
                        <a class="dropdown-item" href="./coach.php">coach</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Esports
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="./competition.php">Competition</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Game
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="./Game.php">List</a>
                    <a class="dropdown-item" href="./producer.php">Producer</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                      Relation
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="./Has_joined.php">Has Joined</a>
                      <a class="dropdown-item" href="./Is_sponsor_of.php">Team Sponsor</a>                    </div>
                  </li>
              </ul>
          
                       
            
        </nav>
        <table class="tableform" align="center">
        <?php
        $db_host='127.0.0.1';
        $db_user='root';
        $db_pass='';
        $db_name='gamedb';

        $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
        if (!$conn)
        {
            die ('failed to connect mysql database'.mysql_connect_error());
        }

        $sql = 'select * from competition';
        $query = mysqli_query($conn,$sql);

            if (!$query)
            {
                die ('error found'.mysqli_error($conn));
            }

            echo "
            <table class='tableform' align='center'>
            <tr>
            <th>Arena</th>
            <th>Regional</th>
            <th>Name</th>
            <th>prize</th>
            <th>Com_ID</th>
            <th>Game_ID</th>
            </tr>";

            while ($row = mysqli_fetch_array($query))
            {
                echo ' <tr>
                <td>'.$row['Arena'].'</td>
                <td>'.$row['Regional'].'</td>
                <td>'.$row['Name'].'</td>
                <td>'.$row['prize'].'</td>
                <td>'.$row['Com_ID'].'</td>
                <td>'.$row['Game_ID'].'</td>
                </tr>';
            }

        echo "</table>";
        ?>
        </table>



        <div align = "center">
        <form action="comp_insert.php" method = "post" class="tableform" align = "left">
            Arena: <input type = "text" name = "Arena">
                        <br/>
            Regional: <input type = "text" name = "Regional">
                        <br/>
            Name: <input type = "text" name = "Name">
                        <br/>
            prize: <input type = "text" name = "prize">
                        <br/>
            Com_ID: <input type = "text" name = "Com_ID">
                        <br/>
            Game_ID: <input type = "text" name = "Game_ID">
                        <br/>
            <input type="submit" value ="Insert">
        </form>
        </div>


    <div align=center>
        <a class="btn" href="#">1</a>
    </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>