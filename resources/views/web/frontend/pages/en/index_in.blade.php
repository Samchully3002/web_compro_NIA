<!DOCTYPE html>
<html lang="id">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Z49W0Z4LVG"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-Z49W0Z4LVG');
    </script>

    <meta charset="utf-8">
    <meta name="viewport"content="user-scalable=yes, initial-scale=1, maximum-scale=2, minimum-scale=1, width=device-width" />
    <title>NIA</title>
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" href="assets/css/default.css"/>
    <link rel="stylesheet" href="assets/css/outline.css"/>
    <link rel="stylesheet" href="assets/css/page.css"/>
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css"  />
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css"/>
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/common.js"></script>
</head>

<body>
    <!-- <div data-include="component/header"></div> -->
    @include('web/frontend/pages/in/component/header')

    <div class="page page-in" id="page-main">

        <!-- Video start -->
        <!-- <video class="video_compro" loop="true" autoplay="true" muted playsinline>
            <source src="../assets/video/company_profile.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video> -->
        <!-- <video src="../assets/video/company_profile.mp4" class="video_compro" autoplay/> -->
        <video width="320" height="240" class="video_compro" autoplay muted>
            <source src="../assets/video/video.mp4" type="video/mp4">
        </video>
        <!-- Video end -->

        <div class="vision_text">
            <label>One - Stop</label><label style="color:#40455C;">&nbsp;IT Solution For Your Business</label>
        </div>
        
        <div class="flex-box">
            <div class="box_right">
                <img class="icon_right" src="../../assets/images/icon/ic_cube.png"/>
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
        </div>

        <div class="client_text">
            <label>Collaborating seamlessly to create value and drive success for our clients.</label>
        </div>
            <marquee behavior="scroll" direction="left">
            <img src="../../assets/images/icon/partner_logo.png"/>
            </marquee>

        <div class="news_box">
            <label style="font-size:45px;font-weight:bold;color:white;">Latest News</label>
            <div class="news_wrapper">
                <div class="news_content">
                    <img src="../../assets/images/news1.png"/>
                    <label>Now the Kampung Rambutan Terminal is more modern ...</label>
                    <label style="margin-top:20px;font-size:16px;color:white;">January 14, 2023</label>
                </div>

                <div class="news_content">
                    <img src="../../assets/images/news2.png"/>
                    <label>Kampung Rambutan Bus Terminal Starts Opening Online ...</label>
                    <label style="margin-top:20px;font-size:16px;color:white;">January 13, 2023</label>
                </div>

                <div class="news_content">
                    <img src="../../assets/images/news3.png"/>
                    <label>South Korea's Hiba for the Modernization of the Kampung ...</label>
                    <label style="margin-top:20px;font-size:16px;color:white;">April 14, 2023</label>
                </div>
            </div>
            <div class="news_footer">
                <button onMouseOver="this.style.background='grey'"
       onMouseOut="this.style.background='transparent'">More Articles</button>
            </div>
        </div>

        <!-- Contact Us COntent -->
        <!-- <div style="
            padding: 100px 100px 100px 100px;
            margin: 100px 100px 100px 100px;
            border-radius: 20px 20px 20px 20px;
            background: #077C93;
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

    </div>

    <!-- <div data-include="in/component/footer"></div> -->
    
    @include('web/frontend/pages/in/component/footer')

    <script src="../assets/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>