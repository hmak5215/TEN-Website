<?php
	$recipients = "angie.klein@lps53.org,colleen.jones@lps53.org";
	
	$subject = "Contact Form";
	$mailheader = "From: ten@lps53.org \r\n";
	
	if (isset($_POST['submit'])) {
		$name = filter_input(INPUT_POST, 'name');
		$organization = filter_input(INPUT_POST, 'organization');
		$desctiption = filter_input(INPUT_POST, 'description');
		$website = filter_input(INPUT_POST, 'website');
		$activities = filter_input(INPUT_POST, 'acivities');
		$requirements = filter_input(INPUT_POST, 'requirements');
		$description = filter_input(INPUT_POST, 'description');
		$email = filter_input(INPUT_POST, 'email');
		$phoneNumber = filter_input(INPUT_POST, 'phone');
		
		$phoneType;
		
		$emailContent = "
		Name: " . $name . " \n 
		Organization: " . $organization . " \n 
		Description: " . $description . " \n 
		Website: " . $website . " \n
		What they will be doing: " . $activities . " \n 
		Phone no: " . $phoneNumber . " \n  
		Requirement: " . $requirements . " \n
		Email: " . $email;
		
		mail($recipients, $subject, $emailContent, $mailheader) or die("Error!");
		
		
		echo "<span style='font-family: Verdana, Arial, Helvetica, sans-serif;color:#5C5C5C'>Thank You!" . " -" . "<a href='home.html' style='text-decoration:none;color:#1A8CFF;'> Return Home</a></span>";
	}
?>



<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>TEN Registration</title>
		<link rel="stylesheet" type="text/css" href="form.css"/>
		<script type="text/javascript" src="Scripts/adjustTextArea.js"></script>
	</head>

	<body>
		<?php echo $error ?>
		<form method="post">
			<h2 class="header">Company Registration</h2>
			<p>
				To reserve your spot, please fill out the form below with all the correct information. We will send out a newsletter to help spread the word of your company.
			</p>
			
			<ul>
				<li>
					<label for="name">Name</label>
					<input type="text" name="name" maxlength="100">
					<span>Enter your name here</span>
				</li>
				<li>
					<label for="organization">Organization</label>
					<input type="text" name="organization" maxlength="100">
					<span>Enter the organization you're affiliated with</span>
				</li>
				<li>
					<label for="website">Website</label>
					<input type="text" name="website" maxlength="100">
					<span>Enter your organization's website</span>
				</li>
				<li>
					<label for="description">Description</label>
					<textarea name="description" onkeyup="adjust_textarea(this)"></textarea>
					<span>Enter a brief description of your organization</span>
				</li>
				<li>
					<label for="requirements">Requirements</label>
        			<input type="text" name="requirements">
        			<span>What does your presentation require? Ex: Table, electricity, etc...</span>
        		</li>
				<li>
					<label for="activities">Hands On Activities</label>
					<input type="text" name="activities">
					<span>We encourage hands on activities, will you be doing any?</span>
				</li>
				<li>
					<label for="email">Email</label>
					<input type="email" name="email" maxlength="100">
					<span>Enter a valid email address</span>
				</li>
				<li>
					<label for="phone">Phone Number</label>
					<input type="text" name="phone" maxlength="100">
					<span>Enter your phone number</span>
				</li>
				<li>
					<input type="submit" name="submit" value="Submit">
				</li>
			</ul>
		</form>
	</body>
</html>