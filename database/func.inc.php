<?php
    
    include_once 'db.inc.php';

    function connect() {
        mysql_connect(DB_HOST, DB_USER, DB_PASS) or die('Could not connect to the database'. mysql_error());
        mysql_select_db(DB_NAME);
    }

    function close() {
        mysql_close();
    }

    function query(){
        $myData = mysql_query("SELECT * FROM skills");
        while($record = mysql_fetch_array($myData)){
           echo '<option value=" '. $record['items'] .'">' . $record['items'] . '</option>';
        }
    }
?>