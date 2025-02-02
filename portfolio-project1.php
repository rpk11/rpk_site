<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="UX/UI Designer based in Dublin Ireland with Program & Product Management experience">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/portfolio.css">
    <title>Richie Kelly, UX / UI Designer</title>
    <link rel="icon" type="image/png" href="./images/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="./images/favicon-16x16.png" sizes="16x16" />

</head>

<body>
<?php
    include 'header.php';
?>
    <section id="company-background">
        <div class="container">
            <img src="./images/orangeline.png">
            <h1>Redesign & Implement the Willamette Hurling Club website</h1>
            <img src="./images/orangeline.png">
        </div>
    </section>
    <section id="problem-statement">
        <div class="container">
            <h2>Problem Statement(s)</h2>
            <p>Having conducted usability testing, it's clear there are a number of potential areas for improvement in terms of usability and user experience. </p>
                <ul>
                    <li>The club website (before this project) doesn't perform well on mobile. The google calendar overruns the width of the viewport. This means that the days where most events take place (Wednesday, Saturday, Sunday) are not visible to the user. This means the calendar is of limited to no value for existing club members or newcomers looking to get involved. The user can not scroll to the right to see those days.</li>
                    <li>Also on mobile devices, the header has some issues. The logo is positioned toward left of center which looks out of position. In addition, the 'Willamette Hurling Club' text over the banner obscures some of the club logo. </li>
                    <li>The footer is very basic and has a link to the clubs facebook page. However, there is no anchor text so the full url of the page shows. The text is the same as the rest of the text on the page so it is not obvious that this is a link. As a call to action, this can be significantly improved in order to stand out more. </li>
                </ul>
        </div>
    </section>

    <section id="user-research">
        <div class="container">
            <h2>User Research & Analysis</h2>
            <p>There are two main types of target users for the website, existing club members and potentially new players looking for more information. For existing club members:</p>
                <ul>
                    <li>The main value of the website is that it should show the upcoming calendar of events for training & tournaments</li>
                </ul>
            <p>For potentially new players:</p>
            <ul>
                    <li>The site needs to emphasise the unique values of the club as a selling point over other clubs in the Northwest Division</li>
                    <li>As the majority of the people in the area are not familiar with hurling, it must give background on the sport. EG:</li>
                    <ul>
                        <li>What is it?</li>
                        <li>How is it played?</li>
                        <li>What are the skills</li>
                        <li>What are the positions</li>
                        <li>What equipment is needed to get started </li>
                    </ul>
                </ul>

        </div>
    </section>


    <section id="wireframes">
        <div class="container">
            <h2>Wireframes</h2>
            <p>
                We will have a showcase area with a banner which will be consistent through the entire site, as well as the menu bar. The will ensure the design remains consistent throughout each page.
            </p>
            <p>Also, we'll have a few embedded iframes for youTube videos and for a google calendar showing events. We must be able to make these elements responsive which is a key assumption in this design. This can sometimes be tricky when not using bootstrap.
            </p>
            
            <div id="portfolio-box-container">
                <div class="portfolio-wireframe-box">
                    <a href="images/whc-index.png"><img class="portfolio-image-whc" src="images/whc-index.png"></a>
                    <p>Home screen</p>
                </div>
                <div class="portfolio-wireframe-box">
                    <a href="images/whc-what-is.png"><img class="portfolio-image-whc" src="images/whc-what-is.png"></a>
                    <p>What is Hurling screen</p>
                </div>
                <div class="portfolio-wireframe-box">
                    <a href="images/whc-skills.png"><img class="portfolio-image-whc" src="images/whc-skills.png"></a>
                    <p>Position & Skills screen</p>
                </div>
                <div class="portfolio-wireframe-box">
                    <a href="images/whc-sch.png"><img class="portfolio-image-whc" src="images/whc-sch.png"></a>
                    <p>Schedule & Events screen</p>
                </div>
                <div class="portfolio-wireframe-box">
                    <a href="images/whc-contact.png"><img class="portfolio-image-whc" src="images/whc-contact.png"></a>
                    <p>Contact screen</p>
                </div>
                
            </div>
        </div>
    </section>
    <section id="design-prototype">
        <div class="container">
            <h2>Design Prototype</h2>
            <p>
                The clubs colours are amber (primary), navy (secondary) and white (tertiary). The colours are tricky to work with, so we will use white as the main background for the site as it is the most neutral. Amber text on a navy background doesn't look or feel natural.
            </p>
            <p>The site is responsive so it is usable on mobile. An example of this can be seen is that the menu options will be replaced with a standard menu icon which drops down the options when it is clicked. The iframes which hold the YouTube videos and the google calendar will appear smaller on mobile and preserve their aspect ratio, similiar to the images on the site. 
            </p>
            <a href="http://www.willamettehurling.com" target="_blank"><button class="btn" id="contact-me">See the design live</button></a>
        </div>
    </section> 


<?php
    include 'footer.php';
?>
    <script src="./js/main.js"></script>
</body>

</html>