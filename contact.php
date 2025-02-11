

<!DOCTYPE html>
<html>
<head>
	<!-- *******  Link To CSS Style Sheet  ******* -->
	
    <link rel="stylesheet" href="css/s.css">

	<!-- *******  Font Awesome Icons Link  ******* -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>

	<!-- *******  Link To Goggle Fonts  *******  -->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,800;1,900&display=swap" rel="stylesheet">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Contact Section</title>
</head>
<body>
    
	<div class="container">
		<main class="row">
			
			<!--  *******   Left Section (Column) Starts   *******  -->

			<section class="col left">
				
				<!--  *******   Title Starts   *******  -->

				<div class="contactTitle">
					<h2>Get In Touch</h2>
					<p>Feel free to ask any queries</p>
				</div>

				<!--  *******   Title Ends   *******  -->

				<!--  *******   Contact Info Starts   *******  -->

				<div class="contactInfo">
					
					<div class="iconGroup">
						<div class="icon">
							<i class="fa-solid fa-phone"></i>
						</div>
						<div class="details">
							<span>Phone</span>
							<span>369843750</span>
						</div>
					</div>

					<div class="iconGroup">
						<div class="icon">
							<i class="fa-solid fa-envelope"></i>
						</div>
						<div class="details">
							<span>Email</span>
							<span>idesign@example.com</span>
						</div>
					</div>

					<div class="iconGroup">
						<div class="icon">
							<i class="fa-solid fa-location-dot"></i>
						</div>
						<div class="details">
							<span>Location</span>
							<span>no:2,Rainbow Nagar,Puducherry</span>
						</div>
					</div>

				</div>

				<!--  *******   Contact Info Ends   *******  -->

				<!--  *******   Social Media Starts   *******  -->

				

				<!--  *******   Social Media Ends   *******  -->

			</section>

			<!--  *******   Left Section (Column) Ends   *******  -->

			<!--  *******   Right Section (Column) Starts   *******  -->

			<section class="col right">
				
				<!--  *******   Form Starts   *******  -->

				<form class="messageForm" action="code.php" method="post">
					
					<div class="inputGroup halfWidth">
						<input type="text" class= "form-control" name="name" required="required">
						<label>Your Name</label>
					</div>

					<div class="inputGroup halfWidth">
						<input type="email" class= "form-control" name="email" required="required">
						<label>Email</label>
					</div>

					<div class="inputGroup fullWidth">
						<input type="text" class= "form-control"name="subject" required="required">
						<label>Subject</label>
					</div>

					<div class="inputGroup fullWidth">
						<textarea  type="text" required="required" class= "form-control" name="content"></textarea>
						<label>Say Something</label>
					</div>

					<div type ="submit" class="inputGroup fullWidth" name ="save">
						<button>Send Message</button> 
						<button ><a href="index.php">back</a></button>
					</div>

				</form>

				<!--  *******   Form Ends   *******  -->
			</section>

			<!--  *******   Right Section (Column) Ends   *******  -->

		</main>
	</div>
</body>
</html>
