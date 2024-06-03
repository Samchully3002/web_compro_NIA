        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
               <span class="app-brand-logo demo">
                <svg width="74" height="63" viewBox="0 0 74 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M52.7877 27.0256L46.6769 37.446L31.6929 63H21.4326L41.5474 28.6975L36.49 20.0722L11.3178 63H0L30.8304 10.4204L36.9413 0L42.6008 9.65182L47.6582 18.2772L52.7877 27.0256Z" fill="#F37436"/>
                  <path d="M56.5786 35.2935C56.9973 33.5539 55.8986 31.8107 54.1246 31.4001C52.3506 30.9895 50.5731 32.067 50.1543 33.8066C49.7356 35.5463 50.8343 37.2894 52.6084 37.7C54.3824 38.1106 56.1599 37.0332 56.5786 35.2935Z" fill="#077C93"/>
                  <path d="M73.8825 63.0002H61.6609L57.3098 55.578L52.9573 63.0002H41.8211L51.741 46.082L57.8518 35.6616L63.4192 45.1576L73.8825 63.0002Z" fill="#5194D0"/>
                  </svg>
              </span>
              <span class="app-brand-text demo menu-text fw-bold ms-2">Nia</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboards -->
            <li class="menu-item active">
              <a href="{{url('/admin/')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Dashboards">Dashboards</div>
              </a>
            </li>

            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Front Pages</span>
            </li>
            <!-- Front Pages -->
            <li class="menu-item">
              <a
                href="{{url('admin/list-business')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-buildings"></i>
                <div data-i18n="our-business">Our Business</div>
              </a>
            </li>   
            <li class="menu-item">
                <a
                href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-movie-play"></i>
                  <div data-i18n="our-business">Media</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="{{url('admin/list-news')}}" class="menu-link">
                      <div data-i18n="Without menu">News</div>
                    </a>
                  </li>
                  <li class="menu-item">
                    <a href="{{url('admin/list-videos')}}" class="menu-link">
                      <div data-i18n="Without navbar">Videos</div>
                    </a>
                  </li>
                </ul>
              </li>   
              
              <li class="menu-item">
                <a
                href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-network-chart"></i>
                  <div data-i18n="our-business">Coumunity</div>
                </a>
                <ul class="menu-sub">
                  <li class="menu-item">
                    <a href="{{url('admin/list-notices')}}" class="menu-link">
                      <div data-i18n="Without menu">Notices</div>
                    </a>
                  </li>
                </ul>
              </li>   
            <!-- Misc -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Document &amp; Support</span></li>
            <li class="menu-item">
              <a
                href="https://#election/sneat-html-admin-template-free/issues"
                target="_blank"
                class="menu-link">
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div data-i18n="Support">Support</div>
              </a>
            </li>
            <li class="menu-item">
              <a
                href="https://#tion.com/sneat-bootstrap-html-admin-template/documentation/"
                target="_blank"
                class="menu-link">
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Documentation">Documentation</div>
              </a>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none ps-1 ps-sm-2"
                    placeholder="Search..."
                    aria-label="Search..." />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../assets/img/avatars/10.jpg" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/10.jpg" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-medium d-block">John Doe</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->