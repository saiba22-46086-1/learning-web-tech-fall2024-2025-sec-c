<?php
session_start();
if (isset($_REQUEST['submit']))
{
    $name = $_POST['name'];
   
    $emailid= $_POST['emailid'];
    $password =$_POST['password'];
    $phonenum =$_POST['phonenum'];
 
    $gender = '';
    if (isset($_POST['gender']))
    {
        $gender = $_POST['gender'];
    }


    $day = null;
    if (isset($_POST['day']))
    {
        $day = (int)$_POST['day'];
    }
 
    $month = null;
    if (isset($_POST['month']))
    {
        $month = (int)$_POST['month'];
    }
 
    $year = null;
    if (isset($_POST['year']))
    {
        $year = (int)$_POST['year'];
    }
 
 
 
    function validate_name($name)
    {
        if (empty($name) || strlen($name) < 2 || !ctype_alpha($name[0]))
        {
            return false;
        }
 
        for ($i = 1; $i < strlen($name); $i++)
        {
            if (!(ctype_alpha($name[$i]) || is_numeric($name[$i]) || $name[$i] == '_')) {
                return false;
            }
        }
        return true;
    }

    $check = validate_name($name); 
   
 
    $check_email = false;
    if (!empty($emailid))
    {
        $arr = explode(".", $emailid);
        if (count($arr) == 2)
        {
            if ($arr[1] == "com" || $arr[1] == "edu" )  
            {
                $arr2 = explode("@", $arr[0]);
                if (ctype_alpha($arr2[0][0]))
                {
                    if (count($arr2) == 2)
                    {
                        $check_email = true;
                    }
                }
            }
        }
    }
 
    $check_gender = false;
    if (!empty($gender)) {
        $check_gender = true;
    }


    
   
 
    $check_dob = false;
    if (!empty($day) && !empty($month) && !empty($year))
    {
        if ($day >= 1 && $day <= 31 && $month >= 1 && $month <= 12 && $year >= 1900 && $year <= 2024)
        {
            if (checkdate($month, $day, $year))
            {
                $check_dob = true;
            }
        }
    }


    $check_password = false;
    if (!empty($password))
    {
       $check_password = true;
           
        
    }


    $check_phonenum = false;
    if (!empty($phonenum))
    {
       $check_phonenum = true;
           
        
    }
 
 
    if ($check && $check_email && $check_gender && $check_dob && $check_phonenum && $check_password)
    {
        $_SESSION['status'] = true;
        $stored_info=['name'=> $name ,'email'=> $emailid , 'gender'=>$gender,'day'=>$day,'month'=>$month,'year'=>$year,'phonenum'=>$phonenum,'password'=>$password];
        header('location: home.php');
    }
   
    else
    {
        header('location: invalid.php');
    }
}
?>