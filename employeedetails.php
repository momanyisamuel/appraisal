<?php
include_once('header.html');
?>

<HTML>
				<fieldset  align="left">
					<body bgcolor= "#AAD8E6">

						<h1><u>New Employee Registration Form</u></h1>
						<form name='employeedetailsform' action="emp_details.php" method='post'>

								<h3>Personal Information</h3>
								<br>
								
									Firstname: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type='text' size='30' name='firstname'><br><br>	
									Surname: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' size='30' name='surname'><br><br>	 	
									Lastname:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' size='30' name='lastname'><br><br>	
									Staff Number:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='number' size='30' name='staff_number'><br><br>	
									National ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type='number' size='30' name='national_id'><br><br>	
									Nationality: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type='text' size='30' name='nationality'><br><br>	
									
									Gender:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='radio' name="gender" value='Male'> Male
																	<input type='radio' name="gender" value='Female'>Female<br><br>
												
									Date of Birth:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type='date' size='30' name='dob'><br><br>					
									NSSF No:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='number' size='30' name='nssf_no'><br><br>
									NHIF No:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='number' size='30' name='nhif_no'><br><br>
	 
					</fieldset>
					<fieldset  align="left">
								<h3>Contact Information</h3>
								<br>
								Work Phone:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       <input type='number' size='30' name='workphone'><br><br>
								Home Phone:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       <input type='number' size='30' name='homephone'><br><br>
								Mobile Phone:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     <input type='number' size='30' name='mobilephone'><br><br>
								Email Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    <input type='email' size='30' name='email'><br><br>
								
								<h3>Contract Details</h3>
								<br>
								Date of Hire:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type='date' size='30' name='hire_date'><br><br>
								
								Employment Status:     <select name="employment">
															<option>Choose one</option>
															<option>Fulltime</option>
															<option>Contract</option>
															<option>Intern</option>
															<option>Terminated</option>
															<option>Retired</option>
														</select><tr><br><br>
								
								Job Title:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' size='40' name='job_title'><br><br>	 	

								</br>								
								<input type='submit' value='Send'>
						</fieldset>
					</form>
					</br>
				  <nav class="navbar navbar-inverse bg-inverse">
						<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                             <div class="navbar-nav">
 							    <a class="nav-item nav-link" align="right" href="logout.php">Logout</a>
								<a class="nav-item nav-link" align="right" href="qualifications.html"> Next </a>
								<a class="nav-item nav-link" align="right" href="emp_retrieval.php"> View Employees </a>
 						     </div>
						</nav>
				</br>
			<h5 align="center"> Powered by Wastex</h5>
		</body>
	<fieldset>
</HTML>
