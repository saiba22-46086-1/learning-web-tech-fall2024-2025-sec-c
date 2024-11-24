<html>
<head>
    <title>HTML Form</title>
</head>
<body>
        <h1>login page </h1>

        <form action="home.php" method="POST">

            <table width="40%" align="center" height="50%">
                <tr>
                    <td>
                
                
                      <fieldset>
                      <legend>login page</legend>
                      <table  height="50%" width="50%">
                    <tr>
                        <td>Name:</td>
                        <td><input type="text" name="name" value=""  placeholder="Enter your Name"/></td>
                    </tr>
                    

                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" value="" placeholder="Enter your password" /></td>
                    </tr>

                    </td>    
             </tr>
             <tr>

             <td></td>
                        <td>
                           
                            <input type="submit" name="login" value="login" />
                           
                        </td>

            </tr>

</table>
</fieldset>
<?php
    session_start();
    if (isset($_REQUEST['login']))
    {
        $name = $_POST['name'];
        $password = $_POST['password'];

        if ($name == $_SESSION[' stored_infos']['name'] && $password == $_SESSION['stored_infos'][' password'])
        {
            $_SESSION['status'] = true;
            header('location: home.php');
        }

        else
        {
            header('location: registration_form.html');
        }
    }
    
   
?>


  
</body>
</html>