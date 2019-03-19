<?php 

include("header.php");

?>

<style type="text/css">
	
	.cv_page {
		background-color: #ffffff;
		width: 100%;
		height: 900px;
		font-family: 'Raleway', sans-serif;

	}

	.online_details {
		background-color: #f2f2f2;
		width: 80%;
		height: 320px;
		margin-left: 10%;
		margin-top: 5%;
		font-family: 'Raleway', sans-serif;


	}

	.information {
		background-color:  #f2f2f2;
		height: 250px;
		width: 40%;
		float: left;
		margin-right: 2%;
		font-family: 'Raleway', sans-serif;

	}

	.photo {
		background-color:  #f2f2f2;
		height: 250px;
		width: 40%;
		float: left;
		margin-top: 2%;
	}

	.head{
		font-size:3em;
		color: #00e64d;
		padding-left: 5%;
	}

	.name {
		font-size:15px;
		color:#0d0d0d;
		padding-left: 5%;
	}

	.list-group {
		list-style-type: none;
		padding-left: 5%;
		font-size: 16px;
	}


	.picture{
		height: 250px;
		width:80%;
		background-color: green;
		margin-left: 10%;
	}

	.about_me {
		background-color:#ffffff ;
		width: 55%;
		height: 800px;
		float: left;
		margin-top:5%;
		margin-right: 3%;
		font-family: 'Raleway', sans-serif;
		
	}

	.about_me h4{
		padding-left: 4%;
	}

	.year {
		padding-left: 4%;
		font-size: 16px;
	}

	.position {
		padding-left: 4%;
		font-size: 16px;
		color: #47d147;
	}

	.experience {
		padding-left: 4%;
		font-size: 16px;
	}

	.school {
		padding-left: 4%;
		font-size: 16px;
		color: #47d147;
	}

	.info {
		padding-left: 4%;
		font-size: 16px;
	}

	.programming{
		background-color: #ffffff;
		width: 42%;
		height: 400px;
		float: left;
		margin-top: 5%;
		font-family: 'Raleway', sans-serif;

	}

	.programming h4 {
		padding-left: 10%;
		color:#47d147;
		font-size: 20px;
		font-family: 'Raleway', sans-serif;

	}

	.list-items{
		list-style: none;
		font-size: 16px;
	}
</style>
<link rel="stylesheet" type="text/css" href="cv.css">
<link rel="stylesheet" type="text/css" href="footer.css">


<div class="cv_page">

	<div class="online_details">

		<div class="information">
			<h2 class="head">CV</h2>
			<h5 class="name">Emmanuel Obeng</h5>
			<ul class="list-group">
			  <li>Ahodwo,Kumasi</li>
			  <li>Ashanti Region-Ghana</li>
			  <li>E-mail: emmanuelobeng7788@gmail.com</li>
			  <li>Phone: +233545804166/+233553314087</li>
		
			</ul>
		</div>
		<div class="photo">
			<div class="picture">
				<img src="IMG_20161214_065602_1.jpg" class="img-responsive" alt="Responsive image" style="height: 250px; width: 100%;">
			</div>
		</div>

		<div class="about_me">
			<h4>Professional Information</h4>
			<p class="info">Solutions-driven programmer with a four-year track record of commended performance in modular and object-oriented programming. Well-versed in all phases of the software development lifecycle, with a strong working knowledge of algorithms and data structures. Proven success engineering customized solutions improving business processes, operations and profitability.</p>
			<hr>
			<h4>Work Experience</h4>
			<hr>
			<h5 class="position">Self-Employed</h5>
			<p class="year">2016-present</p>
			<p class="experience">I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you.</p>
			<br>
			<h4>Education</h4>
			<hr>
			<p class="school">CAREERBLUEPRINT GHANA</p>
			<p class="year">2016-Present</p>

		</div>

		<div class="programming">
			<h4>Languages</h4>
			<hr>
			<ul class="list-items">
				<li>PHP</li>
				<li>Java</li>
				<li>Python</li>
			</ul>

			<h4>Skills</h4>
			<hr>
			<ul class="list-items">
				<li>FullStack Developer</li>
				<li>Native App Development</li>
				<li>Data Analysis</li>
			</ul>
		</div>

	</div>


</div>


<?php include("footer.php"); ?>