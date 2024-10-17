<?php
	include("functions.php");
	if (!(isset($_POST['submit'])))
	{
			echo '<h3 align="Center">Fill out my contact form</h3>';
			if (isset($_REQUEST['msg']) && $_REQUEST['msg'] == "success") 
			{
				echo '<div>Data entered successfully!</div>';
			}
			echo '<form method="POST">';
				
			echo '<div class="form-group">';
			echo '<label>First Name:</label>';
			echo '<input class="form-control" type="text" name="fname" id="fname"
				   onblur="checkName(this.value, this.id)">';
			echo '<p id="fnameHelp"></p>';
			echo '</div>';
				
			echo '<div class="form-group">';
			echo '<label>Last Name:</label>';
			echo '<input class="form-control" type="text" name="lname" id="lname"
				   onblur="checkName(this.value, this.id)">';
			echo '<p id="lnameHelp"></p>';
			echo '</div>';
				
			echo '<div class="form-help">';
			echo '<label>Email:</label>';
			echo '<input class="form-control" type="text" id="email" name="email"
				   onblur="checkEmail(this.value)">';
			echo '<p id="emailHelp"></p>';
			echo '</div>';
				
			echo '<div class="form-help">';
			echo '<label>Username (at least 8 characters):</label>';
			echo '<input class="form-control" type="text" name="uname" id="uname"
				   onblur="checkUserName(this.value, this.id)">';
			echo '<p id="unameHelp"></p>';
			echo '</div>';
				
			echo '<div class="form-help">';
			echo '<label>Comment:</label>';
			echo '<input class="form-control" type="text" name="cmnt" id="cmnt"
				   onblur="checkComment(this.value, this.id)">';
			echo '<p id="cmntHelp"></p>';
			echo '</div>';
			echo '<button type="submit" name="submit" value="submit">Submit</button>';
			echo '</form>';
		}
		if (isset($_POST['submit']))
		{
			$dblink=db_connect("XXXX"); // connect to XXXX database
			$firstName=$_REQUEST['fname'];
			$lastName=$_REQUEST['lname'];
			$email=$_REQUEST['email'];
			$uname=$_REQUEST['uname'];
			$cmnt=$_REQUEST['cmnt'];
			$sql="Insert into `XXXX` (`first_name`, `last_name`, `email`, `username`, `comments`) values";
			$sql.=" ('$firstName', '$lastName', '$email', '$uname', '$cmnt')";
			$dblink->query($sql) or
				die("Something went wrong with $sql".$dblink->error);
			redirect("index.php?page=contact&msg=success");
		}
	echo '<script src="assets/js/validation.js"></script>';
?>
