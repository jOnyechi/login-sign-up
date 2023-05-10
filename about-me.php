<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me: Jacob Onyechi Portfolio</title>
    <!--CSS FILES FOR MAIN WEBSITE VIEW-->
    <link rel="stylesheet" href="/portfolio/css/reset.css">
    <link rel="stylesheet" href="/portfolio/css/main.css">
    <link rel="stylesheet" href="/portfolio/css/about-me.css">
    <!--CSS FILES FOR MOBILE VIEW-->
    <link rel="stylesheet" href="/portfolio/css/mobile-version/main.css">
    <link rel="stylesheet" href="/portfolio/css/mobile-version/about-me.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--<link rel="stylesheet" href="/portfolio/resources/fontawesome/fontawesome-free-6.3.0-web/css/all.min.css">-->
    <link rel="shortcut icon" href="/portfolio/resources/images/favicon-new.png" type="image/x-icon">
</head>
<body>
    <?php
    include('header.php')
    ?>
    <!-- main section of the about me page -->
    <main>
        <div class="container">
            <div class="main-image">
                <img src="resources/images/image_placeholder.jpg" alt="Jacob Image">
            </div>
            <div class="main-text">
                <h1>About Me</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
        </div>
    </main>
    <div class="title">
        <h2>Career Timeline</h2>
    </div>
    <div class="timeline-container">
        <ul>
            <li class="reveal">
                <h3 class="item-title">Frontend Developer</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur nihil eaque autem totam animi ducimus obcaecati. Natus reprehenderit corporis amet, temporibus nisi porro repudiandae dolorem animi nostrum nulla! Asperiores, tempora.</p>  
                <span class="circle"></span>
                <h3 class="date">January, 2022</h3>
            </li>
            <li class="reveal">
                <h3 class="item-title">Frontend Developer</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur nihil eaque autem totam animi ducimus obcaecati. Natus reprehenderit corporis amet, temporibus nisi porro repudiandae dolorem animi nostrum nulla! Asperiores, tempora.</p>
                <span class="circle"></span>
                <h3 class="date">January, 2022</h3>
            </li>
            <li class="reveal">
                <h3 class="item-title">Frontend Developer</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur nihil eaque autem totam animi ducimus obcaecati. Natus reprehenderit corporis amet, temporibus nisi porro repudiandae dolorem animi nostrum nulla! Asperiores, tempora.</p>
                <span class="circle"></span>
                <h3 class="date">January, 2022</h3>
            </li>
            <li class="reveal">
                <h3 class="item-title">Frontend Developer</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur nihil eaque autem totam animi ducimus obcaecati. Natus reprehenderit corporis amet, temporibus nisi porro repudiandae dolorem animi nostrum nulla! Asperiores, tempora.</p>                
                <span class="circle"></span>
                <h3 class="date">January, 2022</h3>
            </li>
            <li class="reveal">
                <h3 class="item-title">Frontend Developer</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur nihil eaque autem totam animi ducimus obcaecati. Natus reprehenderit corporis amet, temporibus nisi porro repudiandae dolorem animi nostrum nulla! Asperiores, tempora.</p>              
                <span class="circle"></span>
                <h3 class="date">January, 2022</h3>
            </li>
            <li class="reveal">
                <h3 class="item-title">Frontend Developer</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur nihil eaque autem totam animi ducimus obcaecati. Natus reprehenderit corporis amet, temporibus nisi porro repudiandae dolorem animi nostrum nulla! Asperiores, tempora.</p>
                <span class="circle"></span>
                <h3 class="date">January, 2022</h3>
            </li>
        </ul>
    </div>
    <?php
    include('footer.php')
    ?>
    <script src="scripts/main.js"></script>
    <script src="scripts/about-me.js"></script>
</body>
</html>