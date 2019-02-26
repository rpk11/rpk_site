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
            <h1>Stena Line Website Redesign</h1>
            <img src="./images/orangeline.png">
        </div>
    </section>
    <section id="problem-statement">
        <div class="container">
            <h2>Problem Statement(s)</h2>
            <p>Having conducted usability testing, it's clear there are a number of potential areas for improvement in terms of usability and user experience. </li>
                <ul>
                    <li>Home page offers the same links in a variety of ways for ferries to Britian, France and the Rest of Europe in multiple ways (through clickable tabs, and through 3 side by side content boxes).</li>
                    <li>When clicking on “Ferries to France”, “Free trip to Britain” is prominently displayed as one of 3 images on the next page.</li>
                    <!-- car drop down-->
                    <li>Under “How are you travelling” the user is forced to select an option from the dropdown list. This is requiring extra, unnecessary input from the user and should default to “On foot with no vehicles” which is the option which requires
                        the least amount of input from the most amount of users. In 2017, Stena Line had 7.4 million passengers, and 1.7 million cars (source: https://www.stenaline.ie/about-stena-line). An error is generated if any option is not selected.</li>
                    <li>This dropdown has confusion options, as it talks about vehicle lengths and widths. Many users will not know the exact dimensions of their vehicles.</li>
                    <!-- booking menu-->
                    <li>The checkbox for flexible dates is away from all of the other fields regarding dates, and thus was missed by during usability testing.</li>
                    <!-- booking dates-->
                    <li>On the search results page, if there are no sailings on a particular date, a “please select alternative dates” message is displayed, without showing what dates the ferries sail on. This is not particularly helpful to the user and is
                        making the user work harder for the information than they should have to. </li>
                    <!-- flexi ticket-->
                    <li>There are two radio button to select a Flexi ticket (one for outward, one for return). If this is not selected, the user can not continue. As such, this is extra work for the user, by forcing the user to select something which is in
                        effect - required and default. If the user doesn’t select the Flexi ticket radio button, an error message is displayed.</li>
                    <!-- cabin tab-->
                    <li>On the Cabins screen, two tabs appear, one for “outward trip” and one for “return trip” - both of the tabins say “mandatory”. This appears that a cabin is required for each leg of the trip which is not correct. When scrolling down
                        to the bottom of the the page, a user may select “Sailing with no cabin or reclining seat”. This means that cabins are not mandatory.</li>
                    <!-- cabin sleep image-->
                    <li>The images for some of the cabins (eg: 6-berth outside cabin) are generic (eg: person sleeping) and do not show what the cable looks like which is key for the user deciding to pick a cabin.</li>
                    <li>If a number of adults are travelling (eg: 3 adults), the system doesn’t guard against user error on selecting the number of cabins. For example, a user travelling as part of 3 adults may select 1 reclining seat, 1 sailing with no cabin
                        or reclining seat, and 2 child cots without any warning.</li>
                    <li>In cases where the user has selected a long journey (eg: 16 hours from Rosslare to Cherbourg), and has not selected a cabin or reclining seat, it is not flagged to the user that this is a 16 hour journey which is a long time to be
                        without a comfortable place to sit or rest. This design is lacking empathy with the user.</li>
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
            <div id="portfolio-box-container">
                <a href="images/sl-user-journey-map.jpg"><img class="journey-map-image" src="images/sl-user-journey-map.jpg"></a>
            </div>
        </div>
    </section>
<?php
    include 'footer.php';
?>
    <script src="./js/main.js"></script>
</body>

</html>