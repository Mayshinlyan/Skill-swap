<?php 
    include_once 'func.inc.php';
    connect();
?>


<!doctype html>
<html>
<head> 
    <title>Test</title>
</head>
    
<body>
    
    
    
    <form action="" method="post">
        <label>First Name</label>
        <input type="text" name="fname"> <br><br>
        
        <label>Last Name</label>
        <input type="text" name="lname"> <br><br>
        
        <label>Email</label>
        <input type=email name="email"> <br><br>
        
        <label>Skills</label>
        <select name="skills">
        <?php query() ?>
        </select>
        <?php close() ?> <br><br>
        
        <input type="submit" name="submit" value="Submit">
    </form>
    

</body>


</html>