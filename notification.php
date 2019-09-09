<!DOCTYPE html>
<html>
<head>
	<title>notification</title>
</head>
<body>
<?php
//function check_status(){
$status=1;
echo "ignore the WARNINGS, it might be due to presence of your server on localhost";
require_once('connection.php');
require_once('endconnection.php');
$db_connect = set_conn();

 //selecting previous(second last) ip from iptables
   $var="SELECT COUNT(token_id)";
     $sql1= "SELECT ip_address FROM iptables.iptables WHERE(token_id ==$var)";
   $res1=mysqli_query($db_connect,$sql1);
   $token_no1= mysqli_fetch_assoc($res1);
   $token_no1= $token_no1['ip_address']; 

   //selecting most recent ip from finished transaction table
   $sql2= "SELECT ip_address FROM iptables.finished_transaction ORDER BY token_id DESC LIMIT 1";
   $res2=mysqli_query($db_connect,$sql2);
   $token_no2=mysqli_fetch_assoc($res2);
   $token_no2= $token_no2['ip_address'];

   //comparing case1 & case2 if both are equal then unhide notification of getting ready.(also compare if the scanning ip is equal to the hard coded string)
   if ($token_no1 == $token_no2)
   {
echo "the guy before you in the queue is almost done\n";
echo "move to your assigned counter";
   }
 mysqli_close($db_connect);
 //$newURL="localhost:1234/Series/hackathon/index2.html".
// header('Location: '.$newURL);


//}

?>
</body>
<footer>
<script type="text/javascript">

 window.setTimeout(function(){
 	alert('you are about to be redirected');
        window.location = "localhost:1234/Series/hackathon/index2.html";

    }, 5000);


 //  window.location="localhost:1234/Series/hackathon/index2.html";	

</script>
</footer>
</html>