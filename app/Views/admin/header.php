<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title>
      <?= $page . ' | ' . $company_name ?>
    </title>
    <meta property="og:title" content="<?= $company_name ?>">
    <meta name="author" content="<?= $company_name ?>">
    <meta name="description" content="<?= $company_description ?>">
    <meta name="keywords" content="<?= $company_keyword ?>">
    <meta property="og:locale" content="en_US">
    <meta property="og:description" content="<?= $company_description ?>">
    <meta name="og:keywords" content="<?= $company_keyword ?>">
    <meta property="og:url" content="<?= base_url() ?>">
    <meta property="og:site_name" content="<?= $company_name ?>">
    <meta property="og:image" content="<?= base_url('uploads/' . $company_favicon) ?>" />
    <link rel="canonical" href="<?= base_url() ?>">
    <!-- favicon & bookmark -->
    <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url('uploads/' . $company_favicon) ?>">
    <link rel="shortcut icon" href="<?= base_url('uploads/' . $company_favicon) ?>">
    <meta name="robots" content="index, follow" />
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="<?= $theme_color ?>">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="<?= $theme_color ?>" />
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="<?= $theme_color ?>" />

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet">
    <!-- End GOOGLE FONT -->
    <!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/summernote/summernote-bs4.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/open-iconic/font/css/open-iconic-bootstrap.min.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/flatpickr/flatpickr.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendor/datatable/css/responsive.bootstrap4.min.css') ?>">
    <!-- END PLUGINS STYLES -->
    <!-- BEGIN THEME STYLES -->
    <!---**************COLORS*****************-->
    <style>
      :root {
        --primary:
          <?= $theme_color ?>;

        
        --secondary:
          <?= $secondary_color ?>;

        
      }
    </style>
    <!---**************COLORS*****************-->
    <link rel="stylesheet" href="<?= base_url('assets/stylesheets/theme.min.css') ?>" data-skin="default">
    <link rel="stylesheet" href="<?= base_url('assets/stylesheets/theme-dark.min.css') ?>" data-skin="dark">
    <link rel="stylesheet" href="<?= base_url('assets/stylesheets/others.css') ?>">
    <!-- END THEME STYLES -->

    <script>
      var skin = localStorage.getItem('skin') || 'default';
      var disabledSkinStylesheet = document.querySelector('link[data-skin]:not([data-skin="' + skin + '"])');
      // Disable unused skin immediately
      disabledSkinStylesheet.setAttribute('rel', '');
      disabledSkinStylesheet.setAttribute('disabled', true);
      // add loading class to html immediately
      document.querySelector('html').classList.add('loading');
    </script>
    <script src="<?= base_url('assets/javascript/countries.js') ?>"></script>
    <script src="<?= base_url('assets/javascript/pdf.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/jquery/jquery-3.2.1.slim.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
    <style>
      .navi-text {
        font-size: 17px;
        font-weight: 700;
        color: #000;
      }

      .bnavbar {
        display: none;
      }

      @media only screen and (max-width: 600px) {
        .bnavbar {
          overflow: hidden;
          position: fixed;
          bottom: 0;
          width: 100%;
          display: flex;
          justify-content: space-around;
        }

        .bnavbar a {
          color: #fff;
          text-align: center;
          padding: 7px 10px;
          text-decoration: none;
        }

        .bnavbar a:hover {
          background: #f1f1f1;
          color: black;
        }

        .bnavbar a.active {
          background-color: #fff;
        }

        .desktop {
          display: none;
        }
      }

      .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 30px;
      }

      .switch input {
        opacity: 0;
        width: 0;
        height: 0;
      }

      .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: red;
        -webkit-transition: .4s;
        transition: .4s;
      }

      .slider:before {
        position: absolute;
        content: "";
        height: 22px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
      }

      input:checked+.slider {
        background-color: green;
      }

      input:focus+.slider {
        box-shadow: 0 0 1px #2196F3;
      }

      input:checked+.slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
      }

      /* Rounded sliders */

      .slider.round {
        border-radius: 34px;
      }

      .slider.round:before {
        border-radius: 50%;
      }

      td {
        background-color: #fff;

      }
    </style>

  </head>

  <body>
    <!-- .app -->
    <div class="app">
      <!-- .app-header -->
      <header class="app-header app-header-dark">
        <!-- .top-bar -->
        <div class="top-bar">
          <!-- .top-bar-brand -->
          <div class="top-bar-brand">
            <!-- toggle aside menu -->
            <button class="hamburger hamburger-squeeze mr-2" type="button" data-toggle="aside-menu"
              aria-label="toggle aside menu"><span class="hamburger-box"><span
                  class="hamburger-inner"></span></span></button> <!-- /toggle aside menu -->
            <a href="<?= base_url('admin') ?>"><img src="<?= base_url('uploads/' . $company_logo) ?>"
                style="width:170px;height:30px;"></a>
          </div><!-- /.top-bar-brand -->
          <!-- .top-bar-list -->
          <div class="top-bar-list">
            <!-- .top-bar-item -->
            <div class="top-bar-item px-2 d-md-none d-lg-none d-xl-none">
              <!-- toggle menu -->
              <button class="hamburger hamburger-squeeze" type="button" data-toggle="aside"
                aria-label="toggle menu"><span class="hamburger-box"><span
                    class="hamburger-inner"></span></span></button> <!-- /toggle menu -->
            </div><!-- /.top-bar-item -->
            <!-- .top-bar-item -->
            <div class="top-bar-item top-bar-item-right px-0">
              <!-- .nav -->
              <ul class="header-nav nav">
                <!-- .nav-item -->
                <li class="nav-item dropdown header-nav-dropdown" style="margin-right:30px">
                  <a class="nav-link has-badge" href="#" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false"><span class="badge badge-pill badge-warning">
                      <?= $notification ?>
                    </span>
                    <span class="oi oi-bell"></span></a> <!-- .dropdown-menu -->
                  <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
                    <div class="dropdown-arrow"></div>
                    <h6 class="dropdown-header stop-propagation">
                      <span>Tickets <span class="badge">(2)</span></span>
                    </h6><!-- .dropdown-scroll -->
                    <div class="dropdown-scroll perfect-scrollbar">
                      <?= $all_tickets ?>
                    </div>
                    <a href="<?= base_url('admin/tickets') ?>" class="dropdown-footer">All Tickets <i
                        class="fas fa-fw fa-long-arrow-alt-right"></i></a>
                  </div><!-- /.dropdown-menu -->
                </li><!-- /.nav-item -->
                <!-- .nav-item -->
                <li class="nav-item dropdown header-nav-dropdown">
                  <a href="<?= base_url() ?>/admin/logout?url=<?= current_url() ?><?php if (isset($_GET['id'])) {
                        echo '?' . $_SERVER['QUERY_STRING'];
                        } ?>"
                    class="btn btn-outline-secondary btn-sm text-white">Logout <i class="fa fa-sign-out-alt"></i></a>
                </li><!-- /.nav-item -->
              </ul><!-- /.nav -->


              <!-- .btn-account -->
              <div class="dropdown d-none d-sm-flex">
                <button class="btn-account" type="button" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false"><span class="user-avatar user-avatar-md">
                    <img src="<?= base_url('uploads/' . $company_favicon) ?>" alt="<?= $admin_username ?>"></span>
                  <span class="account-summary pr-lg-4 d-none d-lg-block"><span class="account-name text-capitalize">
                      <?= $admin_username ?>
                    </span>
                    <span class="account-description">
                      <?php if ($role == 1) {
                        echo 'Admin Account';
                        }
                      else {
                        echo 'Moderator Account';
                        } ?>
                    </span></span></button> <!-- .dropdown-menu -->
                <div class="dropdown-menu">
                  <div class="dropdown-arrow d-lg-none" x-arrow=""></div>
                  <div class="dropdown-arrow ml-3 d-none d-lg-block"></div>
                  <h6 class="dropdown-header d-none d-sm-block d-lg-none">
                    <?= $admin_username ?>
                  </h6><a class="dropdown-item" href="<?= base_url('admin/accounts?manage=1&id=' . $admin_id) ?>">
                    <span class="dropdown-icon oi oi-person"></span> Profile</a>
                  <a class="dropdown-item"
                    href="<?= base_url() ?>/admin/logout?url=<?= current_url() ?><?php if (isset($_GET['id'])) {
                          echo '?' . $_SERVER['QUERY_STRING'];
                          } ?>">
                    <span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
                </div><!-- /.dropdown-menu -->
              </div><!-- /.btn-account -->
            </div><!-- /.top-bar-item -->
          </div><!-- /.top-bar-list -->
        </div><!-- /.top-bar -->
      </header><!-- /.app-header -->



      <!-- .app-aside -->
      <aside class="app-aside app-aside-expand-md app-aside-light">
        <!-- .aside-content -->
        <div class="aside-content">
          <!-- .aside-header -->
          <header class="aside-header d-block d-md-none">
            <!-- .btn-account -->
            <button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside"><span
                class="user-avatar user-avatar-lg"><img src="<?= base_url('uploads/' . $company_favicon) ?>"
                  alt="<?= $admin_username ?>"></span>
              <span class="account-icon"><span class="fa fa-caret-down fa-lg"></span></span> <span
                class="account-summary"><span class="account-name">
                  <?= $admin_username ?>
                </span>
                <span class="account-description">
                  <?php if ($role == 1) {
                    echo 'Admin Account';
                    }
                  else {
                    echo 'Moderator Account';
                    } ?>
                </span></span></button> <!-- /.btn-account -->
            <!-- .dropdown-aside -->
            <div id="dropdown-aside" class="dropdown-aside collapse">
              <!-- dropdown-items -->
              <div class="pb-3">
                <a class="dropdown-item" href="<?= base_url('admin/accounts?manage=1&id=' . $admin_id) ?>"><span
                    class="dropdown-icon oi oi-person"></span> Profile</a>
                <a class="dropdown-item"
                  href="<?= base_url() ?>/admin/logout?url=<?= current_url() ?><?php if (isset($_GET['id'])) {
                        echo '?' . $_SERVER['QUERY_STRING'];
                        } ?>"><span
                    class="dropdown-icon oi oi-account-logout"></span> Logout</a>
              </div><!-- /dropdown-items -->
            </div><!-- /.dropdown-aside -->
          </header><!-- /.aside-header -->
          <!-- .aside-menu -->
          <div class="aside-menu overflow-hidden">
            <!-- .stacked-menu -->
            <nav id="stacked-menu" class="stacked-menu">

              <ul class="menu">
                <li class="menu-item">
                  <a href="<?= base_url('admin') ?>" class="menu-link"><span class="menu-icon fas fa-home"></span> <span
                      class="menu-text text-white">Dashboard</span></a>
                </li>
                <li class="menu-item">
                  <a href="<?= base_url('admin/create_account') ?>" class="menu-link"><span
                      class="menu-icon fas fa-user-plus"></span> <span class="menu-text text-white">New
                      Account</span></a>
                </li>
                <?php if ($role == 1) { ?>
                  <li class="menu-item">
                    <a href="<?= base_url('admin/notice') ?>" class="menu-link"><span
                        class="menu-icon fas fa-bell"></span> <span class="menu-text text-white">Post Notice</span></a>
                  </li>
                  <li class="menu-item">
                    <a href="<?= base_url('admin/newsletter') ?>" class="menu-link"><span
                        class="menu-icon fas fa-envelope"></span> <span class="menu-text text-white">Send
                        Newsletter</span></a>
                  </li>
                  <hr>
                  <a href="#" class="menu-link text-white"><span class="menu-text">SETTINGS</span></a>
                  <li class="menu-item"><a class="menu-link text-white" href="<?= base_url('admin/accounts') ?>"><span
                        class="menu-icon fas fa-caret-right"></span> Admin Settings</a></li>
                  <li class="menu-item"><a class="menu-link text-white" href="<?= base_url('admin/wallets') ?>"><span
                        class="menu-icon fas fa-caret-right"></span> Wallet Settings</a></li>           
                  <li class="menu-item"><a class="menu-link text-white" href="<?= base_url('admin/faqs') ?>"><span
                        class="menu-icon fas fa-caret-right"></span> FAQs Settings</a></li>
                  <li class="menu-item"><a class="menu-link text-white" href="<?= base_url('admin/testimonials') ?>"><span
                        class="menu-icon fas fa-caret-right"></span> Testimonials Settings</a></li>
                  <li class="menu-item"><a class="menu-link text-white" href="<?= base_url('admin/about') ?>"><span
                        class="menu-icon fas fa-caret-right"></span> About Us Settings</a></li>
                  <li class="menu-item"><a class="menu-link text-white" href="<?= base_url('admin/templates') ?>"><span
                        class="menu-icon fas fa-caret-right"></span> Email Settings</a></li>
                        <li class="menu-item"><a class="menu-link text-white" href="<?= base_url('admin/theme') ?>"><span
                        class="menu-icon fas fa-caret-right"></span> Theme Settings</a></li>
                  <li class="menu-item"><a class="menu-link text-white" href="<?= base_url('admin/settings') ?>"><span
                        class="menu-icon fas fa-caret-right"></span> General Settings</a></li>

                <?php } ?>
              </ul>
            </nav>
          </div>
          <!-- Skin changer -->
          <footer class="aside-footer border-top p-2 bg-secondary">
            <button class="btn btn-light btn-block text-primary" data-toggle="skin"><span
                class="d-compact-menu-none">Night mode</span> <i class="fas fa-moon ml-1"></i></button>
          </footer><!-- /Skin changer -->
        </div><!-- /.aside-content -->
      </aside><!-- /.app-aside -->