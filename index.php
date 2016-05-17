<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Colab</title>
        <meta name="description" content="Colab is a collaborative effort to bring people together around great ideas.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/normalize.min.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/lity.min.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

        <?php wp_head(); ?>

    </head>
    <body class="front-page">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <section class="cover">
            <div class="container">
                <header><h1 class="logo"><img alt="Colab" src="<?php echo get_template_directory_uri() ?>/img/logo_red.svg"><span>Colab</span></h1></header>
                <h2 class="tagline">
                    radical <br>collaboration
                    <a class="video" href="https://youtu.be/CeTxaGCG1mE" data-lity><span>Play video</span></a>
                </h2>

            </div>
        </section>

        <section class="section about">

            <div class="container">

                <header>
                    <h2>
                        <span>make open</span> 
                        <span>apply autonomy</span> 
                        <span>upgrade collaboration</span>
                    </h2>
                </header>
                
                <p>Radical collaboration is about ordinary people working together to make extraordinary things. It is about opening the way we do things so we can learn with each other's ideas and build better ones on top of those. We all have diverse characteristics, passions and skills and when we put them together they become a superpower for bringing ideas to life.</p>
                <a class="button manifesto" href="">Our manifesto</a>
            </div>
        </section>

        <section class="section join">
            <div class="container">
                <header>
                    <h2><span>Colab</span> is a collaborative effort to bring people together around great ideas. </h2>
                </header>
                <p>Think of every time you wanted to start something but didn’t know where to start, or felt that there just weren’t enough people around that shared the same passion. Think of every time your team was stuck and a fresh input from someone else would help you move forward. Imagine if you could share your ideas, get help in making them happen and at the same time contribute to the ideas of others in a simple way. Imagine the difference it would make if you could contribute to the ideas that mattered the most to you and make them your own. That’s what we are doing here. Join us.</p>
                <a class="button" href="">Read the story</a>

            </div>
        </section>

        <footer class="main-footer">
            <div class="container">
            
                <header>
                    <h2>join us in making <br>this idea happen</h3>
                    <p>Now, we want to open Colab to everyone and hopefully you’ll join us.</p>
                </header>

                <span class="button-bkg"><a class="button join" href="http://eepurl.com/b0WAyX">Join</a></span>

                <ul class="links">
                    <li><a href="https://blog.colab.at/latest"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/medium.png" title="Medium" /></a></li>
                    <li><a href="https://facebook.com/colab.at"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/facebook.png" title="Facebook" /></a></li>
                    <li><a href="https://twitter.com/colab_at"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/twitter.png" title="Twitter" /></a></li>
                    <li><a href="https://instagram.com/colab_at/"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/instagram.png" title="Instagram" /></a></li>
                </ul>

            </div>
        </footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php bloginfo('stylesheet_directory'); ?>/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="<?php bloginfo('stylesheet_directory'); ?>/js/plugins.js"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/js/vendor/lity.min.js"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-77436614-1','auto');ga('send','pageview');
        </script>

        <?php wp_footer(); ?>
    </body>
</html>
