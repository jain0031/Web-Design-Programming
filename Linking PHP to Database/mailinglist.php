<?php
	include 'header.php';
 

?>
<html>
<div id="content" class="clearfix" align="justify">
                
            
<style>
table, th, td {
     border: 1px solid black;
	 border-color: white;
}
</style>
<?php


$host='localhost';
$user ='wp_eatery';
$pass ='password';
$db = 'wp_eatery';

$conn = new mysqli($host,$user,$pass,$db);

if($conn->connect_error)
{
    echo ("Failed to connect".$conn->connect_error);
}

    $sql="select * from mailinglist";

  $result = $conn->query($sql);


if ($result->num_rows > 0) {
     echo "<table cellpadding=8 ><tr><th align=center>FirstName</th><th align=center>LastName</th><th align=center>Phone</th><th align=center>Email</th><th align=center>userName</th><th align=center>Reffer</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
        echo "<tr><td width=10%>" . $row["firstName"]."</td><td width=10%>" . $row["lastName"]. "</td><td width=10%> " . $row["phoneNumber"]. "</td><td width=50%> "  . $row["emailAddress"]. "</td><td width=10%> " . $row["username"]."</td><td>". $row["referrer"]."</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}   
    
?>
</table>
<!--border="5" cellpadding="5" cellspacing="0" style="border-collapse: collapse" bordercolor="#808080" width="50%"  id="AutoNumber2" bgcolor="#C0C0C0"-->
       <!-- End Content -->
</div>
</html>
<?php
		include 'footer.php';
?>
