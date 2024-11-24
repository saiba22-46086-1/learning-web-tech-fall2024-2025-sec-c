<?php
session_start();
    if(!isset($_SESSION['status']))
    {
        header('location: login.php'); 
    }
?>

<html>
        <head>
            <title>Home</title>
        </head>
        <body>

          <form action= 'logout.php' method='POST'>  
                <h1>Welcome to Home</h1>
                <?php
                    echo $_SESSION['stored_infos']['name'];

                    foreach($_SESSION['stored_infos'] as $std)
                    {
                        echo $std."<br>";
                    }
            
                ?>
                <input type="submit" name="logout" value="Logout">
                </form>
        </body>
    </html>