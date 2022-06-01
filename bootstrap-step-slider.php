<!DOCTYPE html>
<html>
<head>
	<title>Step Slider</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<!--Bootstrap Slider Begins -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/css/bootstrap-slider.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/css/bootstrap-slider.min.css">
	<!--Bootstrap Slider Ends -->
	
	<style type="text/css">
		.slider.slider-horizontal {
		    width: 100% !important;
		    height: 20px !important;
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Heading</h2>
			</div>
			<div class="col-md-12">
				<input id="ex13" type="text" data-slider-ticks="[0, 100, 200, 300, 400]" data-slider-ticks-snap-bounds="30" data-slider-ticks-labels='["Qualification", "$100", "$200", "$300", "$400"]'/>
			</div>
		</div>
	</div>

	<!--
	<div class="range">
	  <input type="range" min="1" max="7" steps="1" value="1">
	</div>

	<ul class="range-labels">
	  <li class="active selected">Today</li>
	  <li>2 days</li>
	  <li>3 days</li>
	  <li>4 days</li>
	  <li>5 days</li>
	  <li>6 days</li>
	  <li>7 days</li>
	</ul>
	-->
</body>

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
	<!--Bootstrap Slider Begins -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/bootstrap-slider.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.2/bootstrap-slider.min.js"></script>
	<!--Bootstrap Slider Ends -->


	<script type="text/javascript">
		// With JQuery
		$("#ex13").slider({
		    ticks: [0, 50, 100, 150, 200, 250, 300, 350, 400],
		    ticks_labels: ['Qualification', 'Needs Analysis', 'Value Proposition', 'Id. Decision Makers', 'Proposal/Price Quote', 'Negotiation Review', 'Closed Won', 'Closed Lost', 'Closed Lost to Competition'],
		    ticks_snap_bounds: 30
		});
		/*
		// Without JQuery
		var slider = new Slider("#ex13", {
		    ticks: [0, 100, 200, 300, 400],
		    ticks_labels: ['$0', '$100', '$200', '$300', '$400'],
		    ticks_snap_bounds: 30
		});
		*/
	</script>
</html>