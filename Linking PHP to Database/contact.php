<?php include("header.php");?>
            <div id="content" class="clearfix">
                <aside>
                        <h2>Mailing Address</h2>
 
                        <h3>1385 Woodroffe Ave<br>
                            Ottawa, ON K4C1A4</h3>
                        <h2>Phone Number</h2>
                        <h3>(613)727-4723</h3>
                        <h2>Fax Number</h2>
                        <h3>(613)555-1212</h3>
                        <h2>Email Address</h2>
                        <h3>info@wpeatery.com</h3>
                </aside>
                <div class="main">
                    <h1>Sign up for our newsletter</h1>
                    <p>Please fill out the following form to be kept up to date with news, specials, and promotions from the WP eatery!</p>
                    <form name="frmNewsletter" id="frmNewsletter" method="post" action="contact.php">
                        <table>
                            <tr>
                                <td> First Name:</td>
                                <td><input type="text" name="FirstName" id="FirstName" size='40'></td>
                            </tr>
							  <tr>
                                <td> Last Name:</td>
                                <td><input type="text" name="LastName" id="LastName" size='40'></td>
                            </tr>
                            <tr>
                                <td>Phone Number:</td>
                                <td><input type="text" name="phoneNumber" id="phoneNumber" size='40'></td>
                            </tr>
							 <tr>
                                <td>User Name </td>
                                <td><input type="text" name="username" id="username" size='40'></td>
                            </tr>
                            <tr>
                                <td>Email Address:</td>
                                <td><input type="text" name="emailAddress" id="emailAddress" size='40'>
                            </tr>
                            <tr>
                                <td>How did you hear<br> about us?</td>
                                <td>Newspaper<input type="radio" name="referral" id="referralNewspaper" value="newspaper">
                                    Radio<input type="radio" name='referral' id='referralRadio' value='radio'>
                                    TV<input type='radio' name='referral' id='referralTV' value='TV'>
                                    Other<input type='radio' name='referral' id='referralOther' value='other'>
                            </tr>
                            <tr>
                                <td colspan='2'><input type='submit' name='btnSubmit' id='btnSubmit' value='Sign up!'>&nbsp;&nbsp;<input 
type='reset' name="btnReset" id="btnReset" value="Reset Form"></td>
							
							<?php
								
$name_error=$email_error=$phone_error=$referral_error=$submit="";
$LastName=$FirstName=$emailAddress=$phoneNumber=$referral=$username="";
$error_counter=0;

	   
if($_SERVER["REQUEST_METHOD"]=="POST"){
	if(empty($_POST["FirstName"])){
		$name_error="please write your First name ";
	   echo $name_error . "<br>";
	   $error_counter++;
	}
	else{
		$FirstName=$_POST["FirstName"];
		if(!preg_match("/^[a-zA-Z ]*$/",$FirstName)){
			$name_error="Only characters and white spaces are allowed \n";
			 echo $name_error;
			 $error_counter++;
		}
	}

	if(empty($_POST["LastName"])){
		$name_error="please write your last name ";
	   echo $name_error."<br>";
	   $error_counter++;
	}
	else{
		$LastNameName=$_POST["LastName"];
		if(!preg_match("/^[a-zA-Z ]*$/",$LastName)){
			$name_error="Only characters and white spaces are allowed \n";
			 echo $name_error;
			 $error_counter++;
		}
	}	
	if(empty($_POST["emailAddress"])){
		$email_error="please write your email-address";
	   echo $email_error."<br>";
	$error_counter++;
	}
	else{
		$emailAddress=$_POST["emailAddress"];
		if(!filter_var($emailAddress,FILTER_VALIDATE_EMAIL)){
			$email_error="Invalid email ";
		echo $email_error;
		$error_counter++;
		}
	}
	if (empty($_POST["username"])){
		echo "please fill the username "."<br>";
		$error_counter++;
	}
	
	if(empty($_POST["phoneNumber"])){
		$phone_error="please write your phone number";
           echo $phone_error."<br>";	
	$error_counter++;
	}
	else{
		$phoneNumber=$_POST["phoneNumber"];
	if(!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i",$phoneNumber)){
			$phone_error="Invalid phone number ";
		echo $phone_error."<br>";
		$error_counter++;
		}
	}
	
	
	if(empty($_POST["referral"])){
		$referral_error="please select one media option";
		echo $referral_error."<br>";
	$error_counter++;
	}
	if ($error_counter>0){
	 echo "Please fill all requested fields ";	
	}
	else {
		define('DB_HOST','127.0.0.1' );
		define('DB_USER','wp_eatery' );
		define('DB_PASSWORD','password' );
		define('DB_NAME','wp_eatery' );
		$conn=new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
		
		if ($conn->connect_error){
			echo "Connection failed: " . $conn.connect_error;
	}
		
	
    $FirstName = $_POST['FirstName'];
	$LastName = $_POST['LastName'];
    $phoneNumber = $_POST['phoneNumber'];
    $username= $_POST['username'];
	$emailAddress = $_POST['emailAddress'];
    $referrer = $_POST['referral'];
	
	
	$query = "INSERT INTO mailinglist (firstName,lastName,phoneNumber,emailAddress,username,referrer) VALUES ('$FirstName','$LastName','$phoneNumber','$emailAddress','$username','$referrer');";

	
   
	
			
if (!mysqli_query($conn,$query)){
echo "Data entry not done successful";
}else{
	echo"Successful";
}
	 $conn->close();
	}

}

 			?>
                            </tr>
                        </table>
                    </form>
                </div><!-- End Main -->
            </div><!-- End Content -->
<?php include("footer.php"); ?>
