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
            <div class="bg-wrapper bisnis2">
                <div class="text-box">
                    <h1 class="appear">Digital Healthcare</h1>
                    <p class="appear">We provide reliable health solutions through optimized customer-personalized counseling by health care professionals that considers customer preferences, health conditions, underlying diseases, and medications being taken, as well as health care plan design using artificial intelligence (AI)-based big data.</p>
                </div>
            </div>
            <!-- bg-wrapper end -->

            <!-- section-wrapper start -->
            <div class="product-box">
                <div class="product-wrapper">
                    <div class="colls-wrapper">
                        <div class="wrap-collabsible">
                            <input id="collapsible2" class="toggle" type="checkbox" checked="">
                                <label for="collapsible2" class="lbl-toggle">
                                    <span>01</span>
                                    <span>Healthyhada</span>
                                    <span class="icon-right">&nbsp;</span>
                                </label>
                            <div class="collapsible-content">
                                <div class="content">
                                    <div class="text-wrapper">
                                        <p>We provide trustworthy health solutions through optimized customer-tailored consultations by healthcare professionals considering customer preferences, health status, underlying conditions, and medications, along with AI-based big data utilization for designing health functional food plans.</p>
                                    </div>
                                    <div class="img-box">
                                        <img src="../assets/images/bs-healthada1.svg"/>
                                        <img src="../assets/images/bs-healthada2.svg"/>
                                    </div>
                                    <div class="card-wrapper">
                                        <div class="card">
                                            <img width="18%" src="../assets/images/icon/ic_samchulypay1.svg"/>
                                            <span>Tailored Consultation</span>
                                            <p>
                                                Personalized Nutritional Counseling Consult with experts on your specific nutritional needs and improve your health with the right nutrition!
                                            </p>
                                        </div>
                                        <div class="card">
                                            <img width="18%" src="../assets/images/icon/ic_samchulypay2.svg"/>
                                            <span>Big Data</span>
                                            <p>
                                                AI trained on survey data from over 4,000 experts. Customized recommendations tailored to our customers.
                                            </p>
                                        </div>
                                        <div class="card">
                                            <img width="18%" src="../assets/images/icon/ic_samchulypay3.svg"/>
                                            <span>Experts</span>
                                            <p>
                                                Consult with Pharmacists, Dietitians, and Exercise Prescribers. Experience monthly changes with our health experts!
                                            </p>
                                        </div>
                                    </div>
                            </div>
                            {{-- </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- section-wrapper end -->
        </div>

        <!-- <div data-include="component/footer"></div> -->
        @include('web/frontend/pages/en/component/footer')
        <script>
            // var coll = document.getElementsByClassName("collapsible");
            // var i;

            // for (i = 0; i < coll.length; i++) {
            //     coll[i].addEventListener("click", function() {
            //         this.classList.toggle("active");
            //         var content = this.nextElementSibling;
            //         if (content.style.display === "block") {
            //         content.style.display = "none";
            //         } else {
            //         content.style.display = "block";
            //         }
            //     });
            // }
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
        </script>

    </body>
</html>
