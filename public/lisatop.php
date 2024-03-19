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
<html lang="fr" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>LIS@LISI</title>
    <meta name="description" content="" />
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Font Awesome -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="../fontawesome/css/all.min.css" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="../mdb-ui-kit-6.4.1/css/mdb.min.css" />
    <link rel="stylesheet" href="../mdb/css/admin.css" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- ApexCharts -->
    <link rel="stylesheet" href="../apexcharts/css/apexcharts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>

  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="#" class="app-brand-link">
              <span class="app-brand-logo demo">
              <img src="/img/lisalisi.png" width="50">
              </span>
            
              <span class="app-brand-text demo menu-text fw-bolder ms-2">LIS@LISI</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <li class="menu-item active">
              <a href="http://127.0.0.1:8000/home" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            <!-- Layouts -->
            <li class="menu-item">
              <a href="#" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Composantes</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="composante" class="menu-link">
                    <div data-i18n="Without menu">CERC</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <div data-i18n="Container">IDB</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <div data-i18n="Without navbar">TMI</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <div data-i18n="Fluid">THIMO</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <div data-i18n="Blank">MGP</div>
                  </a>
                </li>
              </ul>
            </li>

            <li class="menu-item">
              <a href="#" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-group"></i>
                <div data-i18n="Layouts">B&eacute;n&eacute;ficiaires</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="http://127.0.0.1:8000/home" class="menu-link">
                    <div data-i18n="Without menu">CERC</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <div data-i18n="Container">IDB</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <div data-i18n="Without navbar">TMI</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <div data-i18n="Fluid">THIMO</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <div data-i18n="Blank">MGP</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Pages</span>
            </li> -->

            <li class="menu-item">
              <a href="#" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Authentications">Listes</div>
              </a>
              <ul class="menu-sub">
                <!-- <li class="menu-item">
                  <a href="#" class="menu-link" target="_blank">
                    <div data-i18n="Basic">Liste des bénéficiaires CERC</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#" class="menu-link" target="_blank">
                    <div data-i18n="Basic">Liste des bénéficiaires TMI</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#" class="menu-link" target="_blank">
                    <div data-i18n="Basic">Liste des bénéficiaires THIMO</div>
                  </a>
                </li> -->
                <li class="menu-item">
                  <a href="#" class="menu-link" target="_blank">
                    <div data-i18n="Basic">Liste des IDBs</div>
                  </a>
                </li>
                <!-- <li class="menu-item">
                  <a href="#" class="menu-link" target="_blank">
                    <div data-i18n="Basic">Liste des bénéficiaires eTHIMO</div>
                  </a>
                </li> -->
              </ul>
            </li>
            <li class="menu-item">
              <a href="#" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-building"></i>
                <div data-i18n="Misc">Provinces</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <div data-i18n="Error">Nord-Ubangi</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <div data-i18n="Under Maintenance">Kassai-Central</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <div data-i18n="Under Maintenance">Sud-Ubangi</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <div data-i18n="Under Maintenance">Nord-Kivu</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <div data-i18n="Under Maintenance">ITURI</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <div data-i18n="Under Maintenance">Sud-Kivu</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <div data-i18n="Under Maintenance">Kinshasa</div>
                  </a>
                </li>
              </ul>
           
                    
            <li class="menu-item">
              <a
                href="#"
                target="_blank"
                class="menu-link"
              >
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div data-i18n="Support">Centre d'Appel</div>
              </a>
            </li>
            <li class="menu-item">
              <a
                href="#"
                target="_blank"
                class="menu-link"
              >
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Documentation">Archive du Projet</div>
              </a>
            </li>

            <li class="menu-item">
              <a href="#" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Ressources Humaines</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <div data-i18n="Account">Recrutement</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <div data-i18n="Notifications">Gestion des congés</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="#" class="menu-link">
                    <div data-i18n="Connections">Archive GH</div>
                  </a>
                </li>
              </ul>
            </li>


            <li class="menu-item">
              <a href="#" target="_blank" class="menu-link">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div data-i18n="Documentation">Paramètres</div>
              </a>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
          <nav class="layout-navbar container-fluid navbar navbar-expand-xl fixed-top align-items-center navbar-dark bg-primary" id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="#">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- brand 2-->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                <img src="/img/step_logo.png" alt class="h-px-40 w-auto rounded" />
                </div>
              </div>
              <!-- /brand 2 -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- home -->
                <li class="nav-item lh-1 me-3">
                  <a href=""><i class="fas fa-home fa-lg text-white"></i></a>
                </li>
                <!-- Messages -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown me-3">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <i class="fas fa-comments fa-lg text-white"></i>
                    <span class="badge rounded-pill badge-notification bg-danger">2</span>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <span class="align-middle">Link 1</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <span class="align-middle">Link 2</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- /Messages -->

                <!-- Alerts -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown me-3">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <i class="fas fa-bell fa-lg text-white"></i>
                    <span class="badge rounded-pill badge-notification bg-danger">4</span>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <span class="align-middle">Link 1</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <span class="align-middle">Link 2</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- /Alerts -->

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online"> 
                      <img src="../assets/img/avatars/bn.jpg" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-6">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/bn.jpg" alt class="w-px-40 h-auto rounded-circle" />  NGANDE
                            </div>
                          </div>
                          <div class="flex-grow-1">


        
                            <small class="text-muted">  </small>
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
                        <span class="align-middle">Mon Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Paramètre</span>
                      </a>
                    </li>
                    
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="http://127.0.0.1:8000">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Déconnexion</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- /User -->
              </ul>
            </div>
          </nav>
          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
