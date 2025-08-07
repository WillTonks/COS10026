<!DOCTYPE html>
<!--
filename: index.html
author: Leonardo Jacquie Will
created: 1/04/2024
last modified: 10/04/24
description: index page.
Thursday 10:30 Workshop
Tutor: Kaibin Wang
-->
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="description" content="Website homepage"/>
    <meta name="keywords"      content="HTML, CSS"/>
    <meta name="author"      content="Leo Jacquie Will"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job application page</title>
    <link href= "styles/style.css" rel="stylesheet"/>
	
</head>

<header id="index_header">
	<?php include 'header.inc';?>
</header>

<body class="homepage_body"> <!--Body of the home page-->
<h2>What We Provide</h2>
<p>At this company we make websites! We strive to create the best experience for our client's users by creating easy to navigate websites accessible to all types of users. </p>
<p>We offer either pre-designed templates made by our personal design team, or we accept provided designs and can offer feedback to best optimise your site.</p>
<p>Commission fees are determined by discussion based on design complexity, however we strive to maintain reasonable prices.</p>
<h2>Our Portfolio</h2>

<img src="images/ImageMap.png" alt="QuickLink" usemap="#JLWActions"> <!--Image map-->
<map name="JLWActions">
    <area shape="rect" coords="0,0,504,94" alt="jobs" href="jobs.php">
    <area shape="rect" coords="0,94,504,188" alt="about us" href="about.php">
    <area shape="rect" coords="0,188,504,282" alt="apply" href="apply.php">
</map>

<img src="images/Capture.PNG" alt="example of website" title="Example of One of Our Websites" />
</body>

<?php include 'footer.inc';?>
</html>