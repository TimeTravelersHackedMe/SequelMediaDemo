<!-- Use class no-js for modernizr -->
<html class="no-js">
        <head>
                <!-- Insert appropriate meta here -->
                <title>Sequel Media Group Test Demo</title>
                <! -- Normalize.css included for cross-browser element consistency -->
                <link rel="stylesheet" href="css/normalize.css">
                <link rel="stylesheet" href="css/main.css">
                <!-- Load modernizr in header to prevent FOUC-->
                <script src="js/modernizr-2.7.1.min.js"></script>
        </head>
        <body class="home">
                <div class="container">
                        <header class="banner" role="banner">
                                <h1 class="site-title">Site Title</h1>
                                <nav class="header-menu" role="navigation">
                                        <span><a href="http://google.com">Item One</a></span>
                                        <span>Item Two</span>
                                        <span>Item Three</span>
                                        <span>Item Four</span>
                                        <span>Item Five</span>
                                </nav>
                        </header>
                </div>
                <div class="container" role="document">
                        <main class="main" role="main">
                                <?php
                                // Scans all JPGs in a directory and loads them into the HTML as figures
                                $directory = "img/";
                                $images = glob($directory . "*.jpg" );
                                foreach( $images as $image ) {
                                echo '<figure><div class="figure-content"><img src="'.$image.'"" class="grid-entity"></div></figure>';
                                }
                                ?>
                        </main>
                </div>
                <div id="lightbox-background"></div>
                <div id="image-container"><img id="lightbox-image" src=""></div>
                <!-- Load jquery and main.js in footer since they are not needed for initial rendering -->
                <script src="js/jquery-1.11.0.min.js"></script>
                <script src="js/main.js"></script>
        </body>
</html>