<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/portfolio/css/header.css">
    <link rel="stylesheet" href="/portfolio/css/mobile-version/header.css">
</head>
<body>
    <div class="overlay hide"></div>
    <header>
        <div class="logo">
            <a href="index.php">
                <div class="logo-container">                        
                    <div class="color-fill">
                        <p>JACOB</p>
                    </div>
                    <div class="color-fill-reverse">
                        <p>ONYECHI</p>
                    </div>
                </div>
            </a>
        </div>
        <nav class="nav-bar">
            <ul>
                <li><a href="index.php">Home</a></li>
                <?php
                    //only shows the projects page when user logged in
                    if(isset($_SESSION["userid"]))
                    {
                ?>  
                    <li><a href="projects.php">Projects</a></li>
                <?php
                    }
                ?>
                <li><a href="about-me.php">About Me</a></li>
                <li><a href="contact-me.php">Contact Me</a></li>
                <li class="nav-login"><a href="login.php">Login/Sign Up</a></li>                
            </ul>
        </nav>
        <?php
            if(isset($_SESSION["userid"]))
            {
        ?>  
            <a href="includes/logout.inc.php" class="sign-up-button">Logout</a>
        <?php
            }
            else{
        ?>
            <a href="login.php" class="sign-up-button">Sign Up</a>
        <?php
            }
        ?> 
        <i class="fa fa-bars toggle-button" aria-hidden="true"></i>
    </header>
</body>
</html>