<!DOCTYPE html>
<!--http://recruitloop.com/blog/how-to-write-a-job-description/-->
<!--
filename: jobs.html
author: Jacquie 
created: 1/04/2024
last modified: 10/04/24
description: jobs page.
Thursday 10:30 Workshop
Tutor: Kaibin Wang
-->
<html lang="en">

<head>
	<meta charset="utf-8"	/>
	<meta name="description"	content="Assignment Job Description"	/>
	<meta name="keywords"		content="HTML, CSS"	/>
	<meta name="author"			content="Jacqueline Gordon"	/>
	<meta name="viewport"       content="width=device-width, initial-scale=1.0">
	<title>Job Description</title>
	<link href= "styles/style.css" rel="stylesheet"/>
</head>

<header id="index_header2">
	<?php include 'header.inc';?>
</header>


<body>
	
		<h1 id="jobDescription">Jobs Descriptions</h1>
		<section id="navigation">
		<h2>Job Navigation:<h2>
		<nav class="navigation">
			<a href="#job1">Cyber Security</a> 
			<a href="#job2">Tech Support</a> 
		</nav>
		</section>
	
	
	<article>
	
		<aside>
		<p>If you feel fit for any of the jobs shown, apply now <a href="apply.php">here.</a></p>
		</aside>
		
	<section id="cybsec">
		<h2 id="job1">34CS1</h2>
		<h2 class="jobtitle">Cyber Security</h2>
		<p class="description">Manage systems and provide reliable security for company-wide network</p>
		<p class="salary">$45000-$60000</p>
		
		<h3 class="responsib">Key Responsibilities</h3>
			<ul>
				<li>Monitor network safety</li>
				<li>Add and change systems as required</li>
				<li>Analyse and manage risks/breaches</li>
			</ul>
		
		<h3 class="qualif">Prerequisite Qualifications</h3>
			<h4 class="essential">Essential:</h4>
			<ol>
				<li>Completed graduate computing degree</li>
				<li>Language basics: C, Java, Python, Ruby</li>
			</ol>
			
			<h4 class="preferrable">Preferrable:</h4>
			<ol>
				<li>+2yrs working experience</li>
				<li>Advanced language knowledge</li>
				<li>Any previous jobs in similar fields</li>
			</ol>
	</section>
			
	<section id="tecsup">	
		<h2 id="job2">12TS4</h2>
		<h2 class="jobtitle">Tech Support</h2>
		<p class="description">On-site management and solving of immediate computing issues</p>
		<p class="salary">$40000-$50000</p>
		
		<h3 class="responsib">Key Responsibilities</h3>
			<ul>
				<li>Receive and solve company support tickets</li>
				<li>Be prepared to fix any type of problems</li>
				<li>Communicate solution to users and help prevent repeat issues</li>
			</ul>
		
		<h3 class="qualif">Prerequisite Qualifications</h3>
			<h4 class="essential">Essential:</h4>
			<ol>
				<li>+1yrs working experience</li>
				<li>Experience in troubleshooting and problem solving</li>
			</ol>
			
			<h4 class="preferrable">Preferrable:</h4>
			<ol>
				<li>Communication and ability to explain problems</li>
				<li>Confidence in solo working</li>
				<li>Priority analysing and management</li>
			</ol>
	</section>	
			
		
	<p id="totop"><a href="#" title="top">&#8593;Back to top</a></p>	
	</article>


</body>

<?php include 'footer.inc';?>
</html>