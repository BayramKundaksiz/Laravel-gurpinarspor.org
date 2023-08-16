<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Vefat Ekle</title>

    <meta name="description" content="" />
    <link href="img/kesilenikon.png" rel="icon">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="admin/assets/img/kesilenikon.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="admin/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="admin/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="admin/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="admin/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="admin/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="admin/assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
              <a href="" class="app-brand-link">
                <span class="app-brand-logo demo">

                    <img src="img/kesilenikon.png" style="height: 50px; width: 50px;" alt="">

                </span>
                <span class="app-brand-text demo menu-text fw-bolder ms-2">Gürpınar</span>
              </a>

              <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                <i class="bx bx-chevron-left bx-sm align-middle"></i>
              </a>
            </div>

            <div class="menu-inner-shadow"></div>

            <ul class="menu-inner py-1">
              <!-- Dashboard -->
              <li class="menu-item">
                <a href="{{route('anasayfaekle')}}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-home-circle"></i>
                  <div data-i18n="Analytics">Anasayfa Ekle</div>
                </a>
              </li>

              <!-- Layouts -->
              <li class="menu-item">
                <a href="{{route('guncelyaziekle')}}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-layout"></i>
                  <div data-i18n="Layouts">Güncel Yazı Ekle</div>
                </a>
              </li>

              <!-- Layouts -->
              <li class="menu-item">
                <a href="{{route('ustgorselekle')}}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-layout"></i>
                  <div data-i18n="Layouts">Üst Kayan Görseller</div>
                </a>
              </li>

              <!-- Layouts -->
              <li class="menu-item">
                <a href="{{route('sagkategori')}}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-layout"></i>
                  <div data-i18n="Layouts">Sağ Kategori</div>
                </a>
              </li>

              <!-- Layouts -->
              <li class="menu-item">
                <a href="{{route('duyuru')}}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-layout"></i>
                  <div data-i18n="Layouts">Duyurular</div>
                </a>
              </li>

              <!-- Layouts -->
              <li class="menu-item">
                <a href="{{route('otobussaati')}}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-layout"></i>
                  <div data-i18n="Layouts">Otobüs Saatleri</div>
                </a>
              </li>

              <li class="menu-item">
                <a href="{{route('ustalar')}}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-layout"></i>
                  <div data-i18n="Layouts">Ustalar</div>
                </a>
              </li>

              <li class="menu-item">
                <a href="{{route('alimsatim')}}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-layout"></i>
                  <div data-i18n="Layouts">Alım - Satım</div>
                </a>
              </li>

              <!-- Layouts -->
              <li class="menu-item">
                <a href="{{route('resimekle')}}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-layout"></i>
                  <div data-i18n="Layouts">Nostalji Fotoğraflar</div>
                </a>
              </li>

              <!-- Layouts -->
              <li class="menu-item">
                <a href="{{route('guncelyaziekle')}}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-layout"></i>
                  <div data-i18n="Layouts">Nostalji Videolar</div>
                </a>
              </li>

              <li class="menu-item active">
                <a href="{{route('vefatlistesiekle')}}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-layout"></i>
                  <div data-i18n="Layouts">Vefat Listesi</div>
                </a>
              </li>


              </li>
            </ul>
          </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
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
                      class="form-control border-0 shadow-none"
                      placeholder="Search..."
                      aria-label="Search..."
                    />
                  </div>
                </div>
                <!-- /Search -->

                <ul class="navbar-nav flex-row align-items-center ms-auto">
                  <!-- Place this tag where you want the button to render. -->


                  <!-- User -->
                  <li class="nav-item navbar-dropdown dropdown-user dropdown">
                    <a>
                    <x-app-layout>
                    </x-app-layout>
                    </a>
                  </li>
                  <!--/ User -->
                </ul>
              </div>
            </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Vefat Kişi Bilgisi /</span> Ekle</h4>

              <!-- Basic Layout -->




                <div class="row">
                    <div class="col-xl">
                      <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                          <h5 class="mb-0">Merhum Bilgileri</h5>
                        </div>



                        <div class="card-body">
                            <form action="{{ route('vefatlistesieklendi') }}" method="POST" enctype="multipart/form-data">

                                @csrf

                                <div class="mb-3">
                                    <label class="form-label" >Merhum Adı</label>
                                    <div class="input-group input-group-merge">
                                      <textarea style="width: 100%" name="adi" cols="30" rows="1"></textarea>
                                    </div>
                                </div>


                            <div class="mb-3">
                                <label class="form-label" >Merhum Soyadı</label>
                                <div class="input-group input-group-merge">
                                  <textarea style="width: 100%" name="soyadi" cols="30" rows="1"></textarea>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" >Merhum Vefat Yılı</label>
                                <div class="input-group input-group-merge">
                                    <input type="date" name="vefat_yili">
                                </div>
                            </div>

                        </div>
                      </div>
                    </div>


                    <div class="col-xl">
                      <div class="card mb-4">

                        <div class="card-body">

                            <div class="div_design">
                                <label>Merhumun Fotoğrafı</label>
                                <input type="file" name="fotografi">
                              </div>


                            <button style="margin-top: 5%;" class="btn btn-primary">Ekle</button>

                        </div>
                      </div>
                    </div>
                  </div>





            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by
                  <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
                </div>
                <div>
                  <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                  <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                  <a
                    href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                    target="_blank"
                    class="footer-link me-4"
                    >Documentation</a
                  >

                  <a
                    href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                    target="_blank"
                    class="footer-link me-4"
                    >Support</a
                  >
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <div class="buy-now">
      <a
        href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/"
        target="_blank"
        class="btn btn-danger btn-buy-now"
        >Upgrade to Pro</a
      >
    </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="admin/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="admin/assets/vendor/libs/popper/popper.js"></script>
    <script src="admin/assets/vendor/js/bootstrap.js"></script>
    <script src="admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="admin/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="admin/assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
