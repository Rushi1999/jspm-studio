
<?php
	session_start();
	include("connect_db.php");
	if(isset($_POST['submit_admin'])){
		$uname=$_POST['username'];
			$password=$_POST['password'];
			if($uname=="" || $password==""){
				echo "<script>alert('Enter the username and password')</script>";
			}
		else{
			$query="Select * from admin where username ='$uname' && password='$password';";
			$result=mysqli_query($sqli,$query);
			if(mysqli_affected_rows($sqli)>0){
				$_SESSION["key"]=$uname;
				header("Location:adminpage.php");
			}
		}
}
?>
<!DOCTYPE html>
	<head>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
		<title>JspmStudio</title>
		<link href="favicon.ico" type="image/x-icon" rel="shortcut icon">
		<link href="assets/css/master.css" rel="stylesheet">
		<link href="team/css/main.css" rel="stylesheet">
		<link href="team/css/lightbox.css" rel="stylesheet">
		<link href="team/css/responsive.css" rel="stylesheet">
		<link href="assets/plugins/switcher/css/switcher.css" rel="stylesheet" >
		<link rel="stylesheet" href="mystyle.css" />
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.css"/>

	</head>
	<style>
		.adminhome{
	background-color: #2d3e50;
	padding-top: 55px;
}
.bg-cont{
	background-color: white;
}
    </style>
<body>
	<!-- Navbar design HTML code  -->
		<?php 
			include("Navbar.php");

		 ?>


	<!-- Body1 design HTML code    -->
	<div>
	<div class="adminhome">
	<div class="container mt-5 mb-5 bg-cont" style="height: 100vh">
		<div class="row m-5 pt-5" style="padding-top: 10rem !important;">
			<div class="col-md-7">
				
				<table  cellspacing="20" cellpadding="40" width="100%">
					<tr>
						<th>
							<h3 class="ui-title-inner ">One way stop for notes and more</h3>
						</th>
					</tr>


					<tr>
						<table   cellpadding="5" width="100%">
							<tr>
								<th width="100">
								<a href="Notes.php">	<h4 class=" decor decor_mod-a">Notes</h4></a</a>	
								</th>
								<th width="100">
								<a href="mcq.php">
									<h4 class=" decor decor_mod-a">MCQ</h4></a>	
								</th>
							</tr>
							<tr>
								<td width="100">
									Find the notes.
								</td>
								<td width="100">
									
								<p>	Find the UGC mcq of all the subjects</p>
								</td>
							</tr>
							</table>
					</tr>

					<tr>
						<table   cellpadding="5" width="100%">
							<tr>
								<th width="100">
								<a href="contactus.php">	<h4 class=" decor decor_mod-a">Department Contact</h4></a</a>	
								</th>
								<th width="100">
								<a href="Sysllabus.php">
									<h4 class=" decor decor_mod-a">Sysllabus</h4></a>	
								</th>
							</tr>
							<tr>
								<td width="100">
									check department head details.
								</td>
								<td width="100">
									
								<p>	Find the UGC sysllabus of all the subjects</p>
								</td>
							</tr>
							</table>
					</tr>

					
					<tr>
						<table class="mt-5" cellpadding="5"	 width="100%">
							<tr>
								<th width="100">
								<a href="Notices.php">	<h4 class=" decor decor_mod-a">Notices</h4></a</a>	
								</th>
								<th width="100">
								<a href="ExamPaper.php">	<h4 class=" decor decor_mod-a">Exam Paper</h4></a</a>
								</th>
							</tr>
							<tr>
								<td width="100">
								<p>	Check out the latest updates from admins without any hassle.</p>
								</td>
								<td width="100">
								<p>	Find the previous year papers.</p>
								</td>
							</tr>
							</table>
					</tr>
				</table>
			</div>
			<br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/>
			<div class="col-md-5 ">
				<div class="container bg-warning p-2  mt-1">
					<div class="card-primary mt-3">
						<div class="card-title">
							<center><h3 class="ui-title-inner decor decor_mod-a">Admin access</h3></center>
						</div>
						<hr/>
						<div class="card-body">
							<form onsubmit="return valid()" class="form-group " method="POST">
								<input type="text" name="username" class="form-control" placeholder="Gmail" />
								<input type="text" name="password" class="form-control mt-4" placeholder="Password" />
							 	<button type="submit" name="submit_admin" class="btn btn-primary mt-5 form-control">Login</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
	<!-- End of body1    -->

	<!-- FOOTER  -->

	<?php  
		include("Footer.php");
	?>

	




	<!-- End of footer --> 
</body>

<script type="text/javascript" src="JQuery/jquery-3.3.1.js"></script>
<script type="text/javascript" src="bootstrap-4.3.1-dist/js/bootstrap.js"></script>
<script type="text/javascript">
	
</script>
<html>

