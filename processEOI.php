<html lang="en">
<?PHP
/*
filename: process.EOI
author: Leonardo P
created: 26/05/2024
last modified: 27/05/24
description: processing the apply.php and sending it to the server db.
Thursday 10:30 Workshop
Tutor: Kaibin Wang
Please note that for assignment 2 some maxlength label inputs in apply.php were changed so the php could validate it instead
*/	
require_once("settings.php");
$conn = @mysqli_connect($host,$user,$pwd,$sql_db);
$sql_table="eoi";
$status = "NEW";
$errorFlags = 0; // used to count how many errors there are in the user data

$queryTest = "select reference_number FROM eoi"; //test table

//error removal
error_reporting(E_USER_NOTICE); //disables a notice error message when a user doesn't tick a checkbox. Which is problematic for the 'skills' section

if(mysqli_query($conn,$queryTest)) //test to see if table exists
{
	//echo "<p class=\"ok\">Table exists</p>";
}
else //if not, create table
{
	$sqlTable = "CREATE TABLE eoi
	(
		reference_number INT NOT NULL PRIMARY KEY,
		status VARCHAR(40),
		first_name VARCHAR(40),
		family_name VARCHAR(40),
		date_of_birth VARCHAR(40),
		gender VARCHAR(40),
		address VARCHAR(40),
		suburb VARCHAR(40),
		state VARCHAR(40),
		postcode INT,
		email VARCHAR(40),
		phone VARCHAR(40), 
		skill_java VARCHAR(25), 
		skill_css VARCHAR(25),
		skill_html VARCHAR(25),
		skill_ruby VARCHAR(25),
		skill_teamwork VARCHAR(25),
		skill_communication VARCHAR(25),
		skill_other_skills VARCHAR(25),
		other_skill VARCHAR(255)
    )";
	
	if(mysqli_query($conn,$sqlTable))
	{
		echo "A new Table under the name of eoi was created successfully";
	}
}

//trim and remove special characters from user data
$reference_number = trim($_POST["reference_number"]);
$first_name = trim($_POST["first_name"]);
$family_name = trim($_POST["family_name"]);
$date_of_birth = trim($_POST["date_of_birth"]);
$gender = trim($_POST["gender"]);
$address = trim($_POST["address"]);
$suburb = trim($_POST["suburb"]);
$state = trim($_POST["state"]);
$postcode = trim($_POST["postcode"]);
$email = trim($_POST["email"]);
$phone = trim($_POST["phone"]);
$other_skill = trim($_POST["other_skill"]);

$reference_number = htmlspecialchars($_POST["reference_number"]);
$first_name = htmlspecialchars($_POST["first_name"]);
$family_name = htmlspecialchars($_POST["family_name"]);
$date_of_birth = htmlspecialchars($_POST["date_of_birth"]);
$gender = htmlspecialchars($_POST["gender"]);
$address = htmlspecialchars($_POST["address"]);
$suburb = htmlspecialchars($_POST["suburb"]);
$state = htmlspecialchars($_POST["state"]);
$postcode = htmlspecialchars($_POST["postcode"]);
$email = htmlspecialchars($_POST["email"]);
$phone = htmlspecialchars($_POST["phone"]);
$other_skill = htmlspecialchars($_POST["other_skill"]);

$skill_java = ($_POST["skill_java"]);
$skill_css = ($_POST["skill_css"]);
$skill_html = ($_POST["skill_html"]);
$skill_ruby = ($_POST["skill_ruby"]);
$skill_teamwork = ($_POST["skill_teamwork"]);
$skill_communication = ($_POST["skill_communication"]);
$skill_other_skills = ($_POST["skill_other_skills"]);

//check if form is filled out and has correct inputs, if not don't submit to database and return error
//check reference number
if(empty($reference_number) || strlen(strval($reference_number)) != 5 || !is_numeric($reference_number))
{
	if(empty($reference_number))
	{
		echo "<p>Reference number not entered.</p>";
		$errorFlags += 1;
	}
	if(strlen(strval($reference_number)) != 5 && !empty($reference_number))
	{
		echo "<p>Required format for Reference Number is exactly 5 digits.</p>";
		$errorFlags += 1;
	}
	if(!is_numeric($reference_number) && !empty($reference_number) && strlen(strval($reference_number)) == 5)
	{
		echo "<p>Required format for Reference Number is exactly 5 digits. Please remove other characters.</p>";
		$errorFlags += 1;
	}
}
//check first name
if(empty($first_name) || strlen($first_name) > 20 || !ctype_alpha($first_name))
{
	if(empty($first_name))
	{
		echo "<p>First name not entered.</p>";
		$errorFlags += 1;
	}
	if(strlen($first_name) > 20 && !empty($first_name) && ctype_alpha($first_name))
	{
		echo "<p>Required format for First Name is less than 20 letters.</p>";
		$errorFlags += 1;
	}
	if(!ctype_alpha($first_name) && !empty($first_name))
	{
		echo "<p>Required format for First Name is less than 20 letters. Please also remove numbers.</p>";
		$errorFlags += 1;
	}
}
//check family name
if(empty($family_name) || strlen($family_name) > 20 || !ctype_alpha($family_name))
{
	if(empty($family_name))
	{
		echo "<p>Family name not entered.</p>";
		$errorFlags += 1;
	}
	if(strlen($family_name) > 20 && !empty($family_name) && ctype_alpha($family_name))
	{
		echo "<p>Required format for Family Name is less than 20 letters.</p>";
		$errorFlags += 1;
	}
	if(!ctype_alpha($family_name) && !empty($family_name) )
	{
		echo "<p>Required format for Family Name is less than 20 letters. Please also remove numbers.</p>";
		$errorFlags += 1;
	}
}
//check DoB
if(empty($date_of_birth) || substr_count($date_of_birth,"/") != 2)
{
	if(empty($date_of_birth))
	{
		echo "<p>DoB not entered</p>";
		$errorFlags += 1;
	}
	if(substr_count($date_of_birth,"/") != 2 && !empty($date_of_birth))
	{
		echo "<p>Invalid DoB format. Please follow: dd/mm/yyyy</p>";
		$errorFlags += 1;
	}
}
//check Gender
if(empty($gender))
{
	echo "<p>Gender not selected.</p>";
	$errorFlags += 1;
}
//check Address
if(empty($address) || strlen($address) > 40)
{
	if(empty($address))
	{
		echo "<p>Address not entered.</p>";
		$errorFlags += 1;
	}
	if(strlen($address) > 40 && !empty($address))
	{
		echo "<p>Your address is required to have less than 41 characters.</p>";
		$errorFlags += 1;
	}
}
//check Suburb
if(empty($suburb))
{
	if(empty($suburb))
	{
		echo "<p>Suburb or town not entered.</p>";
		$errorFlags += 1;
	}
	if(strlen($suburb) > 40 && !empty($suburb))
	{
		echo "<p>Your suburb/town is required to have less than 41 characters.</p>";
		$errorFlags += 1;
	}
}
//check Postcode
if(empty($postcode) || strlen(strval($postcode)) != 4 || !is_numeric($postcode))
{
	if(empty($postcode))
	{
		echo "<p>Postcode not entered.</p>";
		$errorFlags += 1;
	}
	if(strlen(strval($postcode)) != 5 && !empty($postcode) && is_numeric($postcode))
	{
		echo "<p>Required format for Postcode is exactly 4 digits.</p>";
		$errorFlags += 1;
	}
	if(!is_numeric($postcode) && !empty($postcode))
	{
		echo "<p>Required format for Postcode is exactly 4 digits. Please also remove letters.</p>";
		$errorFlags += 1;
	}
}
//check Email
if(empty($email) || substr_count($email,"@") != 1 || substr_count($email,".") == 0)
{
	if(empty($email))
	{
		echo "<p>Email not entered.</p>";
		$errorFlags += 1;
	}
	if((substr_count($email,"@") != 1 || substr_count($email,".") == 0) && !empty($email))
	{
		echo "<p>Email has an invalid format. Please follow: example@test.com</p>";
		$errorFlags += 1;
	}
}
//check Phone
$phoneUpdated = str_replace(' ', '', $phone);
if(empty($phoneUpdated) || strlen(strval($phoneUpdated)) < 8 || strlen(strval($phoneUpdated)) > 12 || !is_numeric($phoneUpdated))
{
	if((strlen(strval($phoneUpdated)) < 8 || strlen(strval($phoneUpdated)) > 12) && !empty($phoneUpdated))
	{
		echo "<p>Phone number needs to between 8-12 digits long.</p>";
		$errorFlags += 1;
	}
	if(!is_numeric($phoneUpdated) && !empty($phoneUpdated))
	{
		echo "<p>Phone number can only be digits or spaces.</p>";
		$errorFlags += 1;
	}
	if(empty($phoneUpdated))
	{
		echo "<p>Phone number not entered.</p>";
		$errorFlags += 1;
	}
}
//skills checkbox
if(empty($skill_java))
{
	$skill_java = "N/A";
}
if(empty($skill_css))
{
	$skill_css = "N/A";
}
if(empty($skill_html))
{
	$skill_html = "N/A";
}
if(empty($skill_ruby))
{
	$skill_ruby = "N/A";
}
if(empty($skill_teamwork))
{
	$skill_teamwork = "N/A";
}
if(empty($skill_communication))
{
	$skill_communication = "N/A";
}
if(empty($skill_other_skills))
{
	$skill_other_skills = "N/A";
}

//test if text box has no data if other skills is selected
if(empty($other_skill) && $skill_other_skills != "N/A")
{
	echo "<p>Other skills text box is empty.</p>";
	$errorFlags += 1;
}
//test if text box has data if other skills has been selected
if(!empty($other_skill) && $skill_other_skills == "N/A")
{
	echo "<p>Skills textbox has data. Please 'tick' the 'other skills' check box.</p>";
	$errorFlags += 1;
}

//if there are any errors in the user submitted data dont send to db and exit application.
if($errorFlags == 1)
{
	echo "<p>There is ",$errorFlags," error in your application.</p>";
	exit();
}
if($errorFlags > 0)
{
	echo "<p>There are ",$errorFlags," errors in your application.</p>";
	exit();
}

//get retrieved data and insert it into the database (eoi)
$query = "insert into $sql_table (reference_number, status, first_name, family_name, date_of_birth, gender, address, suburb, state, postcode, email, phone, 
skill_java, skill_css, skill_html, skill_ruby, skill_teamwork, skill_communication, skill_other_skills, other_skill)
 values ('$reference_number', '$status', '$first_name', '$family_name', '$date_of_birth', '$gender', '$address', '$suburb', '$state', 
 '$postcode', '$email', '$phoneUpdated', '$skill_java', '$skill_css', '$skill_html', '$skill_ruby', '$skill_teamwork', '$skill_communication', '$skill_other_skills', '$other_skill')";

$result = mysqli_query($conn, $query);

$uniqueNumber = $reference_number + rand(1,500);

if(!$result)
{
	echo "<p>Something is wrong with ", $query, "</p>";
}
else
{
	echo "<p>The application form has successfully been submitted.</p>";
	echo "<p>Here is your unique EOI number: ", $uniqueNumber, "</p>";
}
mysqli_close($conn);
?>

<p id="return"><a href="index.php">Click here to return to main index</a></p>
</html>