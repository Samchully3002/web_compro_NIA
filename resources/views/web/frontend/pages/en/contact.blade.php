<!DOCTYPE html>
<html lang="en">
    @include('web/frontend/pages/en/component/head')
    <link rel="stylesheet" href="assets/css/contact.css"/>
</head>

    <body>
        @include('web/frontend/pages/en/component/header')

        {{-- <div class="page-introduction"> --}}

            <!-- Banner top -->
            <div class="header-wrapper">
                <div class="box">
                    <div class="left-content">
                    <div class="text-box">
                        <span>Contact Us</span>
                        <div>
                            <h3>PT. Networks Indonesia Aku</h3>
                            <p>AIA CENTRAL 21st Floor.</p>
                            <p>Jenderal Sudirman Street, Number Kav. 48A,</p>
                            <p>Karet Semanggi, Kecamatan Setiabudi,</p>
                            <p>South Jakarta City, DKI Jakarta 12930</p>
                        </div>
                        <div>
                            <h3>Samchully Networks (South Korea HQ)</h3>
                            <p><a href="https://www.sclnetworks.co.kr" target="_blank" rel="noopener">https://www.sclnetworks.co.kr</a></p>
                        </div>
                        <div>
                            <h3>Email</h3>
                            <p><a href="mailto:networksindonesiaku@gmail.com" target="_blank" rel="noopener">info@nia.co.id</a></p>
                        </div>
                        <div>
                            <a href="https://instagram.com/networksindonesiaaku" target="_blank"><img src='../../assets/images/icon/ig.png' /></a>
                            <a href="https://www.tiktok.com/@networksindonesiaaku" target="_blank"><img src='../../assets/images/icon/tk.png' /></a>
                            <a href="https://www.facebook.com/profile.php?id=100086498050992" target="_blank"><img src='../../assets/images/icon/fb.png' /></a>
                            <a href="https://www.youtube.com/@networksindonesiaaku4258?themeRefresh=1" target="_blank"><img src='../../assets/images/icon/yt.png' /></a>            
                        </div>
                    </div>
                    </div>
                    <div class="right-content">
                        <!-- contact-wrapper start -->
                        <div class="contact-wrapper">
                            <div class="">
                                <div class="">
                                    <div class="form-box">
                                        <form
                                            method="POST"
                                            target="iframe1"
                                            data-email="scln.elsoul@gmail.com"
                                            action="https://script.google.com/macros/s/AKfycbz_-jKVNiaHhdplYd-EkGVHk3itT2kmun-oAIJSxmH9U96ORTSK-sPtcLumFusYKG9Q/exec"
                                        >
                                            <label>
                                                <input
                                                    id="name"
                                                    name="name"
                                                    type="text"
                                                    placeholder="Name"
                                                />
                                            </label>

                                            <label>
                                                <input
                                                    id="email"
                                                    name="email"
                                                    type="text"
                                                    placeholder="Email"
                                                />
                                            </label>

                                            <label>
                                                <textarea
                                                    id="content"
                                                    name="content"
                                                    placeholder="Message"
                                                ></textarea>
                                            </label>

                                            <!-- <label class="check-box">
                                                <input
                                                    type="checkbox"
                                                    class="checkbox-type1"
                                                />
                                                <em
                                                    >Saya menyetujui pengumpulan dan
                                                    penggunaan informasi pribadi.</em
                                                >
                                            </label> -->

                                            <button type="submit">Submit</button>
                                        </form>
                                        <iframe
                                            id="iframe1"
                                            name="iframe1"
                                            style="display: none"
                                        ></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- contact-wrapper end -->
                    </div>
                </div>
            </div>
            <!-- Banner top end -->

            <!-- map-wrapper start -->
            <div class="map-wrapper">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3456496281106!2d106.8144257745311!3d-6.218068060901542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f15549fa3d23%3A0x6e35f06585ecba5f!2sAIA%20Central!5e0!3m2!1sid!2sid!4v1701683012463!5m2!1sid!2sid"
                       
                        ></iframe>
            </div>
            <!-- map-wrapper end -->

            {{-- </div> --}}

        @include('web/frontend/pages/en/component/footer')

    </body>
</html>
