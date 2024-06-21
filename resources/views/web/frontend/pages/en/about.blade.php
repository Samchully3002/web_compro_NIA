<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Networks Indonesia Aku</title>
    <link rel="shortcut icon" href="../assets/img/favicon.ico">
    <link href="../assets/css/default.css" rel="stylesheet" />
    <link href="../assets/css/outline.css" rel="stylesheet" />
    <link href="../assets/css/page.css" rel="stylesheet" />
    <link href="../assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="../assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/common.js"></script>    
    <script>
        $(window).scroll(function(){
            let offSet = $('.line-wrapper').offset().top;
            if($(document).scrollTop() > offSet - 1450){
                $(".core-value").addClass('active');
            }
            if($(document).scrollTop() > offSet - 600){
                $(".block-box").addClass('active');
                setTimeout(function(){
                    $(".block-box h4").fadeIn(1500);
                }, 1000);
            } 
        });
    </script>
</head>

<body>
    @include('web/frontend/pages/en/component/header')

    <div class="page page-in" id="page-introduction">

        <!-- Banner top -->
        <div class="banner-wrapper">
            <div class="box">
                <div class="left-content">
                    <img src="../assets/images/icon_10_about.svg">
                    <span>Years of  Proven Experience</span>    
                </div>   
                <div class="right-content">
                    <span>
                        With a decade worth of experience and excellent infrastructure, NIA is your reliable partner.
                    </span>
                </div>
            </div>
        </div>
        <!-- Banner top end -->

        <!-- CEO Message start -->
        <div class="ceo_message">
            <div class="img_wrapper">
                <img src="../assets/images/CEO_Photo.png"/>
            </div>
            <div class="text_wrapper">
                <p>
                <h1>CEO Greetings</h1><br><br>
                As a subsidiary of Samchully Networks from South Korea, PT Networks Indonesia Aku was established in Jakarta, Indonesia in 2021 with a clear mission: "To become a leading IT company in Indonesia, emphasizing environmentally friendly products and services. We aim to create technology for the advancement of transportation and infrastructure, healthcare technology, education, logistics, smart factories, online payment systems, and their development." As specialists in the IT field, we offer a diverse range of services through information data and develop solutions through application/web platforms.<br><br>
                NIA prioritizes 'integration' and 'innovation' as its core foundation. With the vision of "Focusing on innovation, high-quality services, and advanced technological solutions, we are determined to make a meaningful contribution to advancing the world of information technology. Through this commitment, we strive to build strong, long-term relationships with customers, becoming a reliable partner and continuing to be a leading provider of IT solutions." We are committed to continually building and maintaining trust, aligning with the rapid changes in technology trends.
                </p>
            </div>
        </div>
        <!-- CEO Message end -->

        <!-- Our History Start -->
        <div class="our-history">
            <div class="title">
                <p>Our Stories</p>    
            </div>
            <div class="box">
                <!-- Left Content -->
                <div class="left-box">
                    <img src="../assets/images/story2024.png"/>
                </div>
                <!-- Right COntent -->
                <div class="right-box">
                    <div class="wrapper">
                        <div style="
                            place-content: flex-start;
                            align-items: flex-start;
                            display: flex;
                            flex: 0 0 auto;
                            flex-flow: column;
                            gap: 12px;
                            height: min-content;
                            overflow: visible;
                            padding: 0px;
                            position: relative;
                            width: 100%;">
                            <div style="
                                outline: none;
                                display: flex;
                                flex-direction: column;
                                justify-content: flex-start;
                                flex-shrink: 0;
                                transform: none;
                                flex: 0 0 auto;
                                height: auto;
                                position: relative;
                                white-space: pre;
                                width: auto;">
                                <p style="
                                    font-size: 32px;
                                    font-weight: bold;
                                    text-align: start;
                                    ">April</p>
                            </div>
                            <div style="
                                outline: none;
                                display: flex;
                                flex-direction: column;
                                justify-content: flex-start;
                                flex-shrink: 0;
                                transform: none;">
                                <p>Samchully Networks was selected as partner for the Voucher Export project led by Korea SMEs &amp; Startups Agency (KOSME) and Korea Trade Investment Promotion Agency (KONTRA) and PT NIA as project executor.</p>
                            </div>
                        </div>

                        <div style="
                            place-content: flex-start;
                            align-items: flex-start;
                            display: flex;
                            flex: 0 0 auto;
                            flex-flow: column;
                            gap: 12px;
                            height: min-content;
                            overflow: visible;
                            padding: 0px;
                            position: relative;
                            width: 100%;">
                            <div style="
                                outline: none;
                                display: flex;
                                flex-direction: column;
                                justify-content: flex-start;
                                flex-shrink: 0;
                                transform: none;
                                flex: 0 0 auto;
                                height: auto;
                                position: relative;
                                white-space: pre;
                                width: auto;">
                                <p style="
                                    font-size: 32px;
                                    font-weight: bold;
                                    text-align: start;
                                    ">April</p>
                            </div>
                            <div style="
                                outline: none;
                                display: flex;
                                flex-direction: column;
                                justify-content: flex-start;
                                flex-shrink: 0;
                                transform: none;">
                                <p>Samchully Networks was selected as partner for the Voucher Export project led by Korea SMEs &amp; Startups Agency (KOSME) and Korea Trade Investment Promotion Agency (KONTRA) and PT NIA as project executor.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Our History End -->

        <!-- Core Value Start -->
        <div style="
            place-content: center;
            align-items: center;
            background: radial-gradient(50% 50% at 50% 50%, rgb(95, 106, 158) 0%, rgb(66, 72, 99) 100%);
            display: flex;
            flex: 0 0 auto;
            flex-flow: column;
            gap: 20px;
            height: 723px;
            overflow: visible;
            padding: 100px 50px 120px;
            position: relative;
            width: 100%;">
            <!-- Title Text -->
            <div style="
                outline: none;
                display: flex;
                flex-direction: column;
                justify-content: flex-start;
                flex-shrink: 0;
                transform: none;
                flex: 0 0 auto;
                height: auto;
                position: relative;
                white-space: pre-wrap;
                width: 100%;
                word-break: break-word;
                overflow-wrap: break-word;">
                <p style="
                    text-align: center;
                    font-weight:bold;
                    font-size:42px;
                    color:white">Core Values Guide Us to Excellence</p>
            </div>
            <!-- Title Text -->
            <!-- Core Text -->
            <div style="
                place-content: center;
                align-items: center;
                display: flex;
                flex: 0 0 auto;
                flex-flow: row;
                gap: 10px;
                height: min-content;
                overflow: hidden;
                padding: 20px;
                position: relative;
                width: min-content;
                z-index: 1;">
                <div style="
                    flex: 0 0 auto;
                    height: 90px;
                    width: 90px;
                    position: relative;
                    aspect-ratio:inherit;">
                    <img src="../assets/images/icon/ic_core_C.svg"/>
                </div>
                <div style="
                    flex: 0 0 auto;
                    height: 90px;
                    width: 90px;
                    position: relative;
                    aspect-ratio:inherit;">
                    <img src="../assets/images/icon/ic_core_O.svg"/>
                </div>
                <div style="
                    flex: 0 0 auto;
                    height: 90px;
                    width: 90px;
                    position: relative;
                    aspect-ratio:inherit;">
                    <img src="../assets/images/icon/ic_core_N.svg"/>
                </div>
                <div style="
                    flex: 0 0 auto;
                    height: 90px;
                    width: 90px;
                    position: relative;
                    aspect-ratio:inherit;">
                    <img src="../assets/images/icon/ic_core_N2.svg"/>
                </div>
                <div style="
                    flex: 0 0 auto;
                    height: 90px;
                    width: 90px;
                    position: relative;
                    aspect-ratio:inherit;">
                    <img src="../assets/images/icon/ic_core_E.svg"/>
                </div>
                <div style="
                    flex: 0 0 auto;
                    height: 90px;
                    width: 90px;
                    position: relative;
                    aspect-ratio:inherit;">
                    <img src="../assets/images/icon/ic_core_C2.svg"/>
                </div>
                <div style="
                    flex: 0 0 auto;
                    height: 90px;
                    width: 90px;
                    position: relative;
                    aspect-ratio:inherit;">
                    <img src="../assets/images/icon/ic_core_T.svg"/>
                </div>
            </div>
            <!-- Core Text -->
            <!-- Core Full Text -->
            <div style="
                place-content: center;
                align-items: center;
                display: flex;
                flex: 0 0 auto;
                flex-flow: column;
                gap: 20px;
                height: min-content;
                overflow: hidden;
                padding: 0px;
                position: relative;
                width: min-content;
                z-index: 1;">
                <!-- Line 1 -->
                <div style="
                    place-content: center;
                    align-items: center;
                    display: flex;
                    flex: 0 0 auto;
                    flex-flow: row;
                    gap: 10px;
                    height: 82px;
                    overflow: hidden;
                    padding: 0px;
                    position: relative;
                    width: min-content;">
                    <div style="
                        --border-bottom-width: 1px;
                        --border-color: #a9b6c4;
                        --border-left-width: 1px;
                        --border-right-width: 1px;
                        --border-style: solid;
                        --border-top-width: 1px;
                        place-content: center;
                        align-items: center;
                        background-color: rgb(255, 255, 255);
                        border-radius: 100px;
                        box-shadow: rgba(0, 0, 0, 0.25) 0px 0px 10px 0px;
                        display: flex;
                        flex: 0 0 auto;
                        flex-flow: row;
                        gap: 16px;
                        height: min-content;
                        overflow: visible;
                        padding: 30px 50px;
                        position: relative;
                        width: min-content;">
                        <p style="
                            font-weight:bold;
                            font-size: 36px;
                            text-align: center;">
                            <span style="font-weight:bold;color:rgb(13, 73, 136);">C</span>ommunication
                        </p>
                    </div>
                    <div style="
                        --border-bottom-width: 1px;
                        --border-color: #a9b6c4;
                        --border-left-width: 1px;
                        --border-right-width: 1px;
                        --border-style: solid;
                        --border-top-width: 1px;
                        place-content: center;
                        align-items: center;
                        background-color: rgb(255, 255, 255);
                        border-radius: 100px;
                        box-shadow: rgba(0, 0, 0, 0.25) 0px 0px 10px 0px;
                        display: flex;
                        flex: 0 0 auto;
                        flex-flow: row;
                        gap: 16px;
                        height: min-content;
                        overflow: visible;
                        padding: 30px 50px;
                        position: relative;
                        width: min-content;">
                        <p style="
                            font-weight:bold;
                            font-size: 36px;
                            text-align: center;">
                            <span style="font-weight:bold;color:rgb(200, 7, 6);">O</span>pportunity
                        </p>
                    </div>
                    <div style="
                        --border-bottom-width: 1px;
                        --border-color: #a9b6c4;
                        --border-left-width: 1px;
                        --border-right-width: 1px;
                        --border-style: solid;
                        --border-top-width: 1px;
                        place-content: center;
                        align-items: center;
                        background-color: rgb(255, 255, 255);
                        border-radius: 100px;
                        box-shadow: rgba(0, 0, 0, 0.25) 0px 0px 10px 0px;
                        display: flex;
                        flex: 0 0 auto;
                        flex-flow: row;
                        gap: 16px;
                        height: min-content;
                        overflow: visible;
                        padding: 30px 50px;
                        position: relative;
                        width: min-content;">
                        <p style="
                            font-weight:bold;
                            font-size: 36px;
                            text-align: center;">
                            <span style="font-weight:bold;color:rgb(255, 162, 2);">N</span>ecessary
                        </p>
                    </div>
                </div>
                <!-- Line 2 -->
                <div style="
                    place-content: center;
                    align-items: center;
                    display: flex;
                    flex: 0 0 auto;
                    flex-flow: row;
                    gap: 10px;
                    height: 82px;
                    overflow: hidden;
                    padding: 0px;
                    position: relative;
                    width: min-content;">
                    <div style="
                        --border-bottom-width: 1px;
                        --border-color: #a9b6c4;
                        --border-left-width: 1px;
                        --border-right-width: 1px;
                        --border-style: solid;
                        --border-top-width: 1px;
                        place-content: center;
                        align-items: center;
                        background-color: rgb(255, 255, 255);
                        border-radius: 100px;
                        box-shadow: rgba(0, 0, 0, 0.25) 0px 0px 10px 0px;
                        display: flex;
                        flex: 0 0 auto;
                        flex-flow: row;
                        gap: 16px;
                        height: min-content;
                        overflow: visible;
                        padding: 30px 50px;
                        position: relative;
                        width: min-content;">
                        <p style="
                            font-weight:bold;
                            font-size: 36px;
                            text-align: center;">
                            <span style="font-weight:bold;color:rgb(123, 53, 85);">N</span>ew
                        </p>
                    </div>
                    <div style="
                        --border-bottom-width: 1px;
                        --border-color: #a9b6c4;
                        --border-left-width: 1px;
                        --border-right-width: 1px;
                        --border-style: solid;
                        --border-top-width: 1px;
                        place-content: center;
                        align-items: center;
                        background-color: rgb(255, 255, 255);
                        border-radius: 100px;
                        box-shadow: rgba(0, 0, 0, 0.25) 0px 0px 10px 0px;
                        display: flex;
                        flex: 0 0 auto;
                        flex-flow: row;
                        gap: 16px;
                        height: min-content;
                        overflow: visible;
                        padding: 30px 50px;
                        position: relative;
                        width: min-content;">
                        <p style="
                            font-weight:bold;
                            font-size: 36px;
                            text-align: center;">
                            <span style="font-weight:bold;color:rgb(49, 107, 27);">E</span>enviroment
                        </p>
                    </div>
                    <div style="
                        --border-bottom-width: 1px;
                        --border-color: #a9b6c4;
                        --border-left-width: 1px;
                        --border-right-width: 1px;
                        --border-style: solid;
                        --border-top-width: 1px;
                        place-content: center;
                        align-items: center;
                        background-color: rgb(255, 255, 255);
                        border-radius: 100px;
                        box-shadow: rgba(0, 0, 0, 0.25) 0px 0px 10px 0px;
                        display: flex;
                        flex: 0 0 auto;
                        flex-flow: row;
                        gap: 16px;
                        height: min-content;
                        overflow: visible;
                        padding: 30px 50px;
                        position: relative;
                        width: min-content;">
                        <p style="
                            font-weight:bold;
                            font-size: 36px;
                            text-align: center;">
                            <span style="font-weight:bold;color:rgb(94, 72, 158);">C</span>reative
                        </p>
                    </div>
                    <div style="
                        --border-bottom-width: 1px;
                        --border-color: #a9b6c4;
                        --border-left-width: 1px;
                        --border-right-width: 1px;
                        --border-style: solid;
                        --border-top-width: 1px;
                        place-content: center;
                        align-items: center;
                        background-color: rgb(255, 255, 255);
                        border-radius: 100px;
                        box-shadow: rgba(0, 0, 0, 0.25) 0px 0px 10px 0px;
                        display: flex;
                        flex: 0 0 auto;
                        flex-flow: row;
                        gap: 16px;
                        height: min-content;
                        overflow: visible;
                        padding: 30px 50px;
                        position: relative;
                        width: min-content;">
                        <p style="
                            font-weight:bold;
                            font-size: 36px;
                            text-align: center;">
                            <span style="font-weight:bold;color:rgb(52, 123, 191);">T</span>rust
                        </p>
                    </div>
                </div>
            </div>
            <!-- Core Full Text -->
            <!-- subtitle Core Value -->
            <div style="
                outline: none;
                display: flex;
                flex-direction: column;
                justify-content: flex-start;
                flex-shrink: 0;
                transform: none;
                flex: 0 0 auto;
                height: auto;
                position: relative;
                width: 772px;
                word-break: break-word;
                overflow-wrap: break-word;">
                <p style="
                font-size:24px;
                color:white;
                text-align:center;
                line-height:120%;
                ">
                Expanding our commitment to integrity, innovation, collaboration, 
                and continuous improvement.
                </p>
            </div>
        </div>
        <!-- Core Value End -->
         
        <!-- Team Member Start -->
        <div style="
            place-content: flex-start;
            align-items: flex-start;
            display: flex;
            flex: 0 0 auto;
            flex-flow: column;
            gap: 50px;
            height: min-content;
            overflow: visible;
            padding: 100px 50px;
            position: relative;
            width: 100%;">
            <!-- Title Line -->
            <div style="
                place-content: center;
                align-items: center;
                display: flex;
                flex: 0 0 auto;
                flex-flow: column;
                gap: 20px;
                height: min-content;
                overflow: hidden;
                padding: 0px;
                position: relative;
                width: 100%;">
                <div style="
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    flex-shrink: 0;
                    opacity: 1;
                    transform: none;
                    flex: 0 0 auto;
                    height: 67px;
                    position: relative;
                    white-space: pre;
                    width: auto;">
                    <p style="
                        font-weight:bold;
                        font-size:56px;
                        line-height:30px;
                        ">Team Member</p>
                </div>
                <div style="
                    display: flex;
                    flex-direction: column;
                    justify-content: flex-start;
                    flex-shrink: 0;
                    opacity: 1;
                    transform: none;
                    flex: 0 0 auto;
                    height: auto;
                    position: relative;
                    white-space: pre-wrap;
                    width: 100%;
                    word-break: break-word;
                    overflow-wrap: break-word;">
                    <p style="
                        font-size:24px;
                        line-height:150%;
                        text-align:center;">Collaboration fuels our success, turning shared visions into remarkable achievements.</p>
                </div>
            </div>
            <!-- Title Line -->
            <!-- List Team Member -->
            <div style="
                place-content: center;
                align-items: center;
                display: flex;
                flex: 0 0 auto;
                flex-flow: column;
                gap: 0px;
                height: min-content;
                overflow: visible;
                padding: 0px;
                position: relative;
                width: 100%;">
                <div style="
                    place-content: center;
                    align-items: center;
                    display: flex;
                    flex: 0 0 auto;
                    flex-flow: row;
                    gap: 10px;
                    height: 500px;
                    overflow: hidden;
                    padding: 10px;
                    position: relative;
                    width: min-content;">
                    <!-- photo 1 ceo -->
                    <div style="
                        display:block;
                        flex: 0 0 auto;
                        height: 433px;
                        position: relative;
                        width: 360px;
                        perspective: 1200px;">
                        <div style="
                            width: 100%;
                            height: 100%;
                            position: absolute;
                            user-select: none;
                            transform-style: preserve-3d;
                            transform: none;">
                            <div style="
                                width: 100%;
                                height: 100%;
                                position: absolute;
                                backface-visibility: hidden;">
                                <div style="
                                    width:100%;
                                    opacity:1;
                                    place-content: center flex-start;
                                    align-items: center;
                                    background-color: rgb(255, 255, 255);
                                    border-radius: 20px;
                                    box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 20px 0px;
                                    display: flex;
                                    flex-flow: column;
                                    gap: 20px;
                                    height: min-content;
                                    overflow: visible;
                                    padding: 20px;
                                    position: relative;">
                                    <div style="
                                        place-content: center flex-start;
                                        align-items: center;
                                        border-radius: 15px;
                                        display: flex;
                                        flex: 0 0 auto;
                                        flex-flow: row;
                                        gap: 10px;
                                        height: 308px;
                                        overflow: hidden;
                                        padding: 0px;
                                        position: relative;
                                        width: 308px;">
                                        <div style="
                                            flex: 1 0 0px;
                                            height: 308px;
                                            position: relative;">
                                            <div style="
                                                position: absolute;
                                                border-radius: inherit;
                                                inset: 0px;">
                                                <img style="
                                                    display: block;
                                                    width: 100%;
                                                    height: 100%;
                                                    border-radius: inherit;
                                                    object-position: center;
                                                    object-fit: fill;" src="../assets/images/tm_mr_son.svg">
                                            </div>
                                        </div>
                                    </div>
                                    <div style="
                                        place-content: center flex-start;
                                        align-items: center;
                                        display: flex;
                                        flex: 0 0 auto;
                                        flex-flow: column;
                                        gap: 5px;
                                        height: min-content;
                                        overflow: visible;
                                        padding: 0px;
                                        position: relative;">
                                        <div style="
                                            display: flex;
                                            flex-direction: column;
                                            justify-content: flex-start;">
                                            <p style="
                                            font-weight:bold;
                                            font-size:32px;">Mr. Son</p>
                                        </div>
                                        <div style="
                                            display: flex;
                                            flex-direction: column;
                                            justify-content: flex-start;">
                                            <p style="
                                            text-align:center">President of Indonesia Branch office</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- photo 1 ceo -->
                    <!-- photo 2 general -->
                    <div style="
                        display:block;
                        flex: 0 0 auto;
                        height: 433px;
                        position: relative;
                        width: 360px;
                        perspective: 1200px;">
                        <div style="
                            width: 100%;
                            height: 100%;
                            position: absolute;
                            user-select: none;
                            transform-style: preserve-3d;
                            transform: none;">
                            <div style="
                                width: 100%;
                                height: 100%;
                                position: absolute;
                                backface-visibility: hidden;">
                                <div style="
                                    width:100%;
                                    opacity:1;
                                    place-content: center flex-start;
                                    align-items: center;
                                    background-color: rgb(255, 255, 255);
                                    border-radius: 20px;
                                    box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 20px 0px;
                                    display: flex;
                                    flex-flow: column;
                                    gap: 20px;
                                    height: min-content;
                                    overflow: visible;
                                    padding: 20px;
                                    position: relative;">
                                    <div style="
                                        place-content: center flex-start;
                                        align-items: center;
                                        border-radius: 15px;
                                        display: flex;
                                        flex: 0 0 auto;
                                        flex-flow: row;
                                        gap: 10px;
                                        height: 308px;
                                        overflow: hidden;
                                        padding: 0px;
                                        position: relative;
                                        width: 308px;">
                                        <div style="
                                            flex: 1 0 0px;
                                            height: 308px;
                                            position: relative;">
                                            <div style="
                                                position: absolute;
                                                border-radius: inherit;
                                                inset: 0px;">
                                                <img style="
                                                    display: block;
                                                    width: 100%;
                                                    height: 100%;
                                                    border-radius: inherit;
                                                    object-position: center;
                                                    object-fit: fill;" src="../assets/images/tm_miss_kim.svg">
                                            </div>
                                        </div>
                                    </div>
                                    <div style="
                                        place-content: center flex-start;
                                        align-items: center;
                                        display: flex;
                                        flex: 0 0 auto;
                                        flex-flow: column;
                                        gap: 5px;
                                        height: min-content;
                                        overflow: visible;
                                        padding: 0px;
                                        position: relative;">
                                        <div style="
                                            display: flex;
                                            flex-direction: column;
                                            justify-content: flex-start;">
                                            <p style="
                                            font-weight:bold;
                                            font-size:32px;">Ms. Kim</p>
                                        </div>
                                        <div style="
                                            display: flex;
                                            flex-direction: column;
                                            justify-content: flex-start;">
                                            <p style="
                                            text-align:center">Deputy General Manager</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- photo 2 general -->
                </div>
                <!-- line 2 -->
                <div style="
                    place-content: center;
                    align-items: center;
                    display: flex;
                    flex: 0 0 auto;
                    flex-flow: row;
                    gap: 10px;
                    height: 500px;
                    overflow: hidden;
                    padding: 10px;
                    position: relative;
                    width: min-content;">
                    <!-- photo 1 galang -->
                    <div style="
                        display:block;
                        flex: 0 0 auto;
                        height: 433px;
                        position: relative;
                        width: 360px;
                        perspective: 1200px;">
                        <div style="
                            width: 100%;
                            height: 100%;
                            position: absolute;
                            user-select: none;
                            transform-style: preserve-3d;
                            transform: none;">
                            <div style="
                                width: 100%;
                                height: 100%;
                                position: absolute;
                                backface-visibility: hidden;">
                                <div style="
                                    width:100%;
                                    opacity:1;
                                    place-content: center flex-start;
                                    align-items: center;
                                    background-color: rgb(255, 255, 255);
                                    border-radius: 20px;
                                    box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 20px 0px;
                                    display: flex;
                                    flex-flow: column;
                                    gap: 20px;
                                    height: min-content;
                                    overflow: visible;
                                    padding: 20px;
                                    position: relative;">
                                    <div style="
                                        place-content: center flex-start;
                                        align-items: center;
                                        border-radius: 15px;
                                        display: flex;
                                        flex: 0 0 auto;
                                        flex-flow: row;
                                        gap: 10px;
                                        height: 308px;
                                        overflow: hidden;
                                        padding: 0px;
                                        position: relative;
                                        width: 308px;">
                                        <div style="
                                            flex: 1 0 0px;
                                            height: 308px;
                                            position: relative;">
                                            <div style="
                                                position: absolute;
                                                border-radius: inherit;
                                                inset: 0px;">
                                                <img style="
                                                    display: block;
                                                    width: 100%;
                                                    height: 100%;
                                                    border-radius: inherit;
                                                    object-position: center;
                                                    object-fit: fill;" src="../assets/images/tm_galang.svg">
                                            </div>
                                        </div>
                                    </div>
                                    <div style="
                                        place-content: center flex-start;
                                        align-items: center;
                                        display: flex;
                                        flex: 0 0 auto;
                                        flex-flow: column;
                                        gap: 5px;
                                        height: min-content;
                                        overflow: visible;
                                        padding: 0px;
                                        position: relative;">
                                        <div style="
                                            display: flex;
                                            flex-direction: column;
                                            justify-content: flex-start;">
                                            <p style="
                                            font-weight:bold;
                                            font-size:32px;">Galang</p>
                                        </div>
                                        <div style="
                                            display: flex;
                                            flex-direction: column;
                                            justify-content: flex-start;">
                                            <p style="
                                            text-align:center">IT Support</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- photo 1 galang -->
                    <!-- photo 2 fikri -->
                    <div style="
                        display:block;
                        flex: 0 0 auto;
                        height: 433px;
                        position: relative;
                        width: 360px;
                        perspective: 1200px;">
                        <div style="
                            width: 100%;
                            height: 100%;
                            position: absolute;
                            user-select: none;
                            transform-style: preserve-3d;
                            transform: none;">
                            <div style="
                                width: 100%;
                                height: 100%;
                                position: absolute;
                                backface-visibility: hidden;">
                                <div style="
                                    width:100%;
                                    opacity:1;
                                    place-content: center flex-start;
                                    align-items: center;
                                    background-color: rgb(255, 255, 255);
                                    border-radius: 20px;
                                    box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 20px 0px;
                                    display: flex;
                                    flex-flow: column;
                                    gap: 20px;
                                    height: min-content;
                                    overflow: visible;
                                    padding: 20px;
                                    position: relative;">
                                    <div style="
                                        place-content: center flex-start;
                                        align-items: center;
                                        border-radius: 15px;
                                        display: flex;
                                        flex: 0 0 auto;
                                        flex-flow: row;
                                        gap: 10px;
                                        height: 308px;
                                        overflow: hidden;
                                        padding: 0px;
                                        position: relative;
                                        width: 308px;">
                                        <div style="
                                            flex: 1 0 0px;
                                            height: 308px;
                                            position: relative;">
                                            <div style="
                                                position: absolute;
                                                border-radius: inherit;
                                                inset: 0px;">
                                                <img style="
                                                    display: block;
                                                    width: 100%;
                                                    height: 100%;
                                                    border-radius: inherit;
                                                    object-position: center;
                                                    object-fit: fill;" src="../assets/images/tm_fikri.svg">
                                            </div>
                                        </div>
                                    </div>
                                    <div style="
                                        place-content: center flex-start;
                                        align-items: center;
                                        display: flex;
                                        flex: 0 0 auto;
                                        flex-flow: column;
                                        gap: 5px;
                                        height: min-content;
                                        overflow: visible;
                                        padding: 0px;
                                        position: relative;">
                                        <div style="
                                            display: flex;
                                            flex-direction: column;
                                            justify-content: flex-start;">
                                            <p style="
                                            font-weight:bold;
                                            font-size:32px;">Fikri</p>
                                        </div>
                                        <div style="
                                            display: flex;
                                            flex-direction: column;
                                            justify-content: flex-start;">
                                            <p style="
                                            text-align:center">UI/UX Designer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- photo 2 fikri -->
                     <!-- photo 3 musa -->
                    <div style="
                        display:block;
                        flex: 0 0 auto;
                        height: 433px;
                        position: relative;
                        width: 360px;
                        perspective: 1200px;">
                        <div style="
                            width: 100%;
                            height: 100%;
                            position: absolute;
                            user-select: none;
                            transform-style: preserve-3d;
                            transform: none;">
                            <div style="
                                width: 100%;
                                height: 100%;
                                position: absolute;
                                backface-visibility: hidden;">
                                <div style="
                                    width:100%;
                                    opacity:1;
                                    place-content: center flex-start;
                                    align-items: center;
                                    background-color: rgb(255, 255, 255);
                                    border-radius: 20px;
                                    box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 20px 0px;
                                    display: flex;
                                    flex-flow: column;
                                    gap: 20px;
                                    height: min-content;
                                    overflow: visible;
                                    padding: 20px;
                                    position: relative;">
                                    <div style="
                                        place-content: center flex-start;
                                        align-items: center;
                                        border-radius: 15px;
                                        display: flex;
                                        flex: 0 0 auto;
                                        flex-flow: row;
                                        gap: 10px;
                                        height: 308px;
                                        overflow: hidden;
                                        padding: 0px;
                                        position: relative;
                                        width: 308px;">
                                        <div style="
                                            flex: 1 0 0px;
                                            height: 308px;
                                            position: relative;">
                                            <div style="
                                                position: absolute;
                                                border-radius: inherit;
                                                inset: 0px;">
                                                <img style="
                                                    display: block;
                                                    width: 100%;
                                                    height: 100%;
                                                    border-radius: inherit;
                                                    object-position: center;
                                                    object-fit: fill;" src="../assets/images/tm_musa.svg">
                                            </div>
                                        </div>
                                    </div>
                                    <div style="
                                        place-content: center flex-start;
                                        align-items: center;
                                        display: flex;
                                        flex: 0 0 auto;
                                        flex-flow: column;
                                        gap: 5px;
                                        height: min-content;
                                        overflow: visible;
                                        padding: 0px;
                                        position: relative;">
                                        <div style="
                                            display: flex;
                                            flex-direction: column;
                                            justify-content: flex-start;">
                                            <p style="
                                            font-weight:bold;
                                            font-size:32px;">Musa</p>
                                        </div>
                                        <div style="
                                            display: flex;
                                            flex-direction: column;
                                            justify-content: flex-start;">
                                            <p style="
                                            text-align:center">IT Developer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- photo 3 Musa -->
                </div>
                <!-- line 3 -->
                <div style="
                    place-content: center;
                    align-items: center;
                    display: flex;
                    flex: 0 0 auto;
                    flex-flow: row;
                    gap: 10px;
                    height: 500px;
                    overflow: hidden;
                    padding: 10px;
                    position: relative;
                    width: min-content;">
                    <!-- photo 1 fiqih -->
                    <div style="
                        display:block;
                        flex: 0 0 auto;
                        height: 433px;
                        position: relative;
                        width: 360px;
                        perspective: 1200px;">
                        <div style="
                            width: 100%;
                            height: 100%;
                            position: absolute;
                            user-select: none;
                            transform-style: preserve-3d;
                            transform: none;">
                            <div style="
                                width: 100%;
                                height: 100%;
                                position: absolute;
                                backface-visibility: hidden;">
                                <div style="
                                    width:100%;
                                    opacity:1;
                                    place-content: center flex-start;
                                    align-items: center;
                                    background-color: rgb(255, 255, 255);
                                    border-radius: 20px;
                                    box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 20px 0px;
                                    display: flex;
                                    flex-flow: column;
                                    gap: 20px;
                                    height: min-content;
                                    overflow: visible;
                                    padding: 20px;
                                    position: relative;">
                                    <div style="
                                        place-content: center flex-start;
                                        align-items: center;
                                        border-radius: 15px;
                                        display: flex;
                                        flex: 0 0 auto;
                                        flex-flow: row;
                                        gap: 10px;
                                        height: 308px;
                                        overflow: hidden;
                                        padding: 0px;
                                        position: relative;
                                        width: 308px;">
                                        <div style="
                                            flex: 1 0 0px;
                                            height: 308px;
                                            position: relative;">
                                            <div style="
                                                position: absolute;
                                                border-radius: inherit;
                                                inset: 0px;">
                                                <img style="
                                                    display: block;
                                                    width: 100%;
                                                    height: 100%;
                                                    border-radius: inherit;
                                                    object-position: center;
                                                    object-fit: fill;" src="../assets/images/tm_fiqih.svg">
                                            </div>
                                        </div>
                                    </div>
                                    <div style="
                                        place-content: center flex-start;
                                        align-items: center;
                                        display: flex;
                                        flex: 0 0 auto;
                                        flex-flow: column;
                                        gap: 5px;
                                        height: min-content;
                                        overflow: visible;
                                        padding: 0px;
                                        position: relative;">
                                        <div style="
                                            display: flex;
                                            flex-direction: column;
                                            justify-content: flex-start;">
                                            <p style="
                                            font-weight:bold;
                                            font-size:32px;">Fiqih</p>
                                        </div>
                                        <div style="
                                            display: flex;
                                            flex-direction: column;
                                            justify-content: flex-start;">
                                            <p style="
                                            text-align:center">IT Developer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- photo 1 fiqih -->
                    <!-- photo 2 yuda -->
                    <div style="
                        display:block;
                        flex: 0 0 auto;
                        height: 433px;
                        position: relative;
                        width: 360px;
                        perspective: 1200px;">
                        <div style="
                            width: 100%;
                            height: 100%;
                            position: absolute;
                            user-select: none;
                            transform-style: preserve-3d;
                            transform: none;">
                            <div style="
                                width: 100%;
                                height: 100%;
                                position: absolute;
                                backface-visibility: hidden;">
                                <div style="
                                    width:100%;
                                    opacity:1;
                                    place-content: center flex-start;
                                    align-items: center;
                                    background-color: rgb(255, 255, 255);
                                    border-radius: 20px;
                                    box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 20px 0px;
                                    display: flex;
                                    flex-flow: column;
                                    gap: 20px;
                                    height: min-content;
                                    overflow: visible;
                                    padding: 20px;
                                    position: relative;">
                                    <div style="
                                        place-content: center flex-start;
                                        align-items: center;
                                        border-radius: 15px;
                                        display: flex;
                                        flex: 0 0 auto;
                                        flex-flow: row;
                                        gap: 10px;
                                        height: 308px;
                                        overflow: hidden;
                                        padding: 0px;
                                        position: relative;
                                        width: 308px;">
                                        <div style="
                                            flex: 1 0 0px;
                                            height: 308px;
                                            position: relative;">
                                            <div style="
                                                position: absolute;
                                                border-radius: inherit;
                                                inset: 0px;">
                                                <img style="
                                                    display: block;
                                                    width: 100%;
                                                    height: 100%;
                                                    border-radius: inherit;
                                                    object-position: center;
                                                    object-fit: fill;" src="../assets/images/tm_yuda.svg">
                                            </div>
                                        </div>
                                    </div>
                                    <div style="
                                        place-content: center flex-start;
                                        align-items: center;
                                        display: flex;
                                        flex: 0 0 auto;
                                        flex-flow: column;
                                        gap: 5px;
                                        height: min-content;
                                        overflow: visible;
                                        padding: 0px;
                                        position: relative;">
                                        <div style="
                                            display: flex;
                                            flex-direction: column;
                                            justify-content: flex-start;">
                                            <p style="
                                            font-weight:bold;
                                            font-size:32px;">Yudana</p>
                                        </div>
                                        <div style="
                                            display: flex;
                                            flex-direction: column;
                                            justify-content: flex-start;">
                                            <p style="
                                            text-align:center">IT Developer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- photo 2 yuda -->
                     <!-- photo 3 sidik -->
                    <div style="
                        display:block;
                        flex: 0 0 auto;
                        height: 433px;
                        position: relative;
                        width: 360px;
                        perspective: 1200px;">
                        <div style="
                            width: 100%;
                            height: 100%;
                            position: absolute;
                            user-select: none;
                            transform-style: preserve-3d;
                            transform: none;">
                            <div style="
                                width: 100%;
                                height: 100%;
                                position: absolute;
                                backface-visibility: hidden;">
                                <div style="
                                    width:100%;
                                    opacity:1;
                                    place-content: center flex-start;
                                    align-items: center;
                                    background-color: rgb(255, 255, 255);
                                    border-radius: 20px;
                                    box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 20px 0px;
                                    display: flex;
                                    flex-flow: column;
                                    gap: 20px;
                                    height: min-content;
                                    overflow: visible;
                                    padding: 20px;
                                    position: relative;">
                                    <div style="
                                        place-content: center flex-start;
                                        align-items: center;
                                        border-radius: 15px;
                                        display: flex;
                                        flex: 0 0 auto;
                                        flex-flow: row;
                                        gap: 10px;
                                        height: 308px;
                                        overflow: hidden;
                                        padding: 0px;
                                        position: relative;
                                        width: 308px;">
                                        <div style="
                                            flex: 1 0 0px;
                                            height: 308px;
                                            position: relative;">
                                            <div style="
                                                position: absolute;
                                                border-radius: inherit;
                                                inset: 0px;">
                                                <img style="
                                                    display: block;
                                                    width: 100%;
                                                    height: 100%;
                                                    border-radius: inherit;
                                                    object-position: center;
                                                    object-fit: fill;" src="../assets/images/tm_sidik.svg">
                                            </div>
                                        </div>
                                    </div>
                                    <div style="
                                        place-content: center flex-start;
                                        align-items: center;
                                        display: flex;
                                        flex: 0 0 auto;
                                        flex-flow: column;
                                        gap: 5px;
                                        height: min-content;
                                        overflow: visible;
                                        padding: 0px;
                                        position: relative;">
                                        <div style="
                                            display: flex;
                                            flex-direction: column;
                                            justify-content: flex-start;">
                                            <p style="
                                            font-weight:bold;
                                            font-size:32px;">Sidik</p>
                                        </div>
                                        <div style="
                                            display: flex;
                                            flex-direction: column;
                                            justify-content: flex-start;">
                                            <p style="
                                            text-align:center">IT Support</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- photo 3 sidik -->
                </div>
            </div>   
        </div>
    </div>
   
    @include('web/frontend/pages/en/component/footer')

</body>

</html>