<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="user-scalable=yes, initial-scale=1, maximum-scale=2, minimum-scale=1, width=device-width"
        />
        <title>Networks Indonesia Aku</title>
        <link rel="shortcut icon" href="../assets/img/favicon.ico" />
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
            $(document).ready(function () {
                let url = Number($(location).attr("href").split("?").pop());
                let h = $("#header-wrapper").height();
                let offSet =
                    $(".section")
                        .eq(url - 1)
                        .offset().top -
                    h -
                    10;
                $("html, body").animate({ scrollTop: offSet }, 1000);
            });
        </script>
        <script>
            $(document).ready(function () {
                $(".owl-carousel").owlCarousel({
                    items: 1,
                    loop: true,
                    autoplay: true,
                    dots: false,
                    nav: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                    navText: [
                        "<img src='../assets/img/icon/icon-nav-prev.svg'>",
                        "<img src='../assets/img/icon/icon-nav-next.svg'>",
                    ],
                });
            });
        </script>
    </head>

    <body>
    @include('web/frontend/pages/en/component/header')
        <!-- <div data-include="component/header"></div> -->

        <div class="page page-scroll page-in" id="page-business">
            <!-- bg-wrapper start -->
            <div class="bg-wrapper bisnis3">
                <div class="text-box">
                    <h1>System Development & Management</h1>
                    <p>We undertake all stages of system development and platform planning, design, development, SQA, and maintenance with differentiated technical expertise and accumulated know-how, providing new technologies to meet the requirements of both domestic and global customers.</p>
                </div>
            </div>
            <!-- bg-wrapper end -->

            <!-- section-wrapper start -->
            <div class="section-wrapper">
                <div class="section content-collaps-expand">

                <div class="collapsible">
                    <input type="checkbox" id="toggle" checked>
                    <label for="toggle" class="toggle-label">
                        <span class="header-number">01</span>
                        <span class="header-title">Ticketing & Reservation</span>

                        <svg id="open-icon" class="header-icon" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.667 25H33.3337" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M18.7503 45.8334H31.2503C41.667 45.8334 45.8337 41.6668 45.8337 31.2501V18.7501C45.8337 8.33342 41.667 4.16675 31.2503 4.16675H18.7503C8.33366 4.16675 4.16699 8.33342 4.16699 18.7501V31.2501C4.16699 41.6668 8.33366 45.8334 18.7503 45.8334Z" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                        <svg id="closed-icon" class="header-icon" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.667 25H33.3337" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M25 33.3332V16.6665" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M18.7503 45.8332H31.2503C41.667 45.8332 45.8337 41.6665 45.8337 31.2498V18.7498C45.8337 8.33317 41.667 4.1665 31.2503 4.1665H18.7503C8.33366 4.1665 4.16699 8.33317 4.16699 18.7498V31.2498C4.16699 41.6665 8.33366 45.8332 18.7503 45.8332Z" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        
                    </label>
                    <div class="collapsible-content">
                        <p>Through an intelligent integrated logistics platform, we track logistics in real-time to locate positions, dispatch, movement status, shortest distances, and costs. With our proprietary solution enabling demand prediction and risk management through big data, we are building a leading record in the transportation platform industry.</p>
                        <div class="samchullypay">
                            <img src="../assets/images/samchullypay1.jpg"/>
                            <img src="../assets/images/samchullypay2.jpg"/>
                            <img src="../assets/images/samchullypay3.jpg"/>
                        </div>
                    </div>
                </div>

                <div class="collapsible">
                    <input type="checkbox" id="toggle" checked>
                    <label for="toggle" class="toggle-label">
                        <span class="header-number">02</span>
                        <span class="header-title">Payment Integration System</span>

                        <svg id="open-icon" class="header-icon" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.667 25H33.3337" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M18.7503 45.8334H31.2503C41.667 45.8334 45.8337 41.6668 45.8337 31.2501V18.7501C45.8337 8.33342 41.667 4.16675 31.2503 4.16675H18.7503C8.33366 4.16675 4.16699 8.33342 4.16699 18.7501V31.2501C4.16699 41.6668 8.33366 45.8334 18.7503 45.8334Z" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                        <svg id="closed-icon" class="header-icon" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.667 25H33.3337" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M25 33.3332V16.6665" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M18.7503 45.8332H31.2503C41.667 45.8332 45.8337 41.6665 45.8337 31.2498V18.7498C45.8337 8.33317 41.667 4.1665 31.2503 4.1665H18.7503C8.33366 4.1665 4.16699 8.33317 4.16699 18.7498V31.2498C4.16699 41.6665 8.33366 45.8332 18.7503 45.8332Z" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        
                    </label>
                    <div class="collapsible-content">
                        <p>Through an intelligent integrated logistics platform, we track logistics in real-time to locate positions, dispatch, movement status, shortest distances, and costs. With our proprietary solution enabling demand prediction and risk management through big data, we are building a leading record in the transportation platform industry.</p>
                        <p>Anda bisa menambahkan lebih banyak elemen di sini.</p>
                    </div>
                </div>

                </div>
            </div>
            <!-- section-wrapper end -->
        </div>

        <!-- <div data-include="component/footer"></div> -->
        @include('web/frontend/pages/en/component/footer')
        
    </body>
</html>
