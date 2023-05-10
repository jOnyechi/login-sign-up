<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me: Jacob Onyechi Portfolio</title>
    <!--CSS FILES FOR MAIN WEBSITE VIEW-->
    <link rel="stylesheet" href="/portfolio/css/reset.css">
    <link rel="stylesheet" href="/portfolio/css/main.css">
    <link rel="stylesheet" href="/portfolio/css/contact-me.css">
    <!--CSS FILES FOR MOBILE VIEW-->
    <link rel="stylesheet" href="/portfolio/css/mobile-version/main.css">
    <link rel="stylesheet" href="/portfolio/css/mobile-version/contact-me.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--<link rel="stylesheet" href="/portfolio/resources/fontawesome/fontawesome-free-6.3.0-web/css/all.min.css">-->
    <link rel="shortcut icon" href="resources/images/favicon-new.png" type="image/x-icon">
</head>
<body>
    <?php include ("header.php") ?>
    <main>
        <div class="contact-details">
            <h1>Hey, let's talk about your next <span class="highlight">software developement</span> project.</h1>
            <div class="contact-section">
                <div class="contact">
                    <a href="">
                        <div class="symbol reveal">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                    </a>
                    <h3>Call me</h3>
                </div>
                <div class="contact">
                    <a href="">
                        <div class="symbol reveal">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                    </a>                    
                    <h3>Email me</h3>
                </div>
                <div class="contact">
                    <a href="">
                        <div class="symbol reveal">
                        <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
                        </div>
                    </a>                    
                    <h3>Find me</h3>
                </div>
            </div>
        </div>
    </main>
    <section id="contact-form">
        <div class="form-section-container">
            <div class="message-copy">
                <h2>Send me a message</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic ullam dolore beatae ut eveniet, corrupti corporis nobis minus quod eos, veniam repellat velit accusamus! Repellendus veniam magnam fugiat reprehenderit consectetur.</p>
            </div>
            <div class="form-container">
                <form action="">
                    <p class="error-message"></p>
                    <div class="input-container">
                        <input type="text" placeholder="Full Name">
                        <i class="far fa-user" aria-hidden="true"></i>
                    </div>
                    <div class="input-container">
                        <input type="email" name="email" id="" placeholder="Email Address">
                        <i class="far fa-envelope" aria-hidden="true"></i>
                    </div>
                    <div class="input-container">
                        <input type="text" placeholder="Project Title">
                        <i class="fa fa-briefcase" aria-hidden="true"></i>
                    </div>
                    <div class="input-container">
                        <textarea name="" id="" cols="30" wrap="hard" placeholder="Any additional information type here ..."></textarea>
                    </div>
                    <button class="cta">Submit</button>
                </form>
            </div>
        </div>
    </section>
    <?php include ("footer.php") ?>
    <script src="/portfolio/scripts/main.js"></script>
    <script src="/portfolio/scripts/contact-me.js"></script>
</body>
</html>