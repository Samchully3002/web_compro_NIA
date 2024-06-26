<!DOCTYPE html>
<html lang="en">
    @include('web/frontend/pages/en/component/head')
    <link rel="stylesheet" href="assets/css/business.css"/>
    </head>

    <body>
    @include('web/frontend/pages/en/component/header')

         <div class="page page-scroll page-in">
            <!-- bg-wrapper start -->
            <div class="bg-wrapper bisnis1">
                <div class="text-box">
                    <h1>Export
                        Voucher</h1>
                    <p>We collect and analyze country-specific information to optimize data for each target market, offering business feasibility analysis and infrastructure consulting to localize Korea's advanced technology. Additionally, we provide document services, including visas and customs clearance, as well as translation and interpretation support for successful business execution.</p>
                </div>
            </div>
            <!-- bg-wrapper end -->

            <!-- section-wrapper start -->
            <div class="product-wrapper">
                {{-- <div class="img-backdrop">
                    <img src="../assets/images/business-backdrop.png"/>
                </div> --}}
                <div class="colls-wrapper">
                    <button type="button" class="collapsible">
                        <span>01</span>
                        <span>Research & Consulting</span>
                    </button>
                    <div class="content">
                        <div class="text-wrapper">
                            <p>Based on our overseas subsidiaries, which are establishing an organic cooperation system with our Korean headquarters, Samchully Networks is laying the foundation for global expansion, including assisting clients with overseas ventures, local proof-of-concept projects, and localization strategies.</p>
                        </div>
                        <div class="card-wrapper">
                            <div class="card">
                                <img width="18%" src="../assets/images/icon/ic_samchulypay1.svg"/>
                                <span>Basic Market Research & Analysis</span>
                                <p>
                                    Includes product analysis, export capacity analysis, demand trends, import/export trends, retail price trends, distribution structure, competitive trends, local conditions, feasibility studies, and potential and expected demand surveys.
                                </p>
                            </div>
                            <div class="card">
                                <img width="18%" src="../assets/images/icon/ic_samchulypay2.svg"/>
                                <span>Custom Market Research & Analysis</span>
                                <p>
                                    Conducts local retail seller surveys (interviews), potential and expected consumer surveys (interviews), local customized trend analysis, product deep-dive analysis, and in-depth market entry analysis.
                                </p>
                            </div>
                        </div>
                        <div class="card-wrapper">
                            <div class="card">
                                <img width="18%" src="../assets/images/icon/ic_samchulypay3.svg"/>
                                <span>Business Partner Connection</span>
                                <p>
                                    Identifies and matches interested buyers, finds supply/processing companies for local exports, negotiates trade conditions, and conducts institutional/corporate feasibility studies.
                                </p>
                            </div>
                            <div class="card">
                                <img width="18%" src="../assets/images/icon/ic_samchulypay3.svg"/>
                                <span>In-depth Research & Market Entry Strategy Consulting</span>
                                <p>
                                    Conducts sample tests, analyzes target product/company competition, and provides on-site support for sales.
                                </p>
                            </div>
                        </div>

                        <div class="card-wrapper">
                            <div class="card">
                                <img width="18%" src="../assets/images/icon/ic_samchulypay3.svg"/>
                                <span>Execution Support & Mid-to-Long-Term Strategy Consulting</span>
                                <p>
                                    Analyzes performance, advises mid-to-long-term strategies, discovers sustainable models, formulates strategies for deepening local penetration, and establishes local communication channels/offices.
                                </p>
                            </div>
                            <div class="card">
                                <img width="18%" src="../assets/images/icon/ic_samchulypay3.svg"/>
                                <span>Buyer Situation Tracking & Follow-up Consulting</span>
                                <p>
                                    Conducts on-site visits and tracks buyer situations, responds to crises (such as local raw material supply, trade lines, etc.), and discovers models for solution.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="colls-wrapper">
                    <button type="button" class="collapsible">
                        <span>02</span>
                        <span>Overseas Business Agency</span>
                    </button>
                    <div class="content">
                        <div class="text-wrapper">
                            <p>Leveraging our qualifications in overseas construction engineering and information communication projects, along with successful experience in national aid projects, we provide comprehensive assistance through Samchully Networks for various local business tasks, including residency, employment, education, required documents, and permit issuance, making it easy and accurate for our clients.</p>
                        </div>
                        <div class="card-wrapper">
                            <div class="card-grey">
                                <span class="span-title">01</span>
                                <span>Export Documentation and Local Registration</span>
                                <p>
                                    Contract drafting, export logistics documentation consultancy, trade automation, post-management, FTA origin-related document consultancy.
                                </p>
                            </div>
                            <div class="card-grey">
                                <span class="span-title">02</span>
                                <span>Credit Certification Service for Overseas Export</span>
                                <p>
                                    Issuance of overseas credit rating inquiry (foreign language report).
                                </p>
                            </div>
                            <div class="card-grey">
                                <span class="span-title">03</span>
                                <span>Local Entry Representation and Public Procurement Market Entry</span>
                                <p>
                                    Document preparation, application, local entry representation, fees for maintaining qualifications for public procurement bidding.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="colls-wrapper">
                    <button type="button" class="collapsible">
                        <span>03</span>
                        <span>Multimedia Design</span>
                    </button>
                    <div class="content">
                        <div class="text-wrapper">
                            <p>We provide design services for responsive foreign language websites, mobile apps, overseas online shopping product pages, etc., minimizing cultural differences between local and Korean cultures through local staff.</p>
                        </div>
                        <div class="card-wrapper">
                            <div class="card-grey">
                                <span class="span-title">01</span>
                                <span>Export Documentation and Local Registration</span>
                                <p>
                                    Contract drafting, export logistics documentation consultancy, trade automation, post-management, FTA origin-related document consultancy.
                                </p>
                            </div>
                            <div class="card-grey">
                                <span class="span-title">02</span>
                                <span>Credit Certification Service for Overseas Export</span>
                                <p>
                                    Issuance of overseas credit rating inquiry (foreign language report).
                                </p>
                            </div>
                            <div class="card-grey">
                                <span class="span-title">03</span>
                                <span>Local Entry Representation and Public Procurement Market Entry</span>
                                <p>
                                    Document preparation, application, local entry representation, fees for maintaining qualifications for public procurement bidding.
                                </p>
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
