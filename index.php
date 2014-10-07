<?php
$lang = '';
$lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$lang = substr(strtolower($lang),0,2);
if($lang == 'en'){
    header('Location: http://startup42.de/en.html', 300);
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
        <title>startup42 - Deine Idee. Dein Team.</title>

        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

        <!-- Bootstrap -->
        <link href="css/libs/bootstrap.min.css" rel="stylesheet">

        <!-- Font awesome -->
        <link href="css/libs/font-awesome.min.css" rel="stylesheet">

        <!-- Animate -->
        <link href="css/libs/animate.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/custom.css" rel="stylesheet">

        <!-- Favicon -->
        <link rel="shortcut icon" href="./favicon.ico" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <!--[if IE 9 ]>
    <body class="ie9">
    <![endif]-->
    <!--[if !IE 9]>-->
    <body>
    <!--<![endif]-->

        <div id="lang">
            <ul>
                <li><b>DE</b></li>
                <li><a href="./en.html">EN</a></li>
            </ul>
        </div>
        <div class="page-wrap">


            <!-- preloader start -->
            <div id="preloader">
                <img src="images/loader.svg" alt="Loading" id="loading-img">
            </div>
            <!-- preloader end -->




            <!-- header section start -->
            <header class="header background-colour" id="header">
                <div class="overlay">
                    <div class="container">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="intro text-center">
                                    <div class="intro-inner">
                                        <div class="logo scale">
                                            <img src="images/logo.svg" alt="Logo Startup42">
                                        </div><!-- logo end -->
                                        <div class="text-logo">
                                            startup42
                                        </div><!-- text-logo end -->
                                        <h1>
                                            Deine Idee. Dein Team. <span class="bold">Unser Startup.</span>
                                        </h1>
                                        <h3>
                                            Wir wollen gemeinsam ein Startup gründen.<br>
                                            Unser Arbeitseinsatz ist <u>kostenlos!</u>
                                        </h3>
                                        <a data-scroll href="#basics" class="button btn-flat-white">Ein paar Infos über uns gefällig? Gerne!</a>
                                    </div><!-- intro-inner end -->
                                </div><!-- intro end -->
                            </div><!-- col end -->
                        </div><!-- row end -->

                    </div><!-- container end -->
                </div><!-- overlay end -->
            </header>
            <!-- header section end -->


            <!-- basic section start -->
            <section class="section" id="basics">
                <div class="container">

                    <div class="row">
                        <div class="col-md-6 col-md-push-3">
                            <header class="section-header text-center">
                                <h2>Vorstellung</h2>
                                <p>
                                    Hier erstmal ein paar Basics über uns.
                                </p>
                            </header>
                        </div><!-- col end -->
                    </div><!-- row end -->

                    <div class="row">
                        <div class="col-sm-6 col-md-4 scale">
                            <div class="basic-module text-center wow bounceInUp">
                                <div class="basic-img">
                                    <span class="fa fa-male"></span>
                                    <span class="fa fa-female"></span>
                                    <span class="fa fa-male"></span>
                                </div>
                                <div class="basic-text">
                                    <p class="text-center">
                                        Wir sind eine durchgeknallte Designerin und zwei strukturierte Entwickler die momentan an der Hochschule Augsburg ihren Master in Interaktive Mediensysteme studieren.
                                    </p>
                                </div>
                            </div><!-- basic-module end -->
                        </div><!-- col end -->

                        <div class="col-sm-6 col-md-4 scale">
                            <div class="basic-module text-center wow bounceInUp">
                                <div class="basic-img">
                                    <span class="fa fa-bar-chart"></span>
                                    <span class="fa fa-beer"></span>
                                </div>
                                <div class="basic-text">
                                    <p>
                                        Zahlreiche Projekte (Apps/WebApps) zeigten uns den Umgang mit komplexen Problemlösungen. Wir legen Wert auf zwischenmenschliche Kommunikation, Motivation, stetiges Lernen und natürlich sehr viel Spaß!
                                    </p>
                                </div>
                            </div><!-- basic-module end -->
                        </div><!-- col end -->

                        <div class="col-sm-6 col-md-4 scale">
                            <div class="basic-module text-center wow bounceInUp">
                                <div class="basic-img">
                                    <span class="fa fa-flag-checkered"></span>
                                    <span class="fa fa-trophy"></span>
                                </div>
                                <div class="basic-text">
                                    <p>
                                        Unser ultimatives Ziel nach unserem Studium ist die Gründung eines erfolgreichen und lukrativen Startups und später natürlich nichts weniger als die Weltherrschaft - BUHAHA (evil laughter) ;-).
                                    </p>
                                </div>
                            </div><!-- basic-module end -->
                        </div><!-- col end -->
                    </div><!-- row end -->

                    <div class="row text-center">
                        <a data-scroll href="#vision" class="button btn-flat-colour">Was ist unsere Vision?</a>
                    </div><!-- row end -->

                </div><!-- container end -->
            </section>
            <!-- basic section end -->


            <!-- vision section start -->
            <section class="section background-colour" id="vision">
                <div class="container">

                    <div class="row">
                        <div class="col-md-6 col-md-push-3">
                            <header class="section-header text-center">
                                <h2>Vision</h2>
                                <p>
                                    Für ein erfolgreiches Vorhaben benötigt man mehrere essenzielle Bauteile.
                                </p>
                            </header>
                        </div><!-- col end -->
                    </div><!-- row end -->

                    <div class="row">
                        <div class="col-sm-6 col-md-4 col-md-push-2">
                            <div class="vision-module wow bounceInUp clearfix">
                                <div class="vision-icon">
                                    <span class="fa fa-check-circle-o"></span>
                                </div><!-- vision-icon end -->
                                <div class="vision-text">
                                    <p>
                                        Teammitglieder, die sich in ihren Aufgaben und Schwerpunkten ergänzen
                                    </p>
                                </div><!-- about-text end -->
                            </div><!-- vision-module end -->
                        </div><!-- col end -->
                        <div class="col-sm-6 col-md-4 col-md-push-2">
                            <div class="vision-module wow bounceInUp clearfix">
                                <div class="vision-icon">
                                    <span class="fa fa-check-circle-o"></span>
                                </div><!-- vision-icon end -->
                                <div class="vision-text">
                                    <p>
                                        Den Willen, den Otto Normal-Arbeitstag zu vermeiden
                                    </p>
                                </div><!-- vision-text end -->
                            </div><!-- vision-module end -->
                        </div><!-- col end -->
                    </div><!-- row end -->

                    <div class="row">
                        <div class="col-sm-6 col-md-4 col-md-push-2">
                            <div class="vision-module wow bounceInUp clearfix">
                                <div class="vision-icon">
                                    <span class="fa fa-check-circle-o"></span>
                                </div><!-- vision-icon end -->
                                <div class="vision-text">
                                    <p>
                                        Risiken einzugehen, die an neuen Ufern warten
                                    </p>
                                </div><!-- vision-text end -->
                            </div><!-- vision-module end -->
                        </div><!-- col end -->
                        <div class="col-sm-6 col-md-4 col-md-push-2">
                            <div class="vision-module wow bounceInUp clearfix">
                                <div class="vision-icon">
                                    <span class="fa fa-check-circle-o"></span>
                                </div><!-- vision-icon end -->
                                <div class="vision-text">
                                    <p>
                                        Und natürlich eine zündende Idee
                                    </p>
                                </div><!-- vision-text end -->
                            </div><!-- vision-module end -->
                        </div><!-- col end -->
                    </div><!-- row end -->

                    <div class="row">
                        <div class="vision-center">
                            <div class="vision-module wow bounceInUp bottom-text">
                                <div class="arrow-down text-center">
                                    <span class="fa fa-angle-double-down"></span>
                                </div><!-- vision-icon end -->
                            </div><!-- vision-module end -->
                        </div><!-- col end -->
                    </div><!-- row end -->

                    <div class="row">
                        <div class="vision-center">
                            <div class="vision-module text-center wow bounceInUp bottom-text">
                                <p>
                                    <h2>Hier kommst DU ins Spiel!</h2>
                                    <img src="images/infografik-weiß.svg" alt="Workflow"><br>
                                    <b>Du hast eine Idee zur Weltherrschaft?</b> Dir fehlt das nötige technische Know-how und Erfahrung mit großen Projekten?<br>
                                    Wir hören uns deine Idee an und evaluieren mit dir, ob sich diese im Rahmen unserer Möglichkeiten als gemeinsames Startup realisieren lässt.<br><br>
                                    Achja, damit wir nicht aneinander vorbeireden... wir bauen keine Motoren oder Häuser, wir entwickeln Apps/Web-Applikationen. Diese laufen auf jedem Smartphone, einem klassischen Desktoprechner oder auf Laptops/Netbooks/Transformer-Books/... oder vielleicht sogar auf deinem Kühlschrank.
                                </p>
                            </div><!-- vision-module end -->
                        </div><!-- col end -->
                    </div><!-- row end -->

                    <div class="row text-center">
                        <a data-scroll href="#about" class="button btn-flat-white">Was können wir dir bieten?</a>
                    </div><!-- row end -->

                </div><!-- container end -->
            </section>
            <!-- vision section end -->


            <!-- about section start -->
            <section class="section" id="about">
                <div class="container">

                    <div class="row">
                        <div class="col-md-6 col-md-push-3">
                            <header class="section-header text-center">
                                <h2>Unique Selling Proposition</h2>
                                <p>
                                    Oder auf deutsch: Was können wir dir bieten?
                                </p>
                            </header>
                        </div><!-- col end -->
                    </div><!-- row end -->

                    <div class="row">
                        <div class="col-sm-6 col-md-2 scale">
                            <div class="about-module text-center wow pulse">
                                <div class="mask">
                                    <div class="about-icon">
                                        <span class="fa fa-code"></span>
                                    </div><!-- about-icon end -->
                                </div><!-- mask end -->
                                <h4>TECHNOLOGIEN</h4>
                                <p>
                                    Nur wer auf dem aktuellsten Stand entwickelt kann auf dem Markt überleben.
                                </p>
                            </div><!-- about-module end -->
                        </div><!-- col end -->
                        <div class="col-sm-6 col-md-2 scale">
                            <div class="about-module text-center wow pulse">
                                <div class="mask">
                                    <div class="about-icon">
                                        <span class="fa fa-sitemap"></span>
                                    </div><!-- about-icon end -->
                                </div><!-- mask end -->
                                <h4>STRUKTUR</h4>
                                <p>
                                    Management ist mindestens das halbe Leben. Und aus Chaos machte man Ordnung :)
                                </p>
                            </div><!-- about-module end -->
                        </div><!-- col end -->
                        <div class="col-sm-6 col-md-2 scale">
                            <div class="about-module text-center wow pulse">
                                <div class="mask">
                                    <div class="about-icon">
                                        <span class="fa fa-graduation-cap"></span>
                                    </div><!-- about-icon end -->
                                </div><!-- mask end -->
                                <h4>LERNPROZESS</h4>
                                <p>
                                    Wir haben keine Angst vor Fehlern und konstruktiver Kritik.
                                </p>
                            </div><!-- about-module end -->
                        </div><!-- col end -->
                        <div class="col-sm-6 col-md-2 scale">
                            <div class="about-module text-center wow pulse">
                                <div class="mask">
                                    <div class="about-icon">
                                        <span class="fa fa-gamepad"></span>
                                    </div><!-- about-icon end -->
                                </div><!-- mask end -->
                                <h4>SPASS</h4>
                                <p>
                                    Ohne den geht‘s nicht! Punkt. Aus. Basta.
                                </p>
                            </div><!-- about-module end -->
                        </div><!-- col end -->
                        <div class="col-sm-6 col-md-2 scale">
                            <div class="about-module text-center wow pulse">
                                <div class="mask">
                                    <div class="about-icon">
                                        <span class="fa fa-line-chart"></span>
                                    </div><!-- about-icon end -->
                                </div><!-- mask end -->
                                <h4>ZIELSETZUNG</h4>
                                <p>
                                    Weil ausreichend für uns nicht mal ansatzweise gut genug ist.
                                </p>
                            </div><!-- about-module end -->
                        </div><!-- col end -->
                        <div class="col-sm-6 col-md-2 scale">
                            <div class="about-module text-center wow pulse">
                                <div class="mask">
                                    <div class="about-icon">
                                        <span class="fa fa-group"></span>
                                    </div><!-- about-icon end -->
                                </div><!-- mask end -->
                                <h4>COACHING</h4>
                                <p>
                                    Wir holen uns wenn es nötig ist auch Hilfe von externen Organisationen.
                                </p>
                            </div><!-- about-module end -->
                        </div><!-- col end -->
                    </div><!-- row end -->
                    <div class="row text-center">
                        <a data-scroll href="#countdown" class="button btn-flat-colour">Wie sieht die zeitliche Planung aus?</a>
                    </div><!-- row end -->

                </div><!-- container end -->
            </section>
            <!-- about section end -->




            <!-- countdown section start -->
            <section class="section no-pad background-colour" id="countdown">
                <div class="overlay">
                    <div class="container">

                        <div class="row">
                            <div class="col-md-6 col-md-push-3">
                                <header class="section-header text-center">
                                    <h2>Damit es bald losgehen kann!</h2>
                                    <p>
                                        Wir wollen nicht nur Ideen sammeln, sondern auch irgendwann starten.<br>
                                        Somit geben wir der Ideenfindungsphase eine begrenzte Zeit.
                                    </p>
                                </header>
                            </div><!-- col end -->
                        </div><!-- row end -->

                        <div class="row">
                            <div id="ticker" class="ticker clearfix wow bounceInUp">
                                <!-- <div class="col-sm-6 col-md-3">
                                    <div class="counter-bg">
                                        <div class="counter-inner">
                                            <span class="count-digit">Wuss</span>
                                            <span class="count-text">{dl}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="counter-bg">
                                        <div class="counter-inner">
                                            <span class="count-digit">Wuss</span>
                                            <span class="count-text">{dl}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="counter-bg">
                                        <div class="counter-inner">
                                            <span class="count-digit">Wuss</span>
                                            <span class="count-text">{dl}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="counter-bg">
                                        <div class="counter-inner">
                                            <span class="count-digit">Wuss</span>
                                            <span class="count-text">{dl}</span>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div><!-- row end -->

                        <div class="row text-center">
                            <a data-scroll href="#meet-team" class="button btn-flat-white">Wer ist in unserem Team?</a>
                        </div><!-- row end -->

                    </div><!-- container end -->
                </div><!-- overlay end -->
            </section>
            <!-- countdown section end -->




            <!-- meet-team section start -->
            <section class="section" id="meet-team">
                <div class="container">

                    <div class="row">
                        <div class="col-md-6 col-md-push-3">
                            <header class="section-header text-center">
                                <h2>Das große "Who is Who"</h2>
                                <p>
                                    Niemand interessiert sich für Unbekannte. Deswegen hier eine kurze Vorstellung unsererseits.
                                </p>
                            </header>
                        </div><!-- col end -->
                    </div><!-- row end -->

                    <div class="row">
                        <div class="col-sm-6 col-md-3 scale">
                            <div class="team-module text-center wow bounceInUp">
                                <img src="images/lisa.svg" alt="Team Image Photo">
                                <h4>LISA BORGENHEIMER</h4>
                                <h5>Designer</h5>
                                <ul>
                                    <li>24 Jahre</li>
                                    <li>Wohnhaft in Augsburg</li>
                                    <li>Gebürtige Augsburgerin</li>
                                    <li>Kreativer Kopf und Querdenkerin</li>
                                    <li>B.A. Communication Design</li>
                                    <li>bald M.A. Interactive Mediasystems</li>
                                </ul>
                                <a href="http://www.lisaborgenheimer.com/" target="_blank"><span class="fa fa-external-link"></span></a>
                                <a href="https://github.com/LisaBorg" target="_blank"><span class="fa fa-github"></span></a>
                            </div><!-- team-module end -->
                        </div><!-- col end -->

                        <div class="col-sm-6 col-md-3 scale">
                            <div class="team-module text-center wow bounceInUp">
                                <img src="images/basti.svg" alt="Team Image Photo">
                                <h4>SEBASTIAN HUBER</h4>
                                <h5>Developer</h5>
                                <ul>
                                    <li>26 Jahre</li>
                                    <li>Wohnhaft in Augsburg</li>
                                    <li>Gebürtiger Allgäuer</li>
                                    <li>Spaßvogel vom Dienst und Spielesuchtel</li>
                                    <li>B.A. Interactive Media</li>
                                    <li>bald M.A. Interactive Mediasystems</li>
                                </ul>
                                <a href="https://github.com/Blacklist" target="_blank"><span class="fa fa-github"></span></a>
                            </div><!-- team-module end -->
                        </div><!-- col end -->

                        <div class="col-sm-6 col-md-3 scale">
                            <div class="team-module text-center wow bounceInUp">
                                <img src="images/martin.svg" alt="Team Image Photo">
                                <h4>MARTIN KOLB</h4>
                                <h5>Developer</h5>
                                <ul>
                                    <li>26 Jahre</li>
                                    <li>Wohnhaft in Augsburg</li>
                                    <li>Gebürtiger Allgäuer</li>
                                    <li>Technologie-Nerd und Podcast-Fanatiker</li>
                                    <li>B.A. Interactive Media</li>
                                    <li>bald M.A. Interactive Mediasystems</li>
                                </ul>
                                <a href="http://www.mkolb.de/" target="_blank"><span class="fa fa-external-link"></span></a>
                                <a href="https://github.com/MartinKolb1987/" target="_blank"><span class="fa fa-github"></span></a>
                                <a href="https://twitter.com/kolb_martin" target="_blank"><span class="fa fa-twitter"></span></a>

                            </div><!-- team-module end -->
                        </div><!-- col end -->

                        <div class="col-sm-6 col-md-3 scale">
                            <div class="team-module text-center wow bounceInUp">
                                <img src="images/questionmark.svg" alt="Team Image Photo">
                                <h4>DU</h4>
                                <h5>???</h5>
                                <ul>
                                    <li>??? Jahre</li>
                                    <li>Wohnhaft in ???</li>
                                    <li>Gebürtig ???</li>
                                    <li>???</li>
                                    <li>???</li>
                                    <li>???</li>
                                </ul>
                                <a href="#"><span class="fa fa-facebook"></span></a>
                                <a href="#"><span class="fa fa-twitter"></span></a>
                                <a href="#"><span class="fa fa-dribbble"></span></a>
                                <a href="#"><span class="fa fa-linkedin"></span></a>
                            </div><!-- team-module end -->
                        </div><!-- col end -->
                    </div><!-- row end -->

                    <div class="row text-center">
                        <a data-scroll href="#get-notified" class="button btn-flat-colour">Nimm Kontakt mit uns auf!</a>
                    </div><!-- row end -->

                </div><!-- container end -->
            </section>
            <!-- meet-team section end -->




            <!-- get-notified section start -->
            <section class="section no-pad background-colour" id="get-notified">
                <div class="overlay">
                    <div class="container">

                        <div class="row">
                            <div class="col-md-6 col-md-push-3">
                                <header class="section-header text-center wow bounceInDown">
                                    <h2>Persönlich ist einfach besser!</h2>
                                    <p>
                                        Schicke uns deine E-Mail-Adresse über das Formular oder<br>schreibe uns direkt an <a href="mailto:hallo@startup42.de?subject=Kontaktanfrage - startup42.de"><b>hallo@startup42.de</b></a> – wir melden uns bei dir!
                                    </p>
                                </header>
                            </div><!-- col end -->
                        </div><!-- row end -->

                        <div class="row">
                            <form id="mc-form" class="mc-form clearfix wow bounceInUp">
                                <div class="col-md-8 col-md-push-2">
                                    <div class="col-sm-8">
                                        <input id="mc-email" type="email" autocomplete="off" placeholder="Deine E-Mail-Adresse...">
                                    </div><!-- col end -->
                                    <div class="col-sm-4">
                                        <input id="mc-submit" type="submit" value="Und los!">
                                    </div><!-- col end -->
                                </div><!-- col end -->
                            </form>
                        </div><!-- row end -->

                        <div class="row">
                            <div class="col-md-8 col-md-push-2">
                                <div class="mailchimp-alerts text-center">
                                    <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                    <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                    <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                </div><!-- mailchimp-alerts end -->
                            </div><!-- col end -->
                        </div><!-- row end -->

                    </div><!-- container end -->
                </div><!-- overlay end -->
            </section>
            <!-- get-notified section end -->




            <!-- footer section start -->
            <footer class="section" id="footer">
                <div class="container">

                    <div class="row">
                        <div class="col-md-6 col-md-push-3">
                            <div class="section-header text-center">
                                <h2>Auf diesen Netzwerken sind wir zu finden</h2>
                                <!--<p>-->
                                    <!--It's good to be social so dont be shy. We can be found on the social networks listed below.-->
                                <!--</p>-->
                            </div>
                        </div><!-- col end -->
                    </div><!-- row end -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="social-nav">
                                <a href="https://www.facebook.com/pages/Startup42/652123444885612" target="_blank" class="scale"><span class="fa fa-facebook"></span></a>
                                <a href="https://twitter.com/startup_42" target="_blank" class="scale"><span class="fa fa-twitter"></span></a>
                            </div>
                        </div><!-- col end -->
                    </div><!-- row end -->

                    <div class="row">
                        <div class="col-sm-12 col-md-8 col-md-push-2">
                            <nav class="footer-nav text-center">
                                <a data-scroll href="#header">Willkommen</a>
                                <a data-scroll href="#basics">Vorstellung</a>
                                <a data-scroll href="#vision">Vision</a>
                                <a data-scroll href="#about">USPs</a>
                                <a data-scroll href="#countdown">Launch</a>
                                <a data-scroll href="#meet-team">Das Team</a>
                                <a data-scroll href="#get-notified">Sage Hallo</a>
                            </nav><!-- nav end -->
                        </div><!-- col end -->
                    </div><!-- row end -->

                    <div class="row">
                        <div class="col-md-6 col-md-push-3">
                            <div class="section-header text-center">
                                <a data-scroll href="#header">
                                    <img class="wimpel" src="images/wimpel.svg">
                                </a>
                            </div>
                        </div><!-- col end -->
                    </div><!-- row end -->


                </div><!-- container end -->
            </footer>
            <!-- footer section end -->

        </div><!-- page-wrap end -->




        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/libs/jquery-1.11.1.min.js"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <!-- <script src="js/libs/bootstrap.min.js"></script> -->

        <!-- Plugins -->
        <script src="js/plugins/plugins.js"></script>

        <!-- WOW -->
        <script src="js/plugins/wow.js"></script>

        <!-- Countdown Localisation - UNCOMMENT IF YOU NEED LOCALISATION FOR THE COUNTDOWN TIMER -->
        <!--<script src="js/countdown-localisation.js"></script>-->

        <!-- Initialise plugins -->
        <script src="js/init.js"></script>

        <!-- STYLE SWITCHER - DELETE THIS FROM SITE ONCE YOU HAVE DECIDED ON A COLOUR SCHEME - FOLLOW DOCUMENTATION FOR INSTRUCTIONS -->
        <!-- <script src="js/style-switcher.js"></script> -->
        <!-- <link rel="stylesheet" href="css/colour-scheme/colour-scheme.css"> -->
        <link href="css/colour-scheme/red-orange.css" rel="stylesheet" id="switch-style">
        <!-- <div class="style-switcher">
            <div class="switcher-inner text-center">
                <div class="switch-colours clearfix">
                    <div class="set clearfix">
                        <h1 class="lighter">Select A Colour</h1>
                        <a href="blue" class="new-colour blue" id="blue">blue</a>
                        <a href="purple" class="new-colour purple" id="purple">purple</a>
                        <a href="red" class="new-colour red" id="red">red</a>
                        <a href="green" class="new-colour green" id="green">green</a>
                        <a href="pink" class="new-colour pink" id="pink">pink</a>
                        <a href="orange" class="new-colour orange" id="orange">orange</a>
                    </div>

                    <div class="set clearfix">
                        <h1 class="lighter">Or Select A Gradient</h1>
                        <a href="blue-green" class="new-colour blue-green" id="blue-green">blue green</a>
                        <a href="purple-pink" class="new-colour purple-pink" id="purple-pink">purple pink</a>
                        <a href="red-orange" class="new-colour red-orange" id="red-orange">red orange</a>
                    </div>
                </div>
                <span class="style-open fa fa-cog"></span>
            </div>
        </div> -->
        <!-- style switcher end -->
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-55288758-1', 'auto');
          ga('send', 'pageview');

        </script>
    </body>
</html>