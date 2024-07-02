<!DOCTYPE html>
<html lang="id">
    @include('web/frontend/pages/en/component/head')
    <link rel="stylesheet" href="assets/css/comunity.css"/>
</head>
<body>
@include('web/frontend/pages/en/component/header')

        <div class="page page-in">
            <div class="notice-wrapper">
                <div class="notice-details-title">
                    <p class="appear">Samchully Networks, 2023 New Year Opening Ceremony</p>
                    <span class="appear">Jan 2, 2023</span>
                    <img class="appear" src="../assets/images/notice1.jpg"/>
                </div>
                <div class="notice-details-content">
                    <p>
                        Samchully Networks (CEO Lee Jin-hyuk) held the opening ceremony in 2023 in the conference room on January 2.
                        <br><br>
                        In his New Year's speech, CEO Lim Jin-hyuk said, "Many difficulties and crises are expected to come before us in the new year, but I hope it will be a year that is as wise as a smart rabbit. In this era of rapidly changing business paradigms, we must become “Samchully (three thousand years)” people whose goal is to improve work skills and self-development throughout life. We must also establish a survival strategy with innovative ideas and a strong will for future development, as well as prepare and implement concrete practical steps to contribute to society and the international community through ESG management."
                        <br><br>
                        Meanwhile, before the opening ceremony, there was an employee appreciation event. Deputy Managers Lim Dong-hyuk from the Global Business Team and Park So-yoon from the Platform Development Team each received the best employee award given by Han Ji-hoon as head of the Service Operations Team.
                    </p>
                </div>
            </div>
            <div class="btn-nav-wrapper">
                <a class="prev-notice-btn" href="#">
                    <label>&#8249; Previous</label>
                    <label>Judul Berita Sebelumnya</label>
                    <label>tanggal berita Sebelumnya</label>
                </a>
                <a class="next-notice-btn" href="#">
                    <label>Next &#8250;</label>
                    <label>Judul Berita Selanjutnya</label>
                    <label>tanggal berita Selanjutnya</label>
                </a>
                {{-- //mobile button --}}
                <a class="prev-notice-btn-mobile" href="#">
                    <label>&#8249; Previous</label>
                </a>
                <a class="next-notice-btn-mobile" href="#">
                    <label>Next &#8250;</label>
                </a>
            </div>
            {{-- <div class="imx">
                    <div class="pagination">
                        <a href="#" class="arrow">&laquo;</a>
                        <a href="media.html" class="active">1</a>
                        <a href="media_page2.html">2</a>
                        <a href="media_page3.html">3</a>
                        <a href="#" class="arrow">&raquo;</a>
                    </div>
                </div> --}}
        </div>

        @include('web/frontend/pages/en/component/footer')

        <script>
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
