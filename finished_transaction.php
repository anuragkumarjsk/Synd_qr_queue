<!DOCTYPE html>
<html>
<head>
	<title>notification</title>
</head>
<body>
	    <?php
	    //importing 
        require_once('testing.php');
        require_once('connection.php');
        require_once('endconnection.php');
         $db_connect=set_conn();
         $db_select=mysqli_select_db($db_connect,'iptables');
         $v1 = 0;
         $v2 = ip_add();
         $sql = "INSERT INTO iptables.finished_transaction(scan_id, ip_address) VALUES ('$v1','$v2')";
             if(mysqli_query($db_connect, $sql)){
        echo "business ended successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($db_connect);
    }

        end_conn($db_connect);
		?>
	<h2> Thank you for doing busness with syndicate bank</h2><br>
	<h1> Please visit again </h1>
</body>
<footer>
	<p>branch_contact@:<h1>999988882</h1>email :<h1>syndicatebankranchi@gmail.com</h1></p>

   <script type="text/javascript">

 window.setTimeout(function(){
 	alert('you are about to be redirected');
        window.location = "localhost:1234/Series/hackathon/notification.php";

    }, 5000);

</script>
</footer>
</html>