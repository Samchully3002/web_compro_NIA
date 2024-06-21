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
                        <div class="row">
                            <div class="row_month">
                                <p>April</p>
                            </div>
                            <div class="row_history">
                                <p>Samchully Networks was selected as partner for the Voucher Export project led by Korea SMEs &amp; Startups Agency (KOSME) and Korea Trade Investment Promotion Agency (KONTRA) and PT NIA as project executor.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="row_month">
                                <p>April</p>
                            </div>
                            <div class="row_history">
                                <p>Samchully Networks was selected as partner for the Voucher Export project led by Korea SMEs &amp; Startups Agency (KOSME) and Korea Trade Investment Promotion Agency (KONTRA) and PT NIA as project executor.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our History End -->

        <!-- Core Value Start -->
        <div class="core">
            <!-- Title Text -->
            <div class="core-title">
                <p>Core Values Guide Us to Excellence</p>
            </div>
            <!-- Title Text -->
            <!-- Core Text -->
            <div class="core-text">
                <div class=core-img>
                    <img src="../assets/images/icon/ic_core_C.svg"/>
                </div>
                <div class=core-img>
                    <img src="../assets/images/icon/ic_core_O.svg"/>
                </div>
                <div class=core-img>
                    <img src="../assets/images/icon/ic_core_N.svg"/>
                </div>
                <div class=core-img>
                    <img src="../assets/images/icon/ic_core_N2.svg"/>
                </div>
                <div class=core-img>
                    <img src="../assets/images/icon/ic_core_E.svg"/>
                </div>
                <div class=core-img>
                    <img src="../assets/images/icon/ic_core_C2.svg"/>
                </div>
                <div class=core-img>
                    <img src="../assets/images/icon/ic_core_T.svg"/>
                </div>
            </div>
            <!-- Core Text -->
            <!-- Core Full Text -->
            <div class="full-text">
                <!-- Line 1 -->
                <div class="wrapper">
                    <div class="item">
                        <p>
                        <span style="font-weight:bold;color:rgb(13, 73, 136);">C</span>ommunication
                        </p>
                    </div>
                    <div class="item">
                        <p>
                        <span style="font-weight:bold;color:rgb(200, 7, 6);">O</span>pportunity
                        </p>
                    </div>
                    <div class="item">
                        <p>
                        <span style="font-weight:bold;color:rgb(255, 162, 2);">N</span>ecessary
                        </p>
                    </div>
                </div>
                <!-- Line 2 -->
                <div class="wrapper">
                    <div class="item">
                        <p>
                        <span style="font-weight:bold;color:rgb(123, 53, 85);">N</span>ew
                        </p>
                    </div>
                    <div class="item">
                        <p>
                        <span style="font-weight:bold;color:rgb(49, 107, 27);">E</span>enviroment
                        </p>
                    </div>
                    <div class="item">
                        <p>
                        <span style="font-weight:bold;color:rgb(94, 72, 158);">C</span>reative
                        </p>
                    </div>
                    <div class="item">
                        <p>
                        <span style="font-weight:bold;color:rgb(52, 123, 191);">T</span>rust
                        </p>
                    </div>
                </div>
            </div>
            <!-- Core Full Text -->
            <!-- subtitle Core Value -->
            <div class="subtitle">
                <p>
                Expanding our commitment to integrity, innovation, collaboration, 
                and continuous improvement.
                </p>
            </div>
        </div>
        <!-- Core Value End -->
         
        <!-- Team Member Start -->
        <div class="team-member">
            <!-- Title Line -->
            <div class="wrapper">
                <div class="title">
                    <p>Team Member</p>
                </div>
                <div class="subtitle">
                    <p">Collaboration fuels our success, turning shared visions into remarkable achievements.</p>
                </div>
            </div>
            <!-- Title Line -->
            <!-- List Team Member -->
            <div class="list">
                <div class="row">
                    <!-- photo 1 ceo -->
                    <div class="item">
                        <div class="item-wrap">
                            <div class="box">
                                <div class="wrap">
                                    <div class="item">
                                        <div class="foto-box">
                                            <img src="../assets/images/tm_mr_son.svg">
                                        </div>
                                    </div>
                                    <div class="text-item">
                                        <div class="title">
                                            <p>Mr. Son</p>
                                        </div>
                                        <div class="subtitle">
                                            <p>President of Indonesia Branch office</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- photo 1 ceo -->
                    <!-- photo 2 general -->
                    <div class="item">
                        <div class="item-wrap">
                            <div class="box">
                                <div class="wrap">
                                    <div class="item">
                                        <div class="foto-box">
                                            <img src="../assets/images/tm_miss_kim.svg">
                                        </div>
                                    </div>
                                    <div class="text-item">
                                        <div class="title">
                                            <p>Ms. Kim</p>
                                        </div>
                                        <div class="subtitle">
                                            <p>Deputy General Manager</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- photo 2 general -->
                </div>
                <!-- line 2 -->
                <div class="row">
                    <!-- photo 1 galang -->
                    <div class="item">
                        <div class="item-wrap">
                            <div class="box">
                                <div class="wrap">
                                    <div class="item">
                                        <div class="foto-box">
                                            <img src="../assets/images/tm_galang.svg">
                                        </div>
                                    </div>
                                    <div class="text-item">
                                        <div class="title">
                                            <p>Galang</p>
                                        </div>
                                        <div class="subtitle">
                                            <p>IT Support</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- photo 1 galang -->
                    <!-- photo 2 fikri -->
                    <div class="item">
                        <div class="item-wrap">
                            <div class="box">
                                <div class="wrap">
                                    <div class="item">
                                        <div class="foto-box">
                                            <img src="../assets/images/tm_fikri.svg">
                                        </div>
                                    </div>
                                    <div class="text-item">
                                        <div class="title">
                                            <p>Fikri</p>
                                        </div>
                                        <div style="subtitle">
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
                     <div class="item">
                        <div class="item-wrap">
                            <div class="box">
                                <div class="wrap">
                                    <div class="item">
                                        <div class="foto-box">
                                            <img src="../assets/images/tm_musa.svg">
                                        </div>
                                    </div>
                                    <div class="text-item">
                                        <div class="title">
                                            <p>Musa</p>
                                        </div>
                                        <div class="subtitle">
                                            <p>IT Developer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- photo 3 Musa -->
                </div>
                <!-- line 3 -->
                <div class="row">
                    <!-- photo 1 fiqih -->
                    <div class="item">
                        <div class="item-wrap">
                            <div class="box">
                                <div class="wrap">
                                    <div class="item">
                                        <div class="foto-box">
                                            <img src="../assets/images/tm_fiqih.svg">
                                        </div>
                                    </div>
                                    <div class="text-item">
                                        <div class="title">
                                            <p>Fiqih</p>
                                        </div>
                                        <div class="subtitle">
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
                    <div class="item">
                        <div class="item-wrap">
                            <div class="box">
                                <div class="wrap">
                                    <div class="item">
                                        <div class="foto-box">
                                            <img src="../assets/images/tm_yuda.svg">
                                        </div>
                                    </div>
                                    <div class="text-item">
                                        <div class="title">
                                            <p>Yudana</p>
                                        </div>
                                        <div class="subtitle">
                                            <p>IT Developer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- photo 2 yuda -->
                     <!-- photo 3 sidik -->
                     <div class="item">
                        <div class="item-wrap">
                            <div class="box">
                                <div class="wrap">
                                    <div class="item">
                                        <div class="foto-box">
                                            <img src="../assets/images/tm_sidik.svg">
                                        </div>
                                    </div>
                                    <div class="text-item">
                                        <div class="title">
                                            <p>Sidik</p>
                                        </div>
                                        <div class="subtitle">
                                            <p>IT Support</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- photo 3 sidik -->
                </div>
                <!-- line 4 -->
                <div class="row">
                    <!-- photo 1 ira -->
                    <div class="item">
                        <div class="item-wrap">
                            <div class="box">
                                <div class="wrap">
                                    <div class="item">
                                        <div class="foto-box">
                                            <img src="../assets/images/tm_ira.svg">
                                        </div>
                                    </div>
                                    <div class="text-item">
                                        <div class="title">
                                            <p>Ira</p>
                                        </div>
                                        <div class="subtitle">
                                            <p style="
                                            text-align:center">Business Assistant</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- photo 1 ira -->
                    <!-- photo 2 dwi -->
                    <div class="item">
                        <div class="item-wrap">
                            <div class="box">
                                <div class="wrap">
                                    <div class="item">
                                        <div class="foto-box">
                                            <img src="../assets/images/tm_dwi.svg">
                                        </div>
                                    </div>
                                    <div class="text-item">
                                        <div class="title">
                                            <p>Dwi</p>
                                        </div>
                                        <div class="subtitle">
                                            <p>Business Assistant</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- photo 2 dwi -->
                     <!-- photo 3 erika -->
                     <div class="item">
                        <div class="item-wrap">
                            <div class="box">
                                <div class="wrap">
                                    <div class="item">
                                        <div class="foto-box">
                                            <img src="../assets/images/tm_erika.svg">
                                        </div>
                                    </div>
                                    <div class="text-item">
                                        <div class="title">
                                            <p>Erika</p>
                                        </div>
                                        <div class="subtitle">
                                            <p>Accounting Assistant</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- photo 3 erika -->
                </div>
                <!-- line 5 -->
                <div class="row">
                    <!-- photo 1 chika -->
                    <div class="item">
                        <div class="item-wrap">
                            <div class="box">
                                <div class="wrap">
                                    <div class="item">
                                        <div class="foto-box">
                                            <img src="../assets/images/tm_chika.svg">
                                        </div>
                                    </div>
                                    <div class="text-item">
                                        <div class="title">
                                            <p>Chika</p>
                                        </div>
                                        <div class="subtitle">
                                            <p style="
                                            text-align:center">Content Creator</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- photo 1 chika -->
                    <!-- photo 2 elvira -->
                    <div class="item">
                        <div class="item-wrap">
                            <div class="box">
                                <div class="wrap">
                                    <div class="item">
                                        <div class="foto-box">
                                            <img src="../assets/images/tm_elvira.svg">
                                        </div>
                                    </div>
                                    <div class="text-item">
                                        <div class="title">
                                            <p>Elvira</p>
                                        </div>
                                        <div class="subtitle">
                                            <p>Business Assistant</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- photo 2 Elvira -->
                     <!-- photo 3 kibo -->
                     <div class="item">
                        <div class="item-wrap">
                            <div class="box">
                                <div class="wrap">
                                    <div class="item">
                                        <div class="foto-box">
                                            <img src="../assets/images/tm_kibo.svg">
                                        </div>
                                    </div>
                                    <div class="text-item">
                                        <div class="title">
                                            <p>Risky</p>
                                        </div>
                                        <div class="subtitle">
                                            <p>Videographer & Editor</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- photo 3 kibo -->
                </div>
            </div>   
        </div>
        {{-- Team Member end --}}

        {{-- Our office start --}}
        <div class="our-office">
            <div class="wrapper">
                <section class="wrap-content">
                    <marquee>
                    <ul class="list-content">
                        <li class="contents">
                            <img src="../assets/images/office_foto_1.svg"/>
                        </li>
                        <li class="contents">
                            <img src="../assets/images/office_foto_2.svg"/>
                        </li>
                        <li class="contents">
                            <img src="../assets/images/office_foto_3.svg"/>
                        </li>
                        <li class="contents">
                            <img src="../assets/images/office_foto_4.svg"/>
                        </li>
                        <li class="contents">
                            <img src="../assets/images/office_foto_5.svg"/>
                        </li>
                    </ul>
                </marquee>
                </section>
            </div>
        </div>
        {{-- Our office end --}}
        <div class="office-maps">
            <div class="box">
                <div class="img-wrapper">
                    <img src="../assets/images/office_loc_map.svg"/>
                </div>
            </div>
        </div>
    </div>
   
    @include('web/frontend/pages/en/component/footer')

</body>

</html>