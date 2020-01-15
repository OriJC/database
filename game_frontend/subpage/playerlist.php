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
                        <a class="dropdown-item" href="./Coach.php">Coach</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Esports
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="./competition.php">Competition</a>
                        <a class="dropdown-item" href="./Competitionhist.php">History</a>
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
                      <a class="dropdown-item" href="./Has_played.php">Has Played</a>
                      <a class="dropdown-item" href="./Has_joined.php">Has Joined</a>
                    </div>
                  </li>
              </ul>
          
                       
            
        </nav>
        <table class="tableform" align="center" >
            <th>P_SSID</th>
            <th>Name</th>
            <th>Salary</th>
            <th>Nationality</th>
            <th>P_Team_ID</th>
            <th>P_Game_ID</th>
        <tr>
            <td >001</td>
            <td>Hono</td>
            <td>32000</td>
            <td>JP</td>
            <td>0022</td>
            <td>55</td>
        </tr>
        <tr>
            <td >002</td>
            <td>uui</td>
            <td>31000</td>
            <td>TW</td>
            <td>0022</td>
            <td>70</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
         </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
         </tr>
    </table><br>
    <div align=center>
        <a class="btn" href="#">1</a>
    </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>