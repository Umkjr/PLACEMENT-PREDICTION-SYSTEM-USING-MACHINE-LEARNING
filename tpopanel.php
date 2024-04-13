<?php 
session_start();
if($_SESSION['tpoid'] == NULL)
{
  echo '<script type="text/javascript">location.href = "login2.php";</script>';
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>AIKTC</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="tpo panel assets/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="tpo panel assets/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="tpo panel assets/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="tpo panel assets/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="tpo panel assets/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="tpo panel assets/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="tpo panel assets/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="logoicon.ico">
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.html"><img src="tpo panel assets/assets/images/logo.svg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="tpo panel assets/assets/images/logo.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="tpo panel assets/assets/images/faces/tpo2.png" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">TPC</h5>
                </div>
              </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="company.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Company</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link"  href="studentdata.php">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Student Data</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="approvStudent.php">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
              <span class="menu-title">Approved Student</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="tpo panel assets/assets/images/logo.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input type="text" class="form-control" placeholder="Search Company">
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">

              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="tpo panel assets/assets/images/faces/tpo2.png" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">TPC</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="logout.php">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                    <p class="preview-subject mb-1">Log out</p>
                    </div>
                  </a>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>

        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="tpo panel assets/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="tpo panel assets/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="tpo panel assets/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="tpo panel assets/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="tpo panel assets/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="tpo panel assets/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="tpo panel assets/assets/js/off-canvas.js"></script>
    <script src="tpo panel assets/assets/js/hoverable-collapse.js"></script>
    <script src="tpo panel assets/assets/js/misc.js"></script>
    <script src="tpo panel assets/assets/js/settings.js"></script>
    <script src="tpo panel assets/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="tpo panel assets/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>