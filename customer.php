<?php

if (isset($_GET["delete"]) && $_GET["delete"] != "") {
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "rt_management";
    $koneksi = mysqli_connect($host, $user, $pass, $db);
    $deleteId = mysqli_real_escape_string($koneksi, $_GET["delete"]);
    $deleted = mysqli_query(
        $koneksi,
        "DELETE FROM residents WHERE id='$deleteId'",
    );
    mysqli_close($koneksi);
    header("Location: customer.php?deleted=" . ($deleted ? "1" : "0"));
    exit();
} ?>
<!doctype html>
<html lang="en">
  <!--begin::Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>AdminLTE 4 | Customer Form Elements</title>
    <!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="AdminLTE 4 | Customer Form Elements" />
    <meta name="author" content="ColorlibHQ" />
    <meta
      name="description"
      content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS."
    />
    <meta
      name="keywords"
      content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard"
    />
    <!--end::Primary Meta Tags-->
    <!--begin::Fonts-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
      integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
      crossorigin="anonymous"
    />
    <!--end::Fonts-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css"
      integrity="sha256-tZHrRjVqNSRyWg2wbppGnT833E/Ys0DHWGwT04GiqQg="
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(OverlayScrollbars)-->
    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
      integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI="
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(Bootstrap Icons)-->
    <!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="template/dist/css/adminlte.css" />
    <!--end::Required Plugin(AdminLTE)-->
  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      <!--begin::Header-->
      <nav class="app-header navbar navbar-expand bg-body">
        <!--begin::Container-->
        <div class="container-fluid">
          <!--begin::Start Navbar Links-->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                <i class="bi bi-list"></i>
              </a>
            </li>
            <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Home</a></li>
            <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Contact</a></li>
          </ul>
          <!--end::Start Navbar Links-->
          <!--begin::End Navbar Links-->
          <ul class="navbar-nav ms-auto">
            <!--begin::Navbar Search-->
            <li class="nav-item">
              <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="bi bi-search"></i>
              </a>
            </li>
            <!--end::Navbar Search-->
            <!--begin::Messages Dropdown Menu-->
            <li class="nav-item dropdown">
              <a class="nav-link" data-bs-toggle="dropdown" href="#">
                <i class="bi bi-chat-text"></i>
                <span class="navbar-badge badge text-bg-danger">3</span>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                <a href="#" class="dropdown-item">
                  <!--begin::Message-->
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <img
                        src="AdminLTE4/dist/assets/img/user1-128x128.jpg"
                        alt="User Avatar"
                        class="img-size-50 rounded-circle me-3"
                      />
                    </div>
                    <div class="flex-grow-1">
                      <h3 class="dropdown-item-title">
                        Brad Diesel
                        <span class="float-end fs-7 text-danger"
                          ><i class="bi bi-star-fill"></i
                        ></span>
                      </h3>
                      <p class="fs-7">Call me whenever you can...</p>
                      <p class="fs-7 text-secondary">
                        <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                      </p>
                    </div>
                  </div>
                  <!--end::Message-->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <!--begin::Message-->
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <img
                        src="AdminLTE4/dist/assets/img/user8-128x128.jpg"
                        alt="User Avatar"
                        class="img-size-50 rounded-circle me-3"
                      />
                    </div>
                    <div class="flex-grow-1">
                      <h3 class="dropdown-item-title">
                        John Pierce
                        <span class="float-end fs-7 text-secondary">
                          <i class="bi bi-star-fill"></i>
                        </span>
                      </h3>
                      <p class="fs-7">I got your message bro</p>
                      <p class="fs-7 text-secondary">
                        <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                      </p>
                    </div>
                  </div>
                  <!--end::Message-->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <!--begin::Message-->
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <img
                        src="AdminLTE4/dist/assets/img/user3-128x128.jpg"
                        alt="User Avatar"
                        class="img-size-50 rounded-circle me-3"
                      />
                    </div>
                    <div class="flex-grow-1">
                      <h3 class="dropdown-item-title">
                        Nora Silvester
                        <span class="float-end fs-7 text-warning">
                          <i class="bi bi-star-fill"></i>
                        </span>
                      </h3>
                      <p class="fs-7">The subject goes here</p>
                      <p class="fs-7 text-secondary">
                        <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                      </p>
                    </div>
                  </div>
                  <!--end::Message-->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
              </div>
            </li>
            <!--end::Messages Dropdown Menu-->
            <!--begin::Notifications Dropdown Menu-->
            <li class="nav-item dropdown">
              <a class="nav-link" data-bs-toggle="dropdown" href="#">
                <i class="bi bi-bell-fill"></i>
                <span class="navbar-badge badge text-bg-warning">15</span>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                <span class="dropdown-item dropdown-header">15 Notifications</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <i class="bi bi-envelope me-2"></i> 4 new messages
                  <span class="float-end text-secondary fs-7">3 mins</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <i class="bi bi-people-fill me-2"></i> 8 friend requests
                  <span class="float-end text-secondary fs-7">12 hours</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <i class="bi bi-file-earmark-fill me-2"></i> 3 new reports
                  <span class="float-end text-secondary fs-7">2 days</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer"> See All Notifications </a>
              </div>
            </li>
            <!--end::Notifications Dropdown Menu-->
            <!--begin::Fullscreen Toggle-->
            <li class="nav-item">
              <a class="nav-link" href="#" data-lte-toggle="fullscreen">
                <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
                <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none"></i>
              </a>
            </li>
            <!--end::Fullscreen Toggle-->
            <!--begin::User Menu Dropdown-->
            <li class="nav-item dropdown user-menu">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <img
                  src="AdminLTE4/dist/assets/img/user2-160x160.jpg"
                  class="user-image rounded-circle shadow"
                  alt="User Image"
                />
                <span class="d-none d-md-inline">Alexander Pierce</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                <!--begin::User Image-->
                <li class="user-header text-bg-primary">
                  <img
                    src="../AdminLTE4/dist/assets/img/user2-160x160.jpg"
                    class="rounded-circle shadow"
                    alt="User Image"
                  />
                  <p>
                    Alexander Pierce - Web Developer
                    <small>Member since Nov. 2023</small>
                  </p>
                </li>
                <!--end::User Image-->
                <!--begin::Menu Body-->
                <li class="user-body">
                  <!--begin::Row-->
                  <div class="row">
                    <div class="col-4 text-center"><a href="#">Followers</a></div>
                    <div class="col-4 text-center"><a href="#">Sales</a></div>
                    <div class="col-4 text-center"><a href="#">Friends</a></div>
                  </div>
                  <!--end::Row-->
                </li>
                <!--end::Menu Body-->
                <!--begin::Menu Footer-->
                <li class="user-footer">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                  <a href="#" class="btn btn-default btn-flat float-end">Sign out</a>
                </li>
                <!--end::Menu Footer-->
              </ul>
            </li>
            <!--end::User Menu Dropdown-->
          </ul>
          <!--end::End Navbar Links-->
        </div>
        <!--end::Container-->
      </nav>
      <!--end::Header-->
      <!--begin::Sidebar-->
      <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="../index.html" class="brand-link">
            <!--begin::Brand Image-->
            <img
              src="AdminLTE4/dist/assets/img/AdminLTELogo.png"
              alt="AdminLTE Logo"
              class="brand-image opacity-75 shadow"
            />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">AdminLTE 4</span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="menu"
              data-accordion="false"
            >
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                    Dashboard
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../index.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Dashboard v1</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../index2.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Dashboard v2</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../index3.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Dashboard v3</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="../generate/theme.html" class="nav-link">
                  <i class="nav-icon bi bi-palette"></i>
                  <p>Theme Generate</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-box-seam-fill"></i>
                  <p>
                    Widgets
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../widgets/small-box.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Small Box</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../widgets/info-box.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>info Box</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../widgets/cards.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Cards</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-clipboard-fill"></i>
                  <p>
                    Layout Options
                    <span class="nav-badge badge text-bg-secondary me-3">6</span>
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../layout/unfixed-sidebar.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Default Sidebar</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../layout/fixed-sidebar.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Fixed Sidebar</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../layout/fixed-header.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Fixed Header</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../layout/fixed-footer.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Fixed Footer</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../layout/fixed-complete.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Fixed Complete</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../layout/layout-custom-area.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Layout <small>+ Custom Area </small></p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../layout/sidebar-mini.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Sidebar Mini</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../layout/collapsed-sidebar.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Sidebar Mini <small>+ Collapsed</small></p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../layout/logo-switch.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Sidebar Mini <small>+ Logo Switch</small></p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../layout/layout-rtl.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Layout RTL</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-tree-fill"></i>
                  <p>
                    UI Elements
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../UI/general.html" class="nav-link active">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>General</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../UI/icons.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Icons</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../UI/timeline.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Timeline</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                  <i class="nav-icon bi bi-pencil-square"></i>
                  <p>
                    Forms
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../forms/general.html" class="nav-link active">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>General Elements</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-table"></i>
                  <p>
                    Tables
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../tables/simple.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Simple Tables</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-header">EXAMPLES</li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-box-arrow-in-right"></i>
                  <p>
                    Auth
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon bi bi-box-arrow-in-right"></i>
                      <p>
                        Version 1
                        <i class="nav-arrow bi bi-chevron-right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="../examples/login.html" class="nav-link">
                          <i class="nav-icon bi bi-circle"></i>
                          <p>Login</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="../examples/register.html" class="nav-link">
                          <i class="nav-icon bi bi-circle"></i>
                          <p>Register</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon bi bi-box-arrow-in-right"></i>
                      <p>
                        Version 2
                        <i class="nav-arrow bi bi-chevron-right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="../examples/login-v2.html" class="nav-link">
                          <i class="nav-icon bi bi-circle"></i>
                          <p>Login</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="../examples/register-v2.html" class="nav-link">
                          <i class="nav-icon bi bi-circle"></i>
                          <p>Register</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/lockscreen.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Lockscreen</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-header">DOCUMENTATIONS</li>
              <li class="nav-item">
                <a href="../docs/introduction.html" class="nav-link">
                  <i class="nav-icon bi bi-download"></i>
                  <p>Installation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../docs/layout.html" class="nav-link">
                  <i class="nav-icon bi bi-grip-horizontal"></i>
                  <p>Layout</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../docs/color-mode.html" class="nav-link">
                  <i class="nav-icon bi bi-star-half"></i>
                  <p>Color Mode</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-ui-checks-grid"></i>
                  <p>
                    Components
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../docs/components/main-header.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Main Header</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../docs/components/main-sidebar.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Main Sidebar</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-filetype-js"></i>
                  <p>
                    Javascript
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../docs/javascript/treeview.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Treeview</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="../docs/browser-support.html" class="nav-link">
                  <i class="nav-icon bi bi-browser-edge"></i>
                  <p>Browser Support</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../docs/how-to-contribute.html" class="nav-link">
                  <i class="nav-icon bi bi-hand-thumbs-up-fill"></i>
                  <p>How To Contribute</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../docs/faq.html" class="nav-link">
                  <i class="nav-icon bi bi-question-circle-fill"></i>
                  <p>FAQ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../docs/license.html" class="nav-link">
                  <i class="nav-icon bi bi-patch-check-fill"></i>
                  <p>License</p>
                </a>
              </li>
              <li class="nav-header">MULTI LEVEL EXAMPLE</li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-circle-fill"></i>
                  <p>Level 1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-circle-fill"></i>
                  <p>
                    Level 1
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Level 2</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>
                        Level 2
                        <i class="nav-arrow bi bi-chevron-right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="nav-icon bi bi-record-circle-fill"></i>
                          <p>Level 3</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="nav-icon bi bi-record-circle-fill"></i>
                          <p>Level 3</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="nav-icon bi bi-record-circle-fill"></i>
                          <p>Level 3</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Level 2</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-circle-fill"></i>
                  <p>Level 1</p>
                </a>
              </li>
              <li class="nav-header">LABELS</li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-circle text-danger"></i>
                  <p class="text">Important</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-circle text-warning"></i>
                  <p>Warning</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-circle text-info"></i>
                  <p>Informational</p>
                </a>
              </li>
            </ul>
            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>
      <!--end::Sidebar-->
      <!--begin::App Main-->



<!-- Koneksi database  -->

  <?php
  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "rt_management";
  $koneksi = mysqli_connect($host, $user, $pass, $db);

  if (!$koneksi) {
      die("Koneksi gagal: " . mysqli_connect_error());
  }

  $editMode = false;
  $editResident = [
      "id" => "",
      "name" => "",
      "nik" => "",
      "kk_number" => "",
      "gender" => "",
      "birth_date" => "",
      "religion" => "",
      "occupation" => "",
      "education" => "",
      "marital_status" => "",
      "status_in_family" => "",
      "address" => "",
      "rt_number" => "",
      "rw_number" => "",
  ];
  if (isset($_GET["id"]) && $_GET["id"] != "") {
      $editMode = true;
      $id = mysqli_real_escape_string($koneksi, $_GET["id"]);
      $result = mysqli_query(
          $koneksi,
          "SELECT * FROM residents WHERE id='$id' LIMIT 1",
      );
      if ($result && mysqli_num_rows($result) > 0) {
          $editResident = mysqli_fetch_assoc($result);
      }
  }

  // Proses hapus data
  if (isset($_GET["delete"]) && $_GET["delete"] != "") {
      $deleteId = mysqli_real_escape_string($koneksi, $_GET["delete"]);
      mysqli_query($koneksi, "DELETE FROM rt_management WHERE id='$deleteId'");
      header("Location: customer.php");
      exit();
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $id = isset($_POST["id"])
          ? mysqli_real_escape_string($koneksi, $_POST["id"])
          : "";
      $name = mysqli_real_escape_string($koneksi, $_POST["name"]);
      $nik = mysqli_real_escape_string($koneksi, $_POST["nik"]);
      $kkNumber = mysqli_real_escape_string($koneksi, $_POST["kkNumber"]);
      $gender = mysqli_real_escape_string($koneksi, $_POST["gender"]);
      $birthDate = mysqli_real_escape_string($koneksi, $_POST["birthDate"]);
      $religion = mysqli_real_escape_string($koneksi, $_POST["religion"]);
      $occupation = mysqli_real_escape_string($koneksi, $_POST["occupation"]);
      $education = mysqli_real_escape_string($koneksi, $_POST["education"]);
      $maritalStatus = mysqli_real_escape_string(
          $koneksi,
          $_POST["maritalStatus"],
      );
      $statusInFamily = mysqli_real_escape_string(
          $koneksi,
          $_POST["statusInFamily"],
      );
      $address = mysqli_real_escape_string($koneksi, $_POST["address"]);
      $rtNumber = mysqli_real_escape_string($koneksi, $_POST["rtNumber"]);
      $rwNumber = mysqli_real_escape_string($koneksi, $_POST["rwNumber"]);

      if ($id) {
          // Update existing customer
          $query = "UPDATE residents SET 
            name='$name', 
            nik='$nik',
            kk_number='$kkNumber', 
            gender='$gender', 
            birth_date='$birthDate', 
            religion='$religion',
            occupation='$occupation', 
            education='$education', 
            marital_status='$maritalStatus', 
            status_in_family='$statusInFamily', 
            address='$address', 
            rt_number='$rtNumber', 
            rw_number='$rwNumber'
            WHERE id='$id'";
            $simpan = mysqli_query($koneksi, $query);
      } else {
          // Insert new customer
          $query = "INSERT INTO residents (name, nik, kk_number, gender, birth_date, religion, occupation, education, marital_status, status_in_family, address, rt_number, rw_number) 
          VALUES ('$name', '$nik', '$kkNumber', '$gender', '$birthDate', '$religion', '$occupation', '$education', '$maritalStatus', '$statusInFamily', '$address', '$rtNumber', '$rwNumber')";
          $simpan = mysqli_query($koneksi, $query);
      }
  }

  // Untuk value form
  $name = $editMode
      ? htmlspecialchars($editResident["name"])
      : (isset($_POST["name"])
          ? htmlspecialchars($_POST["name"])
          : "");
  $nik = $editMode
      ? htmlspecialchars($editResident["nik"])
      : (isset($_POST["nik"])
          ? htmlspecialchars($_POST["nik"])
          : "");
  $kkNumber = $editMode
      ? htmlspecialchars($editResident["kk_number"])
      : (isset($_POST["kk_number"])
          ? htmlspecialchars($_POST["kk_number"])
          : "");
  $gender = $editMode
      ? htmlspecialchars($editResident["gender"])
      : (isset($_POST["gender"])
          ? htmlspecialchars($_POST["gender"])
          : "");
  $birthDate = $editMode
      ? htmlspecialchars($editResident["birth_date"])
      : (isset($_POST["birth_date"])
          ? htmlspecialchars($_POST["birth_date"])
          : "");        
  $religion = $editMode
      ? htmlspecialchars($editResident["religion"])
      : (isset($_POST["religion"])
          ? htmlspecialchars($_POST["religion"])
          : "");
  $occupation = $editMode
      ? htmlspecialchars($editResident["occupation"])
      : (isset($_POST["occupation"])
          ? htmlspecialchars($_POST["occupation"])
          : "");
  $education = $editMode
      ? htmlspecialchars($editResident["education"])
      : (isset($_POST["education"])
          ? htmlspecialchars($_POST["education"])
          : "");
  $maritalStatus = $editMode
      ? htmlspecialchars($editResident["marital_status"])
      : (isset($_POST["marital_status"])
          ? htmlspecialchars($_POST["marital_status"])
          : "");
  $statusInFamily = $editMode
      ? htmlspecialchars($editResident["status_in_family"])
      : (isset($_POST["status_in_family"])
          ? htmlspecialchars($_POST["status_in_family"])
          : "");
  $address = $editMode
      ? htmlspecialchars($editResident["address"])
      : (isset($_POST["address"])
          ? htmlspecialchars($_POST["address"])
          : "");
  $rtNumber = $editMode
      ? htmlspecialchars($editResident["rt_number"])
      : (isset($_POST["rt_number"])
          ? htmlspecialchars($_POST["rt_number"])
          : "");
  $rwNumber = $editMode
      ? htmlspecialchars($editResident["rw_number"])
      : (isset($_POST["rw_number"])
          ? htmlspecialchars($_POST["rw_number"])
          : "");
  ?>
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Customer Form</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Customer Form</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row g-4">
              <!--begin::Col-->
              <div class="col-12">
                <div class="callout callout-info">
               <?php // Notifikasi simpan data

if (isset($_GET["deleted"])) {
                   if ($_GET["deleted"] == "1") {
                       echo "Data berhasil dihapus!";
                   } else {
                       echo "Gagal menghapus data!";
                   }
               } elseif (isset($simpan)) {
                   if ($simpan) {
                       echo "<h5>Data saved successfully!</h5>";
                   } else {
                       echo "<h5>No Data Saved</h5>";
                   }
               } ?>
                
                </div>
              </div>
              <!--end::Col-->


              <!--begin::Col-->
              <div class="col-md-12">
               
                <!--begin::Customer Form-->
                <div class="card card-warning card-outline mb-4">
                  <!--begin::Header-->
                  <div class="card-header"><div class="card-title">Resident Form</div></div>
                  <!--end::Header-->
                  <!--begin::Form-->
                  <form action ="customer.php" method="post" class="form-horizontal">
                    <input type="hidden" name="id" id="id" value="<?php echo $id; ?>" />
                    <!--begin::Body-->
                    <div class="card-body">
                      <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Full Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name='name' id="name" value="<?php echo $name; ?>" required />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-10">
                          <input type="number" class="form-control" name='nik' value="<?php echo $nik; ?>" id="nik" required />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="kkNumber" class="col-sm-2 col-form-label">No. Kartu Keluarga</label>
                        <div class="col-sm-10">
                          <input type="number" class="form-control" name='kkNumber' id="kkNumber" value="<?php echo $kkNumber; ?>" required/>
                        </div>
                      </div>
                      <div class="row mb-3">
                          <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                          <div class="col-sm-10">
                            <select class="form-select" id="gender" name="gender" required>
                              <option selected disabled value="" <?= ($gender == "") ? "selected" : "" ?>>Choose...</option>
                              <option <?= ($gender == "Laki-laki") ? "selected" : "" ?>>Laki-laki</option>
                              <option <?= ($gender == "Perempuan") ? "selected" : "" ?>>Perempuan</option>
                            </select>
                          </div>
                      </div>
                      <div class="row mb-3">
                        <label for="birthDate" class="col-sm-2 col-form-label">Birth Date</label>
                        <div class="col-sm-10">
                          <input type="date" name='birthDate' class="form-control" id="birthDate" value="<?php echo $birthDate; ?>" required />
                        </div>
                      </div>
                      <div class="row mb-3">
                          <label for="religion" class="col-sm-2 col-form-label">Religion</label>
                          <div class="col-sm-10">
                            <select class="form-select" id="religion" name="religion" required> 
                              <option selected disabled value="" <?= ($religion == "") ? "selected" : "" ?>>Choose...</option>
                              <option <?= ($religion == "Islam") ? "selected" : "" ?>>Islam</option>
                              <option <?= ($religion == "Katolik") ? "selected" : "" ?>>Katolik</option>
                              <option <?= ($religion == "Kristen") ? "selected" : "" ?>>Kristen</option>
                              <option <?= ($religion == "Buddha") ? "selected" : "" ?>>Buddha</option>
                              <option <?= ($religion == "Hindu") ? "selected" : "" ?>>Hindu</option>
                            </select>
                          </div>
                      </div>
                      <div class="row mb-3">
                          <label for="occupation" class="col-sm-2 col-form-label">Occupation</label>
                          <div class="col-sm-10">
                            <select class="form-select" id="occupation" name="occupation" required>
                              <option selected disabled value="" <?= ($occupation == "") ? "selected" : "" ?>>Choose...</option>
                              <option <?= ($occupation == "Karyawan Swasta") ? "selected" : "" ?>>Karyawan Swasta</option>
                              <option <?= ($occupation == "Ibu Rumah Tangga") ? "selected" : "" ?>>Ibu Rumah Tangga</option>
                              <option <?= ($occupation == "Mahasiswa") ? "selected" : "" ?>>Mahasiswa</option>
                              <option <?= ($occupation == "Guru") ? "selected" : "" ?>>Guru</option>
                              <option <?= ($occupation == "Pedagang") ? "selected" : "" ?>>Pedagang</option>
                              <option <?= ($occupation == "Tidak Bekerja") ? "selected" : "" ?>>Tidak Bekerja</option>
                              <option <?= ($occupation == "Pensiun") ? "selected" : "" ?>>Pensiun</option>
                            </select>
                          </div>
                      </div>
                      <div class="row mb-3">
                          <label for="education" class="col-sm-2 col-form-label">Education</label>
                          <div class="col-sm-10">
                            <select class="form-select" id="education" name="education" required>
                              <option selected disabled value="" <?= ($education == "") ? "selected" : "" ?>>Choose...</option>
                              <option <?= ($education == "SD") ? "selected" : "" ?>>SD</option>
                              <option <?= ($education == "SMP") ? "selected" : "" ?>>SMP</option>
                              <option <?= ($education == "SMA") ? "selected" : "" ?>>SMA</option>
                              <option <?= ($education == "SMK") ? "selected" : "" ?>>SMK</option>
                              <option <?= ($education == "D1") ? "selected" : "" ?>>D1</option>
                              <option <?= ($education == "D2") ? "selected" : "" ?>>D2</option>
                              <option <?= ($education == "D3") ? "selected" : "" ?>>D3</option>
                              <option <?= ($education == "D4/S1") ? "selected" : "" ?>>D4/S1</option>
                              <option <?= ($education == "S2") ? "selected" : "" ?>>S2</option>
                              <option <?= ($education == "S3") ? "selected" : "" ?>>S3</option>
                            </select>
                          </div>
                      </div>
                      <div class="row mb-3">
                          <label for="maritalStatus" class="col-sm-2 col-form-label">Marital Status</label>
                          <div class="col-sm-10">
                            <select class="form-select" id="maritalStatus" name="maritalStatus" required>
                              <option selected disabled value="" <?= ($maritalStatus == "") ? "selected" : "" ?>>Choose...</option>
                              <option <?= ($maritalStatus == "Belum Menikah") ? "selected" : "" ?>>Belum Menikah</option>
                              <option <?= ($maritalStatus == "Menikah") ? "selected" : "" ?>>Menikah</option>
                            </select>
                          </div>
                      </div>
                      <div class="row mb-3">
                          <label for="statusInFamily" class="col-sm-2 col-form-label">Status in Family</label>
                          <div class="col-sm-10">
                            <select class="form-select" id="statusInFamily" name="statusInFamily" required>
                              <option selected disabled value="" <?= ($statusInFamily == "") ? "selected" : "" ?>>Choose...</option>
                              <option <?= ($statusInFamily == "Kepala Keluarga") ? "selected" : "" ?>>Kepala Keluarga</option>
                              <option <?= ($statusInFamily == "Suami") ? "selected" : "" ?>>Suami</option>
                              <option <?= ($statusInFamily == "Istri") ? "selected" : "" ?>>Istri</option>
                              <option <?= ($statusInFamily == "Anak") ? "selected" : "" ?>>Anak</option>
                            </select>
                          </div>
                      </div>
                      <div class="row mb-3">
                        <label for="address" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <textarea name="address" class="form-control" id="address" value="<?php echo $address; ?>" required></textarea>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="rtNumber" class="col-sm-2 col-form-label">RT.</label>
                        <div class="col-sm-10">
                          <input type="number" class="form-control" name='rtNumber' id="rtNumber" value="<?php echo $rtNumber; ?>" required />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="rwNumber" class="col-sm-2 col-form-label">RW.</label>
                        <div class="col-sm-10">
                          <input type="number" class="form-control" name='rwNumber' id="rwNumber" value="<?php echo $rwNumber; ?>" required />
                        </div>
                      </div>
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-warning">Save</button>
                      <button type="reset" class="btn btn-danger float-end">Reset</button>
                    </div>
                    <!--end::Footer-->
                  </form>
                  <!--end::Form-->
                </div>
                <!--end::Customer Form-->

                <!-- Begin table  -->
              <div class="col-md-12">
                <div class="card mb-4">
                  <div class="card-header">
                    <h3 class="card-title">Customer List</h3>
                    <div class="card-tools">
                      <ul class="pagination pagination-sm float-end">
                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <table class="table table-bordered">
    <thead>
        <tr>
            <th style="width: 10px">#</th>
            <th>Full Name</th>
            <th>NIK</th>
            <th>No. Kartu Keluarga</th>
            <th>Gender</th>
            <th>Birth Data</th>
            <th>Religion</th>
            <th>Occupation</th>
            <th>Education</th>
            <th>Marital Status</th>
            <th>Status in Family</th>
            <th>Address</th>
            <th>RT.</th>
            <th>RW.</th>
            <th style="width: 40px">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = "SELECT * FROM residents ORDER BY id DESC";
        $result = mysqli_query($koneksi, $query);

        $nomor = 1; // Inisialisasi nomor urut

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) { ?>
                            <tr class="align-middle">
                              
                                <td><?php echo $nomor++; ?></td>
                                <td><?php echo htmlspecialchars(
                                    $row["name"],
                                ); ?></td>
                                <td><?php echo htmlspecialchars(
                                    $row["nik"],
                                ); ?></td>
                                <td><?php echo htmlspecialchars(
                                    $row["kk_number"],
                                ); ?></td>
                                <td><?php echo htmlspecialchars(
                                    $row["gender"],
                                ); ?></td>
                                <td><?php echo htmlspecialchars(
                                    $row["birth_date"],
                                ); ?></td>
                                <td><?php echo htmlspecialchars(
                                    $row["religion"],
                                ); ?></td>
                                <td><?php echo htmlspecialchars(
                                    $row["occupation"],
                                ); ?></td>
                                <td><?php echo htmlspecialchars(
                                    $row["education"],
                                ); ?></td>
                                <td><?php echo htmlspecialchars(
                                    $row["marital_status"],
                                ); ?></td>
                                <td><?php echo htmlspecialchars(
                                    $row["status_in_family"],
                                ); ?></td>
                                <td><?php echo htmlspecialchars(
                                    $row["address"],
                                ); ?></td>
                                <td><?php echo htmlspecialchars(
                                    $row["rt_number"],
                                ); ?></td>
                                <td><?php echo htmlspecialchars(
                                    $row["rw_number"],
                                ); ?></td>
                                <td>
                                    <a href="customer.php?id=<?php echo htmlspecialchars(
                                        $row["id"],
                                    ); ?>" class="btn btn-warning btn-sm">
                                        Edit
                                    </a>
                                    <a href="customer.php?delete=<?php echo htmlspecialchars(
                                        $row["id"],
                                    ); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            <?php }
            mysqli_free_result($result);
        } else {
            echo "<tr><td colspan='9'>Error: " .
                mysqli_error($koneksi) .
                "</td></tr>";
        }
        mysqli_close($koneksi);
        ?>
                </tbody>
            </table>
                  </div>
                  <!-- /.card-body -->
                </div>
              
              </div>
                <!-- Enf table -->
              </div>
              <!--end::Col-->
              <!--begin::Col-->
              <div class="col-md-6">
             
                <!--begin::Different Width-->
            
                <!--end::Different Width-->
             
              </div>
              <!--end::Col-->
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->
      <!--begin::Footer-->
      <footer class="app-footer">
        <!--begin::To the end-->
        <div class="float-end d-none d-sm-inline">Anything you want</div>
        <!--end::To the end-->
        <!--begin::Copyright-->
        <strong>
          Copyright &copy; 2014-2025&nbsp;
          <a href="https://adminlte.io" class="text-decoration-none">AdminLTE.io</a>.
        </strong>
        All rights reserved.
        <!--end::Copyright-->
      </footer>
      <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script
      src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js"
      integrity="sha256-dghWARbRe2eLlIJ56wNB+b760ywulqK3DzZYEpsg2fQ="
      crossorigin="anonymous"
    ></script>
    <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
      crossorigin="anonymous"
    ></script>
    <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="AdminLTE4/dist/js/adminlte.js"></script>
    <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
    <script>
      const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
      const Default = {
        scrollbarTheme: 'os-theme-light',
        scrollbarAutoHide: 'leave',
        scrollbarClickScroll: true,
      };
      document.addEventListener('DOMContentLoaded', function () {
        const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
        if (sidebarWrapper && OverlayScrollbarsGlobal?.OverlayScrollbars !== undefined) {
          OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
            scrollbars: {
              theme: Default.scrollbarTheme,
              autoHide: Default.scrollbarAutoHide,
              clickScroll: Default.scrollbarClickScroll,
            },
          });
        }
      });
    </script>
    <!--end::OverlayScrollbars Configure-->
    <!--end::Script-->
  </body>
  <!--end::Body-->
</html>
