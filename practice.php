<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="practice.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="icon" type="x-icon" href="logo.jpg">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>College Predictor</title>
</head>
<body>
	<nav class="navbar sticky-top navbar-expand-sm navbar-dark bg-dark">
		<a class="navbar-brand" href="Home.php">
    	<img src="logo.jpg" width="30" height="30" class="d-inline-block align-top" alt=""> College Predictor
  		</a>
  		<ul class="navbar-nav ml-auto">
    		<li class="nav-item">
      			<a class="nav-link" href="Home.php">Home</a>
    		</li>
    		<li class="nav-item active">
      			<a class="nav-link" href="pratice.php">About Us</a>
    		</li>
    		<li class="nav-item">
      			<a class="nav-link" href="login.php">Not <?php
      			if(isset($_SESSION['Username']))
      				{
      					echo $_SESSION['Username'];
      				}
      			?>? Logout</a>
    		</li>
  		</ul>
	</nav>

	<div class="background">
		<i class="fa fa-quote-left"></i><p>All our dreams can come true, if we have the courage to pursue them. Things work out best for those who make the best of how things work out. Genius will not; unrewarded genius is almost a proverb. Education will not: the world is full of educated derelicts. Persistence and determination alone are omnipotent.</p>
	</div>
	<div class="background">
		<h2>About Us</h2>
		<p>College-Predictor.com is a one-stop-solution making course and college selection easy for students looking to pursue undergraduate (UG) and postgraduate (PG) courses in India and abroad; also accessible to users on the move through the website’s mobile site. Launched in 2008, CollegeShiksha.com belongs to Info Edge (India) Ltd, the owner of established brands like Naukri.com, 99acres.com, Jeevansathi.com, among several others. With this strong brand pedigree, CollegeShiksha offers its users the unique privilege of customised tools like Alumni Employment Statistics that includes salary data powered by Naukri.com.</p>

		<p>Our website is a repository of reliable and authentic information for over 14,000 institutions, 40,000 plus courses and has a registered data base of more than 3.5 million students. We offer specific information for students interested in UG/PG courses in India (Collegeshiksha.com) and Abroad (studyabroad.Collegeshiksha.com) across the most popular educational streams – Management; Science & Engineering; Banking & Finance; Information Technology; Animation, VFX, Gaming & Comics; Hospitality, Aviation & Tourism; Media, Films & Mass Communication; Design; Medicine, Beauty & Health Care; Retail; Arts, Law, Languages & Teaching; and Test Preparation.</p>

		<p>Future builders get enhancing information on our website, based on educational background and career interest, enabling them to make well informed course and college decisions. The decision making is empowered with easy access to detailed information on career choices, courses, exams, colleges, admission criteria, eligibility, fees, placement statistics, rankings, reviews, scholarships, latest updates etc as well as by interacting with other CollegeShiksha.com users, experts, current students in colleges and alumni groups. We have introduced several student oriented products and tools like Career Central, Common Application Form, Top Colleges, College Compare, Alumni Employment Stats, Campus Connect, College Reviews, College Predictors, MyShortlist and College Shiksha Café.</p>

		<p>Our active ask and answer community called College Shiksha Café has over 1000 experts answering career and college related queries. Students can ask questions, participate in discussions and stay updated with latest news, articles related to their education interest. CollegeShiksha.com is India’s smartest college gateway that blends higher education related domain knowledge, with technology, innovation, and credibility to give students personalised insights to make informed career, course and college decisions.</p>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
