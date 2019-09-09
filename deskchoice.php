<html>
<head>
<title>option selected</title>
</head>
<body align:"center">
<?php
$desk_ch = $_GET["operation"];
//................................................................
    require_once('date.php');
    require_once('testing.php');
    require_once('connection.php');
    require_once('endconnection.php');
    require_once('notification.php');
 

    $db_connect=set_conn();
    // Escape user inputs for security
    $db_select=mysqli_select_db($db_connect,'iptables');

     $v1 = 0;
     $v2 = ip_add();
     $v3 = time_is();
     $v4 = $desk_ch;
     if($v3 >= '18:00:00' && $v3 <= '8:00:00')
        { $v1 = 0;}
 
    // attempt insert query execution
    $sql = "INSERT INTO iptables.iptables (token_id, ip_address, time_stamp,desk) VALUES ('$v1','$v2','$v3','$v4')";
   /*$q="SELECT token_id from iptables.iptables where desk== 'A'";
   $res=mysqli_query($db_connect,$q);
   $token_no=mysqli_fetch_assoc($res);*/
   //"SELECT token_id from iptables.iptables where ((time_is()-v3)<300)";

    $sql1= "SELECT token_id FROM iptables.iptables ORDER BY token_id DESC LIMIT 1";
   $res=mysqli_query($db_connect,$sql1);
   $token_no=mysqli_fetch_assoc($res);
   $token_no=$token_no['token_id'];

    if(mysqli_query($db_connect, $sql)){
        echo "Records added successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($db_connect);
    }

 
  // end_conn($db_connect);
//................................................................

  ?>

<h2>your selection is: (<?php echo $desk_ch?>)</h2><br>
<?php
switch ($desk_ch)
{
case "A":
$desk="1";
$name="Harish Raja";
$designation="clerk";
$operation="deposit";
break;
case "B":
$desk="2";
$name="Vineet";
$designation="clerk";
$operation="withdrawal";
break;
case "C":
$desk="3";
$name="Vinay Singh";
$designation="clerk";
$operation="pass-book updation";
break;
case "D":
$desk="4";
$name="Shubhendu Shekhar";
$designation="probationary-officer";
$operation="new-account";
break;
case "E":
$desk="5";
$name="Guru Dutt";
$designation="manager";
$operation="General queries";
break;
case "default":
echo "something went wrong please contact bank staff ";
}
?>
<h2>Please go to desk <?php echo $desk ?> and contact <h2><br>
<h2><?php echo $name ?> [<?php echo $designation ?>] for the purpose of <?php echo $operation ?>.</h2><br>
<h2>your token number is: </h2><h1><?php echo $token_no?></h1><br>
<h2>please wait for the notification.</h2>   
 <?php end_conn($db_connect); ?>
 
 <script type="text/javascript">

   window.setInterval(function(){
  /// call your function here
  var gh=check_status();
  if (gh==0)
  {
 
    window.location="localhost:1234/Series/hackathon/index2.html";
    clearInterval();
  }
}, 10000);

 </script>
</body>
</html>