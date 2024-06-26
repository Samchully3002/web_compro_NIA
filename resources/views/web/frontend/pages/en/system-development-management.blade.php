<!DOCTYPE html>
<html lang="en">

    @include('web/frontend/pages/en/component/head')
    <link rel="stylesheet" href="assets/css/business.css"/>
    </head>

    <body>
    @include('web/frontend/pages/en/component/header')
        <!-- <div data-include="component/header"></div> -->

        <div class="page page-scroll page-in">
            <!-- bg-wrapper start -->
            <div class="bg-wrapper bisnis3">
                <div class="text-box">
                    <h1>System Development & Management</h1>
                    <p>We undertake all stages of system development and platform planning, design, development, SQA, and maintenance with differentiated technical expertise and accumulated know-how, providing new technologies to meet the requirements of both domestic and global customers.</p>
                </div>
            </div>
            <!-- bg-wrapper end -->

            <!-- section-wrapper start -->
            <div class="product-wrapper">
                <div class="colls-wrapper">
                    <button type="button" class="collapsible">
                        <span>01</span>
                        <span>Ticketing & Reservation</span>
                    </button>
                    <div class="content">
                        <div class="text-wrapper">
                            <p>We provide optimized solutions tailored to various device environments such as PC, mobile, and kiosks, as well as diverse business contexts including transportation, events, exhibitions, restaurants, culture, and arts. Experience our one-stop solution for differentiated reservation, cancellation, payment, and ticketing.</p>
                        </div>
                        <div class="img-box">
                            <img src="../assets/images/bs-ticketing1.svg"/>
                            <img src="../assets/images/bs-ticketing2.svg"/>
                            <img src="../assets/images/bs-ticketing3.svg"/>
                        </div>
                        <div class="card-wrapper">
                            <div class="card">
                                <img width="18%" src="../assets/images/icon/ic_samchulypay1.svg"/>
                                <span>Reservation</span>
                                <p>
                                    Easy bus reservation no matter how far the distance is. Reservations can be made online through our ticketing.
                                </p>
                            </div>
                            <div class="card">
                                <img width="18%" src="../assets/images/icon/ic_samchulypay2.svg"/>
                                <span>Kiosk Ticketing</span>
                                <p>
                                    Maximize the operational efficiency of ticket issuance, such as purchasing tickets and printing advance tickets.
                                </p>
                            </div>
                            <div class="card">
                                <img width="18%" src="../assets/images/icon/ic_samchulypay3.svg"/>
                                <span>Settlement Service</span>
                                <p>
                                    Settlement reports compiled every hour can be checked anywhere as long as you have an online device.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="colls-wrapper">
                    <button type="button" class="collapsible">
                        <span>02</span>
                        <span>Payment Integration System</span>
                    </button>
                    <div class="content">
                        <div class="text-wrapper">
                            <p>We support various payment methods including credit cards, QR codes, and mobile payments, offering flexible options for both online and offline transactions, as well as kiosk payments. With our robust and reliable management system, you can easily and quickly process orders, approvals, cancellations, changes, and settlements, while also receiving high-quality settlement reports.</p>
                        </div>
                        <div class="img-box">
                            <img src="../assets/images/bs-payment1.svg"/>
                            <img src="../assets/images/bs-payment2.svg"/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- section-wrapper end -->
        </div>

        <!-- <div data-include="component/footer"></div> -->
        @include('web/frontend/pages/en/component/footer')
        <script>
            var coll = document.getElementsByClassName("collapsible");
            var i;

            for (i = 0; i < coll.length; i++) {
                coll[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var content = this.nextElementSibling;
                    if (content.style.display === "block") {
                    content.style.display = "none";
                    } else {
                    content.style.display = "block";
                    }
                });
            }
        </script>

    </body>
</html>
