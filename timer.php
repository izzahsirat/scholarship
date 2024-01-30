<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Coming Soon Page</title>
	<link rel="stylesheet" type="text/css" href="styletimer.css">

</head>
<body>

	<div class="container">
		<!-- <img src="images/launch.png" class="logo">-->

		<div class="content">
			
			<p>Application is now open!</p>
			<h1>Pembukaan Biasiswa Kerajaan is <span>Closing</span> Soon</h1>
			<div class="launch-time">
				<div>
					<p id="days">00</p>
					<span>Days</span>
				</div>
				<div>
					<p id="hours">00</p>
					<span>Hours</span>
				</div>
				<div>
					<p id="minutes">00</p>
					<span>Minutes</span>
				</div>
				<div>
					<p id="seconds">00</p>
					<span>Seconds</span>
				</div>
			</div>

			<div class="container mt-5">
        <div class="row">
            <div class="col-md-12 mt-40">


			<button type="button">Apply Now!</button>

		</div>

		<div class="content">
    <!--<h1>TVET Closed</h1>     
    <h2 id="counter" class="text-center"></h2>-->

            <p>Application is now open!</p>
      <h1>Pembukaan Biasiswa Kerajaan is <span>Closing</span> Soon</h1>
      <div class="launch-time">
        <div>
          <p id="days">00</p>
          <span>Days</span>
        </div>
        <div>
          <p id="hours">00</p>
          <span>Hours</span>
        </div>
        <div>
          <p id="minutes">00</p>
          <span>Minutes</span>
        </div>
        <div>
          <p id="seconds">00</p>
          <span>Seconds</span>
        </div>
      </div>


      <button type="button">Apply Now!</button>

            </div>

		<img src="images/launch.png" class="rocket">

	</div>

	<script type="text/javascript">
		
		var countDownDate = new Date("Jan 30, 2024 13:42:00").getTime();
		var x = setInterval(function(){
			var now = new Date().getTime();
			var distance = countDownDate - now;

			var days = Math.floor(distance / (1000 * 60 * 60 * 24));
			var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			var seconds = Math.floor((distance % (1000 * 60)) / 1000);

			document.getElementById("days").innerHTML = days;
			document.getElementById("hours").innerHTML = hours;
			document.getElementById("minutes").innerHTML = minutes;
			document.getElementById("seconds").innerHTML = seconds;

			if(distance < 0){
				clearInterval(x);
				document.getElementById("days").innerHTML = "00";
				document.getElementById("hours").innerHTML = "00";
				document.getElementById("minutes").innerHTML = "00";
				document.getElementById("seconds").innerHTML = "00";

				document.getElementById("counter").innerHTML = "Application is now closed.";

			}


		},1000);

	</script>

</body>
</html>