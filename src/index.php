<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <style>
        <?php include "style.css" 
        ?>
    </style>
</head>

<body>
    <title>
        Victor Su Personal Website
    </title>

<!-- Title Screen -->
    <section class = "title">
        <div class="container">
            <div class="navbar">
                <a class="toggle-button">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                  </a>
                  <div class = "navbar-links">
                        <ul>
                            <li>
                                <a href = "#about"> <h5>About Me</h5></a>
                            </li>
                            <li>
                                <a href = "#res"><h5>Resume</h5></a>
                            </li>
                            <li>
                                <a href = "#project"><h5>Projects</h5></a>
                            </li>
                            <li>
                                <a href = "#photos"><h5>Photo Gallery</h5></a>
                            </li>
                            <li>
                            <a href = "#contact"><h5>Contact Me</h5></a>
                            </li>
                            <li>
                            <a href = "#comments"><h5>Comments</h5></a>
                            </li>
                        </ul>
                    </div>
            </div>
            <img class="background-pic" src="background image.png" alt="Background Image">
            <div class="centered">
                VICTOR SU
            </div>
            <div class="under">
                Nice to meet you!
            </div>
        </div>
    </section>

<!-- About Me-->

    <section class = "aboutmesection" id = "about">
        <div class = "aboutme">
            <img src="Copy of Victor Su Headshot.jpg" alt="picture of me" class="profile">
            <div class = "paragraph">
                <h1 id = "aboutmeHeader">
                    About Me
                </h1>
                    <p id = "aboutDescription">
                        Hey! My name is Victor Su and I am currently a first-year at the University of Waterloo studying Management Engineering. If I'm not doing school work,
                        most of the time you can find me skateboarding at a local skate park, hanging out with friends, or working on one of my side projects.  
                        I'm a huge fan of basketball too, with my favorite team being the Raptors. I am also a casual anime fan, with some of my favorites being Death Note and Attack on Titan. 
                        Career-wise, I'm hoping to break into the software industry to gain some valuable work experience in the tech field, and eventually work my way up to become a software engineer.
                        I love meeting new people, so don't hesitate to reach out!
                    </p>
            </div>
        </div>
    </section>

<!-- Resume -->

    <section class = "resumeSection" id = "res">
        <div class="resume">
            <div class = "headerPdf">
                <h1 id="resumeHeader">Resume</h1>
               <a href = "https://docs.google.com/document/d/1cdEl49yMfz87g7xV29Yl1hVXDq_KFMzNF3obeSuqcJE/edit?usp=sharing" target = "_blank">
                   <img src = "Victor Su 1B Resume_00_00.jpg" alt = "Victor Su Resume" class = "resumeimg">
                </a>
            </div>
        </div>
    </section>

<!-- Projects -->

    <section class = "projectSection" id = "project">
        <h1 id = projectHeader>Projects</h1>
        <p id = "projectDescription"> Some projects I do in my spare time. Click on the picture to learn more! </p>
        <div class = "projects">
            <div class = "animeWebsite">
                <h1 id = animeWebsiteHeader> Top 10 best anime's of all time</h1>
                <p>A simple website made from basic HTML and CSS, ranking my top 10 favourite anime's 
                    of all time. 
                </p>
                <a href = "https://victorr-su.github.io/" target="_blank"><img src = "killua.jpg" alt = "Picture of Killua from HunterxHunter" id = "killua"></a>
            </div>
            <div class = "personalWebsite">
                <h1 id = "personalWebsiteHeader"> This website</h1>
                <p>
                    A personal portfolio/website that I created using HTML, CSS, and JavaScript.
                </p>
                <a><img src = "website image1.png" alt = "Website Picture" target = "_blank" id = "website"></a>
            </div>
            <div class = 'ChatApp'>
                <h1 id = 'ChatAppHeader'>Chat App</h1>
                <p> A Personalized chat app where you can message others in real time! Created using React and the chat engine API</p>
                <a href = "https://chatt-app-victorrsu.netlify.app/">
                    <img src = "Chat-app.jpeg" target = "_blank" alt = 'Chat App picture' id = 'ChatAppPic'>
                </a>
            </div>
        </div> 
    </section>

<!-- Photo Gallery-->

    <section class = "photoSection" id = "photos">
        <h1 id = "photoHeader">Photo Gallery</h1>
        <p id = "photoDescription">Some of my favourite pictures. Enjoy!</p>
                <div class = "photoSlider">
                    <img src= "paris.jpg" class = "carousel fade" style = "width: 100%">
                    <img src= "semi.jpg" class = "carousel fade" style = "width: 100%">
                    <img src= "group.jpg" class = "carousel fade" style = "width: 100%"> 
                    <img src= "grad.jpg" class = "carousel fade" style = "width: 100%">
                    <img src= "deca.jpg" class = "carousel fade" style = "width: 100%">
                    <i class="fas fa-arrow-left" onclick="plusDivs(-1)" id = "prev"></i>
                    <i class="fas fa-arrow-right" onclick="plusDivs(1)" id = "next"></i>
            </div>
                </section>

<!-- Contact Me-->
    <section class = "contactSection" id = "contact">
        <div class = "mainContainer">
            <div class = "headerLine">
                <h1 id = "contactHeader">Contact Me!</h1>
                <hr>
            </div>
                    <div class = "emailLink">
                        <a href = "mailto: v3su@uwaterloo.ca" id = "uwEmail">
                            <i class="far fa-envelope" id = "mailIcon"></i>
                            <li id = "email">v3su@uwaterloo.ca</li> 
                        </a>
                    </div>
                    <div class = "instaLink">
                        <a href = "https://www.instagram.com/victorr_su/" target = "_blank" id = "instagram">
                            <i class="fab fa-instagram" id = "instaIcon"></i>
                            <li id = "insta">@victorr_su</li>
                        </a> 
                    </div>
                    <div class = "linkedinLink">
                        <a href = "https://www.linkedin.com/in/victorsu21/" target = "_blank" id = "linkedin">
                            <i class="fab fa-linkedin" id = "linkedinIcon"></i>
                            <li id = "linked">linkedin.com/in/victorsu21/</li>
                        </a>
                    </div>
                    <div class = "facebookLink">
                        <a href = "https://www.facebook.com/victor.su.3975/" target = "_blank" id = "facebook">
                            <i class="fab fa-facebook-square" id = "facebookIcon"></i>
                            <li id = "face">facebook.com/victor.su</li>
                        </a>
                    </div>
        </div>
    <p id = "end"> © Created by Victor Su. 2021</p>
    </section>
<!-- Comment Section-->
<?php
    date_default_timezone_set('America/Toronto');
    include 'comments.inc.php';
    include 'dbh.inc.php';
?>

<section class = 'commentSection' id = 'comments'>
<h1 id = 'commentHeader'>Comment Section</h1>
    <p id = 'commentCaption'>Welcome to the comment section. Let me know what you think about my website below!</p>
                   <?php
                            echo 
                                    "<div class = 'commentContainer'>  
                                    <div class = 'comments'>
                                    <form method = 'POST' action ='".setComments($connect)."'>
                                    
                                    <input type = 'hidden' name = 'uid' value = 'Anonymous'>
                                    <input type = 'hidden' name = 'date' value = '".date('Y-m-d H:i:s')."'>
                                    <textarea name = 'message'></textarea> 
                                    <br>
                                    <button name = 'commentSubmit' type = 'submit'>Comment</button>
                                    </form>
                                    </div>
                                    </div>
                                    <h1 id = 'title'>All Comments</h1> 
                                    ";
                            
                                getComments($connect)
                    ?>
</section>

        <script src="personalWebsite.js"></script>
    </body>
</html>
