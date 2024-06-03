<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="user-scalable=yes, initial-scale=1, maximum-scale=2, minimum-scale=1, width=device-width" />
    <title>NIA</title>
    <link rel="shortcut icon" href="../assets/img/favicon.ico">
    <link href="../assets/css/default.css" rel="stylesheet" />
    <link href="../assets/css/outline.css" rel="stylesheet" />
    <link href="../assets/css/page.css" rel="stylesheet" />
    <link href="../assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="../assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
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
    @include('in/component/header')

    <div class="page page-in" id="page-introduction">

        <!-- bg-wrapper start -->
        <div class="bg-wrapper">
            <div class="text-box">
                <span>Connect people with technology</span>
            </div>
        </div>
        <!-- bg-wrapper end -->

        <!-- about-wrapper start -->
        <div class="about-wrapper">
            <div class="row">
                <div class="imx">
                    <h3><span>Company Profile</span></h3>
                    <img src='../assets/img/logo_svg.svg' />
                    <P>
                        <b>Networks Indonesia Aku (NIA)</b> adalah perusahaan yang menyediakan layanan, solusi, dan produk digital inovasi teknologi informasi dengan spesialisasi di bidang ITS <i>(Intelligent Transport System)</i>. <b>NIA</b> terbentuk pada 10 Desember 2021 yang merupakan anak perusahaan dari <b>Samchully Networks</b> di Korea Selatan yang berdiri sejak tahun 2014.<br /><br /> Kami menciptakan produk digital yang unggul dan menghadirkan inovasi baru melalui sistem dan teknologi yang kami kembangkan sendiri dari Korea. Dengan mengusung teknologi dan sistem canggih dari Korea, <b>NIA</b> berkomitmen untuk selalu menghadirkan kualitas dalam setiap inovasinya.<br /><br /> <b>NIA</b> berpartisipasi untuk membangun dan memajukan sistem transportasi, UMKM dan perusahaan startup di Indonesia, menciptakan berbagai produk unggulan dan menghadirkan visi baru melalui strategi yang sistematis dengan teknologi yang telah terbukti.
                    </P>
                </div>
            </div>
        </div>
        <!-- about-wrapper end -->


        <!-- vision-wrapper start -->
        <div class="vision-wrapper">
            <div class="row">
                <div class="imx">

                    <h3>Vision & Mission</h3>

                    <h4>Visi NIA</h4>

                    <p>
                        Menjadikan perusahaan IT terkemuka di Indonesia dengan fokus mengedepankan produk dan layanan jasa yang ramah lingkungan. Menciptakan teknologi untuk kemajuan transportasi dan infrastruktur, teknologi pada bidang kesehatan, pendidikan, logistik, <i>smart factory</i>, <i>online payment system</i>, dan pengembannya.
                    </p>

                    <h4>Misi NIA</h4>

                    <ul>
                        <li>
                            <span style="margin-top: 12px;">1</span>
                            <div>
                                Menyediakan teknologi berbasis komputer dan digital maupun pengembangan perangkat keras dan perangkat lunak dengan fokus pada solusi yang inovatif dan kreatif untuk memenuhi kebutuhan pelanggan.
                            </div>
                        </li>

                        <li>
                            <span style="margin-top: 26px;">2</span>
                            <div>
                                Berfokus pada inovasi, layanan berkualitas tinggi, dan solusi teknologi yang canggih, kami bertekad untuk memberikan kontribusi yang berarti dalam memajukan dunia teknologi informasi. Melalui komitmen ini, kami berusaha untuk membangun hubungan jangka panjang yang kuat dengan pelanggan, menjadi mitra yang dapat diandalkan, dan terus menjadi penyedia solusi IT terdepan.
                            </div>
                        </li>

                        <li>
                            <span>3</span>
                            <div>
                                Berkomitmen untuk menjadi pionir dalam mengakselerasi pertumbuhan industri IT di Indonesia dan mewujudkan masyarakat yang lebih terkoneksi dan berdaya.
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- vision-wrapper end -->


        <!-- core-wrapper start -->
        <div class="core-wrapper">
            <div class="row">
                <div class="imx">

                    <h3>Core Value</h3>

                    <h4 class="core-value">
                        <img src="../assets/img/icon/icon-quotes01.svg" />
                        <span class="letter-c1">C</span>
                        <span class="letter-o">O</span>
                        <span class="letter-n1">N</span>
                        <span class="letter-n2">N</span>
                        <span class="letter-e">E</span>
                        <span class="letter-c2">C</span>
                        <span class="letter-t">T</span>
                        <img src="../assets/img/icon/icon-quotes02.svg" />
                    </h4>

                    <div class="flex-box">
                        <div class="item">
                            <span class="color1">C</span> 
                            <em>Communication</em>       
                        </div>

                        <div class="item">
                            <span class="color2">O</span> 
                            <em>Opportunity</em>       
                        </div>

                        <div class="item">
                            <span class="color3">N</span> 
                            <em>Necessary</em>       
                        </div>

                    </div>

                    <div class="flex-box">
                        <div class="item">
                            <span class="color4">N</span> 
                            <em>New</em>       
                        </div>

                        <div class="item">
                            <span class="color5">E</span> 
                            <em>Environment</em>       
                        </div>

                        <div class="item">
                            <span class="color6">C</span> 
                            <em>Creative</em>       
                        </div>

                        <div class="item">
                            <span class="color7">T</span> 
                            <em>Trust</em>       
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- core-wrapper end -->

        <!-- line-wrapper start -->
        <div class="line-wrapper">
            <div class="row">
                <div class="imx">

                    <h3>Management Philosophy</h3>

                    <div class="block-box">
                        <img src="../assets/img/icon/icon-block01.svg" />
                        <h4>Technology, Nature, Together</h4>
                        <img src="../assets/img/icon/icon-block02.svg" />
                    </div>

                    <p>
                        NIA membawa teknologi dan bumi untuk dapat saling berdampingan melalui inovasi dan komitmen yang tinggi untuk memberikan perubahan terhadap lingkungan dan kehidupan yang lebih baik.
                    </p>

                </div>
            </div>
        </div>
        <!-- line-wrapper end -->

         <!-- vision-wrapper start -->
         <div class="vision-wrapper our-history">
            <div class="row">
                <div class="imx">

                    <h3>Our History</h3>

                    <div class="history-box">
                        <ul class="item-box">
                            <li class="item">
                                <img src='../assets/img/headquarters-img04.jpg' />
                                <span>2023</span>
                                <ul>
                                    <li>
                                        <em>11</em>
                                        <div>
                                            <p>Menerima penghargaan dari <i>Ministry of the Interior and Safety</i> Korea Selatan sebagai pelaksana ODA terbaik 2023</p>
                                        </div>
                                    </li>
                    
                                    <li>
                                        <em>10</em>
                                        <div>
                                            <p>Menyelesaikan "Proyek Penyusunan <i>Master Plan</i> dan Operasi Percontohan Modernisasi Terminal Bus di Indonesia"</p>
                                        </div>
                                    </li>
                    
                                    <li>
                                        <em>09</em>
                                        <div>
                                            <p>Menyelenggarakan <i>Opening Ceremony</i> "Proyek Penyusunan <i>Master Plan</i> dan Operasi Percontohan Modernisasi Terminal Bus di Indonesia"</p>
                                        </div>
                                    </li>
                                    <li>
                                        <em>07</em>
                                        <div>
                                            <p>Melaksanakan pelatihan undangan kedua di Korea untuk proyek modernisasi terminal bus Indonesia</p>
                                            <p>Mengunjungi kota Seoul, Sejong (kompleks pemerintahan), Ulsan, Jeonju, Busan (kompleks terminal bus), dll</p>
                                        </div>
                                    </li>
                                    <li>
                                        <em>04</em>
                                        <div>
                                            <p>Mulai Operasi Percontohan di kedua terminal uji coba (Kp. Rambutan dan Leuwipanjang)</p>
                                            <p>Mulai mengembangkan platform transportasi kargo di Indonesia</p>
                                            <p>Melakukan survei lapangan untuk perluasan seluruh Terminal Tipe A di Indonesia</p>
                                        </div>
                                    </li>
                                    <li>
                                        <em>02</em>
                                        <div>
                                            <p>Menyelenggarakan pelatihan masing - masing terminal untuk Operasi Percontohan Modernisasi Terminal Bus di Indonesia</p>
                                        </div>
                                    </li>
                                    <li>
                                        <em>01</em>
                                        <div>
                                            <p>"Meluncurkan “Proyek Penyusunan <i>Master Plan</i> dan Operasi Percontohan Modernisasi Terminal Bus di Indonesia” di tahun ketiga</p>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                    
                            <li class="item">
                                <span>2022</span>
                                <ul>
                                    <li>
                                        <em>12</em>
                                        <div>
                                            <p>Menyelesaikan "Proyek Penyusunan Master Plan dan Operasi Percontohan Modernisasi Terminal Bus di Indonesia" di tahun kedua</p>
                                            <p>Menyelenggarakan seminar untuk promosi dan penyebaran sistem modernisasi terminal bus Indonesia (Novotel Semarang)</p>
                                        </div>
                                    </li>
                    
                                    <li>
                                        <em>11</em>
                                        <div>
                                            <p>Melaksanakan pelatihan undangan pertama di Korea untuk proyek modernisasi terminal bus Indonesia</p>
                                            <p>Mengunjungi kota Seoul, Sejong (kompleks pemerintahan), Daejeon (kompleks terminal bus), dll</p>
                                        </div>
                                    </li>
                    
                                    <li>
                                        <em>01</em>
                                        <div>
                                            <p>Meluncurkan "Proyek Penyusunan <i>Master Plan</i> dan Operasi Percontohan Modernisasi Terminal Bus di Indonesia" di tahun kedua</p>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                    
                            <li class="item">
                                <img src='../assets/img/headquarters-img05.jpg' />
                                <span>2021</span>
                                <ul>
                                    <li>
                                        <em>12</em>
                                        <div>
                                            <p>Menyelesaikan "Proyek Penyusunan <i>Master Plan</i> dan Operasi Percontohan Modernisasi Terminal Bus di Indonesia" di tahun pertama</p>
                                            <p>Mendirikan perusahaan cabang di Indonesia (Jakarta)</p>
                                        </div>
                                    </li>
                    
                                    <li>
                                        <em>08</em>
                                        <div>
                                            <p>Memprakarsai pengembangan <i>'Healthyhada'</i>, <i>"Health Care"</i> platform perawatan kesehatan kecerdasan buatan (AI)</p>
                                        </div>
                                    </li>
                    
                                    <li>
                                        <em>04</em>
                                        <div>
                                            <p>Menerima tugas untuk "Proyek Penyusunan <i>Master Plan</i> dan Operasi Percontohan Modernisasi Terminal Bus di Indonesia"</p>
                                            <p>(ODA, Kementerian Pertanahan, Infrastruktur dan Transportasi)</p>
                                            <p>Inspeksi dan investigasi lokasi terminal percontohan Indonesia (masih dalam tahap proses)</p>
                                        </div>
                                    </li>
                    
                                    <li>
                                        <em>02</em>
                                        <div>
                                            <p>Meluncurkan 'Olligo', platform transportasi di sektor konstruksi</p>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                    
                            <li class="item">
                                <span>2020</span>
                                <ul>
                                    <li>
                                        <em>12</em>
                                        <div>
                                            <p>Terpilih sebagai <i>"Small Giants"</i> oleh Kementerian Tenaga Kerja</p>
                                            <p>Akuisisi bisnis konstruksi luar negeri (teknik konstruksi/bisnis konstruksi informasi dan komunikasi)</p>
                                        </div>
                                    </li>
                    
                                    <li>
                                        <em>11</em>
                                        <div>
                                            <p>Pengembangan 'Olligo', platform transportasi di sektor konstruksi</p>
                                            <p>Meluncurkan "lingkungan 24 jam", sistem transportasi untuk melacak kendaraan limbah di bidang konstruksi</p>
                                        </div>
                                    </li>
                    
                                    <li>
                                        <em>08</em>
                                        <div>
                                            <p>Membuka cabang di Jeju</p>
                                            <p>Inspeksi dan investigasi di 100 terminal bus di Indonesia</p>
                                        </div>
                                    </li>
                    
                                    <li>
                                        <em>03</em>
                                        <div>
                                            <p>Konstruksi halte dan terminal bus Kamboja Phnom Penh, studi kelayakan BIS <i>(Bus Information System)</i></p>
                                        </div>
                                    </li>
                    
                                </ul>
                            </li>
                    
                            <li class="item">
                                <span>2019</span>
                                <ul>
                                    <li>
                                        <em>12</em>
                                        <div>
                                            <p>Terdaftar sebagai perusahaan modal ventura KOVA (No. 20190729-42348) / Memperoleh sertifikasi Main Biz</p>
                                            <p>Memperoleh paten: Sistem Pengiriman Otomatis (Nomor Paten: 10-2038395)</p>
                                        </div>
                                    </li>
                    
                                    <li>
                                        <em>11</em>
                                        <div>
                                            <p>Aplikasi paten untuk lokasi berbasis solusi dalam berbagi informasi</p>
                                            <p>Pengembangan dan peluncuran platform Samchully PAY (komersialisasi)</p>
                                        </div>
                                    </li>
                    
                                    <li>
                                        <em>09</em>
                                        <div>
                                            <p>Verifikasi Studi Kelayakan ITS Ulaanbaatar Mongolia dan Studi Kelayakan Terminal Kompleks</p>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                    
                            <li class="item">
                                <img src='../assets/img/headquarters-img06.jpg' />
                                <span>2018</span>
                                <ul>
                                    <li>
                                        <em>11</em>
                                        <div>
                                            <p>Mendirikan lembaga penelitian yang berafiliasi dengan perusahaan lain (Lembaga Penelitian Teknis No. 2018113469)</p>
                                        </div>
                                    </li>
                    
                                    <li>
                                        <em>05</em>
                                        <div>
                                            <p>Memperoleh ISO9001: 18-A-1004 IGC</p>
                                        </div>
                                    </li>
                    
                                    <li>
                                        <em>03</em>
                                        <div>
                                            <p>Desain dan pengembangan sistem penerbitan tiket berbasis <i>cloud</i></p>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                    
                            <li class="item">
                                <span>2017</span>
                                <ul>
                                    <li>
                                        <em>03</em>
                                        <div>
                                            <p>Membuka 25 cabang dan platform agensi transportasi nasional</p>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                    
                            <li class="item">
                                <span>2016</span>
                                <ul>
                                    <li>
                                        <em>12</em>
                                        <div>
                                            <p>Pengembangan dan pemeliharaan sistem tiket untuk kapal-kapal yang dipandu oleh Asosiasi Kapal Pesiar Nasional</p>
                                        </div>
                                    </li>
                    
                                    <li>
                                        <em>08</em>
                                        <div>
                                            <p>Pengembangan dan peluncuran platform transportasi cerdas terintegrasi (komersialisasi)</p>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                    
                            <li class="item">
                                <span>2015</span>
                                <ul>
                                    <li>
                                        <em>10</em>
                                        <div>
                                            <p>Desain dan pengembangan solusi dalam relai komunikasi nirkabel seluler (TRS) seperti KT dan KT Powertel</p>
                                        </div>
                                    </li>
                    
                                    <li>
                                        <em>06</em>
                                        <div>
                                            <p>Membuka dan mengoperasikan call center transportasi terintegrasi</p>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                    
                            <li class="item">
                                <span>2014</span>
                                <ul>
                                    <li>
                                        <em>10</em>
                                        <div>
                                            <p>Mendirikan Samchully Networks Co., Ltd. (Kantor Pusat, di Seoul, Korea)</p>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                    
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- vision-wrapper end -->


    </div>

    @include('in/component/footer')

</body>

</html>