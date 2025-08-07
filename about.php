<!DOCTYPE html>
<!--
filename: about.html
author: Will
created: 1/04/2024
last modified: 10/04/24
description: about page.
Thursday 10:30 Workshop
Tutor: Kaibin Wang
-->
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="About Page for The JLW Company Jobs" />
    <meta name="keywords" content="HTML, CSS" />
    <meta name="author" content="Will"  />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href= "styles/style.css" rel="stylesheet"/>
</head>
<header id="index_header2">
	<?php include 'header.inc';?>
</header>
    <body id="aboutBody">
        <div class="Definition">
        <h1 id="aboutH1"> <!-- Group Name -->
            The JLW Company
        </h1>
        <!-- Group information-->
        <dl>
            <dt>Group Name</dt>
                <dd>The JLW Company</dd>
            <dt>Group ID</dt>
                <dd>4321</dd>
            <dt>Tutors Name</dt>
                <dd>Kaibin Wang</dd>
            <dt>Course</dt>
                <dd>Bachelor of Computer Science</dd>
        </dl>
        </div>
        <!-- Personal section includes Figure Image portrait,
        also includes a list describing what the person likes to do in their free time-->
        <div class="leo">
        <h2>Leo</h2>
        <!-- Portrait --> 
        <p>
            <figure class="aboutImg">
                <img class="imgStyle"
                src="images/LeoPortrait.jpg" alt="LeoPortrait" width="75" height="100">
                <figcaption>
                Leo, Applications manager
                </figcaption>
                </figure>
        </p>
        <p>I enjoy:</p>
        <ul>
            <li>Programming</li>
            <li>Listening to and writing music</li>
            <li>Long walks</li>
        </ul>
        </div>

        <div class="Jacquie">
        <h2>Jacquie</h2>
         <!-- Portrait -->
         <p>
            <figure class="aboutImg">
                <img class="imgStyle"
                src="images/JacquiePortrait.png" alt="JacquiePortrait" width="66" height="66">
                <figcaption>
                Jacquie, Chief of People
                </figcaption>
                </figure>
        </p>
        <p>I enjoy:</p>
        <ul>
            <li>Computers</li>
            <li>Video Games with friends</li>
            <li>Helping people</li>
        </ul>
        </div>

        <div class="Will">
        <h2>Will</h2>
        <!-- Portrait --> 
        <p>
            <figure class="aboutImg">
                <img class="imgStyle"
                src="images/WillPortrait.png" alt="WillPortrait" width="75" height="100">
                <figcaption>
                Will, Support Manager
                </figcaption>
                </figure>
        </p>
        <p>I enjoy:</p>
        <ul>
            <li>Food and Wine</li>
            <li>Reading</li>
            <li>Travelling</li>
        </ul>
        </div>
        <!-- Timetable table, including headers of times and days-->
        <p>
            <h2>Timetable</h2>
            <table>
                <caption>JLW's Timetable</caption>
                <thead>
                    <tr>
                    <th rowspan="8" scope="col">Times</th>
                    <th colspan="7" scope="col">Days</th>
                    </tr>
                    <tr>
                        <th>Monday</th>
                        <th>Tuesday</th>
                        <th>Wednesday</th>
                        <th>Thursday</th>
                        <th>Friday</th>
                        <th>Saturday</th>
                        <th>Sunday</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" class="Times">9am</th>
                        <td>Available</td>
                        <td>Busy</td>
                        <td>Busy</td>
                        <td>Available</td>
                        <td>Busy</td>
                        <td>Busy</td>
                        <td>Busy</td>
                    </tr>
                    <tr>
                        <th scope="row" class="Times">10am</th>
                        <td>Available</td>
                        <td>Busy</td>
                        <td>Busy</td>
                        <td>Available</td>
                        <td>Busy</td>
                        <td>Busy</td>
                        <td>Busy</td>
                    </tr>
                    <tr>
                        <th scope="row" class="Times">11am</th>
                        <td>Available</td>
                        <td>Busy</td>
                        <td>Busy</td>
                        <td>Available</td>
                        <td>Busy</td>
                        <td>Busy</td>
                        <td>Busy</td>
                    </tr>
                    <tr>
                        <th scope="row" class="Times">12am</th>
                        <td>Available</td>
                        <td>Busy</td>
                        <td>Busy</td>
                        <td>Available</td>
                        <td>Busy</td>
                        <td>Busy</td>
                        <td>Busy</td>
                    </tr>
                    <tr>
                        <th scope="row" class="Times">1pm</th>
                        <td>Available</td>
                        <td>Busy</td>
                        <td>Available</td>
                        <td>Busy</td>
                        <td>Busy</td>
                        <td>Busy</td>
                        <td>Busy</td>
                    </tr>
                    <tr>
                        <th scope="row" class="Times">2pm</th>
                        <td>Available</td>
                        <td>Busy</td>
                        <td>Available</td>
                        <td>Busy</td>
                        <td>Busy</td>
                        <td>Busy</td>
                        <td>Busy</td>
                    </tr>
                    <tr>
                        <th scope="row" class="Times">3pm</th>
                        <td>Busy</td>
                        <td>Busy</td>
                        <td>Busy</td>
                        <td>Busy</td>
                        <td>Available</td>
                        <td>Busy</td>
                        <td>Busy</td>
                    </tr>
                    <tr>
                        <th scope="row" class="Times">4pm</th>
                        <td>Busy</td>
                        <td>Busy</td>
                        <td>Busy</td>
                        <td>Busy</td>
                        <td>Available</td>
                        <td>Busy</td>
                        <td>Busy</td>
                    </tr>
                    <tr>
                        <th scope="row" class="Times">5pm</th>
                        <td>Busy</td>
                        <td>Available</td>
                        <td>Busy</td>
                        <td>Busy</td>
                        <td>Available</td>
                        <td>Busy</td>
                        <td>Busy</td>
                    </tr>
                </tbody>
            </table>
        </p>
        <!-- Email Link
        Must float to the right in CSS-->
        <div class="ContactEmail">
        
        <h2>Contact us:</h2>
        <p>
            <a href="mailto:105361508@student.swin.edu.au">
                support@JLW.com
            </a>
        </p>
        </div>
    </body>
	<?php include 'footer.inc';?>
</html>