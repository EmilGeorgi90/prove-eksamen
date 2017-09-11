<?php
session_start();
include "include/connect.php";
?>
    <html class="no-js" lang="da">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>HS Cms Website</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div id="wrapper">
            <header id="header">
                <div class="header-bg"></div>
                
                <nav class="nav">
                <div class="phoneNav"><i class="fa fa-bars" aria-hidden="true"></i> </div>

                                    <form action="include/seach.php" class="form-control" method="post">
                                    <?php
                    if(isset($_COOKIE[$cookie_name])){
                        ?>
                        <li class="li-item"><a href="include/logout.php">logout</a></li>
                        <li class="li-item"><a href="#">upload</a></li></h2>
                        <?php
                if($_COOKIE['userLevel'] == 3){
                    ?>
                    <li class="li-item"><a href="#">level</a></li></h2>
                <?php
                }    
                }
                        else{
                    ?>
                            <li class="li-item"><a href="#">login</a></li>
                            <li class="li-item"><a href="#">register</a></li>
                            <?php
                            }
                    ?>
                                    <input type="text" name="seach">
                                    <input type="submit" value="search" class="submit"> 
                    <select name="filter" id="" class="filter">
                        <option value="">select a class to filter</option>
                        <option value="warrior">warrior</option>
                        <option value="shamen">shamen</option>
                        <option value="mage">mage</option>
                        <option value="hunter">hunter</option>
                        <option value="druid">druid</option>
                        <option value="paladin">paladin</option>
                        <option value="rogue">rogue</option>
                        <option value="priest">priest</option>
                    </select>
                    </form>
                </nav>
                <div class="ajax-content">
                </div>

                <hr class="style14">
            </header>
            
            <main id="main">
                <div class="articels">
                    <?php
                    if(isset($_SESSION['Articel'])){
                        include "seachOutput.php";
                    }
                             else{
                    include "include/getArticle.php";
                             }
                    ?>
                </div>
            </main>
            <footer id="footer">
                <div class="footer-left">
                <form action="" id="weather" class="form-control" method="get">
                <input type="text" id="text" class="username">
                <button id="submitWeather" class="submit">submit</button>
                
    
        </form>
        <p class="the-weather" class="username" style="text-align: center;font-size: 2rem; width: 100%;"></p>
                            </div>
            </footer>
        </div>
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>
            window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')
        </script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="weather.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function (b, o, i, l, e, r) {
                b.GoogleAnalyticsObject = l;
                b[l] || (b[l] = function () {
                    (b[l].q = b[l].q || []).push(arguments)
                });
                b[l].l = +new Date;
                e = o.createElement(i);
                r = o.getElementsByTagName(i)[0];
                e.src = 'https://www.google-analytics.com/analytics.js';
                r.parentNode.insertBefore(e, r)
            }(window, document, 'script', 'ga'));
            ga('create', 'UA-XXXXX-X', 'auto');
            ga('send', 'pageview');
        </script>
        <script src="js/ajax.js"></script>
        <script src="js/filter.js"></script>
    </body>

    </html>