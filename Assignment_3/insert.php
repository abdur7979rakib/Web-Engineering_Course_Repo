<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	<!-- bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Font link  -->
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="font/font-awesome-4.7.0/css/font-awesome.css">
	<!-- Style file -->
	<link rel="stylesheet" href="style.css">
</head>
<body>
		<div class="container">
			<div class="bread text-center">
				<h2 class="h2">Registration Form</h2>
				<p><span>Home</span> <span><i class="fa fa-arrow-right" aria-hidden="true"></i></span> <span>registration</span></p>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="card registration_card">
					  	<div class="card-body">
					  	<?php
							$name = $_POST['name'];
							$f_name = $_POST['f_name'];
							$sid = $_POST['sid'];
							$email = $_POST['email'];
							$p_slot = $_POST['p_slot'];

							if(!empty($name) || !empty($f_name) || !empty($sid) || !empty($email) || !empty($p_slot)){

								$host = "localhost";
								$dbUsername ="root";
								$dbPassword ="";
								$dbname ="register";

								//create connection

								$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

								if(mysqli_connect_error()){
									die('Connect Error('. mysqli_connect_errno().')'.mysqli_connect_error());
								} else{
									$SELECT = "SELECT email From register Where email = ? Limit 1";
									$INSERT ="INSERT INTO register(name, f_name, sid, email, p_slot) values (?,?,?,?,?)";

									//Prepare statement
									$stmt = $conn->prepare($SELECT);
									$stmt ->bind_param("s", $email);
									$stmt ->execute();
									$stmt ->bind_result($email);
									$stmt ->store_result();
									$rnum = $stmt ->num_rows;

									if($rnum == 0){
										$stmt->close();
										$stmt = $conn->prepare($INSERT);
										$stmt ->bind_param("sssss", $name, $f_name, $sid, $email, $p_slot);
										$stmt-> execute();
										echo "<h1>New record insertd successfully<h1>";
									} else{
										echo "<h1>Someone already register using this email<h1>";
									}
									$stmt->close();
									$conn->close();
								}




							} else{
								echo "All field are required";
								die();
							}

						?>
<br>
<a href="index.php" class="btn btn-primary" type="submit">Registration</a>
</div>
					</div>	
				</div>
			</div>
		</div>
	<script src="js/jquery3.5.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>

