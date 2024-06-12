<body>
    <div id="header-wrapper">
        <div class="pc-bg"></div>
        <div>
            <div class="menu-wrapper">
                <a class="logo" href="../../index.html">
                    <img class="effect-off" src="../../assets/images/icon/ic_logo.png" />
                    <img class="effect-on" src="../../assets/images/icon/ic_logo.png" />
                </a>

                <ul class="menu-box">
                    <li class="first-menu hidden-box>"><a href="../../index.html">Home</a></li>
                    <li class="first-menu hidden-box"><a href="about">About</a>
                        <!-- <div class="pc-hidden">
                            <a href="/introduction" ><em>Introduction</em></a>
                            <a href="ceo.html"><em>CEO Message</em></a>
                            <a href="people.html"><em>NIA People</em></a>
                            <a href="office.html"><em>Our Office</em></a>
                        </div>
                        <ul class="hidden-menu active">
                            <li><a href="/introduction">Introduction</a></li>
                            <li><a href="ceo.html">CEO Message</a></li>
                            <li><a href="people.html">NIA People</a></li>
                            <li><a href="office.html">Our Office</a></li>
                        </ul> -->
                    </li>

                    <li class="first-menu hidden-box business">
                        <a>BUSINESS</a>
                        <div class="pc-hidden">
                            <a href="business.html#one"><em>Mobility Technology</em></a>
                            <a href="ticketing_system_and_reservation.html"><em>Ticketing System and Reservation</em></a>
                            <a href="business.html#three"><em>Payment System</em></a>
                            <a href="business.html#four"><em>IT Service Management</em></a>
                            <a href="business.html#five"><em>Logistics and Delivery System</em></a>
                            <a href="business.html#six"><em>Live Streaming Platform</em></a>
                        </div>
                        <ul class="hidden-menu active" style="width: 305px;">
                            <li><a href="business.html#one">Mobility Technology</a></li>
                            <li><a href="ticketing_system_and_reservation.html">Ticketing System and Reservation</a></li>
                            <li><a href="business.html#three">Payment System</a></li>
                            <li><a href="business.html#four">IT Service Management</a></li>
                            <li><a href="business.html#five">Logistics and Delivery System</a></li>
                            <li><a href="business.html#six">Live Streaming Platform</a></li>
                        </ul>
                    </li>

                    <li class="first-menu hidden-box">
                        <a>COMMUNITY</a>
                        <div class="pc-hidden">
                            <a href="notice.html"><em>Notice</em></a>
                            <a href="media.html"><em>Media Report</em></a>
                            <a href="video.html"><em>Video Documentation</em></a>
                        </div>
                        <ul class="hidden-menu active">
                            <li><a href="notice.html">Notice</a></li>
                            <li><a href="media.html">Media Report</a></li>
                            <li><a href="video.html">Video Documentation</a></li>
                        </ul>
                    </li>
                </ul>

                
                <!-- <div class="topnav">
                    <a class="{{ Route::currentRouteNamed('/') ? 'active' : ''" href="/" ><em>Home</em></a>
                    <a class="{{ Route::currentRouteNamed('/about') ? 'active' : ''" href="/about"><em>Business</em></a>
                    <a class="{{ Route::currentRouteNamed('/about') ? 'active' : ''" href="/about"><em>About</em></a>
                    <a href="office.html"><em>News</em></a>
                </div> -->

                <div class="content-right">
                    <div class="right-box language">
                        <div class="lang-box hidden-box">
                            <a class="lang-btn">
                                <img src="../../assets/img/icon/indonesia.png" class="language_flag"/>
                                <span>IN</span>
                                <img src="../../assets/img/icon/header_caret_down.svg" class="language_caret"/>
                            </a>
                            <ul class="lang-menu hidden-menu">
                                <li><a href="../kr/index.html">Korea</a></li>
                                <li><a href="../en/index.html">English</a></li>
                            </ul>
                        </div>
                    </div>
                    <a href="/contact" class="btn_contact_us">Contact Us&nbsp;&nbsp;&nbsp;<img src="../../assets/img/icon/ic_contac_us.svg" class="language_flag"></a>
                    <a class="mobile-ham hambuger-menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
            </div>
        </div>

        <div class="mobile-menu">
            <div class="inner">
                <ul>
                    <li>
                        <a class="first-menu">ABOUT</a>
                        <div class="second-menu">
                            <a href="introduction.html">Introduction</a>
                            <span></span>
                            <a href="ceo.html">CEO Message</a>
                            <br />
                            <a href="people.html">NIA People</a>
                            <span></span>
                            <a href="office.html">Our Office</a>
                        </div>
                    </li>

                    <li>
                        <a class="first-menu">BUSINESS</a>
                        <div class="second-menu">
                            <a href="business.html#one">Mobility Technology</a>
                            <br />
                            <a href="ticketing_system_and_reservation.html">Ticketing System and Reservation</a>
                            <br />
                            <a href="business.html#three">Payment System</a>
                            <br />
                            <a href="business.html#four">IT Service Management</a>
                            <br />
                            <a href="business.html#five">Logistics and Delivery System</a>
                            <br />
                            <a href="business.html#six">Live Streaming Platform</a>
                        </div>
                    </li>

                    <li>
                        <a class="first-menu">COMMUNITY</a>
                        <div class="second-menu">
                            <a href="notice.html">Notice</a>
                            <span></span>
                            <a href="media.html">Media Report</a>
                            <span></span>
                            <a href="video.html">Video Documentation</a>
                        </div>
                    </li>

                    <li>
                        <a href="contact.html" class="first-menu">CONTACT US</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>
<script>
    $('.hidden-box').mouseover(function(){
        if($('.hambuger-menu').hasClass('active')){
            return false
        } else{
            $(this).children('.hidden-menu').stop().slideDown(200);
        }        
    });
    $('.hidden-box').mouseleave(function(){
        if($('.hambuger-menu').hasClass('active')){
            return false
        } else{
            $(this).children('.hidden-menu').stop().slideUp(200);
        }                
    });

    /* header-wrapper scroll event */
    $(window).scroll(function(){
        if($(document).scrollTop() > 40){
            $("#header-wrapper").addClass("color-effect");
        } else{
            $("#header-wrapper").removeClass("color-effect");
        }
    });

    /* hambuger menu event */
    $('.pc-ham').on('click' , function(){        
        if(!$(this).hasClass('active')){
            $(this).addClass('active');
            $('.pc-hidden').stop().slideDown();
            $('.pc-bg').stop().slideDown();
        } else{
            $(this).removeClass('active');
            $('.pc-hidden').stop().slideUp();
            $('.pc-bg').stop().slideUp();
        }
    });

    $('.mobile-ham').on('click' , function(){        
        if(!$(this).hasClass('active')){
            $(this).addClass('active');
            $('.mobile-menu').stop().fadeIn();
            $('.mobile-menu .inner').stop().slideDown();
        } else{
            $(this).removeClass('active');
            $('.mobile-menu').stop().fadeOut();
            $('.mobile-menu .inner').stop().slideUp();
            $('.mobile-menu .second-menu').stop().slideUp();
            
        }
    });

    $('.mobile-menu .first-menu').on('click' , function(){
        if(!$(this).hasClass('active')){
            $('.mobile-menu .first-menu').removeClass('active');
            $(this).addClass('active');
            $('.mobile-menu .second-menu').stop().slideUp();
            $(this).next().stop().slideDown();
        } else{
            $(this).removeClass('active');
            $(this).next().stop().slideUp();
        }
    });
</script>