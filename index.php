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
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <div id="wrapper">
        <header id="header">
            <div class="header-bg"> </div>
            <nav class="nav">
                <li class="li-item"><a href="#">login</a></li>
                <li class="li-item"><a href="#">register</a></li>
            </nav>
            <div class="ajax-content"></div>
        </header>
        <main id="main">
            <form action="include/seaach.php" class="form-control">
                <input type="search" placeholder="seach for cards" name="seach" class="seach">
                <input type="button" name="filter" class="filter" value="show classes to filter"> </form>
            <form action="include/filter.php" class="classes-checkboxes-form">
                <p class="classes-checkboxes">warrior
                    <input type="checkbox" name="warrior" class="classes-checkboxes"> </p>
                <p class="classes-checkboxes">shamen
                    <input type="checkbox" name="shamen" class="classes-checkboxes"> </p>
                <p class="classes-checkboxes">rogue
                    <input type="checkbox" name="rogue" class="classes-checkboxes"> </p>
                <p class="classes-checkboxes">paladin
                    <input type="checkbox" name="paladin" class="classes-checkboxes"> </p>
                <p class="classes-checkboxes">hunter
                    <input type="checkbox" name="hunter" class="classes-checkboxes"> </p>
                <p class="classes-checkboxes">druid
                    <input type="checkbox" name="druid" class="classes-checkboxes"> </p>
                <p class="classes-checkboxes">mage
                    <input type="checkbox" name="mage" class="classes-checkboxes"> </p>
                <p class="classes-checkboxes">warlock
                    <input type="checkbox" name="warlock" class="classes-checkboxes"> </p>
                <p class="classes-checkboxes">priest
                    <input type="checkbox" value="priest" name="priest" class="classes-checkboxes"> </p>
            </form>
            <div class="articels">
                <articel class="articel"> <img src="https://hearthstone.gamepedia.com/media/hearthstone.gamepedia.com/thumb/d/d8/Snowflipper_Penguin%2862839%29_Gold.png/200px-Snowflipper_Penguin%2862839%29_Gold.png?version=0fd8537fe442cdc1c59f501abc8ec495" alt="" class="articel-img">
                    <h2 class="articel-title">penguin</h2>
                    <p class="articel-p">somecard</p>
                </articel>
                <articel class="articel"> <img src="https://hearthstone.gamepedia.com/media/hearthstone.gamepedia.com/thumb/d/d8/Snowflipper_Penguin%2862839%29_Gold.png/200px-Snowflipper_Penguin%2862839%29_Gold.png?version=0fd8537fe442cdc1c59f501abc8ec495" alt="" class="articel-img">
                    <h2 class="articel-title">penguin</h2>
                    <p class="articel-p">somecard</p>
                </articel>
                <articel class="articel"> <img src="https://hearthstone.gamepedia.com/media/hearthstone.gamepedia.com/thumb/d/d8/Snowflipper_Penguin%2862839%29_Gold.png/200px-Snowflipper_Penguin%2862839%29_Gold.png?version=0fd8537fe442cdc1c59f501abc8ec495" alt="" class="articel-img">
                    <h2 class="articel-title">penguin</h2>
                    <p class="articel-p">somecard</p>
                </articel>
                <articel class="articel"> <img src="https://hearthstone.gamepedia.com/media/hearthstone.gamepedia.com/thumb/d/d8/Snowflipper_Penguin%2862839%29_Gold.png/200px-Snowflipper_Penguin%2862839%29_Gold.png?version=0fd8537fe442cdc1c59f501abc8ec495" alt="" class="articel-img">
                    <h2 class="articel-title">penguin</h2>
                    <p class="articel-p">somecard</p>
                </articel>
                <articel class="articel"> <img src="https://hearthstone.gamepedia.com/media/hearthstone.gamepedia.com/thumb/d/d8/Snowflipper_Penguin%2862839%29_Gold.png/200px-Snowflipper_Penguin%2862839%29_Gold.png?version=0fd8537fe442cdc1c59f501abc8ec495" alt="" class="articel-img">
                    <h2 class="articel-title">penguin</h2>
                    <p class="articel-p">somecard</p>
                </articel>
            </div>
        </main>
        <footer id="footer">
            <div class="footer-left"></div>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')
    </script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
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