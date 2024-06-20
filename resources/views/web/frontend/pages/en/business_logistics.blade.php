<!DOCTYPE html>
<html lang="id">
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
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap"
            rel="stylesheet"
        />
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
    </head>

    <body>
        <div data-include="component/header"></div>

        <div class="page page-scroll page-in" id="page-business">
            <!-- bg-wrapper start -->
            <div class="bg-wrapper">
                <div class="text-box">
                    <span>Make the world more creative</span>
                    <h3>Business Portfolio</h3>
                </div>
            </div>
            <!-- bg-wrapper end -->

            <!-- section-wrapper start -->
            <div class="section-wrapper">
                <div class="section">
                    <div class="row active">
                        <div class="imx">
                            <div class="btn-box clear">
                                <a class="active">Mobility <br />Technology</a>
                                <a>Ticketing System <br />and Reservation</a>
                                <a>Payment <br />System</a>
                                <a>IT Service <br />Management</a>
                                <a>Logistics and <br />Delivery System</a>
                                <a>Live Streaming <br />Platform</a>
                            </div>
                        </div>
                    </div>

                    <div class="flex-box" id="one">
                        <img src="../assets/img/business-img02.jpg" />
                        <div class="text-box">
                            <h3>Mobility<br />Technology</h3>
                            <span>01</span>
                            <p>
                                Melalui platform transportasi terintegrasi
                                cerdas, kami mengumpulkan <i>Big Data</i> dari
                                pelacakan lokasi <i>real-time</i>, pengendalian
                                lalu lintas, kendaraan, dan perhitungan jarak
                                serta biaya. Solusi kami dapat memprediksi
                                permintaan, mengelola risiko, dan merespons
                                dengan menggunakan <i>Big Data</i>.
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="imx">
                            <h4>Produk & Layanan Kami</h4>
                            <ul>
                                <li>
                                    <img
                                        src="../assets/img/business-img03.jpg"
                                    />
                                    <div>
                                        <em
                                            ><span>01</span>Mobility
                                            Technology</em
                                        >
                                        <h5>
                                            Pengembangan ITS<br />(Intelligent
                                            Transport System)
                                        </h5>
                                        <span>
                                            Dengan berbagai teknologi dan
                                            pengetahuan yang kami akumulasikan,
                                            kami merencanakan, mendesain, dan
                                            mengembangkan platform transportasi.
                                            Hal ini bertujuan untuk meningkatkan
                                            efisiensi dan stabilitas sistem
                                            transportasi, dengan menerapkan
                                            teknologi canggih seperti
                                            elektronika, informasi, dan
                                            komunikasi.
                                            <!--
                                        Menggunakan teknologi dan ilmu pengetahuan, kami membuat perencanaan dan desain dalam membangun dan mengembangkan platform transportasi, yang bertujuan untuk meningkatkan efisiensi dan stabilitas dalam sistem transportasi digital yang dibangun dengan menerapkan teknologi canggih dibidang elektronik, informasi dan komunikasi.-->
                                        </span>
                                    </div>
                                </li>

                                <li>
                                    <img
                                        src="../assets/img/business-img04.jpg"
                                    />
                                    <div>
                                        <h5>
                                            Teknologi transportasi dan
                                            komunikasi yang beragam dan kreatif
                                        </h5>
                                        <span>
                                            Kami memiliki teknologi
                                            <i>ICT</i> kelas dunia, termasuk
                                            <i
                                                >Intelligent Transport System
                                                (ITS)</i
                                            >
                                            yang mencakup solusi pemantauan
                                            untuk lokasi, logistik, penumpang,
                                            kendaraan, dan pengolahan
                                            <i>big data</i>.
                                        </span>
                                    </div>
                                </li>

                                <li>
                                    <img
                                        src="../assets/img/business-img05.jpg"
                                    />
                                    <div>
                                        <h5>
                                            Pendirian dan pengoperasian platform
                                            untuk transportasi, logistik, dan
                                            penumpang
                                        </h5>
                                        <span>
                                            Kami membangun platform optimal
                                            dengan menggabungkan akumulasi data
                                            penelitian lingkungan dan lalu
                                            lintas selama bertahun-tahun di
                                            Indonesia, dengan metode dan teknis
                                            Korea yang saat ini sedang
                                            dikembangkan dan dioperasikan.
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="section">
                    <div class="row active">
                        <div class="imx">
                            <div class="btn-box clear">
                                <a>Mobility <br />Technology</a>
                                <a class="active"
                                    >Ticketing System <br />and Reservation</a
                                >
                                <a>Payment <br />System</a>
                                <a>IT Service <br />Management</a>
                                <a>Logistics and <br />Delivery System</a>
                                <a>Live Streaming <br />Platform</a>
                            </div>
                        </div>
                    </div>

                    <div class="flex-box" id="two">
                        <img src="../assets/img/bus.png" />
                        <div class="text-box">
                            <h3>
                                Ticketing System<br />
                                and Reservation
                            </h3>
                            <span>02</span>
                            <p>
                                Produk dan layanan unggulan kami lainnya adalah
                                sistem pemesanan dan penjualan tiket. Melalui
                                solusi ini, kami menyediakan pengalaman
                                pemesanan yang efisien dan handal bagi
                                pelanggan. Dengan teknologi modern, layanan
                                tiket kami memberikan kemudahan dalam
                                merencanakan perjalanan serta menawarkan
                                fleksibilitas dalam pembelian tiket secara aman
                                dan nyaman.
                            </p>
                            <a
                                href="https://smartterminal.dephub.go.id/"
                                target="_blank"
                                class="more-btn"
                                >Smart Terminal</a
                            >
                        </div>
                    </div>

                    <div class="row">
                        <div class="imx">
                            <h4>Produk & Layanan Kami</h4>
                            <ul>
                                <li>
                                    <img
                                        src="../assets/img/business-img07.jpg"
                                    />
                                    <div>
                                        <em
                                            ><span>02</span>Ticketing System and
                                            Reservation</em
                                        >
                                        <h5>
                                            Laporan & statistik memberi Anda
                                            analitik bisnis penting terkini
                                        </h5>
                                        <span>
                                            Laporan dan statistik menyediakan
                                            informasi analitik bisnis terbaru
                                            yang penting bagi Anda. Dengan
                                            menggunakan data ini, Anda dapat
                                            memahami dengan lebih baik kinerja
                                            bisnis Anda dan membuat keputusan
                                            yang lebih tepat secara strategis.
                                        </span>
                                    </div>
                                </li>

                                <li>
                                    <img
                                        src="../assets/img/business_kiosk.jpg"
                                    />
                                    <div>
                                        <h5>
                                            Menyediakan reservasi melalui
                                            <i>vending machine(kiosk)</i> dan
                                            layanan konter
                                        </h5>
                                        <span>
                                            Kami menyediakan fasilitas reservasi
                                            melalui
                                            <i>vending machine(kiosk)</i> dan
                                            layanan konter. dan layanan konter.
                                            Dengan opsi ini, pelanggan dapat
                                            dengan mudah melakukan pemesanan
                                            layanan. Dan juga melalui
                                            <i>'emergency system'</i> di layanan
                                            konter, pelanggan dapat melakukan
                                            pemesanan layanan ketika terjadi
                                            gangguan internet atau eror.
                                            Fasilitas reservasi ini dirancang
                                            untuk memberikan kemudahan akses dan
                                            kenyamanan dalam melakukan
                                            transaksi, memastikan pengalaman
                                            pelanggan yang lancar dan efisien.
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="section">
                    <div class="row active">
                        <div class="imx">
                            <div class="btn-box clear">
                                <a>Mobility <br />Technology</a>
                                <a>Ticketing System <br />and Reservation</a>
                                <a class="active">Payment <br />System</a>
                                <a>IT Service <br />Management</a>
                                <a>Logistics and <br />Delivery System</a>
                                <a>Live Streaming <br />Platform</a>
                            </div>
                        </div>
                    </div>

                    <div class="flex-box" id="three">
                        <img src="../assets/img/business-img10.jpg" />
                        <div class="text-box">
                            <h3>Payment <br />System</h3>
                            <span>03</span>
                            <p>
                                Selanjutnya, kami menyediakan berbagai produk
                                dan layanan terkait sistem pembayaran. Produk
                                dan layanan ini dirancang untuk memenuhi
                                kebutuhan pelanggan dalam mengelola transaksi
                                keuangan dengan mudah dan aman. Kami berkomitmen
                                untuk memberikan solusi pembayaran yang efisien
                                dan handal, mendukung keberlanjutan bisnis dan
                                keamanan transaksi keuangan Anda.
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="imx">
                            <h4>Produk & Layanan Kami</h4>
                            <ul>
                                <li>
                                    <img
                                        src="../assets/img/business-img11.jpg"
                                    />
                                    <div>
                                        <em><span>03</span>Payment System</em>
                                        <h5>Metode pembayaran yang lengkap</h5>
                                        <span>
                                            Kami menyediakan beragam metode
                                            pembayaran yang lengkap untuk
                                            memudahkan pelanggan dalam melakukan
                                            transaksi. Dengan pilihan metode
                                            pembayaran yang beragam, kami
                                            berkomitmen memberikan fleksibilitas
                                            dan kemudahan bagi pelanggan untuk
                                            melakukan pembayaran sesuai dengan
                                            preferensi mereka, menjadikan
                                            pengalaman bertransaksi lebih nyaman
                                            dan efisien.
                                        </span>
                                    </div>
                                </li>

                                <li>
                                    <img
                                        src="../assets/img/business-img12.jpg"
                                    />
                                    <div>
                                        <h5>
                                            Memproses pengembalian dana,
                                            pelunasan, pembatalan, laporan, dll
                                        </h5>
                                        <span>
                                            Kami melakukan pengelolaan berbagai
                                            proses, seperti pemrosesan
                                            pengembalian dana, pelunasan,
                                            pembatalan, serta pembuatan laporan,
                                            untuk memastikan kelancaran, dan
                                            ketepatan dalam transaksi keuangan.
                                            Dengan fokus pada aspek ini, kami
                                            berkomitmen memberikan layanan yang
                                            efisien dan responsif, memenuhi
                                            kebutuhan dan kepuasan pelanggan
                                            dengan optimal.
                                        </span>
                                    </div>
                                </li>

                                <li>
                                    <img
                                        src="../assets/img/business-img13.jpg"
                                    />
                                    <div>
                                        <h5>
                                            Integrasi <i>API</i> yang mudah dan
                                            cepat
                                        </h5>
                                        <span>
                                            Kami menyediakan integrasi
                                            <i>API</i> yang sederhana dan cepat,
                                            memungkinkan sistem kami dengan
                                            mudah terhubung dengan berbagai
                                            platform dan aplikasi. Dengan opsi
                                            ini, pelanggan dapat dengan efisien
                                            menggabungkan fungsionalitas sistem
                                            kami dengan solusi lainnya,
                                            memberikan fleksibilitas yang
                                            optimal dalam pengelolaan data dan
                                            operasional.
                                        </span>
                                    </div>
                                </li>

                                <li>
                                    <img
                                        src="../assets/img/business-img14.jpg"
                                    />
                                    <div>
                                        <h5>
                                            Sistem transaksi yang aman dan dapat
                                            diandalkan
                                        </h5>
                                        <span>
                                            Kami menyediakan sistem transaksi
                                            yang aman dan dapat diandalkan.
                                            Dengan keamanan tingkat tinggi dan
                                            keterandalan yang terjamin,
                                            pelanggan dapat melakukan transaksi
                                            dengan keyakinan penuh. Sistem ini
                                            didesain untuk memberikan keamanan
                                            maksimal serta memastikan setiap
                                            transaksi berjalan dengan lancar dan
                                            efisien.
                                        </span>
                                    </div>
                                </li>

                                <li>
                                    <img
                                        src="../assets/img/business-img15.jpg"
                                    />
                                    <div>
                                        <h5>
                                            Catatan otomatis semua transaksi
                                            pembayaran
                                        </h5>
                                        <span>
                                            Proses pencatatan otomatis untuk
                                            setiap transaksi pembayaran serta
                                            memastikan keefisienan dan
                                            ketelitian dalam pelaporan keuangan.
                                            Dengan fitur ini, setiap transaksi
                                            pembayaran dicatat secara otomatis,
                                            memberikan kemudahan dalam
                                            pengelolaan keuangan, serta
                                            memastikan akurasi data untuk
                                            keperluan pelaporan dan analisis.
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="section">
                    <div class="row active">
                        <div class="imx">
                            <div class="btn-box clear">
                                <a>Mobility <br />Technology</a>
                                <a>Ticketing System <br />and Reservation</a>
                                <a>Payment <br />System</a>
                                <a class="active"
                                    >IT Service <br />Management</a
                                >
                                <a>Logistics and <br />Delivery System</a>
                                <a>Live Streaming <br />Platform</a>
                            </div>
                        </div>
                    </div>

                    <div class="flex-box" id="four">
                        <img src="../assets/img/business-img16.jpg" />
                        <div class="text-box">
                            <h3>IT Service <br />Management</h3>
                            <span>04</span>
                            <p>
                                Layanan <i>IT Service Management (ITSM)</i> kami
                                mencakup berbagai produk dan layanan yang
                                dirancang untuk membantu organisasi dalam
                                mengelola dan meningkatkan kinerja sistem dan
                                layanan IT mereka. Dengan <i>ITSM</i>, kami
                                menyediakan solusi yang terintegrasi untuk
                                mendukung perencanaan, pelaksanaan, dan
                                pemantauan layanan IT secara efektif. Dengan
                                fokus pada manajemen layanan yang efisien,
                                produk dan layanan kami di bidang
                                <i>ITSM</i> dapat membantu meningkatkan
                                produktivitas, efisiensi, dan keandalan
                                operasional perusahaan Anda.
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="imx">
                            <h4>Produk & Layanan Kami</h4>
                            <ul>
                                <li>
                                    <img
                                        src="../assets/img/business-img17.jpg"
                                    />
                                    <div>
                                        <em
                                            ><span>04</span>IT Service
                                            Management</em
                                        >
                                        <h5>
                                            Bisnis manajemen KPI dengan satu
                                            sentuhan
                                        </h5>
                                        <span>
                                            Layanan kami menyediakan kemudahan
                                            dalam manajemen KPI dengan satu
                                            sentuhan. Dengan pendekatan ini,
                                            bisnis Anda dapat dengan efisien
                                            memantau dan mengelola kinerja kunci
                                            dengan lebih praktis dan efektif.
                                        </span>
                                    </div>
                                </li>

                                <li>
                                    <img
                                        src="../assets/img/business-img18.jpg"
                                    />
                                    <div>
                                        <h5>
                                            Layanan dukungan professional,
                                            pelatihan jarak jauh, obrolan
                                        </h5>
                                        <span>
                                            Kami menyediakan layanan dukungan
                                            profesional yang mencakup pelatihan
                                            jarak jauh dan obrolan, serta
                                            memberikan solusi terpercaya untuk
                                            kebutuhan Anda dengan keahlian
                                            tinggi.
                                        </span>
                                    </div>
                                </li>

                                <li>
                                    <img
                                        src="../assets/img/business-img19.jpg"
                                    />
                                    <div>
                                        <h5>
                                            Fleksibel untuk retail, distributor,
                                            pabrik
                                        </h5>
                                        <span>
                                            Platform kami dirancang fleksibel
                                            untuk memenuhi kebutuhan berbagai
                                            sektor bisnis, termasuk retail,
                                            distributor, dan pabrik. Dengan
                                            adaptasi yang tinggi, platform ini
                                            menyediakan solusi sesuai dengan
                                            model operasional dan tuntutan
                                            bisnis di berbagai industri.
                                        </span>
                                    </div>
                                </li>

                                <li>
                                    <img
                                        src="../assets/img/business-img20.jpg"
                                    />
                                    <div>
                                        <h5>
                                            Penyesuaian dalam proses produksi
                                            yang tidak standar atau berubah
                                            dengan cepat
                                        </h5>
                                        <span>
                                            Kami senantiasa siap menghadapi
                                            penyesuaian dalam proses produksi
                                            yang tidak standar atau berubah
                                            dengan cepat. Dengan ketangguhan dan
                                            keterampilan kami, kami
                                            menanggapinya dengan cepat dan
                                            efisien, menjaga kelancaran produksi
                                            tanpa mengorbankan standar kualitas
                                            yang tinggi.
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="section">
                    <div class="row active">
                        <div class="imx">
                            <div class="btn-box clear">
                                <a>Mobility <br />Technology</a>
                                <a>Ticketing System <br />and Reservation</a>
                                <a>Payment <br />System</a>
                                <a>IT Service <br />Management</a>
                                <a class="active"
                                    >Logistics and <br />Delivery System</a
                                >
                                <a>Live Streaming <br />Platform</a>
                            </div>
                        </div>
                    </div>

                    <div class="flex-box" id="five">
                        <img src="../assets/img/business-img21.jpg" />
                        <div class="text-box">
                            <h3>Logistic and <br />Delivery System</h3>
                            <span>05</span>
                            <p>
                                Sistem logistik dan pengiriman kami telah
                                dirancang dengan solusi yang canggih dan andal,
                                memastikan kelancaran optimal dalam pengelolaan
                                serta pengiriman barang. Dengan fokus pada
                                efisiensi, kami berkomitmen untuk memberikan
                                kepuasan maksimal kepada setiap pelanggan yang
                                mengandalkan layanan kami.
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="imx">
                            <h4>Produk & Layanan Kami</h4>
                            <ul>
                                <li>
                                    <img
                                        src="../assets/img/business-img22.jpg"
                                    />
                                    <div>
                                        <em
                                            ><span>05</span>Logistic and
                                            Delivery System</em
                                        >
                                        <h5>
                                            Memantau dan melacak lokasi
                                            kendaraan logistik pada waktu yang
                                            sebenarnya
                                        </h5>
                                        <span>
                                            Kami melakukan pemantauan dan
                                            pelacakan lokasi kendaraan logistik
                                            secara <i>real-time</i>. Dengan
                                            teknologi terkini, kami memastikan
                                            kendali yang akurat dan tepat waktu,
                                            sehingga memperkuat efisiensi dalam
                                            manajemen pengiriman dan logistik.
                                        </span>
                                    </div>
                                </li>

                                <li>
                                    <img
                                        src="../assets/img/business-img23.jpg"
                                    />
                                    <div>
                                        <h5>
                                            Laporan dan analisis bisnis otomatis
                                        </h5>
                                        <span>
                                            Layanan laporan dan analisis bisnis
                                            otomatis kami membantu
                                            menyederhanakan proses evaluasi
                                            kinerja perusahaan. Dengan
                                            menggunakan teknologi otomatisasi
                                            yang canggih, kami memberikan
                                            laporan yang akurat dan analisis
                                            yang mendalam secara efisien. Ini
                                            memungkinkan pemahaman yang lebih
                                            baik terhadap kondisi bisnis,
                                            memudahkan pengambilan keputusan
                                            strategis, dan meningkatkan
                                            efektivitas operasional perusahaan.
                                        </span>
                                    </div>
                                </li>

                                <li>
                                    <img
                                        src="../assets/img/business-img24.jpg"
                                    />
                                    <div>
                                        <h5>
                                            Memberi kemudahan pengiriman barang
                                            ke pelanggan Anda
                                        </h5>
                                        <span>
                                            Kami menyediakan kemudahan dalam
                                            pengiriman barang ke pelanggan Anda.
                                            Dengan sistem logistik yang
                                            terpercaya dan efisien, kami
                                            memastikan setiap produk sampai
                                            dengan tepat waktu, menjadikan
                                            pengalaman pelanggan Anda lebih
                                            nyaman dan memuaskan.
                                        </span>
                                    </div>
                                </li>

                                <li>
                                    <img
                                        src="../assets/img/business-img25.jpg"
                                    />
                                    <div>
                                        <h5>
                                            Menyediakan pemindahan yang mudah
                                            (apartemen, rumah, gedung tinggi,
                                            dll) menggunakan kendaraan
                                            <i>skylift</i>
                                        </h5>
                                        <span>
                                            Kami menyediakan layanan pemindahan
                                            yang mudah, baik untuk apartemen,
                                            rumah, gedung tinggi, dan
                                            sebagainya, menggunakan kendaraan
                                            <i>skylift</i>. Dengan teknologi
                                            canggih dan tenaga ahli, kami
                                            memastikan proses pemindahan
                                            berlangsung efisien, aman, dan
                                            memberikan kenyamanan kepada
                                            pelanggan.
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="section">
                    <div class="row active">
                        <div class="imx">
                            <div class="btn-box clear">
                                <a>Mobility <br />Technology</a>
                                <a>Ticketing System <br />and Reservation</a>
                                <a>Payment <br />System</a>
                                <a>IT Service <br />Management</a>
                                <a>Logistics and <br />Delivery System</a>
                                <a class="active"
                                    >Live Streaming <br />Platform</a
                                >
                            </div>
                        </div>
                    </div>

                    <div class="flex-box" id="six">
                        <img src="../assets/img/business-img26.jpg" />
                        <div class="text-box">
                            <h3>
                                Live Streaming<br />
                                Platform
                            </h3>
                            <span>06</span>
                            <p>
                                Layanan unggulan kami berfokus pada platform
                                <i>live streaming</i>. Memadukan teknologi
                                terkini dan pengalaman pengguna yang optimal,
                                kami hadir untuk memberikan pengalaman
                                <i>live streaming</i> yang memukau dan
                                berkualitas tinggi kepada para pengguna kami.
                                Dengan layanan ini, kami berkomitmen untuk
                                memenuhi kebutuhan dan harapan pelanggan,
                                menjadikan pengalaman <i>streaming</i> mereka
                                lebih interaktif dan memuaskan.
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="imx">
                            <h4>Produk & Layanan Kami</h4>
                            <ul>
                                <li>
                                    <img
                                        src="../assets/img/business-img27.jpg"
                                    />
                                    <div>
                                        <em
                                            ><span>06</span>Live Streaming
                                            Platform</em
                                        >
                                        <h5>
                                            Konsultasi online melalui
                                            <i
                                                >website, mobile apps, video
                                                call</i
                                            >
                                        </h5>
                                        <span>
                                            Kami menyediakan layanan konsultasi
                                            online melalui berbagai platform,
                                            termasuk <i>website</i>, aplikasi
                                            <i>mobile</i>, dan panggilan video.
                                            Memanfaatkan teknologi terkini, kami
                                            mempermudah akses konsultasi bagi
                                            pelanggan, memungkinkan mereka untuk
                                            berinteraksi secara efisien dan
                                            mendapatkan bantuan dengan nyaman
                                            dari kenyamanan perangkat mereka
                                            sendiri.
                                        </span>
                                    </div>
                                </li>

                                <li>
                                    <img
                                        src="../assets/img/business-img28a.jpg"
                                    />
                                    <div>
                                        <h5>
                                            Menggunakan AI,
                                            <i>machine learning</i>, dan
                                            <i>big data</i> yang membantu bisnis
                                            Anda menjadi lebih mudah.
                                        </h5>
                                        <span>
                                            Dengan pemanfaatan kecerdasan buatan
                                            (AI), pembelajaran mesin
                                            <i>(machine learning)</i>, dan
                                            <i>big data</i>, kami memberikan
                                            solusi yang mempermudah perjalanan
                                            bisnis Anda. Teknologi ini tidak
                                            hanya menjadi mitra andal, namun
                                            juga memberikan kemudahan dalam
                                            pengelolaan dan pengembangan bisnis
                                            Anda secara efisien.
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- section-wrapper end -->
        </div>

        <div data-include="component/footer"></div>
    </body>
</html>
