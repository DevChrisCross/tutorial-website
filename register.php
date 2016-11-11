<!DOCTYPE html>
<html>
	<head>
		<title>Styles Conference</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="assets/stylesheets/main.css">
		 <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400">
	</head>
	<body>
		<header class="primary-header container group">
			<h1 class="logo">
				<a href="index.php">Styles <br> Conference</a>
			</h1>
			<h3 class="tagline">August 24&ndash;26th &mdash; Chicago, IL</h3>
			<nav class="nav primary-nav">
				<ul>
			    	<li><a href="index.php">Home</a></li><!--
			    --><li><a href="speakers.php">Speakers</a></li><!--
			    --><li><a href="schedule.php">Schedule</a></li><!--
			    --><li><a href="venue.php">Venue</a></li><!--
			    --><li><a href="register.php">Register</a></li>
			  </ul>
			</nav>
		</header>
		
		<section class="row-alt">
		 	<div class="lead container">
			    <h1>Registration</h1>
			    <p>We&#8217;re happy to welcome over twenty speakers to present on the industry&#8217;s latest technologies. Prepare for an inspiration extravaganza.</p>
		  
		  	</div>
		</section>
		<section class="row">
			<div class="grid">
				<section class="col-2-3">
			    <h2>Purchase a Conference Pass</h2>
			   	<h5>$99 per Pass</h5>

			  	<p>Purchase your Styles Conference pass using the form to the right. Multiple passes may be purchased within the same order, so feel free to bring a friend or two along. Once your order is finished we&#8217;ll follow up and provide a receipt for your purchase. See you soon!</p>

				  <h4>Why Attend?</h4>

				  <ul class="why-attend">
				  <li>Over twenty world-class speakers</li>
				    <li>One full day of workshops and two full days of presentations</li>
				    <li>Hosted at The Chicago Theatre, a historical landmark</li>
				    <li>August in Chicago is simply amazing</li>
				  </ul>
				    </section><!--

  	     	 --><form class="col-1-3" action="#" method="post">
			      	<fieldset class="register-group">
			      		<legend>Login</legend>
			      		<label>
					      Name
					      <input type="text" name="name" placeholder="Full name" required>
					    </label>

					    <label>
					      Email
					      <input type="email" name="email" placeholder="Email address" required>
					    </label>

					    <label>
					      Number of Passes
					      <select name="quantity" required>
					        <option value="1" selected>1</option>
					        <option value="2">2</option>
					        <option value="3">3</option>
					        <option value="4">4</option>
					        <option value="5">5</option>
					      </select>
					    </label>

					    <label>
					      Comments
					      <textarea name="comments"></textarea>
					    </label>

			      	</fieldset>
			      	<input class="btn btn-default" type="submit" name="submit" value="Purchase">
			    </form>
			</div>
		</section>



		<footer class="primary-footer container group">
			<small>&copy; Styles Conference</small>
			<nav class="nav">
				<ul>
			    	<li><a href="index.php">Home</a></li><!--
			    --><li><a href="speakers.php">Speakers</a></li><!--
			    --><li><a href="schedule.php">Schedule</a></li><!--
			    --><li><a href="venue.php">Venue</a></li><!--
			    --><li><a href="register.php">Register</a></li>
			  </ul>
			</nav>
		</footer>
	</body>
</html>