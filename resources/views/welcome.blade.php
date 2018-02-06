<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>ImmoFound App</title>



    <link rel="stylesheet" href="{{ asset('assets/css/style_welcome.css') }}">
    <meta charset="UTF-8" />

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

</head>

<body class="preload" data-current-section="0">

<div id="wrapper">

    <div id="borders">
        <div class="border hor top"></div>
        <div class="border hor bot"></div>
        <div class="border vert left"></div>
        <div class="border vert right"></div>
    </div>

    <div id="illustration-01">
        <div class="bottle"></div>
        <div class="branches">
            <div class="branch-01"></div>
            <div class="branch-02"></div>
            <div class="branch-03"></div>
            <div class="branch-top"></div>
            <div class="leaf-02"></div>
        </div>
    </div>

    <div id="stripe"></div>

    <div id="video-container">
        <video id="video" preload="auto" controls onplay="this.controls=false">
            <source src="http://www.ginventory.co/videos/ginventory-video.mp4" type="video/mp4">
            <source src="http://www.ginventory.co/videos/ginventory-video.webm" type="video/webm">
        </video>
    </div>

    <div id="timeline-ctn">
        <div id="timeline-track">
            <div id="timeline-bar"></div>
        </div>
        <!-- <div id="section-number"></div> -->
    </div>



    <header id="header" class="nav-container noselect">

        <h1 id="logo"><span>I</span><span>M</span><span>M</span><span>O</span><span>F</span><span>O</span><span>U</span><span>N</span><span>D</span></h1>

        <nav id="main-nav">
            <button class="nav-btn up" disabled>Go up<span></span></button>
            <ul>
                <li><a href="#search">Search</a></li>
                <li><a href="#find">Find</a></li>
                <li><a href="#explore">Explore</a></li>
                <li><a href="#suggest">Suggest</a></li>
                <li><a href="#newsletter">Newsletter</a></li>
            </ul>
            <button class="nav-btn down">Go down<span></span></button>
        </nav>

        <div id="sub-nav">
            <ul>
                <li><a href="{{ route('login') }}" class="download-btn yellow">Login</a></li>
                <li><a href="{{ route('register') }}" class="download-btn yellow android">Register</a></li>
            </ul>
        </div>

    </header><!-- /#header -->



    <main id="content" role="main">


        <section id="home">
            <p class="tagline">Die <em>Zukunft</em> ihrer<br> <strong>Kapitalanlage</strong></p>
        </section>



        <div id="sections-list-container">

            <div class="swiper-container">

                <ol id="sections-list" class="swiper-wrapper">
                    <li class="swiper-slide">
                        <section id="search">
                            <figure>
                                <img src="http://www.ginventory.co/img/mockup/ginventory-screenshot-search.jpg">
                            </figure>

                            <article>
                                <h2>Rentabel</h2>
                                <p>3,4% Rendite und 5 Jahre feste Laufzeit?<br> Exklusiv bei uns!</p>
                            </article>
                        </section>
                    </li>


                    <li class="swiper-slide">
                        <section id="find">
                            <figure>
                                <img src="http://www.ginventory.co/img/mockup/ginventory-screenshot-find.jpg">
                            </figure>

                            <article>
                                <h2>Exklusiv</h2>
                                <p>Sparplan oder direkt Investments? Oder beides?<br> Nur bei uns!</p>
                            </article>
                        </section>
                    </li>


                    <li class="swiper-slide">
                        <section id="explore">
                            <figure>
                                <img src="http://www.ginventory.co/img/mockup/ginventory-screenshot-data.jpg">
                            </figure>

                            <article>
                                <h2>Innovativ</h2>
                                <p>Bitcoins, Paypal oder SEPA?<br>Alles dabei!</p>
                            </article>
                        </section>
                    </li>


                    <li class="swiper-slide">
                        <section id="suggest">
                            <figure>
                                <img src="http://www.ginventory.co/img/mockup/ginventory-screenshot-suggest.jpg">
                            </figure>

                            <article>
                                <h2>Support</h2>
                                <p>Beratung direkt vom CEO. Wenn Sie möchten.</p>
                            </article>
                        </section>
                    </li>
                </ol><!-- /.swiper-wrapper -->

                <div id="slider-images">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

            </div><!-- /.swiper-container -->

            <ul id="slider-nav">
                <li><a href="#search">Search</a></li>
                <li><a href="#find">Find</a></li>
                <li><a href="#explore">Explore</a></li>
                <li><a href="#suggest">Suggest</a></li>
            </ul>

        </div><!-- /#sections-list-container -->



        <section id="download">

            <article>
                <h2>Jetzt investieren!</h2>
                <p>Jetzt investieren!</p>

                <ul class="download-list">
                    <li><a href="{{ route('login') }}" class="download-btn black" target="_blank">Login</a></li>
                    <li><a href="{{ route('register') }}" class="download-btn black android" target="_blank">Register</a></li>
                </ul>

            </article>

            <div id="illustration-02"></div>

        </section>


    </main><!-- /#content -->



    <footer id="footer">
        <h3>ImmoFound</h3>
        <p class="footer-note">Create by ImmoFound <a href="https://immofound.com" target="_blank"></a></p>
    </footer><!-- /#footer -->

</div><!-- /#wrapper -->


</body>
<script src="{{ asset('assets/js/index_welcome.js') }}"></script>

</html>