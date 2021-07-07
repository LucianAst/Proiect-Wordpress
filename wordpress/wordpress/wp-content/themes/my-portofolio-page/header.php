  
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <header class="left-menu">
            <div class="nav-container-left">
                <img class="nav-picture" src="<?= get_stylesheet_directory_uri() . "/images/nav/Profile.svg" ?>"/>
                <img class="nav-available" src="<?= get_stylesheet_directory_uri() . "/images/nav/Available.svg" ?>"/> 
                <h1 class="nav-name">Rayan Adlardard</h1>
                <p class="nav-job">Front-End Developer</p>
                    <div class="media-icons">
                        <img class ="facebook" src="<?= get_stylesheet_directory_uri() . "/images/nav/Facebook.svg" ?>"/>
                        <img class ="instagram" src="<?= get_stylesheet_directory_uri() . "/images/nav/Instagram.svg" ?>"/>
                        <img class ="twitter" src="<?= get_stylesheet_directory_uri() . "/images/nav/Twitter.svg" ?>"/>
                        <img class ="linkedin" src="<?= get_stylesheet_directory_uri() . "/images/nav/Linkeding.svg" ?>"/>
                        <img class ="youtube" src="<?= get_stylesheet_directory_uri() . "/images/nav/Youtube.svg" ?>"/>
                        <img class ="dribbble" src="<?= get_stylesheet_directory_uri() . "/images/nav/Dribbble.svg" ?>"/>
                    </div>
            </div>
            <hr class="line">
            <div class="personal-container">
                <div class="age-container">
                    <svg class="Age">
                        <rect width="30" height="20" fill="orange"/>
                    </svg>              
                    <p class="Age">Age:24</p>
                </div>
                <div class="residence-container">
                    <svg class="Residence">
                        <rect width="50" height="20" fill="orange"/>
                    </svg>              
                    <p class="Residence">Residence:BD</p>
                </div>
                <div class="freelance-container">
                    <svg class="Freelance">
                        <rect width="45" height="20" fill="orange"/>
                    </svg>              
                    <p class="Freelance">Freelance:Available</p>
                </div>
                <div class="adress-container">
                    <svg class="Adress">
                        <rect width="40" height="20" fill="orange"/>
                    </svg>              
                    <p class="Adress">Adress:Dhaka,Bangladesh</p>
                </div>
                <hr class="line">
            <div class="Languages-container">
                <h2 class="Languages">Languages</h2>
                    <div class="Bangla"></div>
                    <h4 class="Bangla">Bangla 100%</h4>
                        <div class="progress-bar"></div>
                    <div class="English"></div>
                    <h4 class="English">English 80%</h4>
                        <div class="progress-bar"></div>
                    <div class="Spanish"></div>
                    <h4 class="Spanish">Spanish 60%</h4>
                        <div class="progress-bar"></div>
            </div>
            <hr class="line">
            <div class="Skills-container">
                <h2 class="Skills">Skills</h2>
                    <div class="Html"></div>
                    <h4 class="Html">Html 90%</h4>
                        <div class="progress-bar"></div>
                    <div class="CSS"></div>
                    <h4 class="CSS">CSS 85%</h4>
                        <div class="progress-bar"></div>
                    <div class="Js"></div>
                    <h4 class="Js">Js 80%</h4>
                    <div class="progress-bar"></div>
                    <div class="PHP"></div>
                        <h4 class="PHP">PHP 75%</h4>
                    <div class="progress-bar"></div>
                    <div class="WordPress"></div>
                        <h4 class="WordPress">WordPress 85%</h4>
                        <div class="progress-bar"></div>
            <hr class="line">
            <div class="extra-container">
                <h4 class="Extra Skills">Extra Skills</h4>
                <img class="icons" src="images/nav/Icons.svg"> 
            </div>      
                <ul>
                    <li class="skills">Bootstrap, Materialize</li>
                    <li class="skills">Stylus, Sass, Less</li>
                    <li class="skills">Gulp, Webpack, Grunt</li>
                    <li class="skills">GIT Knowledge</li>
                </ul>
                <button type="link" class="download">Download CV</button>
    </header>














