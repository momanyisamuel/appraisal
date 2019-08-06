<!DOCTYPE html>
<?php
require_once('connection.php');

if ((isset($_POST['user001'])) && ($_POST['user001']=="12345"))
	{ // One
	if( (isset($_POST['user'])) && (isset($_POST['user'])) )	
		{ // Two
		// value	
		$usrname = mysqli_real_escape_string($connection,trim($_POST['user']));
		$usrpwd = mysqli_real_escape_string($connection,trim($_POST['pass']));	

		if ( (strlen($usrname)<1) && (strlen($usrpwd)<1) )
			{ // Three
			$er1="";
			} else { 
				$sql1="SELECT idusers, username, userpass, mobileno, emailaddress, logintime, createdtime, status_2   
				FROM users 
				WHERE username='".$usrname."' AND userpass='".md5($usrpwd)."' 
				AND status_2=1 LIMIT 1 ";
				$res1=mysqli_query($connection, $sql1);
				$fet1=mysqli_fetch_array($res1); //    
				$num1=mysqli_num_rows($res1);
				//echo $sqllogin;
				
				if($num1<1)
					{ // Four 
					$er2= "<div class=\"alert alert-danger\" >Invalid login details</div>";
					// Log the error
					
					} else {
						
						// Block user
						if ( ($num1>0) && ($fet1['status_2']!="1") ) 
							{ // Five
							$er3= "<div class=\"alert alert-danger\" >Invalid access, Contact system admin</div>";
							} // Close [Five]
							
						// Active user
						if ( ($num1>0) && ($fet1['status_2']=="1") ) 
							{ // Six
							session_start();
							// Set sessions
							$_SESSION['UID']=$fet1['idusers'];
							$_SESSION['UNM']=$fet1['username'];
							$_SESSION['UPS']=$fet1['userpass'];						
																					
							//echo "Here"; exit;
							// Direct user
							header('location:home/');
							exit;
							} // Close [Six]	
						
						} // Close [Four]	
				
				} // Close [Three]
		
		} // Close [Two]
	
	} // Close [One]


?>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <title><?php echo "rwatheplace"; ?></title>
		<link href='https://fonts.googleapis.cod/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
		<link href="bootstrap.min.css" rel="stylesheet">
	</head>

	<body>
		<div id="container" class="cls-container">        
			<div id="bg-overlay"></div>
			<div class="cls-content">
				<div class="cls-content-sm panel">
					<div class="panel-body">
						<div class="mar-ver pad-btm">
							<h1 class="h3 text-info"><?php echo "Rwathe Hotel"; ?></h1>
							<p>
							<?php 
							if(isset($er1)) { echo $er1; } 
							if(isset($er2)) { echo $er2; } 
							if(isset($er3)) { echo $er3; }
							?>
							</p>
						</div>
						<form action="" method="POST" autocomplete="off" name="USER">
							<div class="form-group">
								<input type="text" class="form-control" <?php if (isset($er1)) { echo "style=\"border:2px solid #ff0000\""; } ?> name="user" placeholder="<?php echo "Username"; ?>" autofocus>
							</div>
							<div class="form-group">
								<input type="password" class="form-control" <?php if (isset($er1)) { echo "style=\"border:2px solid #ff0000\""; } ?> name="pass" placeholder="<?php echo "Password"; ?>">
							</div>
							<a onclick="document.forms['USER'].submit()" href="#">		
								<button class="btn btn-info btn-lg btn-block" type="submit"><?php echo "Login"; ?></button>
								<input type="hidden" value="12345" name="user001" />
							</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>	


