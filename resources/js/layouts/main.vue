<template>
  <!-- Begin page -->
  <div class="wrapper">

    <!-- ========== Topbar Start ========== -->
    <div class="navbar-custom topnav-navbar">
      <div class="container-fluid detached-nav">

        <!-- Topbar Logo -->
        <div class="logo-topbar">
          <!-- Logo light -->
          <a href="index.html" class="logo-light">
            <span class="logo-lg">
              <img src="assets/images/logo.png" alt="logo" height="22">
            </span>
            <span class="logo-sm">
              <img src="assets/images/logo-sm.png" alt="small logo" height="22">
            </span>
          </a>

          <!-- Logo Dark -->
          <a href="index.html" class="logo-dark">
            <span class="logo-lg">
              <img src="assets/images/logo-dark.png" alt="dark logo" height="22">
            </span>
            <span class="logo-sm">
              <img src="assets/images/logo-dark-sm.png" alt="small logo" height="22">
            </span>
          </a>
        </div>

        <!-- Sidebar Menu Toggle Button -->
        <button class="button-toggle-menu">
          <i class="mdi mdi-menu"></i>
        </button>

        <!-- Horizontal Menu Toggle Button -->
        <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
          <div class="lines">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </button>

        <ul class="list-unstyled topbar-menu float-end mb-0">
          <li class="dropdown notification-list d-lg-none">
            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
              <i class="ri-search-line noti-icon"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
              <form class="p-3">
                <input type="search" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
              </form>
            </div>
          </li>

          <li class="dropdown notification-list topbar-dropdown">
            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
              <img src="assets/images/flags/us.jpg" alt="user-image" class="me-0 me-sm-1" height="12">
              <span class="align-middle d-none d-lg-inline-block">English</span> <i class="mdi mdi-chevron-down d-none d-sm-inline-block align-middle"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu">

              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item notify-item">
                <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
              </a>

              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item notify-item">
                <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
              </a>

              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item notify-item">
                <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
              </a>

              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item notify-item">
                <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
              </a>

            </div>
          </li>

          <li class="notification-list d-none d-sm-inline-block">
            <a class="nav-link" href="javascript:void(0)" id="light-dark-mode">
              <i class="ri-moon-line noti-icon"></i>
            </a>
          </li>

          <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                    aria-expanded="false">
              <span class="account-user-avatar">
          <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
              </span>
              <span>
          <span class="account-user-name">Dominic Keller</span>
          <span class="account-position">Founder</span>
              </span>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
              <!-- item-->
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome !</h6>
              </div>

              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item notify-item">
                <i class="mdi mdi-account-circle me-1"></i>
                <span>My Account</span>
              </a>

              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item notify-item">
                <i class="mdi mdi-account-edit me-1"></i>
                <span>Settings</span>
              </a>

              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item notify-item">
                <i class="mdi mdi-lifebuoy me-1"></i>
                <span>Support</span>
              </a>

              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item notify-item">
                <i class="mdi mdi-lock-outline me-1"></i>
                <span>Lock Screen</span>
              </a>

              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item notify-item">
                <i class="mdi mdi-logout me-1"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>

        <!-- Topbar Search Form -->
        <div class="app-search dropdown">
          <form>
            <div class="input-group">
              <input type="search" class="form-control dropdown-toggle"  placeholder="Search..." id="top-search">
              <span class="mdi mdi-magnify search-icon"></span>
              <button class="input-group-text btn btn-primary" type="submit">Search</button>
            </div>
          </form>

          <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
            <!-- item-->
            <div class="dropdown-header noti-title">
              <h5 class="text-overflow mb-2">Found <span class="text-danger">17</span> results</h5>
            </div>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
              <i class="uil-notes font-16 me-1"></i>
              <span>Analytics Report</span>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
              <i class="uil-life-ring font-16 me-1"></i>
              <span>How can I help you?</span>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item">
              <i class="uil-cog font-16 me-1"></i>
              <span>User profile settings</span>
            </a>

            <!-- item-->
            <div class="dropdown-header noti-title">
              <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
            </div>

            <div class="notification-list">
              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item notify-item">
                <div class="d-flex">
                  <img class="d-flex me-2 rounded-circle" src="assets/images/users/avatar-2.jpg" alt="Generic placeholder image" height="32">
                  <div class="w-100">
                    <h5 class="m-0 font-14">Erwin Brown</h5>
                    <span class="font-12 mb-0">UI Designer</span>
                  </div>
                </div>
              </a>

              <!-- item-->
              <a href="javascript:void(0);" class="dropdown-item notify-item">
                <div class="d-flex">
                  <img class="d-flex me-2 rounded-circle" src="assets/images/users/avatar-5.jpg" alt="Generic placeholder image" height="32">
                  <div class="w-100">
                    <h5 class="m-0 font-14">Jacob Deo</h5>
                    <span class="font-12 mb-0">Developer</span>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ========== Topbar End ========== -->

    <!-- ========== Left Sidebar Start ========== -->
    <div class="leftside-menu">

      <!-- Logo Light -->
      <a href="index.html" class="logo logo-light">
        <span class="logo-lg">
          <img src="assets/images/logo.png" alt="logo" height="22">
        </span>
        <span class="logo-sm">
          <img src="assets/images/logo-sm.png" alt="small logo" height="22">
        </span>
      </a>

      <!-- Logo Dark -->
      <a href="index.html" class="logo logo-dark">
        <span class="logo-lg">
          <img src="assets/images/logo-dark.png" alt="dark logo" height="22">
        </span>
        <span class="logo-sm">
          <img src="assets/images/logo-dark-sm.png" alt="small logo" height="22">
        </span>
      </a>

        <!-- Sidebar Hover Menu Toggle Button -->
        <button type="button" class="bg-transparent button-sm-hover p-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
          <i class="ri-checkbox-blank-circle-line align-middle"></i>
        </button>

      <!-- Sidebar -left -->
      <div class="h-100" id="leftside-menu-container" data-simplebar>
        <!-- Leftbar User -->
        <div class="leftbar-user">
          <a href="pages-profile.html">
            <img src="assets/images/users/avatar-1.jpg" alt="user-image" height="42"
                    class="rounded-circle shadow-sm">
            <span class="leftbar-user-name">Dominic Keller</span>
          </a>
        </div>

        <!--- Sidemenu -->
        <ul class="side-nav">

          <li class="side-nav-title side-nav-item">Navigation</li>

          <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false"
                    aria-controls="sidebarDashboards" class="side-nav-link">
                <i class="uil-home-alt"></i>
                <span class="badge bg-success float-end">5</span>
                <span> Dashboards </span>
            </a>
            <div class="collapse" id="sidebarDashboards">
              <ul class="side-nav-second-level">
                <li>
                  <a href="dashboard-analytics.html">Analytics</a>
                </li>
                <li>
                  <a href="index.html">Ecommerce</a>
                </li>
                <li>
                  <a href="dashboard-projects.html">Projects</a>
                </li>
                <li>
                  <a href="dashboard-crm.html">CRM</a>
                </li>
                <li>
                  <a href="dashboard-wallet.html">E-Wallet</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="side-nav-title side-nav-item">Apps</li>

          <li class="side-nav-item">
            <a href="apps-calendar.html" class="side-nav-link">
              <i class="uil-calender"></i>
              <span> Calendar </span>
            </a>
          </li>

          <li class="side-nav-item">
            <a href="apps-chat.html" class="side-nav-link">
              <i class="uil-comments-alt"></i>
              <span> Chat </span>
            </a>
          </li>

          <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false" aria-controls="sidebarEmail"
                    class="side-nav-link">
              <i class="uil-envelope"></i>
              <span> Email </span>
              <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarEmail">
              <ul class="side-nav-second-level">
                <li>
                  <a href="apps-email-inbox.html">Inbox</a>
                </li>
                <li>
                  <a href="apps-email-read.html">Read Email</a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
        <!--- End Sidemenu -->

        <div class="clearfix"></div>
      </div>
    </div>
    <!-- ========== Left Sidebar End ========== -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
      <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

          <div class="row">
            <div class="col-12">
              <div class="page-title-box">
                <div class="page-title-right">
                  <form class="d-flex">
                    <div class="input-group">
                      <input type="text" class="form-control form-control-light" id="dash-daterange">
                      <span class="input-group-text bg-primary border-primary text-white">
                        <i class="mdi mdi-calendar-range font-13"></i>
                      </span>
                    </div>
                    <a href="javascript: void(0);" class="btn btn-primary ms-2">
                      <i class="mdi mdi-autorenew"></i>
                    </a>
                    <a href="javascript: void(0);" class="btn btn-primary ms-1">
                      <i class="mdi mdi-filter-variant"></i>
                    </a>
                  </form>
                </div>
                <h4 class="page-title">Layout Vertical</h4>
              </div>
            </div>
          </div>

        </div>
        <!-- container -->

      </div>
      <!-- content -->

      <!-- Footer Start -->
      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              {{ new Date().getFullYear() }} - {{ new Date().getFullYear() + 1 }} © Hyper - Coderthemes.com
            </div>
            <div class="col-md-6">
              <div class="text-md-end footer-links d-none d-md-block">
                <a href="javascript: void(0);">About</a>
                <a href="javascript: void(0);">Support</a>
                <a href="javascript: void(0);">Contact Us</a>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

  </div>
  <!-- END wrapper -->
</template>
