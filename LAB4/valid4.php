<html lang="en">
<head>
    
    <title>Select Gender</title>
</head>
<body>
    <form action="valid4.php" method="POST">
        <fieldset>
          
            <legend><b>Gender</b></legend>
           
           <input type="radio" name="gender" value="Male">Male
           
          
     
           <input type="radio" name="gender" value="Female" >Female
          
       
           <input type="radio" name="gender" value="Others" >Other
         <hr>
       <input type="submit" name="submit" value="Submit">
   </fieldset>
</form>

        

    <?php
     
      if(isset($gender))
      {
          
      

    
      if (!empty($gender)) 
      {

          echo "<p><b>Selected Gender:</b> {$gender}</p>";
      } 
      else {

          echo "<p>Please select a gender.</p>";
      }

    }
    
?>
</body>
</html>
