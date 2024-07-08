<div class="scale-in-footer">
    <div id="footer-wrapper">
        <div class="row">
            <div class="clear footer-top">
                <div class="footer3blok">
                    <div class="blok">
                        <img
                            src="../../assets/images/icon/logo_ftr.svg"
                            alt="PT. Networks Indonesia Aku"
                            class="logo-footer"
                        />
                        <div class="location clear">
                            <div class="address">
                                <span class="title"
                                    >Menghubungkan Dunia Melalui Teknologi</span
                                >
                            </div>
                        </div>
                    </div>
                    <div class="blok">
                        <div>
                            <h1>Perusahaan Kami</h1>
                            <ul>
                                <li><a href="/about">Tentang Kami</a></li>
                                <li><a href="/news">Berita</a></li>
                                <li>
                                    <a
                                        href="https://www.youtube.com/@networksindonesiaaku4258"
                                        target="_blank"
                                        rel="noopener"
                                        >Video Kami</a
                                    >
                                </li>
                                <li><a href="/contact">Hubungi Kami</a></li>
                            </ul>
                        </div>
                        <div>
                            <h1>Bisnis</h1>
                            <ul>
                                <li>
                                    <a href="/intellegent-integrated-logistic"
                                        >Logistik Terintegrasi Cerdas</a
                                    >
                                </li>
                                <li>
                                    <a href="/digital-healthcare"
                                        >Pelayanan Kesehatan Digital</a
                                    >
                                </li>
                                <li>
                                    <a href="/system-development-management"
                                        >Pengembangan & Manajemen Sistem</a
                                    >
                                </li>
                                <li>
                                    <a href="/export-voucher">Ekspor Voucher</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="blok">
                        <div>
                            <h3>PT. Networks Indonesia Aku</h3>
                            <p>AIA CENTRAL 21st Floor.</p>
                            <p>Jl. Jenderal Sudirman,No. Kav. 48A,</p>
                            <p>Karet Semanggi, Kecamatan Setiabudi,</p>
                            <p>Kota Jakarta Selatan, DKI Jakarta 12930</p>
                        </div>
                        <div>
                            <h3>Samchully Networks (Kantor Pusat South Korea)</h3>
                            <p>
                                <a
                                    href="https://www.sclnetworks.co.kr"
                                    target="_blank"
                                    rel="noopener"
                                    >https://www.sclnetworks.co.kr</a
                                >
                            </p>
                        </div>
                        <div>
                            <h3>Email</h3>
                            <p>
                                <a
                                    href="mailto:networksindonesiaku@gmail.com"
                                    target="_blank"
                                    rel="noopener"
                                    >info@nia.co.id</a
                                >
                            </p>
                        </div>
                        <div class="gapDiantara">
                            <a
                                href="https://instagram.com/networksindonesiaaku"
                                target="_blank"
                                ><img src="../../assets/images/icon/ig.png"
                            /></a>
                            <a
                                href="https://www.tiktok.com/@networksindonesiaaku"
                                target="_blank"
                                ><img src="../../assets/images/icon/tk.png"
                            /></a>
                            <a
                                href="https://www.facebook.com/profile.php?id=100086498050992"
                                target="_blank"
                                ><img src="../../assets/images/icon/fb.png"
                            /></a>
                            <a
                                href="https://www.youtube.com/@networksindonesiaaku4258?themeRefresh=1"
                                target="_blank"
                                ><img src="../../assets/images/icon/yt.png"
                            /></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clear layoutMobile">
                <div class="copyright fl">
                    <em>PT. Networks Indonesia Aku. Copyright © 2024</em>
                </div>
                <ul class="sitemap btn-box fr">
                    <!-- <li><a>Terms and Conditions</a></li> -->
                    <li><a href="/privacy-policy">kebijakan privasi</a></li>
                    <!-- <li><a>Cookies</a></li> -->
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const elements = document.querySelectorAll(".scale-in-footer");

        function checkVisibility() {
            elements.forEach((element) => {
                const rect = element.getBoundingClientRect();
                if (rect.top < window.innerHeight && rect.bottom >= 0) {
                    element.classList.add("visible");
                } else {
                    element.classList.remove("visible");
                }
            });
        }

        window.addEventListener("scroll", checkVisibility);
        window.addEventListener("resize", checkVisibility);

        // Initial check on load
        checkVisibility();
    });
</script>
