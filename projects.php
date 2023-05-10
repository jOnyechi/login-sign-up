<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Projects: Jacob Onyechi Portfolio</title>
    <!-- swiper.js link for owl carousel -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <!--CSS FILES FOR MAIN WEBSITE VIEW-->
    <link rel="stylesheet" href="/portfolio/css/reset.css">
    <link rel="stylesheet" href="/portfolio/css/main.css">
    <link rel="stylesheet" href="/portfolio/css/projects.css">
    <!--CSS FILES FOR MOBILE VIEW-->
    <link rel="stylesheet" href="/portfolio/css/mobile-version/main.css">
    <link rel="stylesheet" href="/portfolio/css/mobile-version/projects.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--<link rel="stylesheet" href="/portfolio/resources/fontawesome/fontawesome-free-6.3.0-web/css/all.min.css">-->
    <link rel="shortcut icon" href="/portfolio/resources/images/favicon-new.png" type="image/x-icon">

</head>
<body>
    <!-- website header -->
    <?php
        include("header.php");
    ?>
    <!-- main section of the website-->
    <main>
        <div class="main-container">
            <div class="content">
                <div class="copy">
                    <h1>Take a look at some of my <span class="highlight">projects</span>.</h1>
                    <h3>Below you will find a selection of projects that I have worked on, highlighting my skills and expertise as a <span class="highlight">developer</span>.</h3>
                    <div class="buttons">
                        <a href="" class="cta">Hire Me</a>
                        <a href="contact-me.php#contact-form" class="cta">Contact Me</a>
                    </div>
                </div>
                <div class="main-img-container">
                    <div class="image">
                        <img src="resources/images/image_placeholder.jpg" alt="Jacob Portrait">
                        <div class="tech">
                            <div class="tech-icons background1"><i class="fa-brands fa-java" alt="Java"></i></div>
                            <div class="tech-icons background2"><i class="fa-brands fa-square-js" alt="Javascript"></i></div>
                            <div class="tech-icons background3"><i class="fa-brands fa-php" alt="PHP"></i></div>
                            <div class="tech-icons background1"><i class="fa-brands fa-html5" alt="HTML"></i></div>
                            <div class="tech-icons background2"><i class="fa-brands fa-css3-alt" alt="CSS"></i></div>
                            <div class="tech-icons background3"><i class="fa-solid fa-database" alt="SQL"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php
        include('footer.php')
    ?>
    <script src="scripts/main.js"></script>
</body>
</html>