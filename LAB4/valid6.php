<html>
<head>
    <title>Form 6</title>
</head>
<body>
    <form action="" method="POST">
        <fieldset>
            <legend><b>Blood Group</b></legend>
            <select name="bgrp">
                <option value=""></option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
            </select>
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>

    <?php
    if (isset($_POST['bgrp']))
    {
        $bgrp = $_POST['bgrp']; 
        if (empty($bgrp))
        {
            echo "Select the blood group";
        }
        else
        {
            echo "Blood group is selected";
        }
    }
    ?>
</body>
</html>