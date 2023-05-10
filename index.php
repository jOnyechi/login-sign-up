<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home: Jacob Onyechi Portfolio</title>
    <!-- swiper.js link for owl carousel -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!--CSS FILES FOR MAIN WEBSITE VIEW-->
    <link rel="stylesheet" href="/portfolio/css/reset.css">
    <link rel="stylesheet" href="/portfolio/css/main.css">
    <link rel="stylesheet" href="/portfolio/css/index.css">
    <!--CSS FILES FOR MOBILE VIEW-->
    <link rel="stylesheet" href="/portfolio/css/mobile-version/main.css">
    <link rel="stylesheet" href="/portfolio/css/mobile-version/index.css">
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
            <div class="main-content-container-wrapper">
                <div class="main-content-container">
                    <div class="main-content">
                        <img src="resources/images/image_placeholder.jpg" alt="Jacob Onyechi Portrait">
                        <div class="main-content-text">
                            <h1>Hey, I'm a <span class="highlight">software developer</span>.</h1>
                            <p>Hi, i'm Jacob a freelance software developer currently living in the UK, I turn creative ideas into high quality user applications aimed at solving real world problems.
                                <br/>That sounds really cool right? <br/>
                            </p>
                        </div>
                    </div>
                    <div class="social-mobile-wrapper">
                        <div class="social-media">
                            <p>FOLLOW ME ON ALL MEDIA PLATFORMS...</p>
                            <div class="social-media-icons">
                                <a href="" target="_blank"><img src="resources/social-icons/twitter_new.svg" alt="twitter icon"></a>
                                <a href="" target="_blank"><img src="resources/social-icons/instagram_new.svg" alt="instagram icon"></a>
                                <a href="" target="_blank"><img src="resources/social-icons/linkedin_new.svg" alt="linkedin icon"></a>
                                <a href="" target="_blank"><img src="resources/social-icons/fiverr_new.svg" alt="fiverr icon"></a>
                            </div>
                        </div>
                        <a href="" class="cta">View Projects</a>
                    </div>
                </div>
            </div>
        </main>
        <section>
            <div class="container reveal">
                <div class="title">
                    <h2>Services</h2>
                    <p>The term <span class="highlight">'software developer'</span> comprises of many different processes.<br/> So for the sake of clarity, here are some of the services I render</p>
                    <a href="" class="cta">Get in touch</a>
                </div>
                <div class="row">
                    <div class="service-column">
                        <div class="single-service">
                            <div class="service-content">
                                <span class="icon">
                            <i class="fa-solid fa-code"></i>
                        </span>
                                <h3>Front-End Developement</h3>
                                <p class="description">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>
                                <a href="" class="cta-service">Read More</a>
                            </div>
                            <span class="circle-before"></span>
                        </div>
                    </div>
                    <div class="service-column">
                        <div class="single-service">
                            <div class="service-content">
                                <span class="icon">
                            <i class="fa-brands fa-dev"></i>
                        </span>
                                <h3>Back-End Developement</h3>
                                <p class="description">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>
                                <a href="" class="cta-service">Read More</a>
                            </div>
                            <span class="circle-before"></span>
                        </div>
                    </div>
                    <div class="service-column">
                        <div class="single-service">
                            <div class="service-content">
                                <span class="icon">
                            <i class="fa-solid fa-database"></i>
                        </span>
                                <h3>Database Developement</h3>
                                <p class="description">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>
                                <a href="" class="cta-service">Read More</a>
                            </div>
                            <span class="circle-before"></span>
                        </div>
                    </div>
                    <div class="service-column">
                        <div class="single-service">
                            <div class="service-content">
                                <span class="icon">
                            <i class="fas fa-project-diagram"></i>
                        </span>
                                <h3>Project Management</h3>
                                <p class="description">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>
                                <a href="" class="cta-service">Read More</a>
                            </div>
                            <span class="circle-before"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container reveal">
                <div class="about-me-section">
                    <img src="resources/images/image_placeholder.jpg" alt="Jacob Onyechi Portrait">
                    <div class="about-me-text">
                        <h2>About Me</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        <a href="" class="cta">Get in touch</a>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div id="project-slide" class="container reveal">
                <div class="title">
                    <h2>Projects</h2>
                    <p>Sign up to have a look at a few of my <span class="highlight">'software developement'</span> projects.</p>
                    <a href="" class="cta">Get in touch</a>
                </div>
                <div class="swiper mySwiper project-container">
                    <div class="swiper-wrapper project-content">
                        <div class="swiper-slide project-card">
                            <div class="project-card-content">
                                <div class="project-card-image">
                                    <img src="resources/images/image_placeholder.jpg" alt="Project Screenshot">
                                </div>
                                <div class="project-info-container">
                                    <h3>Project Title</h3>
                                    <p>Project Information</p>
                                </div>
                                <a href="" class="cta">Learn More</a>
                            </div>
                        </div>
                        <div class="swiper-slide project-card">
                            <div class="project-card-content">
                                <div class="project-card-image">
                                    <img src="resources/images/image_placeholder.jpg" alt="Project Screenshot">
                                </div>
                                <div class="project-info-container">
                                    <h3>Project Title</h3>
                                    <p>Project Information</p>
                                </div>
                                <a href="" class="cta">Learn More</a>
                            </div>
                        </div>
                        <div class="swiper-slide project-card">
                            <div class="project-card-content">
                                <div class="project-card-image">
                                    <img src="resources/images/image_placeholder.jpg" alt="Project Screenshot">
                                </div>
                                <div class="project-info-container">
                                    <h3>Project Title</h3>
                                    <p>Project Information</p>
                                </div>
                                <a href="" class="cta">Learn More</a>
                            </div>
                        </div>
                        <div class="swiper-slide project-card">
                            <div class="project-card-content">
                                <div class="project-card-image">
                                    <img src="resources/images/image_placeholder.jpg" alt="Project Screenshot">
                                </div>
                                <div class="project-info-container">
                                    <h3>Project Title</h3>
                                    <p>Project Information</p>
                                </div>
                                <a href="" class="cta">Learn More</a>
                            </div>
                        </div>
                        <div class="swiper-slide project-card">
                            <div class="project-card-content">
                                <div class="project-card-image">
                                    <img src="resources/images/image_placeholder.jpg" alt="Project Screenshot">
                                </div>
                                <div class="project-info-container">
                                    <h3>Project Title</h3>
                                    <p>Project Information</p>
                                </div>
                                <a href="" class="cta">Learn More</a>
                            </div>
                        </div>
                        <div class="swiper-slide project-card">
                            <div class="project-card-content">
                                <div class="project-card-image">
                                    <img src="resources/images/image_placeholder.jpg" alt="Project Screenshot">
                                </div>
                                <div class="project-info-container">
                                    <h3>Project Title</h3>
                                    <p>Project Information</p>
                                </div>
                                <a href="" class="cta">Learn More</a>
                            </div>
                        </div>
                        <div class="swiper-slide project-card">
                            <div class="project-card-content">
                                <div class="project-card-image">
                                    <img src="resources/images/image_placeholder.jpg" alt="Project Screenshot">
                                </div>
                                <div class="project-info-container">
                                    <h3>Project Title</h3>
                                    <p>Project Information</p>
                                </div>
                                <a href="" class="cta">Learn More</a>
                            </div>
                        </div>
                        <div class="swiper-slide project-card">
                            <div class="project-card-content">
                                <div class="project-card-image">
                                    <img src="resources/images/image_placeholder.jpg" alt="Project Screenshot">
                                </div>
                                <div class="project-info-container">
                                    <h3>Project Title</h3>
                                    <p>Project Information</p>
                                </div>
                                <a href="" class="cta">Learn More</a>
                            </div>
                        </div>
                        <div class="swiper-slide project-card">
                            <div class="project-card-content">
                                <div class="project-card-image">
                                    <img src="resources/images/image_placeholder.jpg" alt="Project Screenshot">
                                </div>
                                <div class="project-info-container">
                                    <h3>Project Title</h3>
                                    <p>Project Information</p>
                                </div>
                                <a href="" class="cta">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

        </section>
        <section>
            <div class="container reveal">
                <div class="title">
                    <h2>Feedback Form</h2>
                    <p>The term <span class="highlight">'software developer'</span> comprises of many different processes.<br/> So for the sake of clarity, here are some of the services I render</p>
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
                        <div class="rating-container">
                            <h3>Rate This Site</h3>
                            <div>
                                <h4>Design</h4>
                                <div id="design" class="star-container">
                                    <i data-rating="5" class="fa-solid fa-star" aria-hidden="true"></i>
                                    <i data-rating="4" class="fa-solid fa-star" aria-hidden="true"></i>
                                    <i data-rating="3" class="fa-solid fa-star" aria-hidden="true"></i>
                                    <i data-rating="2" class="fa-solid fa-star" aria-hidden="true"></i>
                                    <i data-rating="1" class="fa-solid fa-star" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div>
                                <h4>User Experience</h4>
                                <div id="UX" class="star-container">
                                    <i data-rating="5" class="fa-solid fa-star" aria-hidden="true"></i>
                                    <i data-rating="4" class="fa-solid fa-star" aria-hidden="true"></i>
                                    <i data-rating="3" class="fa-solid fa-star" aria-hidden="true"></i>
                                    <i data-rating="2" class="fa-solid fa-star" aria-hidden="true"></i>
                                    <i data-rating="1" class="fa-solid fa-star" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="input-container">
                            <textarea name="" id="" cols="30" wrap="hard" placeholder="Any additional comments type here ..."></textarea>
                        </div>
                        <button class="cta">Submit</button>
                    </form>
                </div>
            </div>
        </section>
        <?php
        include('footer.php')
    ?>
            <script src="scripts/main.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
            <!--script for carousel-->
            <script>
                var swiper = new Swiper(".mySwiper", {
                    slidesPerView: 1,
                    spaceBetween: 30,
                    loop: true,
                    pagination: {
                        el: ".swiper-pagination",
                        clickable: true,
                    },
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                });
            </script>
</body>

</html>