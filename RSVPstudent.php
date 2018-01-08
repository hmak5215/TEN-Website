<?php
/*
$recipients = array(
"cjones@liberty.k12.mo.us",
"aklein@liberty.k12.mo.us"
);
*/

$recipients =
"aklein@liberty.k12.mo.us,cjones@liberty.k12.mo.us";


$subject = "Contact Form";
$mailheader = "From: student@studentweb.liberty.k12.mo.us \r\n";

// Get Input

if (isset($_POST['submit']))
{
	
$name = filter_input(INPUT_POST, 'person_name');
$job = filter_input(INPUT_POST, 'job');
$extra_requirement = filter_input(INPUT_POST, 'extra_requirement');
$description = filter_input(INPUT_POST, 'description');
$email = filter_input(INPUT_POST, 'email');
$school = filter_input(INPUT_POST, 'school');
$teacher = filter_input(INPUT_POST, 'teacher');
$grade = filter_input(INPUT_POST, 'grade');

$requirement = "";

if (isset($_POST['req_a']))
{
	$requirement .= ' Table,';
}if (isset($_POST['req_b'])) {
	$requirement .= ' Electricity,';
}

$group = filter_input(INPUT_POST, 'group');
if($group == "other")
{
	$group = filter_input(INPUT_POST, 'other');
}
	
$emailContent = "
Name: " . $name . " \n 
What they will be doing: " . $job . " \n 
What their presentation will cover: " . $description . " \n
Requirement: " . $requirement . " \n 
Extra Requirement(s): " . $extra_requirement . " \n
Email: " . $email . " \n
Group: " . $group . " \n 
Teacher: " . $teacher . " \n
Grade: " . $grade . " \n
School: " . $school . " \n";


// Send Email

	mail($recipients, $subject, $emailContent, $mailheader) or die("Error!");


echo "Thank You!" . " -" . "<a href='home.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
}



?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>TEN</title>
<link rel="stylesheet" type="text/css" href="styles_tech.css"/>
<script type="text/javascript" src="slideshow_technight.js">
</script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">             
</script>

			<script> 
				$(document).ready(function()
				{
					$(".otherbutton").click(function()
					{
						$(".other").show();
					});
					$(".notother").click(function()
					{
						$(".other").hide();
					});
					
					$(".otherbutton2").click(function()
					{
						$(".other2").toggle();
					});
				});
			</script>

</head>

<body> 

<!-- Div for the image in header -->
		<div class="header">
			<a href="home.html"><img src="ten.png" alt="TEN" name="Insert_logo"  width="40%" id="Insert_logo"/></a> 
			<br/>
		</div>
<!-- Div for the left sidebar that includes navigation -->
		<div class="navbar">
		<ul>
		<li><a href="home.html" class="unit"><strong>Home</strong></a></li>
		<li><a href="vendorsandpresenters.html"<a class="unit"><strong>Organizations Attending</strong></a></li>
		<li><a href="T4t.html" class="unit"><strong>TSA</strong></a></li>
		<li><a href="register.html" class="unit"><strong>Register</strong></a></li>
		</ul>
		</div>	
<!-- Div for information in middle of page -->

<div class="company">
  <div class="form">
      <h2>Student Project Registration</h2>
      <p> To reserve your spot, please fill out the form below with all the correct information.</p>
		
		<?php echo $error ?>
<form method="post">
	<p>
		Name: </br><input type="text" name="person_name"/><br/><br/>
		Group:<br/>
		<input type="radio" name="group" value="PLTW" class="notother"/>PLTW <br/>
		<input type="radio" name="group" value="TSA" class="notother"/>TSA <br/>
		<input type="radio" name="group" value="other" class="otherbutton"/>Other:<input type="text" class="other" style="display:none;" name="other"/><br/>
		</br>
		
        Brief Description of Project: <br/><input type="text" name="description" maxlength="250" style="width:175px;height:50px;"/><br/><br/>
        Required Essentials:
        
        <br/>
    	<input type="checkbox" name="req_a" value="table" class="notother2"/>Table<br/>
    	<input type="checkbox" name="req_b" value="electricity" class="notother2"/>Electricity Required<br/>
    	<input type="checkbox" name="req_c" value="other" class="otherbutton2"/>Other:
        <input type="text" name="extra_requirement" value="Other Requirements" class="other2" style="display:none;"/><br/>
        <br/>
        
		Describe what your presentation with cover (10 minute max):</br>
        <input type="text" name="job" maxlength="250" style="width:175px;height:50px;"/>
        <br/><br/>
        Email:</br><input  type="text" name="email"/>
        <br/><br/>
        School:</br><input type="text" name="school"/><br/>
        <br/>
        Grade:</br><input type="text" name="grade"/><br/>
        <br/>
        Teacher/Club Leader:</br><input type="text" name="teacher"/><br/>
        
        <br/>
        <input type="submit" name="submit" value="Submit">
    </p>
</form> 
    </div>
	</div>
	
	
	
	
</body>
</html>