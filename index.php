<!DOCTYPE html>
<html lang="en">

<?php
    if(isset($_POST['submit']))
    {
        $to = 'webmaster@richiekelly.net';
        $name = $_POST['name'];
        $headers = "From: " . $_POST['email']."\r\n";   
        $subject = "Website contact form";
        $message = $_POST['message'];
        $txt = "You have a message from: ".$name."\n\nMessage: ".$message.".\n";
        mail($to, $subject, $txt, $headers);
    }
  
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="UX/UI Designer based in Dublin Ireland with Program & Product Management experience">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/form.css">
    <title>Richie Kelly, UX / UI Designer</title>
    <link rel="icon" type="image/png" href="./images/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="./images/favicon-16x16.png" sizes="16x16" />

</head>

<body>
<?php
    include 'header.php';
?>

    <section id="section1">
    <?php
       
       if(isset($_POST['submit']))
       {
    ?>
            <div class="form-submitted">Thank you for getting in contact. I will get back to you as soon as possible.</div>
    <?php
       }
    ?>   
                <video src="videos/White-Keyboard.mp4" autoplay muted loop></video>
                <div class="container">
                    <div id="content">
                        <h1>Richie Kelly</h1>
                        <div id="line"></div>
                        <p id="sub-heading">UX/UI Designer, Program & Product Manager</p>
                        <p id="sub-heading"> Dublin, Ireland</p>
                    </div>
                </div>
    </section>
    </div>
    <section id="skills">
        <div class="container">
            <div class="header-style-white">
                <h2>Skills</h2>
            </div>
            <div id="container-boxes">
                <div class="boxes" id="container-box1">
                    <img src="images/target-icon.png">
                    <h2>User Experience & User Interface Design</h2>
                    <p>Creating exciting UX & UI using modern tools & techniques to build great products that users love</p>
                </div>
                <div class="boxes" id="container-box2">
                    <img src="images/graph-icon.png">
                    <h2>Product & Program Management</h2>
                    <p>Working with cross geo teams in an agile way that complements the design process</p>
                </div>
                <div class="boxes" id="container-box3">
                    <img src="images/laptop-icon1.png">
                    <h2>Front End Web Development</h2>
                    <p>Rapidly prototyping responsive sites to validate design decisions using empirical data</p>
                </div>
            </div>
        </div>
    </section>
    <section id="process">
        <div class="container narrow">
            <div class="header-style-gray">
                <h2>Process</h2>
            </div>
            <p>Great products or services are seldom created in isolation or a moment of divine inspiration. The best creations come from taking an iterative approach that puts consumers at the center of the process. There is no point to invest months or
                years of precision effort developing the wrong thing which no one likes, wants or will ever buy. My experience has shown me that there is no better way to make (and validate) design decisions than with empirical data. </p>
            <img id="process-image" src="./images/process.png">
            <p>
                This means that creating great designs and user experiences require a deep understand of who your users are, what they are trying to achieve and how they are interacting with your company/product/service. Simple tools and techniques such as user journey
                mapping, user research, wireframing & prototyping can help ensure you are on the right path very early on, and if not, adjust course. Involving users early is crucial, as is collaborating with all teams from the start. It’s no secret that
                people feel more invested in the success of a project when their input is valued and they feel they’ve helped to shape the direction.
            </p>
        </div>
    </section>
    <section id="portfolio">
        <div class="container narrow">
            <div class="header-style-white">
                <h2>Portfolio</h2>
                <p>Solicited or unsolicited design projects</p>
            </div>
            <div class="portfolio-container-box">
                <div class="portfolio-image-box">
                    <a href="portfolio-project1.php"><img src="./images/whc-preview.png"></a>
                </div>
                <div class="portfolio-text-box link-underline-effect">
                    <img src="./images/orangeline.png">
                    <h2><a href="portfolio-project1.php">Willamette Hurling Club</a></h2>
                    <img src="./images/orangeline.png">
                    <p>Willamette Hurling Club are based in Portland, Oregon. As one of their main recruitment mechanisms for recruiter in this niche sport in Oregon, their website had significant challenges. It performed poorly on mobile, which makes up
                        50% of all the traffic to their website. With this project, I redesigned their website from scratch to give it a more suitable look and feel for the audience they are trying to attract and ensure it performs well on mobile devices.

                    </p>
                </div>
            </div>
            <div class="portfolio-container-box">
                <div class="portfolio-text-box link-underline-effect" id="portfolio-text-alt-side">
                    <img src="./images/orangeline.png">
                    <h2><a href="portfolio-project2.php">Stena Line</a></h2>
                    <img src="./images/orangeline.png">
                    <p>Stena Line are one of the largest ferry operators in the world, however I have noticed significant possiblilities for improvements in terms of UX on their website. In this unsolicited re-design, I discuss some of the usability issues
                        and propose an improved re-design of their website which greatly enhances the user experience for their customers. This project shows both lo and high fidelity designs as well as the user journey map.
                    </p>
                </div>
                <div class="portfolio-image-box" id="portfolio-img-alt-side">
                    <a href="portfolio-project2.php"><img src="./images/stena-line-mod.png"></a>
                </div>
            </div>
            <div class="portfolio-container-box">
                <div class="portfolio-image-box">
                    <a href="portfolio-project3.php"><img src="./images/nkc-preview.png"></a>
                </div>
                <div class="portfolio-text-box link-underline-effect">
                    <img src="./images/orangeline.png">
                    <h2><a href="portfolio-project3.php">National Kart Center</a></h2>
                    <img src="./images/orangeline.png">
                    <p>
                        National Kart Center have the world's longest indoor track as well as Europe's only drift kart track. Their facilities in Limerick and Cork are absolutely second to none, however there are many areas in which the design and user experience of their website could be much improved. This unsolicited project shows how this can be achieved.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container narrow">
            <div class="header-style-orange header-alternate">
                <h2>About</h2>
            </div>
            <p>Thanks for stopping by. I live in Dublin with my wife Siobhan. We wanted to experience working and living outside of Ireland, so spent 18 months living and working in the amazing city of Portland, Oregon. It's a fantastic city with amazingly
                friendly people, unbelievable food and culture......And no, it doesn't rain too much (at least compared to Ireland!)
            </p> I graduated from the University of Limerick with a first class honours in Computer Systems. I worked at Intel for nearly 11 years, 6 as a software engineer and 5 as a Program/Projectmanager.</p>
            <p>I like to invest time learning new skills, which lead me to become a Project Management Institute Agile Certified Practitioner (PMI-ACP) and Certified Scrum Master (CSM) as soon as I made the transition to Program & Product Management. Having
                had quite a lot of professional experience in various roles, I’ve learned that my main passion is for creating great products & services that provide a great user experience through design and UI, so that's the career path I'm now pursuing.
                To build on my own learning, I achieved a certification for UX foundation.
            </p>
            <p>In my spare time, I play hurling for Realt Dearg and have a keen interest in sports of all kind (soccer, motorsport, basketball, rugby, etc).
            </p>
        </div>
    </section>

    <section id="contact">
        <div class="container narrow">
            <div class="header-style-orange">
                <h2>Get In Touch</h2>
            </div>
            <p>Now you know a little bit about me, it's time for me to hear about you!</p>
            <button class="btn" id="contact-me">Contact me</button>
            <form class="form-style" id="contact-form" action="index.php" onsubmit="return validatedForm()"  method="POST" >
                <label>Name:</label>
                <div class="error" id="nameError">Your name is required</div>
                <input type="text" name="name" id="name">
                <label>Email:</label>
                <div class="error" id="emailError">Email is not valid</div>
                <input type="text" name="email" id="email">
                <label>Message: </label>
                <div class="error" id="messageError">You must enter a message</div>
                <textarea name="message" id="message"></textarea>
                <button class="button" type="submit" value="Submit" name="submit">Submit</button><br>
            </form>
        </div>
    </section>

<?php
    include 'footer.php';
?>

    <script src="./js/main.js"></script>
    <script src="./js/form-val.js"></script>
    <script src="./js/contact-btn.js"></script>
</body>

</html>