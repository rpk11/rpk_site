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
            <h1>National Kart Center Website Redesign</h1>
            <img src="./images/orangeline.png">
        </div>
    </section>
    <section id="problem-statement">
        <div class="container">
            <h2>Problem Statement(s)</h2>
            <p>Having conducted usability testing, it's clear there are a number of potential areas for improvement in terms of usability and user experience. </li>
                <ul>
                    <li>The main page says “booking essential”, however there the user does not have the ability to book online. </li>
                    <li>The main page has two links, one to the Cork locations website, and one to the Limerick locations website. This is confusing as both websites have the same content, except the phone numbers listed are different.</li>
                    <li>On the Cork site, under contact us the Limerick location is listed first which is misleading. </li>
                    <li>There are three links to the shop (one in the main navigation bar, one under ‘visit shop’ on the main body of the page, and two in the footer - one called ‘shop login’ and one called ‘store’), however they direct the user to an 404 error page). </li>
                    <li>Under Newsfeed, the message “this API is no longer available” is displayed. This also message appears on the orange bar which has “upcoming events”.</li>
                    <li>There are two navigation bars, one on top of the page and one as part of the footer. Of the 8 links in the bottom navigation bar, only 2 of them are active. </li>
                    <li>Under the Videos heading, there is a small video playing with a button to ‘view more’. The view more button brings the user to the gallery page which has 2 images, and no videos. </li>
                    <li>Under the main section on the left hand side of most of the links, it has “gift vouchers, buy online now” but the link does not work. </li>
                    <li>On the section which has three boxes it has “karting”, “kids club” and “drift karting”. On mouse over, the pictures go from being grayscale to bright colour for “karting” and “kids club”, however for drift karting the exposure and colour of the image is very different when the mouse is over it compared to the other two boxes beside it. This is confusing as it’s not clear where this is actually highlighted. </li>
                </ul>
        </div>
    </section>

    <section id="wireframes">
        <div class="container">
            <h2>Wireframes</h2>
            <p>
                There are a number of unique things about NKC that distinguish it from other karting places in Ireland, such as having the longest indoor track in the world, the only drift kart center in Europe and having outstanding ratings on Trip Advisor. We will want to ensure that some of these unqiue selling points make it onto the home page. In particular, we will have a prominent showcases that this is the world's longest indoor track. Our home screen is going to be scrollable 
            </p>
            <p>
                For the leaderboard, rather than having a plane table we are going to try incorpate our layout colours in something slightly more creative. This is a nice feature as it adds a target for the more competitive karters. Most of the other pages here are informational, so we will try to convey the key things to the users without too much clutter or having the pages look too plain. 
            </p>
            
            <div id="portfolio-box-container">
                <div class="portfolio-wireframe-box">
                    <a href="images/NKCwireframe-index.png"><img class="portfolio-image-nkc" src="images/NKCwireframe-index.png"></a>
                    <p>Home screen</p>
                </div>
                <div class="portfolio-wireframe-box">
                    <a href="images/NKCwireframe-leaderboard.png"><img class="portfolio-image-nkc" src="images/NKCwireframe-leaderboard.png"></a>
                    <p>Leaderboard screen</p>
                </div>
                <div class="portfolio-wireframe-box">
                    <a href="images/NKCwireframe-adultkarting.png"><img class="portfolio-image-nkc" src="images/NKCwireframe-adultkarting.png"></a>
                    <p>Adult Karting screen</p>
                </div>
                <div class="portfolio-wireframe-box">
                    <a href="images/NKCwireframe-kidsclub.png"><img class="portfolio-image-nkc" src="images/NKCwireframe-kidsclub.png"></a>
                    <p>Kids Club screen</p>
                </div>
                <div class="portfolio-wireframe-box">
                    <a href="images/NKCwireframe-driftkarting.png"><img class="portfolio-image-nkc" src="images/NKCwireframe-driftkarting.png"></a>
                    <p>Drfit Karting screen</p>
                </div>
                <div class="portfolio-wireframe-box">
                    <a href="images/NKCwireframe-contact.png"><img class="portfolio-image-nkc" src="images/NKCwireframe-contact.png"></a>
                    <p>Contact Screen</p>
                </div>
                <div class="portfolio-wireframe-box">
                    <a href="images/NKCwireframe-gallery.png"><img class="portfolio-image-nkc" src="images/NKCwireframe-gallery.png"></a>
                    <p>Gallery screen</p>
                </div>
                <div class="portfolio-wireframe-box">
                    <a href="images/NKCwireframe-galleryopen.png"><img class="portfolio-image-nkc" src="images/NKCwireframe-galleryopen.png"></a>
                    <p>Gallery screen with image open</p>
                </div>
            </div>
        </div>
    </section>

    <section id="design-prototype">
        <div class="container">
            <h2>Design Prototype</h2>
            <p>
                In the final design, we have made some tweaks from our initial wireframes. The advantage of our wireframes is that we already had a general direction, but with the freedom to make changes in the high fidelity prototypes to any elements which didn't feel quite right.
            </p>
            <p>    
                As the NKC logo is orange, white and black, we will incorpate these colours as the basis for our layout. One of the most prominent flags in racing is the black and white chequered flag so this fits nicely into the scheme of our layout as well as being very relevent to our general theme. 
            </p>
            <p>
                We're using the chequered flag as a layout element on all of our pages except the home page (which would feel a little too cluttered). We also have a used background with really low opacity just to break under the plain look of our mainly white background. 
            </p>
            <div id="portfolio-box-container">
                <div class="portfolio-wireframe-box">
                    <a href="images/NKCIndex.png"><img class="design-prototype-nkc-index-image" src="images/NKCIndex.png"></a>
                    <p>Home screen</p>
                </div>

                <div class="portfolio-wireframe-box">
                    <a href="images/NKCLeaderboard.png"><img class="design-prototype-nkc-small-image" src="images/NKCLeaderboard.png"></a>
                    <p>Leaderboard screen</p>
                </div>

                <div class="portfolio-wireframe-box">
                    <a href="images/NKCAdultKarting.png"><img class="design-prototype-nkc-standard-image" src="images/NKCAdultKarting.png"></a>
                    <p>Adult Karting screen</p>
                </div>

                <div class="portfolio-wireframe-box">
                    <a href="images/NKCKidsClub.png"><img class="design-prototype-nkc-standard-image" src="images/NKCKidsClub.png"></a>
                    <p>Kids Club screen</p>
                </div>

                <div class="portfolio-wireframe-box">
                    <a href="images/NKCDriftKarting.png"><img class="design-prototype-nkc-standard-image" src="images/NKCDriftKarting.png"></a>
                    <p>Drifting Karting screen</p>
                </div>

                <div class="portfolio-wireframe-box">
                    <a href="images/NKCContact.png"><img class="design-prototype-nkc-small-image" src="images/NKCContact.png"></a>
                    <p>Contact Screen</p>
                </div>

                <div class="portfolio-wireframe-box">
                    <a href="images/NKCGallery.png"><img class="design-prototype-nkc-standard-image" src="images/NKCGallery.png"></a>
                    <p>Gallery screen</p>
                </div>

                <div class="portfolio-wireframe-box">
                    <a href="images/NKCGalleryOpen.png"><img class="design-prototype-nkc-standard-image" src="images/NKCGalleryOpen.png"></a>
                    <p>Gallery screen with image open</p>
                </div>

            </div>
        </div>
    </section>


<?php
    include 'footer.php';
?>
<script src="./js/main.js"></script>
</body>

</html>