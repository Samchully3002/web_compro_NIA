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
                    <h1 class="appear">System Development & Management</h1>
                    <p class="appear">We undertake all stages of system development and platform planning, design, development, SQA, and maintenance with differentiated technical expertise and accumulated know-how, providing new technologies to meet the requirements of both domestic and global customers.</p>
                </div>
            </div>
            <!-- bg-wrapper end -->

            <!-- section-wrapper start -->
          <div class="product-box">
            <div class="product-wrapper">

                <div class="colls-wrapper">
                    <div class="wrap-collabsible">
                        <input id="collapsible" class="toggle" type="checkbox" checked="checked">
                        <label for="collapsible" class="lbl-toggle">
                            <span>01</span>
                            <span>Ticketing & Reservation</span>
                            <span class="icon-right">&nbsp;</span>
                        </label>
                        <div class="collapsible-content">
                            <div class="content">
                                <div class="text-wrapper">
                                    <p>We provide optimized solutions tailored to various device environments such as PC, mobile, and kiosks, as well as diverse business contexts including transportation, events, exhibitions, restaurants, culture, and arts. Experience our one-stop solution for differentiated reservation, cancellation, payment, and ticketing.</p>
                                </div>
                                <div class="img-box1">
                                    <img src="../assets/images/bs-ticketing1.svg"/>
                                    <img src="../assets/images/bs-ticketing2.svg"/>
                                    <img src="../assets/images/bs-ticketing3.svg"/>
                                </div>
                                <div class="img-box-mobile">

                                    <button class="btn_prev_img" onclick="plusDivs(-1)">&#8249;</button>

                                    <img class="mySlides" src="../assets/images/bs-ticketing1.svg"/>
                                    <img class="mySlides" src="../assets/images/bs-ticketing2.svg"/>
                                    <img class="mySlides" src="../assets/images/bs-ticketing3.svg"/>

                                    <button class="btn_next_img" onclick="plusDivs(1)">&#8250;</button>

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
                    </div>
                </div>

                <div class="colls-wrapper">
                    <div class="wrap-collabsible">
                        <input id="collapsible2" class="toggle" type="checkbox">
                        <label for="collapsible2" class="lbl-toggle">
                            <span>02</span>
                            <span>Payment Integration System</span>
                            <span class="icon-right">&nbsp;</span>
                        </label>
                        <div class="collapsible-content">
                            <div class="content">
                                <div class="text-wrapper">
                                    <p>We support various payment methods including credit cards, QR codes, and mobile payments, offering flexible options for both online and offline transactions, as well as kiosk payments. With our robust and reliable management system, you can easily and quickly process orders, approvals, cancellations, changes, and settlements, while also receiving high-quality settlement reports.</p>
                                </div>
                                <div class="img-box1">
                                    <img src="../assets/images/bs-payment1.svg"/>
                                    <img src="../assets/images/bs-payment2.svg"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- section-wrapper end -->
        </div>
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

            document.addEventListener('DOMContentLoaded', function() {
                const appearElements = document.querySelectorAll('.appear');

                function appearOnScroll() {
                    appearElements.forEach((element, index) => {
                        // Jika elemen sudah memiliki class 'active', abaikan
                        if (element.classList.contains('active')) {
                            return;
                        }

                        if (isElementInViewport(element)) {
                            setTimeout(() => {
                                element.classList.add('active');
                            }, index * 200); // Delay munculnya setiap elemen
                        } else {
                            // Hapus class 'active' saat elemen keluar dari viewport
                            element.classList.remove('active');
                        }
                    });
                }

                function isElementInViewport(el) {
                    const rect = el.getBoundingClientRect();
                    return (
                        rect.top >= 0 &&
                        rect.left >= 0 &&
                        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                    );
                }

                // Handler untuk event scroll
                window.addEventListener('scroll', appearOnScroll);

                // Handler untuk event resize (jika ada perubahan ukuran viewport)
                window.addEventListener('resize', appearOnScroll);

                // Panggil sekali ketika halaman dimuat (jika elemen sudah ada di viewport pada awalnya)
                appearOnScroll();
            });

            var slideIndex = 1;
            showDivs(slideIndex);

            function plusDivs(n) {
            showDivs(slideIndex += n);
            }

            function showDivs(n) {
            var i;
            var x1 = document.getElementsByClassName("mySlides");
            if (n > x1.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x1.length}
            for (i = 0; i < x1.length; i++) {
                x1[i].style.display = "none";
            }
            x1[slideIndex-1].style.display = "block";
            }
        </script>

    </body>
</html>
