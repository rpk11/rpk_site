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
            <p>Many users will have already had some level of experience of booking travel. This means most users will already likely have a mental model of how the booking process looks like. It's important to stick to the design principle of , while ensuring
                the process is easily percievable for users with no experience. With this in mind, it's important that the home screen looks clear and inviting. We also need to pay particular care in guiding the user through parts which are unique to
                booking a ferry - the ability to bring a vehicle and book a cabin.
            </p>
            <p>
                We will also ensure that the user has the quickest possible path to complete the booking. From both a business perspective and usability perspective, as soon as a user has made a decision to purchase, you have to do everything possible to get them to
                the end as quickly as possible. In practical terms, this means defaulting selections/options to the choices which are most common for the greatest number of users. You will also see an example of that on the vehicle screen as we give the
                user the ability to skip the cabins section if they know in advance they are not interested. It's all about getting their trip booked as quickly and efficiently as possible so that they can go and look forward to their impending trip.
            </p>
            <div id="portfolio-box-container">
                <div class="portfolio-wireframe-box">
                    <a href="images/sl-1.png"><img class="portfolio-image" src="images/sl-1.png"></a>
                    <p>Home screen</p>
                </div>
                <div class="portfolio-wireframe-box">
                    <a href="images/sl-2.png"><img class="portfolio-image" src="images/sl-2.png"></a>
                    <p>Search results screen</p>
                </div>
                <div class="portfolio-wireframe-box">
                    <a href="images/sl-3.png"><img class="portfolio-image" src="images/sl-3.png"></a>
                    <p>Vehicle screen</p>
                </div>
                <div class="portfolio-wireframe-box">
                    <a href="images/sl-4.png"><img class="portfolio-image" src="images/sl-4.png"></a>
                    <p>Cabin screen</p>
                </div>
                <div class="portfolio-wireframe-box">
                    <a href="images/sl-5.png"><img class="portfolio-image" src="images/sl-5.png"></a>
                    <p>Review selection</p>
                </div>
                <div class="portfolio-wireframe-box">
                    <a href="images/sl-6.png"><img class="portfolio-image" src="images/sl-6.png"></a>
                    <p>Checkout form</p>
                </div>
                <div class="portfolio-wireframe-box">
                    <a href="images/sl-7.png"><img class="portfolio-image" src="images/sl-7.png"></a>
                    <p>Confirmation screen</p>
                </div>
            </div>
        </div>
    </section>

    <section id="journey-map">
        <div class="container">
            <h2>Journey Map</h2>
            <p> A journey map is an important part of the design process which allows us to think through the goals the users are trying to achieve, the steps that get them there, any design points in keep in mind, and what the content priorities should be. 
                This allows us to design the details. Good design and UX is all about details - and they shouldn't happen by accident. Journey maps come in various shapes and sizes as there is no universal template. Below is the journey map template I most like to use. </p>
            <div id="portfolio-box-container">
                <a href="images/sl-user-journey-map.jpg"><img class="journey-map-image" src="images/sl-user-journey-map.jpg"></a>
            </div>
        </div>
    </section>

    <section id="design-prototype">
        <div class="container">
            <h2>Design Prototype</h2>
            <p>
                We will also ensure that the user has the quickest possible path to complete the booking. From both a business perspective and usability perspective, as soon as a user has made a decision to purchase, you have to do everything possible to get them to
                the end as quickly as possible. In practical terms, this means defaulting selections/options to the choices which are most common for the greatest number of users. You will also see an example of that on the vehicle screen as we give the
                user the ability to skip the cabins section if they know in advance they are not interested. It's all about getting their trip booked as quickly and efficiently as possible so that they can go and look forward to their impending trip.
            </p>
            <div id="portfolio-box-container">
                <div class="portfolio-wireframe-box">
                    <a href="images/stena-line-index.png"><img class="design-prototype-image" src="images/stena-line-index.png"></a>
                    <p>Home screen</p>
                </div>

                <div class="portfolio-wireframe-box">
                    <a href="images/stena-line-index-passenger-menu.png"><img class="design-prototype-image" src="images/stena-line-index-passenger-menu.png"></a>
                    <p>Home with passenger menu</p>
                </div>

                <div class="portfolio-wireframe-box">
                    <a href="images/stena-line-search-results-outbound.png"><img class="design-prototype-image" src="images/stena-line-search-results-outbound.png"></a>
                    <p>Search results for outbound journey</p>
                </div>

                <div class="portfolio-wireframe-box">
                    <a href="images/stena-line-search-results-return.png"><img class="design-prototype-image" src="images/stena-line-search-results-return.png"></a>
                    <p>Search results for return journey</p>
                </div>

                <div class="portfolio-wireframe-box">
                    <a href="images/stena-line-vehicles.png"><img class="design-prototype-image" src="images/stena-line-vehicles.png"></a>
                    <p>Add vehicle screen</p>
                </div>

                <div class="portfolio-wireframe-box">
                    <a href="images/stena-line-cabins.png"><img class="design-prototype-image-scroller" src="images/stena-line-cabins.png"></a>
                    <p>Add cabins screen (page is scrollable)</p>
                </div>

                <div class="portfolio-wireframe-box">
                    <a href="images/stena-line-checkout.png"><img class="design-prototype-image-scroller" src="images/stena-line-checkout.png"></a>
                    <p>Checkout: review selections (page is scrollable)</p>
                </div>

                <div class="portfolio-wireframe-box">
                    <a href="images/stena-line-checkout-form.png"><img class="design-prototype-image-scroller" src="images/stena-line-checkout-form.png"></a>
                    <p>Checkout: form (page is scrollable)</p>
                </div>

                <div class="portfolio-wireframe-box">
                    <a href="images/stena-line-confirmation.png"><img class="design-prototype-image" src="images/stena-line-confirmation.png"></a>
                    <p>Checkout: confirmation</p>
                </div>

            </div>
        </div>
    </section>


<?php
    include 'footer.php';
?>
</body>

</html>