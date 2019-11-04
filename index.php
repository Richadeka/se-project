<?php
$conn=new mysqli("localhost","root","root@123","splash_carwash");
if($conn->connect_errno)
{
		echo 'connection failed';
}

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Splash Carwash</title>

		<script src="js/jquery.min.js"></script>


		<link href="css/style.css" rel='stylesheet' type='text/css' />


		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



   		 <link href='http://fonts.googleapis.com/css?family=Raleway:200,400,300,600,500,900,700,100,800|Comfortaa:700' rel='stylesheet' type='text/css'>
   		 <link href='http://fonts.googleapis.com/css?family=Comfortaa:700,300,400' rel='stylesheet' type='text/css'>


	</head>
	<body>




					    <div  id="top" class="callbacks_container">
					      <ul class="rslides" id="slider4">
					        <li>
					          <img class="img-responsive" src="img/slide1.jpg" alt="">
					          <div class="slider-caption">
					          	<h1>the<span>Splash</span> Carwash</h1>
					          </div>
					        </li>
					      </ul>
					    </div>
					    <div class="clearfix"> </div>


					<div class="top-grids">
						<div class="container">
						<div class="top-grids-head text-center">
							<h2>Our Services</h2>
						</div>

							<div class="col-md-6">
								<div class="top-grid">

									<div class="grid-info">
										<h3>Economic Package</h3>
										<p> Interior vacuum cleaning,car seat dry cleaning.</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="top-grid">

									<div class="grid-info">
										<h3>Premium Package</h3>
										<p> Includes tire dressing,sealer wax.</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="top-grid">

									<div class="grid-info">
										<h3>Delux Package</h3>
										<p> Total body protectant and Wheel Brite wheel cleaner.</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="top-grid">

									<div class="grid-info">
										<h3>Royal Package</h3>
										<p> Full Service.</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>


							<div>


									<div id="booking" class="section">
				<div class="section-center">
					<div class="container">
						<div class="row" >
		          <div class="form-header">
		            <h1>Booking</h1>
		          </div>
		          <br>
							<div class="booking-form">
								<form action="insert.php" method="POST">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<span class="form-label">Name</span>
												<input class="form-control" type="text" placeholder="Enter your name" name="name">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<span class="form-label">Email</span>
												<input class="form-control" type="email" placeholder="Enter your email" name="email">
											</div>
										</div>
									</div>
									<div class="form-group">
										<span class="form-label">Phone</span>
										<input class="form-control" type="tel" placeholder="Enter your phone number" name="phone">
									</div>
									<!--
									<div class="form-group">
										<span class="form-label">Services</span>
		                <select class="form-control" >
		                  <option>Economic Package</option>
		                  <option>Premium Package</option>
		                  <option>Deluxe Package</option>
		                  <option>Royal Package</option>
		                </select>
									</div>-->
									<div class="form-group">
										<span class="form-label" placeholder="Select a service">Services</span>
								<!--	<span class="form-label">Services</span>
									<select class="form-control"></select>-->
										<select class="form-control" name="services">
										    <option></option>
										    <?php
										    if($stmt=$conn->query("select name from service"))
										    {
										        while($r=$stmt->fetch_array(MYSQLI_ASSOC))
										        {
										     ?>
										    <option value="<?php echo $r['name'] ?>"><?php echo $r['name'] ?></option>

										    <?php  }  }   ?>

										</select>
									<div class="row">
										<div class="col-sm-5">
											<div class="form-group">
												<span class="form-label">Carwash Date</span>
												<input class="form-control" type="date" name="date" required>
											</div>
										</div>
										<div class="col-sm-7">
											<div class="row">
												<div class="col-sm-4">
													<div class="form-group">
														<span class="form-label">Hour</span>
														<select class="form-control" name=hour>
		                          <option>8</option>
															<option>9</option>
															<option>10</option>
															<option>11</option>
															<option>12</option>
		                          <option>13</option>
															<option>14</option>
															<option>15</option>
															<option>16</option>
															<option>17</option>
															<option>18</option>
															<option>19</option>
															<option>20</option>
															<option>21</option>
		                          <option>22</option>
														</select>
														<span class="select-arrow"></span>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<span class="form-label">Min</span>
														<select class="form-control" name="min">
															<option>05</option>
															<option>10</option>
															<option>15</option>
															<option>20</option>
															<option>25</option>
															<option>30</option>
															<option>35</option>
															<option>40</option>
															<option>45</option>
															<option>50</option>
															<option>55</option>
														</select>
														<span class="select-arrow"></span>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<span class="form-label">&nbsp</span>
														<input class="form-control" type="text" value="IST" disabled />
														<span class="select-arrow"></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="form-btn">
										<button class="submit-btn" onclick="myFunction()">Book Appointment</button>
										<p id-"demo"></p>
									</div>
									<script>
									function myFunction() {
  								alert("Your booking has been confirmed.Please check your mail!!!");
								}
								</script
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>





									<div class="clearfix"> </div>

							</div>

					<div class="footer">
						<div class="container">
							<div class="footer-grids">

								<div class="col-md-3">
									<div class="footer-grid site-map">
										<h5>Members</h5>
										<ul>
											<li><a onclick="return false;"><span> </span>RICHA DEKA</a></li>
											<li><a onclick="return false;"><span> </span>SANJEEVAN ADHIKARI</a></li>
											<li><a onclick="return false;"><span> </span>HRISIKESH BARMAN</a></li>
											<li><a onclick="return false;"><span> </span>MONSOON BHUYAN</a></li>
										</ul>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>

	</body>
</html>
