<?php
//FUNCTION TO CREATE CONNECTION TO THE SERVER AND RETURN THE CONNECTION OBJECT.
    function set_conn(){
    /* Attempt MySQL server connection.*/

    $db_connect = mysqli_connect("localhost", "Dark_purple", "password");

    // Check connection

    if($db_connect === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    return $db_connect;
}
    
?>