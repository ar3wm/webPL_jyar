<!doctype html>
    <html>
        <head>
            <link rel="stylesheet" href="main.css">
            <meta charset="UTF-8">
            <title>
                Home
            </title>
        </head>
        <body>
            <div class = "row">
                <div class="column">
                    &nbsp;
                    <!--Empty Column-->
                </div>

                <div class="column">
                    <h1 style="color:black;">
                        <center>
                        My Homepage
                        </center>
                    </h1>
                </div>

                <div class="column" align="right">
                    <!--sign in button-->
                    <button type="button" style="height: 25px; width: 100px;"
                    onclick="window.location.href='signInPage.html';">Sign In</button>
                </div>
            </div>
            <ul>
                <li><a class="active" href="home.php">Home</a></li>
                <!-- <li><a href="classSchedule.html">Classes</a></li> -->
                <li><a href="todo.php">To Do</a></li>
                <li><a href="favorites.php">Favorites</a></li>
            </ul>

            <div class="row">
                <!-- <div class="column" style="background-color:#ff8c00;">
                    <h2>
                        <center>
                            <a href="classSchedule.php">
                            Classes
                            </a>
                        </center>
                    </h2>
                </div> -->
                <div class="column" style="background-color:blue;">
                    <h2>
                        <center>
                            <a href="todo.php">
                            To Do
                            </a>
                        </center>
                    </h2>
                </div>
                <div class="column" style="background-color:#ff8c00;">
                    <h2>
                        <center>
                            <a href="favorites.php">
                            Favorites
                            </a>
                        </center>
                    </h2>
                </div>
            </div>
        </body>
    </html>