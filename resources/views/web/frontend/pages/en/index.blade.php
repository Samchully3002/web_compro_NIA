<!DOCTYPE html>
<html lang="en">

    @include('web/frontend/pages/en/component/head')
    <link rel="stylesheet" href="assets/css/home.css"/>
</head>
<body>
    <!-- <div data-include="component/header"></div> -->
    @include('web/frontend/pages/en/component/header')

    {{-- <div class="page page-in" id="page-main"> --}}

        <!-- Video start -->
        <!-- <video class="video-dekstop" loop="true" autoplay="true" muted playsinline>
            <source src="../assets/video/company_profile.mp4" type="video/mp4">
        Your browser does not support the video tag.
        </video> -->
        <!-- <video src="../assets/video/company_profile.mp4" class="video-dekstop" autoplay/> -->
        <video class="video-dekstop" autoplay muted loop>
            <source src="../assets/video/video.mp4" type="video/mp4">
        </video>
        <video class="video-mobile" autoplay muted loop>
            <source src="../assets/video/mobile.mp4" type="video/mp4">
        </video>
        <!-- Video end -->

        <div class="vision_text">
            <label>ONE - STOP</label><label style="color:#40455C;">&nbsp;IT SOLUTION FOR YOUR BUSINESS</label>
        </div>

        <div class="image-container">
            <a href="/intellegent-integrated-logistic">
                <img src="../../assets/images/IIL.jpg">
                    <div class="image-overlay">
                        <div class="ic-bisnis">
                        <img src="../../assets/images/icon/ic_cube.svg">
                        </div><br>
                        <h1 >Intelligent Integrated Logistics</h1><br>
                        <span>Utilizing our unique transportation system and advanced technology, we offer solutions merging big data and AI. Our platforms enable efficient demand prediction and risk management.</span><br>
                        <div class="btn-more">More&nbsp;&nbsp;&nbsp;
                            <img src="../../assets/images/icon/arrow.png">
                        </div>
                    </div>
            </a>
        </div>
        <div class="image-container">
            <a href="/digital-healthcare">
                <img src="../../assets/images/DHC.jpg">
                    <div class="image-overlay">
                    <div class="ic-bisnis">
                        <img src="../../assets/images/icon/ic_medical.svg">
                        </div><br>
                        <h1 >Digital Health Care</h1><br>
                        <span>We offer reliable health solutions through optimized customer-tailored consultations by healthcare professionals, integrating AI-based big data analysis considering customer preferences, health status, underlying conditions, and medications.</span><br>
                        <div class="btn-more">More&nbsp;&nbsp;&nbsp;
                            <img src="../../assets/images/icon/arrow.png">
                        </div>
                    </div>
            </a>
        </div>
        <div class="image-container">
            <a href="/system-development-management">
                <img src="../../assets/images/SDM.jpg">
                    <div class="image-overlay">
                    <div class="ic-bisnis">
                        <img src="../../assets/images/icon/ic_code.svg">
                        </div><br>
                        <h1 >System development and management</h1><br>
                        <span>From planning to maintenance, we offer innovative solutions with unique expertise for domestic and global clients.</span><br>
                        <div class="btn-more">More&nbsp;&nbsp;&nbsp;
                            <img src="../../assets/images/icon/arrow.png">
                        </div>
                    </div>
            </a>
        </div>
        <div class="image-container">
            <a href="/export-voucher">
                <img src="../../assets/images/EV.jpg">
                    <div class="image-overlay">
                    <div class="ic-bisnis">
                        <img src="../../assets/images/icon/ic_building.svg">
                        </div><br>
                        <h1 >Export Voucher</h1><br>
                        <span>We assist in every step for successful business execution, from analysis to document services and translation for global expansion.</span><br>
                        <div class="btn-more">More&nbsp;&nbsp;&nbsp;
                            <img src="../../assets/images/icon/arrow.png">
                        </div>
                    </div>
            </a>
        </div>

        <!-- <div class="flex-box">
            <div class="box_right">
                <img class="icon_right" src="../../assets/images/icon/ic_cube.svg"/>
                <label>Intelligent Integrated Logistics</label><br>
                <span style="font-size:22px;">Utilizing our unique transportation system and advanced technology, we offer solutions merging big data and AI. Our platforms enable efficient demand prediction and risk management.</span>
            </div>
            <img class="img_right" src="../../assets/images/home1.svg"/>
        </div>
        <div class="flex-box">
            <img class="img_left" src="../../assets/images/home2.svg"/>
            <div class="box_left">
                <img class="icon_left" src="../../assets/images/icon/ic_medical.svg"/>
                <label>Digital Health Care</label><br>
                <span style="font-size:22px;">We offer reliable health solutions through optimized customer-tailored consultations by healthcare professionals, integrating AI-based big data analysis considering customer preferences, health status, underlying conditions, and medications.</span>
            </div>
        </div>
        <div class="flex-box">
            <div class="box_right">
                <img class="icon_right" src="../../assets/images/icon/ic_code.svg"/>
                <label>System development and management</label><br>
                <span style="font-size:22px;">From planning to maintenance, we offer innovative solutions with unique expertise for domestic and global clients.</span>
            </div>
            <img class="img_right" src="../../assets/images/home3.svg"/>
        </div>
        <div class="flex-box">
            <img class="img_left" src="../../assets/images/home4.svg"/>
            <div class="box_left">
                <img class="icon_left" src="../../assets/images/icon/ic_building.svg"/>
                <label style="font-size:28px;font-weight:bold;">Global Business</label><br>
                <span style="font-size:22px;">We assist in every step for successful business execution, from analysis to document services and translation for global expansion.</span>
            </div>
        </div> -->

        <div class="clientSection">
            <div class="client_text">
                <p class="fade-in">Collaborating seamlessly to create value and drive success for our clients.</p>
            </div>
                <!-- <marquee behavior="scroll" direction="left">
                    <img src="../../assets/images/icon/korea.png"/>
                    <img src="../../assets/images/icon/ditjen.png"/>
                    <img src="../../assets/images/icon/bni.png"/>
                    <img src="../../assets/images/icon/jayaraya.png"/>
                    <img src="../../assets/images/icon/ovo.png"/>
                    <img src="../../assets/images/icon/dishub.png"/>
                </marquee> -->

                <div class="marquee-container">
                    <div class="marquee">
                        <img src="../../assets/images/icon/korea.png" alt="Korea"/>
                        <img src="../../assets/images/icon/ditjen.png" alt="Ditjen"/>
                        <img src="../../assets/images/icon/bni.png" alt="BNI"/>
                        <img src="../../assets/images/icon/jayaraya.png" alt="Jayaraya"/>
                        <img src="../../assets/images/icon/ovo.png" alt="OVO"/>
                        <img src="../../assets/images/icon/dishub.png" alt="Dishub"/>
                        <img src="../../assets/images/icon/korea.png" alt="Korea"/>
                        <img src="../../assets/images/icon/ditjen.png" alt="Ditjen"/>
                        <img src="../../assets/images/icon/bni.png" alt="BNI"/>
                        <img src="../../assets/images/icon/jayaraya.png" alt="Jayaraya"/>
                        <img src="../../assets/images/icon/ovo.png" alt="OVO"/>
                        <img src="../../assets/images/icon/dishub.png" alt="Dishub"/>
                        <img src="../../assets/images/icon/korea.png" alt="Korea"/>
                        <img src="../../assets/images/icon/ditjen.png" alt="Ditjen"/>
                        <img src="../../assets/images/icon/bni.png" alt="BNI"/>
                        <img src="../../assets/images/icon/jayaraya.png" alt="Jayaraya"/>
                        <img src="../../assets/images/icon/ovo.png" alt="OVO"/>
                        <img src="../../assets/images/icon/dishub.png" alt="Dishub"/>
                    </div>
                </div>
        </div>

        <div class="news_box">
            <label>Latest News</label>
            <div class="news_wrapper">
                <div class="news_content">
                    <a href="http://www.kdpress.co.kr/news/articleView.html?idxno=129296">
                        <img src="../../assets/images/news1.png"/>
                        <label>Now the Kampung Rambutan Terminal is more modern ...</label>
                        <label style="font-size:16px;color:white;">January 14, 2023</label>
                    </a>
                </div>

                <div class="news_content">
                    <a href="http://www.kdpress.co.kr/news/articleView.html?idxno=129296">
                        <img src="../../assets/images/news2.png"/>
                        <label>Kampung Rambutan Bus Terminal Starts Opening Online ...</label>
                        <label style="font-size:16px;color:white;">January 13, 2023</label>
                    </a>
                </div>

                <div class="news_content">
                    <a href="http://www.kdpress.co.kr/news/articleView.html?idxno=129296">
                        <img src="../../assets/images/news3.png"/>
                        <label>South Korea's Hiba for the Modernization of the Kampung ...</label>
                        <label style="font-size:16px;color:white;">April 14, 2023</label>
                    </a>
                </div>

                <div class="news_content">
                    <a href="http://www.kdpress.co.kr/news/articleView.html?idxno=129296">
                        <img src="../../assets/images/news3.png"/>
                        <label>South Korea's Hiba for the Modernization of the Kampung ...</label>
                        <label style="font-size:16px;color:white;">April 14, 2023</label>
                    </a>
                </div>
            </div>
            <div class="news_footer">
                <button onMouseOver="this.style.background='#40455C'" onMouseOut="this.style.background='transparent'"><a href="/news">More</a></button>
            </div>
        </div>

        <!-- Contact Us COntent -->
        <!-- <div style="
            padding: 100px 100px 100px 100px;
            margin: 100px 100px 100px 100px;
            border-radius: 20px 20px 20px 20px;
            background: #40455C;
            display: flex;
                justify-content: center;
                align-items: center;">
            <div style="
                display:grid;
                flex-direction: column;">
                <label style="font-size:70px;color:white;font-weight:bold;">Elevate Your<br>Business Now</label><br>
                <p style="width:40%;font-size:16px;color:white;">We offer standout IT consulting, management, and development services, providing unmatched solutions that drive transformative growth and spark innovation for your business.</p>
            </div>
            <button style="
                height:fit-content;
                padding:15px 30px 15px 30px;
                font-size:22px;
                color:black;
                border-radius: 50px;">
                <label style="margin-right:30px;">Contact Us</label>
                <img src="../../assets/images/icon/ic_arrow_miring.svg"/>
            </button>
        </div> -->

    {{-- </div> --}}

    <!-- <div data-include="in/component/footer"></div> -->

    @include('web/frontend/pages/en/component/footer')

    <script src="../assets/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const elements = document.querySelectorAll('.fade-in');

            function checkVisibility() {
                elements.forEach(element => {
                    const rect = element.getBoundingClientRect();
                    if (rect.top < window.innerHeight && rect.bottom >= 0) {
                        element.classList.add('visible');
                    } else {
                        element.classList.remove('visible');
                    }
                });
            }

            window.addEventListener('scroll', checkVisibility);
            window.addEventListener('resize', checkVisibility);

            // Initial check on load
            checkVisibility();
        });
    </script>
</body>

</html>
