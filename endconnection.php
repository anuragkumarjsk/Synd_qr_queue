<?php
//end the existing connection
function end_conn($db_connect)
{
	   mysqli_close($db_connect);
}
?>