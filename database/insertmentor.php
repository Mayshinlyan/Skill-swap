<?php
    
    include_once('func.inc.php');

        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $skills=$_POST['skills'];
        $password=$_POST['password'];
        
        $fname=mysql_real_escape_string($fname);
        $lname=mysql_real_escape_string($lname);
        $email=mysql_real_escape_string($email);
        $skills=mysql_real_escape_string($skills);
        $password=mysql_real_escape_string($password);
        
        connect();
        
        $query = "
            INSERT INTO mentors (mentorID, first_name, last_name, email, password, skills)
            VALUES (null,'".$fname."', '".$lname."', '".$email."', '".$password."', '".$skills."');
        ";
             
        mysql_query($query) or die('Could not connect to the database'. mysql_error());
            
        close();
?>

<script type="text/javascript">
   alert("The form is submitted!");
</script>