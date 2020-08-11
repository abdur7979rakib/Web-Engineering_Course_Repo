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
				<h2 style="color:red;" class="h2">COMP27 - Registration here for a practical slot</h2>
				<h5> <strong> Registration only if you know what you are doing.</strong></h5>
				<div>
					<ul>
						<li>Please enter <strong>all</strong> information and select your desired day. Please enter a correct 'SID' number.</li>
						<li>Please check the number of available seats before submitting.</li>
						<li>Register only to one slot.</li>
						<li>Any problems? Write a message to <strong style="color:red;" >weberb@cse.liv.ac.uk</strong> </li>
					</ul>
				</div>
				
				<p><span>Home</span> <span><i class="fa fa-arrow-right" aria-hidden="true"></i></span> <span>registration</span></p>

		</div>
	</header>
	<main>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="card registration_card">
					  	<div class="card-body">
						  	<form action="insert.php" method="POST">
							  <div class="form-row">
							    <div class="form-group col-md-3">
							      <label for="inputCity">Name</label>
							      <input type="text" class="form-control" id="Name" name="name" required>
							    </div>
							    <div class="form-group col-md-3">
							      <label for="inputZip">First name</label>
							      <input type="text" class="form-control" id="FirstName" name="f_name" required>
							    </div>
							    <div class="form-group col-md-3">
							      <label for="inputZip">SID</label>
							      <input type="text" class="form-control" id="SID" name="sid" required>
							    </div>
							    <div class="form-group col-md-3">
							      <label for="inputZip">Email</label>
							      <input type="email" class="form-control" id="email" name="email" required>
							    </div>
							  </div>
							  <div class="form-row">
								  <div class="form-group col-md-6">
							      <label for="inputState"><b>Select the Practical Slot</b></label>
							      <select id="inputState" class="form-control" required="" name="p_slot">
							        <option selected value="Monday">Monday | 51 Seats Remaining</option>
							        <option value="Tuesday">Tuesday | 1 Seats Remaining</option>
							        <option value="Thrusday">Thrusday | 12 Seats Remaining</option>
							        <option value="Friday">Friday | 26 Seats Remaining</option>
							      </select>
							    </div>	
							  </div>
							  <button class="btn btn-primary" type="submit">Register</button>
							  <button class="btn btn-primary" type="submit">Clear</button>
							</form>
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

