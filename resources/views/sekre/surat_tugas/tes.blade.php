<!doctype html>
<html lang="en">

  <head>

    <meta charset="utf-8" />
    <title>Dashboard | Clivax - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Codebucks" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">


    <!-- dark layout js -->
    <script src="{{ asset('dist/assets/js/pages/layout.js') }}"></script>

    <!-- Bootstrap Css -->
    <link href="{{ asset('dist/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
      type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('dist/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- simplebar css -->
    <link href="{{ asset('dist/assets/libs/simplebar/simplebar.min.css') }}" rel="stylesheet">
    <!-- App Css-->
    <link href="{{ asset('dist/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

  </head>

  <body>

    <div id="layout-wrapper">


      <!-- Start topbar -->
      <header id="page-topbar">
        <div class="navbar-header">

          <!-- Logo -->

          <!-- Start Navbar-Brand -->
          <div class="navbar-logo-box">
            <a href="index.html" class="logo logo-dark">
              <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="logo-sm-dark" height="20">
              </span>
              <span class="logo-lg">
                <img src="assets/images/logo-dark.png" alt="logo-dark" height="18">
              </span>
            </a>

            <a href="index.html" class="logo logo-light">
              <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="logo-sm-light" height="20">
              </span>
              <span class="logo-lg">
                <img src="assets/images/logo-light.png" alt="logo-light" height="18">
              </span>
            </a>

            <button type="button" class="btn btn-sm top-icon sidebar-btn" id="sidebar-btn">
              <i class="mdi mdi-menu-open align-middle fs-19"></i>
            </button>
          </div>
          <!-- End navbar brand -->

          <!-- Start menu -->
          <div class="d-flex justify-content-between menu-sm px-3 ms-auto">
            <div class="d-flex align-items-center gap-2">
              <div class="dropdown d-none d-lg-block">
                <button type="button" class="btn btn-primary btn-sm fs-14 d-inline" data-bs-toggle="dropdown">
                  Apps
                  <i class="mdi mdi-chevron-down align-middle"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-start dropdown-menu-animated">
                  <a href="#" class="dropdown-item">
                    <div class="dropdown-icon"><i class="fa fa-boxes"></i></div>
                    <span class="dropdown-content">Inventory Manager</span>
                    <div class="dropdown-addon"><span class="badge badge-warning rounded-pill">20</span></div>
                  </a>
                  <div class="dropdown-submenu">
                    <a href="#" class="dropdown-item">
                      <div class="dropdown-icon"><i class="fa fa-project-diagram"></i></div>
                      <span class="dropdown-content">Project manager</span>
                      <div class="dropdown-addon"><i class="mdi mdi-chevron-right align-middle"></i></div>
                    </a>
                    <div class="dropdown-submenu-menu dropdown-submenu-end">
                      <a href="#" class="dropdown-item"><i class="dropdown-bullet"></i> <span
                          class="dropdown-content">Create project</span> </a>
                      <a href="#" class="dropdown-item"><i class="dropdown-bullet"></i> <span
                          class="dropdown-content">Delete project</span> </a>
                      <a href="#" class="dropdown-item"><i class="dropdown-bullet"></i> <span
                          class="dropdown-content">Ongoing project</span> </a>
                      <a href="#" class="dropdown-item"><i class="dropdown-bullet"></i> <span
                          class="dropdown-content">Completed project</span> </a>
                      <a href="#" class="dropdown-item"><i class="dropdown-bullet"></i> <span
                          class="dropdown-content">Urgent project</span></a>
                    </div>
                  </div>
                  <div class="dropdown-submenu">
                    <a href="#" class="dropdown-item">
                      <div class="dropdown-icon"><i class="fa fa-tasks"></i></div>
                      <span class="dropdown-content">Task manager</span>
                      <div class="dropdown-addon"><i class="mdi mdi-chevron-right align-middle"></i></div>
                    </a>
                    <div class="dropdown-submenu-menu dropdown-submenu-end">
                      <a href="#" class="dropdown-item"><i class="dropdown-bullet"></i> <span
                          class="dropdown-content">Show task</span> </a>
                      <a href="#" class="dropdown-item"><i class="dropdown-bullet"></i> <span
                          class="dropdown-content">Assign task</span> </a>
                      <a href="#" class="dropdown-item"><i class="dropdown-bullet"></i> <span
                          class="dropdown-content">Assign member</span> </a>
                      <a href="#" class="dropdown-item"><i class="dropdown-bullet"></i> <span
                          class="dropdown-content">Completed task</span> </a>
                      <a href="#" class="dropdown-item"><i class="dropdown-bullet"></i> <span
                          class="dropdown-content">Urgent task</span></a>
                    </div>
                  </div>
                  <a href="#" class="dropdown-item">
                    <div class="dropdown-icon"><i class="fa fa-dollar-sign"></i></div>
                    <span class="dropdown-content">Invoice</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="apps-contact.html" class="dropdown-item">
                    <div class="dropdown-icon"><i class="fa fa-user-cog"></i></div>
                    <span class="dropdown-content">My Account</span>
                  </a>
                </div>
              </div>

              <div class="dropdown d-none d-lg-block">
                <button type="button" class="btn btn-primary btn-sm fs-14" data-bs-toggle="dropdown"
                  aria-haspopup="false" aria-expanded="false">
                  Features
                  <i class="mdi mdi-chevron-down align-middle"></i>
                </button>
                <div
                  class="dropdown-menu dropdown-menu-start dropdown-menu-lg-widest dropdown-menu-widest dropdown-menu-animated bg-primary-subtle overflow-hidden">
                  <div class="dropdown-row justify-content-center">
                    <div class="p-2 menu-image">
                      <img src="assets/images/mega-menu.png" alt="mega-menu image" class="img-fluid"
                        style="height: 200px;">
                    </div>
                    <div class="dropdown-col">
                      <h2 class="">Welcome back!</h2>
                      <p class="text-muted mb-0">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, commodi hic qui aspernatur
                        doloremque quos tempora placeat culpa illum, voluptatibus delectus provident cumque
                        aliquid enim, laborum aliquam. Quod, perferendis unde.
                      </p>
                      <div class="mt-3">
                        <a href="auth-login.html" class="btn btn-dark btn-wider">Login</a>
                      </div>
                    </div>
                    <div class="dropdown-col border-start border-primary border-opacity-50">
                      <h4 class="dropdown-header">Features</h4>
                      <div class="grid-nav grid-nav-action">
                        <div class="grid-nav-row">
                          <a href="index.html" class="grid-nav-item">
                            <div class="grid-nav-icon"><i class="far fa-window-restore"></i></div>
                            <span class="grid-nav-content">Dashboard</span>
                          </a>
                          <a href="apps-kanban.html" class="grid-nav-item">
                            <div class="grid-nav-icon"><i class="far fa-clipboard"></i></div>
                            <span class="grid-nav-content">TODO List</span>
                          </a>
                          <a href="#" class="grid-nav-item">
                            <div class="grid-nav-icon"><i class="far fa-question-circle"></i></div>
                            <span class="grid-nav-content">Help Center</span>
                          </a>
                        </div>
                        <div class="grid-nav-row">
                          <a href="#" class="grid-nav-item">
                            <div class="grid-nav-icon"><i class="far fa-images"></i></div>
                            <span class="grid-nav-content">Gallery</span>
                          </a>
                          <a href="#" class="grid-nav-item">
                            <div class="grid-nav-icon"><i class="far fa-chart-bar"></i></div>
                            <span class="grid-nav-content">Scrumboard</span>
                          </a>
                          <a href="#" class="grid-nav-item">
                            <div class="grid-nav-icon"><i class="far fa-bookmark"></i></div>
                            <span class="grid-nav-content">Docs</span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="dropdown-col border-start border-primary border-opacity-50">
                      <h4 class="dropdown-header">Tools</h4>
                      <a href="#" class="dropdown-item"><i
                          class="mdi mdi-checkbox-blank-circle align-middle dropdown-bullet me-2"></i> <span
                          class="dropdown-content">Components</span> </a>
                      <a href="#" class="dropdown-item"><i
                          class="mdi mdi-checkbox-blank-circle align-middle dropdown-bullet me-2"></i> <span
                          class="dropdown-content">Form Wizard</span> </a>
                      <a href="#" class="dropdown-item"><i
                          class="mdi mdi-checkbox-blank-circle align-middle dropdown-bullet me-2"></i> <span
                          class="dropdown-content">Documentation</span> </a>
                      <a href="#" class="dropdown-item"><i
                          class="mdi mdi-checkbox-blank-circle align-middle dropdown-bullet me-2"></i> <span
                          class="dropdown-content">Knowledge Base</span> </a>
                      <a href="#" class="dropdown-item"><i
                          class="mdi mdi-checkbox-blank-circle align-middle dropdown-bullet me-2"></i> <span
                          class="dropdown-content">Inventory Manager</span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="d-flex align-items-center gap-2">
              <!--Start App Search-->
              <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                  <input type="text" class="form-control" placeholder="Search...">
                  <span class="fab fa-sistrix fs-17 align-middle"></span>
                </div>
              </form>
              <!--End App Search-->

              <!-- Start Notification -->
              <div class="dropdown d-inline-block">
                <button type="button" class="btn btn-sm top-icon" id="page-header-notifications-dropdown"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fas fa-bell align-middle"></i>
                  <span class="btn-marker"><i class="marker marker-dot text-danger"></i><span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-md dropdown-menu-end p-0"
                  aria-labelledby="page-header-notifications-dropdown">
                  <div class="p-3 bg-info">
                    <div class="row align-items-center">
                      <div class="col">
                        <h6 class="text-white m-0"><i class="far fa-bell me-2"></i> Notifications </h6>
                      </div>
                      <div class="col-auto">
                        <a href="#!" class="badge bg-info-subtle text-info"> 8+</a>
                      </div>
                    </div>
                  </div>
                  <div data-simplebar style="max-height: 230px;">
                    <a href="" class="text-reset notification-item">
                      <div class="d-flex">
                        <div class="avatar avatar-xs avatar-label-primary me-3">
                          <span class="rounded fs-16">
                            <i class="mdi mdi-file-document-outline"></i>
                          </span>
                        </div>
                        <div class="flex-1">
                          <h6 class="mb-1">New report has been recived</h6>
                          <div class="fs-12 text-muted">
                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                          </div>
                        </div>
                        <i class="mdi mdi-chevron-right align-middle ms-2"></i>
                      </div>
                    </a>
                    <a href="" class="text-reset notification-item">
                      <div class="d-flex">
                        <div class="avatar avatar-xs avatar-label-success me-3">
                          <span class="rounded fs-16">
                            <i class="mdi mdi-cart-variant"></i>
                          </span>
                        </div>
                        <div class="flex-1">
                          <h6 class="mb-1">Last order was completed</h6>
                          <div class="fs-12 text-muted">
                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hour ago</p>
                          </div>
                        </div>
                        <i class="mdi mdi-chevron-right align-middle ms-2"></i>
                      </div>
                    </a>
                    <a href="" class="text-reset notification-item">
                      <div class="d-flex">
                        <div class="avatar avatar-xs avatar-label-danger me-3">
                          <span class="rounded fs-16">
                            <i class="mdi mdi-account-group"></i>
                          </span>
                        </div>
                        <div class="flex-1">
                          <h6 class="mb-1">Completed meeting canceled</h6>
                          <div class="fs-12 text-muted">
                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 5 hour ago</p>
                          </div>
                        </div>
                        <i class="mdi mdi-chevron-right align-middle ms-2"></i>
                      </div>
                    </a>
                    <a href="" class="text-reset notification-item">
                      <div class="d-flex">
                        <div class="avatar avatar-xs avatar-label-warning me-3">
                          <span class="rounded fs-16">
                            <i class="mdi mdi-send-outline"></i>
                          </span>
                        </div>
                        <div class="flex-1">
                          <h6 class="mb-1">New feedback received</h6>
                          <div class="fs-12 text-muted">
                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 6 hour ago</p>
                          </div>
                        </div>
                        <i class="mdi mdi-chevron-right align-middle ms-2"></i>
                      </div>
                    </a>
                    <a href="" class="text-reset notification-item">
                      <div class="d-flex">
                        <div class="avatar avatar-xs avatar-label-secondary me-3">
                          <span class="rounded fs-16">
                            <i class="mdi mdi-download-box"></i>
                          </span>
                        </div>
                        <div class="flex-1">
                          <h6 class="mb-1">New update was available</h6>
                          <div class="fs-12 text-muted">
                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 day ago</p>
                          </div>
                        </div>
                        <i class="mdi mdi-chevron-right align-middle ms-2"></i>
                      </div>
                    </a>
                    <a href="" class="text-reset notification-item">
                      <div class="d-flex">
                        <div class="avatar avatar-xs avatar-label-info me-3">
                          <span class="rounded fs-16">
                            <i class="mdi mdi-hexagram-outline"></i>
                          </span>
                        </div>
                        <div class="flex-1">
                          <h6 class="mb-1">Your password was changed</h6>
                          <div class="fs-12 text-muted">
                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 2 day ago</p>
                          </div>
                        </div>
                        <i class="mdi mdi-chevron-right align-middle ms-2"></i>
                      </div>
                    </a>
                  </div>
                  <div class="p-2 border-top">
                    <div class="d-grid">
                      <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                        <i class="mdi mdi-arrow-right-circle me-1"></i> View More..
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Notification -->

              <!-- Start Activities -->
              <div class="d-inline-block activities">
                <button type="button" class="btn btn-sm top-icon" data-bs-toggle="offcanvas"
                  data-bs-target="#offcanvas-rightsidabar">
                  <i class="fas fa-table align-middle"></i>
                </button>
              </div>
              <!-- End Activities -->

              <!-- Start Profile -->
              <div class="dropdown d-inline-block">
                <button type="button" class="btn btn-sm top-icon p-0" id="page-header-user-dropdown"
                  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img class="rounded avatar-2xs p-0" src="assets/images/users/avatar-6.png" alt="Header Avatar">
                </button>
                <div
                  class="dropdown-menu dropdown-menu-wide dropdown-menu-end dropdown-menu-animated overflow-hidden py-0">
                  <div class="card border-0">
                    <div class="card-header bg-primary rounded-0">
                      <div class="rich-list-item w-100 p-0">
                        <div class="rich-list-prepend">
                          <div class="avatar avatar-label-light avatar-circle">
                            <div class="avatar-display"><i class="fa fa-user-alt"></i></div>
                          </div>
                        </div>
                        <div class="rich-list-content">
                          <h3 class="rich-list-title text-white">Charlie Stone</h3>
                          <span class="rich-list-subtitle text-white">admin@codubucks.in</span>
                        </div>
                        <div class="rich-list-append"><span class="badge badge-label-light fs-6">6+</span></div>
                      </div>
                    </div>
                    <div class="card-body p-0">
                      <div class="grid-nav grid-nav-flush grid-nav-action grid-nav-no-rounded">
                        <div class="grid-nav-row">
                          <a href="apps-contact.html" class="grid-nav-item">
                            <div class="grid-nav-icon"><i class="far fa-address-card"></i></div>
                            <span class="grid-nav-content">Profile</span>
                          </a>
                          <a href="#!" class="grid-nav-item">
                            <div class="grid-nav-icon"><i class="far fa-comments"></i></div>
                            <span class="grid-nav-content">Messages</span>
                          </a>
                          <a href="#!" class="grid-nav-item">
                            <div class="grid-nav-icon"><i class="far fa-clone"></i></div>
                            <span class="grid-nav-content">Activities</span>
                          </a>
                        </div>
                        <div class="grid-nav-row">
                          <a href="#!" class="grid-nav-item">
                            <div class="grid-nav-icon"><i class="far fa-calendar-check"></i></div>
                            <span class="grid-nav-content">Tasks</span>
                          </a>
                          <a href="#!" class="grid-nav-item">
                            <div class="grid-nav-icon"><i class="far fa-sticky-note"></i></div>
                            <span class="grid-nav-content">Notes</span>
                          </a>
                          <a href="#!" class="grid-nav-item">
                            <div class="grid-nav-icon"><i class="far fa-bell"></i></div>
                            <span class="grid-nav-content">Notification</span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer card-footer-bordered rounded-0"><a href="auth-login.html"
                        class="btn btn-label-danger">Sign out</a></div>
                  </div>
                </div>
              </div>
              <!-- End Profile -->
            </div>
          </div>
          <!-- End menu -->
        </div>
      </header>
      <!-- End topbar -->

      <!-- ========== Left Sidebar Start ========== -->
      <div class="sidebar-left">

        <div data-simplebar class="h-100">

          <!--- Sidebar-menu -->
          <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="left-menu list-unstyled" id="side-menu">
              <li class="mm-active">
                <a href="index.html" class="">
                  <i class="fas fa-desktop"></i>
                  <span>Dashboard</span>
                </a>
              </li>

              <li class="menu-title">Elements</li>

              <li>
                <a href="javascript: void(0);" class="has-arrow ">
                  <i class="fa fa-palette"></i>
                  <span>Base</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="ui-accordions.html"><i
                        class="mdi mdi-checkbox-blank-circle align-middle"></i>Accordions</a></li>
                  <li><a href="ui-alerts.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Alerts</a>
                  </li>
                  <li><a href="ui-badge.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Badges</a>
                  </li>
                  <li><a href="ui-breadcrumb.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>
                      Breadcrumb</a></li>
                  <li><a href="ui-buttons.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Buttons</a>
                  </li>
                  <li><a href="ui-buttons-group.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>
                      Button Group</a></li>
                  <li><a href="ui-cards.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Cards</a>
                  </li>
                  <li><a href="ui-colors.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Colors</a>
                  </li>
                  <li><a href="ui-dropdowns.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>
                      Dropdowns</a></li>
                  <li><a href="ui-list-group.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> List
                      Group</a></li>
                  <li><a href="ui-maker.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>Makers</a>
                  </li>
                  <li><a href="ui-modals.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Modals</a>
                  </li>
                  <li><a href="ui-nav.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Navigation</a>
                  </li>
                  <li><a href="ui-offcanvas.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>
                      Offcavas</a></li>
                  <li><a href="ui-pagination.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>
                      Pagination</a></li>
                  <li><a href="ui-placeholder.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>
                      Placeholder</a></li>
                  <li><a href="ui-popover.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Popover</a>
                  </li>
                  <li><a href="ui-progress-bars.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>
                      Progress bar</a></li>
                  <li><a href="ui-spinner.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>
                      Spinners</a></li>
                  <li><a href="ui-tabs.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Tabs</a></li>
                  <li><a href="ui-tables.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Tables</a>
                  </li>
                  <li><a href="ui-tooltip.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>
                      Tooltips</a></li>
                  <li><a href="ui-typography.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>
                      Typography</a></li>
                </ul>
              </li>

              <li>
                <a href="javascript: void(0);" class="has-arrow ">
                  <i class="fa fa-adjust"></i>
                  <span>Advanced</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="ui-avatar.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Avatar</a>
                  </li>
                  <li><a href="ui-blockUI.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Block
                      UI</a></li>
                  <li><a href="ui-slick-carousel.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>
                      Carousel</a></li>
                  <li><a href="ui-chat.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Chat</a></li>
                  <li><a href="ui-context-menu.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>
                      Context menu</a></li>
                  <li><a href="ui-grid-nav.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Grid
                      nav</a></li>
                  <li><a href="ui-rich-list.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Rich
                      list</a></li>
                  <li><a href="ui-sortable.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>
                      Sortable</a></li>
                  <li><a href="ui-sweet-alert.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>
                      Sweetalert 2</a></li>
                  <li><a href="ui-timeline.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>
                      Timeline</a></li>
                  <li><a href="ui-toaster.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Toaster</a>
                  </li>
                  <li><a href="ui-treeview.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Tree
                      View</a></li>
                </ul>
              </li>

              <li>
                <a href="javascript: void(0);" class="has-arrow">
                  <i class="fa fa-icons"></i>
                  <span>Icons</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="icons-materialdesign.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>
                      Material Design</a></li>
                  <li><a href="icons-fontawesome.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Font
                      awesome 5</a></li>
                </ul>
              </li>

              <li>
                <a href="javascript: void(0);" class="has-arrow ">
                  <i class="fa fa-window-restore"></i>
                  <span>Cards</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="ui-card-base.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Base</a>
                  </li>
                  <li><a href="ui-card-draggable.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>
                      Draggable</a></li>
                  <li><a href="ui-card-tab.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Tab</a>
                  </li>
                  <li><a href="ui-card-tool.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Tool</a>
                  </li>
                </ul>
              </li>

              <li>
                <a href="javascript: void(0);" class="has-arrow ">
                  <i class="fa fa-shapes"></i>
                  <span>Widget</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="widget-general.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>
                      General</a></li>
                  <li><a href="widget-chart.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Chart</a>
                  </li>
                </ul>
              </li>

              <li class="menu-title">Data</li>

              <li>
                <a href="javascript: void(0);" class="has-arrow "><i class="fa fa-chart-pie align-middle"></i>
                  Apexcharts</a>
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="charts-apex-line.html"><i class="mdi mdi-checkbox-blank-circle"></i> Line</a></li>
                  <li><a href="charts-apex-area.html"><i class="mdi mdi-checkbox-blank-circle"></i> Area</a></li>
                  <li><a href="charts-apex-column.html"><i class="mdi mdi-checkbox-blank-circle"></i> Column</a></li>
                  <li><a href="charts-apex-bar.html"><i class="mdi mdi-checkbox-blank-circle"></i> Bar</a></li>
                  <li><a href="charts-apex-mixed.html"><i class="mdi mdi-checkbox-blank-circle"></i> Mixed/Combo</a>
                  </li>
                  <li><a href="charts-apex-range.html"><i class="mdi mdi-checkbox-blank-circle"></i> Range Area</a>
                  </li>
                  <li><a href="charts-apex-timeline.html"><i class="mdi mdi-checkbox-blank-circle"></i> Timeline</a>
                  </li>
                  <li><a href="charts-apex-candle.html"><i class="mdi mdi-checkbox-blank-circle"></i> Candlestick</a>
                  </li>
                  <li><a href="charts-apex-box&whisker.html"><i class="mdi mdi-checkbox-blank-circle"></i> Box &
                      Whisker</a></li>
                  <li><a href="charts-apex-pie.html"><i class="mdi mdi-checkbox-blank-circle"></i> Pie/Donut</a></li>
                  <li><a href="charts-apex-radar.html"><i class="mdi mdi-checkbox-blank-circle"></i> Radar</a></li>
                  <li><a href="charts-apex-polar.html"><i class="mdi mdi-checkbox-blank-circle"></i> Polar Area</a>
                  </li>
                  <li><a href="charts-apex-radial.html"><i class="mdi mdi-checkbox-blank-circle"></i>
                      Radial/Circle</a></li>
                  <li><a href="charts-apex-bubble.html"><i class="mdi mdi-checkbox-blank-circle"></i> Bubble</a></li>
                  <li><a href="charts-apex-scatter.html"><i class="mdi mdi-checkbox-blank-circle"></i> Scatter</a>
                  </li>
                  <li><a href="charts-apex-heatmap.html"><i class="mdi mdi-checkbox-blank-circle"></i> Heatmap</a>
                  </li>
                  <li><a href="charts-apex-treemap.html"><i class="mdi mdi-checkbox-blank-circle"></i> Treemap</a>
                  </li>
                </ul>
              </li>

              <li>
                <a href="javascript: void(0);" class="has-arrow ">
                  <i class="fas fa-table"></i>
                  <span>Datatable</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                  <li>
                    <a href="javascript: void(0);" class="has-arrow "><i
                        class="mdi mdi-checkbox-blank-circle align-middle"></i> Basic</a>
                    <ul class="sub-menu" aria-expanded="false">
                      <li><a href="datatable-base.html"><i class="mdi mdi-circle-outline"></i> Base</a></li>
                      <li><a href="datatable-footer.html"><i class="mdi mdi-circle-outline"></i> Footer</a></li>
                      <li><a href="datatable-scrollable.html"><i class="mdi mdi-circle-outline"></i> Scrollable</a>
                      </li>
                      <li><a href="datatable-pagination.html"><i class="mdi mdi-circle-outline"></i> Pagination</a>
                      </li>
                      <li><a href="datatable-page-length.html"><i class="mdi mdi-circle-outline"></i> Length menu</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="#!" class="has-arrow "><i class="mdi mdi-checkbox-blank-circle align-middle"></i>
                      Advanced</a>
                    <ul class="sub-menu" aria-expanded="false">
                      <li><a href="datatable-adv-col-render.html"><i class="mdi mdi-circle-outline"></i> Column
                          rendering</a></li>
                      <li><a href="datatable-adv-col-visibility.html"><i class="mdi mdi-circle-outline"></i> Column
                          visibility</a></li>
                      <li><a href="datatable-adv-footer-callback.html"><i class="mdi mdi-circle-outline"></i> Footer
                          callback</a></li>
                      <li><a href="datatable-adv-multi-control.html"><i class="mdi mdi-circle-outline"></i> Multiple
                          controls</a></li>
                      <li><a href="datatable-adv-row-callback.html"><i class="mdi mdi-circle-outline"></i> Row
                          callback</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="#!" class="has-arrow "><i class="mdi mdi-checkbox-blank-circle align-middle"></i>
                      Extension</a>
                    <ul class="sub-menu" aria-expanded="false">
                      <li><a href="datatable-ext-autofill.html"><i class="mdi mdi-circle-outline"></i> Auto fill</a>
                      </li>
                      <li><a href="datatable-ext-buttons.html"><i class="mdi mdi-circle-outline"></i> Buttons</a></li>
                      <li><a href="datatable-ext-col-reorder.html"><i class="mdi mdi-circle-outline"></i> Column
                          reorder</a></li>
                      <li><a href="datatable-ext-fixed-header.html"><i class="mdi mdi-circle-outline"></i> Fixed
                          header</a></li>
                      <li><a href="datatable-ext-fixed-column.html"><i class="mdi mdi-circle-outline"></i> Fixed
                          column</a></li>
                      <li><a href="datatable-ext-keytable.html"><i class="mdi mdi-circle-outline"></i> Key table</a>
                      </li>
                      <li><a href="datatable-ext-row-group.html"><i class="mdi mdi-circle-outline"></i> Row group</a>
                      </li>
                      <li><a href="datatable-ext-row-reorder.html"><i class="mdi mdi-circle-outline"></i> Row
                          reorder</a></li>
                      <li><a href="datatable-ext-scrollable.html"><i class="mdi mdi-circle-outline"></i>
                          Scrollable</a></li>
                      <li><a href="datatable-ext-searchpanes.html"><i class="mdi mdi-circle-outline"></i> Search
                          panes</a></li>
                      <li><a href="datatable-ext-select.html"><i class="mdi mdi-circle-outline"></i> Select</a></li>
                    </ul>
                  </li>
                </ul>
              </li>

              <li class="menu-title">Form</li>

              <li><a href="form-base.html"><i class="fa fa-dice"></i> <span>Base</span></a></li>

              <li>
                <a href="#!" class="has-arrow"><i class="fa fa-fill-drip"></i> <span>Advanced</span></a>
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="form-autosize.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>
                      Autosize</a></li>
                  <li><a href="form-bs-maxlength.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>
                      Bootstrap maxlength</a></li>
                  <li><a href="form-clipboard.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>
                      Clipboard</a></li>
                  <li><a href="form-datepicker.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Date
                      picker</a></li>
                  <li><a href="form-datetimepicker.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>
                      Date time picker</a></li>
                  <li><a href="form-rangepicker.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Range
                      picker</a></li>
                  <li><a href="form-inputmask.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Input
                      mask</a></li>
                  <li><a href="form-select2.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>
                      Select2</a></li>
                  <li><a href="form-rangeslider.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>
                      Slider</a></li>
                  <li><a href="form-touchspin.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>
                      Touchspin</a></li>
                  <li><a href="form-typeahead.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>
                      Typeahead</a></li>
                </ul>
              </li>

              <li>
                <a href="#!" class="has-arrow"><i class="fa fa-pencil-ruler"></i> <span>Editors</span></a>
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="form-basic-editors.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>
                      Basic</a></li>
                  <li><a href="form-bubble-editors.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>
                      Bubble</a></li>
                  <li><a href="form-complex-editors.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>
                      Complex</a></li>
                </ul>
              </li>

              <li><a href="form-input-group.html"><i class="fa fa-th-list"></i> <span>Group</span></a></li>
              <li><a href="form-layout.html"><i class="fa fa-ruler-combined"></i> <span>Layout</span></a></li>
              <li><a href="form-validation.html"><i class="fa fa-check"></i> <span>Validation</span></a></li>

              <li class="menu-title">Pages</li>

              <li>
                <a href="javascript: void(0);" class="has-arrow ">
                  <i class="fa fa-unlock-alt"></i>
                  <span>Authentication</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="auth-login.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Login</a>
                  </li>
                  <li><a href="auth-register.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i>
                      Register</a></li>
                </ul>
              </li>

              <li>
                <a href="javascript: void(0);" class="has-arrow ">
                  <i class="fa fa-unlink"></i>
                  <span>Error</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="pages-404.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Error
                      404</a></li>
                  <li><a href="pages-500.html"><i class="mdi mdi-checkbox-blank-circle align-middle"></i> Error
                      500</a></li>
                </ul>
              </li>

              <li>
                <a href="pages-starter.html"><i class="fas fa-pager"></i> <span>Starter Page</span></a>
              </li>

              <li>
                <a href="pages-pricing.html"><i class="fas fa-dollar-sign"></i> <span>Pricing</span></a>
              </li>

              <li>
                <a href="pages-faqs.html"><i class="fas fa-question"></i> <span>FAQs</span></a>
              </li>

              <li>
                <a href="pages-comingsoon.html"><i class="fas fa-tape"></i> <span>Coming Soon</span></a>
              </li>

              <li class="menu-title">Apps</li>

              <li>
                <a href="apps-chat.html" class="">
                  <i class="fas fa-comment"></i>
                  <span>Chat</span>
                </a>
              </li>

              <li>
                <a href="apps-kanban.html" class="">
                  <i class="fas fa-grip-horizontal"></i>
                  <span>Kanban Board</span>
                </a>
              </li>

              <li>
                <a href="apps-contact.html" class="">
                  <i class="fas fa-id-badge"></i>
                  <span>Contacts</span>
                </a>
              </li>
            </ul>
          </div>
          <!-- Sidebar -->
        </div>
      </div>
      <!-- Left Sidebar End -->


      <!-- Start right Content here -->

      <div class="main-content">
        <div class="page-content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                  <div>
                    <h4 class="fs-16 fw-semibold mb-1 mb-md-2">Good Morning, <span class="text-primary">Jonas!</span>
                    </h4>
                    <p class="text-muted mb-0">Here's what's happening with your store today.</p>
                  </div>
                  <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                      <li class="breadcrumb-item"><a href="javascript: void(0);">Clivax</a></li>
                      <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
            <!--    end row -->

            <div class="row">
              <div class="col-xxl-9">
                <div class="card">
                  <div class="card-header">
                    <div class="card-icon">
                      <i class="fas fa-cart-plus fs-14 text-muted"></i>
                    </div>
                    <h4 class="card-title mb-0">Overall Sales</h4>
                    <div class="dropdown card-addon">
                      <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="mdi mdi-dots-sidebar"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="d-flex justify-content-between align-content-end shadow-lg p-3">
                          <div>
                            <p class="text-muted text-truncate mb-2">Total sales</p>
                            <h5 class="mb-0">$12,253</h5>
                          </div>
                          <div class="text-success float-end">
                            <i class="mdi mdi-menu-up"> </i>2.2%
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-4">
                        <div class="d-flex justify-content-between align-content-end shadow-lg p-3">
                          <div>
                            <p class="text-muted text-truncate mb-2">Latest sales</p>
                            <h5 class="mb-0">$34,254</h5>
                          </div>
                          <div class="text-success float-end">
                            <i class="mdi mdi-menu-up"> </i>2.1%
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="d-flex justify-content-between align-content-end shadow-lg p-3">
                          <div>
                            <p class="text-muted text-truncate mb-2">Last sales</p>
                            <h5 class="mb-0">$32,695</h5>
                          </div>
                          <div class="text-success float-end">
                            <i class="mdi mdi-menu-up"> </i>1.8%
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div id="sales_figures" data-colors='["--bs-info", "--bs-success"]' class="apex-charts"
                      dir="ltr"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xl-4">
                    <div class="card bg-danger-subtle"
                      style="background: url('assets/images/dashboard/dashboard-shape-1.png'); background-repeat: no-repeat; background-position: bottom center; ">
                      <div class="card-body">
                        <div class="d-flex">
                          <div class="avatar avatar-sm avatar-label-danger">
                            <i class="mdi mdi-buffer mt-1"></i>
                          </div>
                          <div class="ms-3">
                            <p class="text-danger mb-1">Total balance</p>
                            <h4 class="mb-0">$1,452.55</h4>
                          </div>
                        </div>
                        <div class="hstack gap-2 mt-3">
                          <button class="btn btn-light">Transfer</button>
                          <button class="btn btn-info">Request</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4">
                    <div class="card bg-success-subtle"
                      style="background: url('assets/images/dashboard/dashboard-shape-2.png'); background-repeat: no-repeat; background-position: bottom center; ">
                      <div class="card-body">
                        <div class="d-flex">
                          <div class="avatar avatar-sm avatar-label-success">
                            <i class="mdi mdi-cash-usd-outline mt-1"></i>
                          </div>
                          <div class="ms-3">
                            <p class="text-success mb-1">Upcoming payments</p>
                            <h4 class="mb-0">$120</h4>
                          </div>
                        </div>
                        <div class="mt-3 mb-2">
                          <p class="mb-0">4 not confirmed</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4">
                    <div class="card bg-info-subtle"
                      style="background: url('assets/images/dashboard/dashboard-shape-3.png'); background-repeat: no-repeat; background-position: bottom center; ">
                      <div class="card-body">
                        <div class="d-flex">
                          <div class="avatar avatar-sm avatar-label-info">
                            <i class="mdi mdi-webhook mt-1"></i>
                          </div>
                          <div class="ms-3">
                            <p class="text-info mb-1">Finished appt.</p>
                            <h4 class="mb-0">72</h4>
                          </div>
                        </div>
                        <div class="mt-3 mb-2">
                          <p class="mb-0"><span class="text-primary me-2 fs-14"><i
                                class="fas fa-caret-up me-1"></i>3.4%</span>vs last month</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end row -->
                <div class="row">
                  <div class="col-xl-8">
                    <div class="card">
                      <div class="card-header">
                        <div class="card-icon">
                          <i class="fas fa-hockey-puck fs-14 text-muted"></i>
                        </div>
                        <h4 class="card-title mb-0">Sales by product category</h4>
                      </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="row mb-2">
                              <div class="col-6">
                                <div>
                                  <p><i class="mdi mdi-brightness-5 text-primary me-2"></i>Clothes <span
                                      class="text-muted fs-14">-50%</span></p>
                                </div>
                              </div>
                              <div class="col-6">
                                <div>
                                  <p><i class="mdi mdi-briefcase-variant-outline text-danger me-2"></i>Kids <span
                                      class="text-muted fs-14">-50%</span></p>
                                </div>
                              </div>
                            </div>
                            <div class="row mb-2">
                              <div class="col-6">
                                <div>
                                  <p><i class="mdi mdi-cart-arrow-right text-info me-2"></i>Cosmetics <span
                                      class="text-muted fs-14">-50%</span></p>
                                </div>
                              </div>
                              <div class="col-6">
                                <div>
                                  <p><i class="mdi mdi-checkbox-multiple-blank text-warning me-2"></i>Men <span
                                      class="text-muted fs-14">-50%</span></p>
                                </div>
                              </div>
                            </div>
                            <div class="row mb-2">
                              <div class="col-6">
                                <div>
                                  <p><i class="mdi mdi-chess-queen text-success me-2"></i>Kitchen <span
                                      class="text-muted fs-14">-50%</span></p>
                                </div>
                              </div>
                              <div class="col-6">
                                <div>
                                  <p><i class="mdi mdi-church text-info me-2"></i>Decor <span
                                      class="text-muted fs-14">-50%</span></p>
                                </div>
                              </div>
                            </div>
                            <div class="row mb-2">
                              <div class="col-6">
                                <div>
                                  <p><i class="mdi mdi-city text-warning me-2"></i>Outdoor <span
                                      class="text-muted fs-14">-50%</span></p>
                                </div>
                              </div>
                              <div class="col-6">
                                <div>
                                  <p><i class="mdi mdi-currency-usd-circle text-primary me-2"></i>Lighting <span
                                      class="text-muted fs-14">-50%</span></p>
                                </div>
                              </div>
                            </div>
                            <div class="row mb-2">
                              <div class="col-6">
                                <div>
                                  <p><i class="mdi mdi-gamepad-circle text-danger me-2"></i>Dining <span
                                      class="text-muted fs-14">-50%</span></p>
                                </div>
                              </div>
                              <div class="col-6">
                                <div>
                                  <p><i class="mdi mdi-hexagon-multiple text-info me-2"></i>Women <span
                                      class="text-muted fs-14">-50%</span></p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div>
                              <div id="gradient_chart"
                                data-colors='["--bs-primary", "--bs-success", "--bs-warning", "--bs-danger", "--bs-info", "--bs-dark", "--bs-purple", "--bs-orange"]'
                                class="apex-charts" dir="ltr"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4">
                    <div class="card" style="overflow-y: auto; height: 304px;" data-simplebar="init">
                      <div class="card-header card-header-bordered">
                        <div class="card-icon text-muted"><i class="fa fa-clipboard-list fs-14"></i></div>
                        <h3 class="card-title">Recent activities</h3>
                        <div class="card-addon">
                          <button class="btn btn-sm btn-label-primary">See all</button>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="timeline timeline-timed">
                          <div class="timeline-item">
                            <span class="timeline-time">10:00</span>
                            <div class="timeline-pin"><i class="marker marker-circle text-primary"></i></div>
                            <div class="timeline-content">
                              <div>
                                <span>Meeting with</span>
                                <div class="avatar-group ms-2">
                                  <div class="avatar avatar-circle">
                                    <img src="assets/images/users/avatar-1.png" alt="Avatar image"
                                      class="avatar-2xs" />
                                  </div>
                                  <div class="avatar avatar-circle">
                                    <img src="assets/images/users/avatar-2.png" alt="Avatar image"
                                      class="avatar-2xs" />
                                  </div>
                                  <div class="avatar avatar-circle">
                                    <img src="assets/images/users/avatar-3.png" alt="Avatar image"
                                      class="avatar-2xs" />
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="timeline-item">
                            <span class="timeline-time">14:00</span>
                            <div class="timeline-pin"><i class="marker marker-circle text-danger"></i></div>
                            <div class="timeline-content">
                              <p class="mb-0">Received a new feedback on <a href="#">GoFinance</a> App
                                product.</p>
                            </div>
                          </div>
                          <div class="timeline-item">
                            <span class="timeline-time">15:20</span>
                            <div class="timeline-pin"><i class="marker marker-circle text-success"></i></div>
                            <div class="timeline-content">
                              <p class="mb-0">Lorem ipsum dolor sit amit,consectetur eiusmdd tempor incididunt ut
                                labore et dolore magna.</p>
                            </div>
                          </div>
                          <div class="timeline-item">
                            <span class="timeline-time">17:00</span>
                            <div class="timeline-pin"><i class="marker marker-circle text-info"></i></div>
                            <div class="timeline-content">
                              <p class="mb-0">Make Deposit <a href="#">USD 700</a> o ESL.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-12">
                    <div class="card" style="height: 495px; overflow: hidden auto;" data-simplebar="init">
                      <div class="card-header">
                        <div class="card-icon text-muted"><i class="fas fa-sync-alt fs-14"></i></div>
                        <h3 class="card-title">Order Progress</h3>
                        <div class="card-addon dropdown">
                          <button class="btn btn-label-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown"> <i
                              class="fas fa-filter fs-12 align-middle ms-1"></i></button>
                          <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">
                            <a class="dropdown-item" href="#">
                              <div class="dropdown-icon"><i class="fa fa-poll"></i></div>
                              <span class="dropdown-content">Today</span>
                            </a>
                            <a class="dropdown-item" href="#">
                              <div class="dropdown-icon"><i class="fa fa-chart-pie"></i></div>
                              <span class="dropdown-content">Yesterday</span>
                            </a>
                            <a class="dropdown-item" href="#">
                              <div class="dropdown-icon"><i class="fa fa-chart-line"></i></div>
                              <span class="dropdown-content">Week</span>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="table-responsive-md">
                          <table class="table text-nowrap mb-0">
                            <thead>
                              <tr>
                                <th>Order ID</th>
                                <th>Status</th>
                                <th>Operators</th>
                                <th>Location</th>
                                <th>Progress</th>
                                <th>Start date</th>
                                <th>Estimation</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="align-middle">837563</td>
                                <td class="align-middle"><i class="marker marker-dot m-0 me-2 text-primary"></i>
                                  Arrived</td>
                                <td class="align-middle">
                                  <div class="avatar-group">
                                    <div class="avatar avatar-circle">
                                      <img src="assets/images/users/avatar-1.png" alt="Avatar image"
                                        class="avatar-2xs">
                                    </div>
                                    <div class="avatar avatar-circle">
                                      <img src="assets/images/users/avatar-2.png" alt="Avatar image"
                                        class="avatar-2xs">
                                    </div>
                                    <div class="avatar avatar-circle">
                                      <img src="assets/images/users/avatar-3.png" alt="Avatar image"
                                        class="avatar-2xs">
                                    </div>
                                    <div class="avatar avatar-circle">
                                      <img src="assets/images/users/avatar-4.png" alt="Avatar image"
                                        class="avatar-2xs">
                                    </div>
                                    <div class="avatar avatar-circle">
                                      <img src="assets/images/users/avatar-5.png" alt="Avatar image"
                                        class="avatar-2xs">
                                    </div>
                                  </div>
                                </td>
                                <td class="align-middle">Tokyo</td>
                                <td class="align-middle">
                                  <div class="">
                                    <h6 class="">90%</h6>
                                    <div class="progress progress-sm">
                                      <div class="progress-bar bg-primary" style="width: 90%"></div>
                                    </div>
                                  </div>
                                </td>
                                <td class="align-middle">26/06/2023</td>
                                <td class="align-middle">27/06/2023</td>
                              </tr>
                              <tr>
                                <td class="align-middle">982365</td>
                                <td class="align-middle"><i class="marker marker-dot m-0 me-2 text-danger"></i>
                                  Pending</td>
                                <td class="align-middle">
                                  <div class="avatar-group">
                                    <div class="avatar avatar-circle">
                                      <img src="assets/images/users/avatar-6.png" alt="Avatar image"
                                        class="avatar-2xs">
                                    </div>
                                    <div class="avatar avatar-circle">
                                      <img src="assets/images/users/avatar-7.png" alt="Avatar image"
                                        class="avatar-2xs">
                                    </div>
                                    <div class="avatar avatar-circle">
                                      <img src="assets/images/users/avatar-8.png" alt="Avatar image"
                                        class="avatar-2xs">
                                    </div>
                                  </div>
                                </td>
                                <td class="align-middle">San Francisco</td>
                                <td class="align-middle">
                                  <div class="">
                                    <h6 class="">20%</h6>
                                    <div class="progress progress-sm">
                                      <div class="progress-bar bg-primary" style="width: 20%"></div>
                                    </div>
                                  </div>
                                </td>
                                <td class="align-middle">23/04/2023</td>
                                <td class="align-middle">28/04/2023</td>
                              </tr>
                              <tr>
                                <td class="align-middle">872048</td>
                                <td class="align-middle"><i class="marker marker-dot m-0 me-2 text-success"></i>
                                  Moving</td>
                                <td class="align-middle">
                                  <div class="avatar-group">
                                    <div class="avatar avatar-circle">
                                      <img src="assets/images/users/avatar-5.png" alt="Avatar image"
                                        class="avatar-2xs">
                                    </div>
                                    <div class="avatar avatar-circle">
                                      <img src="assets/images/users/avatar-4.png" alt="Avatar image"
                                        class="avatar-2xs">
                                    </div>
                                    <div class="avatar avatar-circle">
                                      <img src="assets/images/users/avatar-1.png" alt="Avatar image"
                                        class="avatar-2xs">
                                    </div>
                                    <div class="avatar avatar-circle">
                                      <img src="assets/images/users/avatar-2.png" alt="Avatar image"
                                        class="avatar-2xs">
                                    </div>
                                  </div>
                                </td>
                                <td class="align-middle">Edinburgh</td>
                                <td class="align-middle">
                                  <div class="">
                                    <h6 class="">75%</h6>
                                    <div class="progress progress-sm">
                                      <div class="progress-bar bg-primary" style="width: 75%"></div>
                                    </div>
                                  </div>
                                </td>
                                <td class="align-middle">26/04/2023</td>
                                <td class="align-middle">30/04/2023</td>
                              </tr>
                              <tr>
                                <td class="align-middle">324712</td>
                                <td class="align-middle"><i class="marker marker-dot m-0 me-2 text-warning"></i>
                                  Hold</td>
                                <td class="align-middle">
                                  <div class="avatar-group">
                                    <div class="avatar avatar-circle">
                                      <img src="assets/images/users/avatar-3.png" alt="Avatar image"
                                        class="avatar-2xs">
                                    </div>
                                    <div class="avatar avatar-circle">
                                      <img src="assets/images/users/avatar-4.png" alt="Avatar image"
                                        class="avatar-2xs">
                                    </div>
                                    <div class="avatar avatar-circle">
                                      <img src="assets/images/users/avatar-5.png" alt="Avatar image"
                                        class="avatar-2xs">
                                    </div>
                                  </div>
                                </td>
                                <td class="align-middle">Tokyo</td>
                                <td class="align-middle">
                                  <div class="">
                                    <h6 class="">30%</h6>
                                    <div class="progress progress-sm">
                                      <div class="progress-bar bg-primary" style="width: 30%"></div>
                                    </div>
                                  </div>
                                </td>
                                <td class="align-middle">26/06/2023</td>
                                <td class="align-middle">30/06/2023</td>
                              </tr>
                              <tr>
                                <td class="align-middle">128747</td>
                                <td class="align-middle"><i class="marker marker-dot m-0 me-2 text-success"></i>
                                  Moving</td>
                                <td class="align-middle">
                                  <div class="avatar-group">
                                    <div class="avatar avatar-circle">
                                      <img src="assets/images/users/avatar-6.png" alt="Avatar image"
                                        class="avatar-2xs">
                                    </div>
                                    <div class="avatar avatar-circle">
                                      <img src="assets/images/users/avatar-7.png" alt="Avatar image"
                                        class="avatar-2xs">
                                    </div>
                                    <div class="avatar avatar-circle">
                                      <img src="assets/images/users/avatar-8.png" alt="Avatar image"
                                        class="avatar-2xs">
                                    </div>
                                    <div class="avatar avatar-circle">
                                      <img src="assets/images/users/avatar-5.png" alt="Avatar image"
                                        class="avatar-2xs">
                                    </div>
                                  </div>
                                </td>
                                <td class="align-middle">New York</td>
                                <td class="align-middle">
                                  <div class="">
                                    <h6 class="">60%</h6>
                                    <div class="progress progress-sm">
                                      <div class="progress-bar bg-primary" style="width: 60%"></div>
                                    </div>
                                  </div>
                                </td>
                                <td class="align-middle">10/05/2023</td>
                                <td class="align-middle">15/05/2023</td>
                              </tr>
                              <tr>
                                <td class="align-middle">415423</td>
                                <td class="align-middle"><i class="marker marker-dot m-0 me-2 text-danger"></i>
                                  Pending</td>
                                <td class="align-middle">
                                  <div class="avatar-group">
                                    <div class="avatar avatar-circle">
                                      <img src="assets/images/users/avatar-2.png" alt="Avatar image"
                                        class="avatar-2xs">
                                    </div>
                                    <div class="avatar avatar-circle">
                                      <img src="assets/images/users/avatar-6.png" alt="Avatar image"
                                        class="avatar-2xs">
                                    </div>
                                  </div>
                                </td>
                                <td class="align-middle">London</td>
                                <td class="align-middle">
                                  <div class="">
                                    <h6 class="">72%</h6>
                                    <div class="progress progress-sm">
                                      <div class="progress-bar bg-primary" style="width: 72%"></div>
                                    </div>
                                  </div>
                                </td>
                                <td class="align-middle">05/06/2023</td>
                                <td class="align-middle">26/06/2023</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xxl-3">
                <div class="row">
                  <div class="col-xxl-12 col-xl-6 order-1">
                    <div class="card">
                      <div class="card-body">
                        <div class="float-end">
                          <select class="form-select form-select-sm">
                            <option selected>Apr</option>
                            <option value="1">Mar</option>
                            <option value="2">Feb</option>
                            <option value="3">Jan</option>
                          </select>
                        </div>
                        <h4 class="card-title mb-4">Sales Analytics</h4>
                        <div id="pattern_chart"
                          data-colors='["--bs-primary", "--bs-success", "--bs-warning", "--bs-danger", "--bs-info"]'
                          class="apex-charts" dir="ltr"></div>

                        <div class="row">
                          <div class="col-4">
                            <div class="text-center mt-4">
                              <p class="mb-2 text-truncate"><i
                                  class="mdi mdi-circle text-primary font-size-10 me-1"></i> Product A</p>
                              <h5>42 %</h5>
                            </div>
                          </div>
                          <div class="col-4">
                            <div class="text-center mt-4">
                              <p class="mb-2 text-truncate"><i
                                  class="mdi mdi-circle text-success font-size-10 me-1"></i> Product B</p>
                              <h5>26 %</h5>
                            </div>
                          </div>
                          <div class="col-4">
                            <div class="text-center mt-4">
                              <p class="mb-2 text-truncate"><i
                                  class="mdi mdi-circle text-warning font-size-10 me-1"></i> Product C</p>
                              <h5>42 %</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xxl-12 order-4 order-xxl-2">
                    <div class="card">
                      <div class="card-header">
                        <div class="card-icon text-muted"><i class="fa fa-bell"></i></div>
                        <h3 class="card-title">Notification</h3>
                        <div class="card-addon">
                          <div class="dropdown">
                            <button class="btn btn-sm py-0 btn-label-primary dropdown-toggle"
                              data-bs-toggle="dropdown">All <i
                                class="mdi mdi-chevron-down fs-17 align-middle ms-1"></i></button>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">
                              <a class="dropdown-item" href="#"><span
                                  class="badge badge-label-primary">Personal</span> </a>
                              <a class="dropdown-item" href="#"><span
                                  class="badge badge-label-info">Work</span> </a>
                              <a class="dropdown-item" href="#"><span
                                  class="badge badge-label-success">Important</span> </a>
                              <a class="dropdown-item" href="#"><span
                                  class="badge badge-label-danger">Company</span></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="rich-list rich-list-bordered rich-list-action">
                          <div class="rich-list-item">
                            <div class="rich-list-prepend">
                              <div class="avatar avatar-xs avatar-label-info">
                                <div class=""><i class="fa fa-file-invoice"></i></div>
                              </div>
                            </div>
                            <div class="rich-list-content">
                              <h4 class="rich-list-title mb-1">New report has been received</h4>
                              <p class="rich-list-subtitle mb-0">2 min ago</p>
                            </div>
                            <div class="rich-list-append">
                              <div class="dropdown">
                                <button class="btn btn-sm btn-label-secondary btn-icon" data-bs-toggle="dropdown"><i
                                    class="fa fa-ellipsis-h fs-12"></i></button>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">
                                  <a class="dropdown-item" href="#">
                                    <div class="dropdown-icon"><i class="fa fa-check"></i></div>
                                    <span class="dropdown-content">Mark as read</span>
                                  </a>
                                  <a class="dropdown-item" href="#">
                                    <div class="dropdown-icon"><i class="fa fa-trash-alt"></i></div>
                                    <span class="dropdown-content">Delete</span>
                                  </a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="#">
                                    <div class="dropdown-icon"><i class="fa fa-cog"></i></div>
                                    <span class="dropdown-content">Settings</span>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="rich-list-item">
                            <div class="rich-list-prepend">
                              <div class="avatar avatar-xs avatar-label-success">
                                <div class=""><i class="fa fa-shopping-basket"></i></div>
                              </div>
                            </div>
                            <div class="rich-list-content">
                              <h4 class="rich-list-title mb-1">Last order was completed</h4>
                              <p class="rich-list-subtitle mb-0">1 hrs ago</p>
                            </div>
                            <div class="rich-list-append">
                              <div class="dropdown">
                                <button class="btn btn-sm btn-label-secondary btn-icon" data-bs-toggle="dropdown"><i
                                    class="fa fa-ellipsis-h fs-12"></i></button>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">
                                  <a class="dropdown-item" href="#">
                                    <div class="dropdown-icon"><i class="fa fa-check"></i></div>
                                    <span class="dropdown-content">Mark as read</span>
                                  </a>
                                  <a class="dropdown-item" href="#">
                                    <div class="dropdown-icon"><i class="fa fa-trash-alt"></i></div>
                                    <span class="dropdown-content">Delete</span>
                                  </a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="#">
                                    <div class="dropdown-icon"><i class="fa fa-cog"></i></div>
                                    <span class="dropdown-content">Settings</span>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="rich-list-item">
                            <div class="rich-list-prepend">
                              <div class="avatar avatar-xs avatar-label-danger">
                                <div class=""><i class="fa fa-users"></i></div>
                              </div>
                            </div>
                            <div class="rich-list-content">
                              <h4 class="rich-list-title mb-1">Company meeting canceled</h4>
                              <p class="rich-list-subtitle mb-0">5 hrs ago</p>
                            </div>
                            <div class="rich-list-append">
                              <div class="dropdown">
                                <button class="btn btn-sm btn-label-secondary btn-icon" data-bs-toggle="dropdown"><i
                                    class="fa fa-ellipsis-h fs-12"></i></button>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">
                                  <a class="dropdown-item" href="#">
                                    <div class="dropdown-icon"><i class="fa fa-check"></i></div>
                                    <span class="dropdown-content">Mark as read</span>
                                  </a>
                                  <a class="dropdown-item" href="#">
                                    <div class="dropdown-icon"><i class="fa fa-trash-alt"></i></div>
                                    <span class="dropdown-content">Delete</span>
                                  </a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="#">
                                    <div class="dropdown-icon"><i class="fa fa-cog"></i></div>
                                    <span class="dropdown-content">Settings</span>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xxl-12 order-3">
                    <div class="card">
                      <div class="card-header">
                        <h4 class="card-title">Compaign Earnings</h4>
                        <div class="dropdown card-addon">
                          <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="mdi mdi-dots-sidebar"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="">
                          <div class="mb-3">
                            <div id="semi_donut_chart" data-colors='["--bs-primary", "--bs-warning"]'
                              class="apex-charts" dir="ltr"></div>
                          </div>

                          <div class="row justify-content-center mt-n5">
                            <div class="col-6">
                              <div class="p-2 shadow">
                                <p class="text-muted text-truncate mb-2">Earnings</p>
                                <h5 class="mb-0">$15.5k <span class="fs-12 text-primary ms-2"><i
                                      class="mdi mdi-arrow-up"></i> 17%</span></h5>
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="p-2 shadow">
                                <p class="text-muted text-truncate mb-2">Expenses</p>
                                <h5 class="mb-0">$11.4k <span class="fs-12 text-danger ms-2"><i
                                      class="mdi mdi-arrow-down"></i> 14%</span></h5>
                              </div>
                            </div>
                          </div>

                          <div>
                            <div id="bar_chart" data-colors='["--bs-danger"]' class="apex-charts"
                              dir="ltr"></div>
                          </div>

                          <div class="card"
                            style="background: url('assets/images/widgets-shape2.png'); background-position: center; background-repeat: no-repeat; background-size: cover;">
                            <div class="bg-overlay bg-primary-subtle rounded"></div>
                            <div class="card-body">
                              <div class="row align-items-center">
                                <div class="col-7">
                                  <h4 class="fs-16 mb-1">Need more idea? </h4>
                                  <p class="text-muted mb-0">Upgrade to pro max for added benefits.</p>
                                  <button class="btn btn-primary mt-4">Upgarde Now</button>
                                </div>
                                <div class="col-5">
                                  <img src="assets/images/dashboard/upgarde-1.png" alt=""
                                    class="img-fluid" style="height: 126px;">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xxl-12 col-xl-6 order-2 order-xxl-4">
                    <div class="card">
                      <div class="card-header">
                        <div class="card-icon">
                          <i class="fas fa-calendar-alt fs-14 text-muted"></i>
                        </div>
                        <h4 class="card-title mb-0">Monthly Sales</h4>
                      </div>
                      <div class="card-body">
                        <div id="monthly_states" data-colors='["--bs-success", "--bs-danger", "--bs-warning"]'
                          class="apex-charts" dir="ltr"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end row -->

            <div class="row">
              <div class="col-xxl-8 col-xl-6">
                <div class="card">
                  <div class="card-header">
                    <div class="card-icon">
                      <i class="fas fa-layer-group fs-14 text-muted"></i>
                    </div>
                    <h4 class="card-title mb-0">Top Selling</h4>
                  </div><!-- end card header -->

                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-sm-8">
                        <div id="products" data-colors='["--bs-primary"]' class="apex-charts" dir="ltr">
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="d-grid gap-2">
                          <div class="mb-3">
                            <div class="d-flex justify-content-between">
                              <span class="text-muted">48%</span>
                              <span class="text-muted">Sunday</span>
                            </div>
                            <div class="progress" style="height: 6px;">
                              <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary"
                                style="width: 48%;"></div>
                            </div>
                          </div>
                          <div class="mb-3">
                            <div class="d-flex justify-content-between">
                              <span class="text-muted">100%</span>
                              <span class="text-muted">Monday</span>
                            </div>
                            <div class="progress" style="height: 6px;">
                              <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary"
                                style="width: 100%;"></div>
                            </div>
                          </div>

                          <div class="mb-3">
                            <div class="d-flex justify-content-between">
                              <span class="text-muted">40%</span>
                              <span class="text-muted">Tuesday</span>
                            </div>
                            <div class="progress" style="height: 6px;">
                              <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
                                style="width: 40%;"></div>
                            </div>
                          </div>

                          <div class="mb-3">
                            <div class="d-flex justify-content-between">
                              <span class="text-muted">68%</span>
                              <span class="text-muted">Wednesday</span>
                            </div>
                            <div class="progress" style="height: 6px;">
                              <div class="progress-bar progress-bar-striped progress-bar-animated bg-info"
                                style="width: 68%;"></div>
                            </div>
                          </div>

                          <div class="mb-3">
                            <div class="d-flex justify-content-between">
                              <span class="text-muted">56%</span>
                              <span class="text-muted">Thursday</span>
                            </div>
                            <div class="progress" style="height: 6px;">
                              <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                style="width: 56%;"></div>
                            </div>
                          </div>

                          <div class="mb-3">
                            <div class="d-flex justify-content-between">
                              <span class="text-muted">80%</span>
                              <span class="text-muted">Friday</span>
                            </div>
                            <div class="progress" style="height: 6px;">
                              <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                                style="width: 80%;"></div>
                            </div>
                          </div>

                          <div class="">
                            <div class="d-flex justify-content-between">
                              <span class="text-muted">80%</span>
                              <span class="text-muted">Saturday</span>
                            </div>
                            <div class="progress" style="height: 6px;">
                              <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark"
                                style="width: 92%;"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><!-- end card-body -->
                </div>
                <!-- end card -->
              </div>
              <!-- end col -->
              <div class="col-xxl-4 col-xl-6">
                <div class="card">
                  <div class="card-header">
                    <div class="card-icon">
                      <i class="fas fa-user-friends fs-14 text-muted"></i>
                    </div>
                    <h4 class="card-title mb-0">User by traffic</h4>
                  </div><!-- end card header -->

                  <div class="card-body">
                    <div id="user_traffic" data-colors='["--bs-info", "--bs-primary"]' class="apex-charts"
                      dir="ltr"></div>
                  </div><!-- end card-body -->
                </div>
                <!-- end card -->
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->

            <div class="row">
              <div class="col-xl-6">
                <div class="card">
                  <div class="card-header justify-content-between">
                    <div class="card-icon text-muted"><i class="fas fa-sort-amount-up fs-14"></i></div>
                    <h4 class="card-title">Transaction History</h4>
                    <div class="card-addon dropdown">
                      <button class="btn btn-label-primary py-0 btn-sm dropdown-toggle"
                        data-bs-toggle="dropdown">Option <i
                          class="mdi mdi-chevron-down fs-17 align-middle ms-1"></i></button>
                      <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">
                        <a class="dropdown-item" href="#">
                          <div class="dropdown-icon"><i class="fa fa-poll"></i></div>
                          <span class="dropdown-content">Report</span>
                        </a>
                        <a class="dropdown-item" href="#">
                          <div class="dropdown-icon"><i class="fa fa-chart-pie"></i></div>
                          <span class="dropdown-content">Charts</span>
                        </a>
                        <a class="dropdown-item" href="#">
                          <div class="dropdown-icon"><i class="fa fa-chart-line"></i></div>
                          <span class="dropdown-content">Statistics</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                          <div class="dropdown-icon"><i class="fa fa-cog"></i></div>
                          <span class="dropdown-content">Settings</span>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="border-bottom text-center pb-3">
                      <div class="d-flex align-items-center justify-content-center">
                        <span class="text-primary fs-24 me-2"><i class="fas fa-arrow-circle-right"></i></span>
                        <h4 class="display-5 mb-0">54</h4>
                      </div>
                      <p class="text-muted mb-0">Pending Invoices</p>
                    </div>
                    <div class="d-flex justify-content-between py-3">
                      <p class="text-muted fs-5 mb-0">Invoice details</p>
                      <div class="dropdown">
                        <span class="dropdown-toggle" data-bs-toggle="dropdown">30 Days <i
                            class="mdi mdi-chevron-down fs-17 align-middle ms-1"></i></span>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">
                          <a class="dropdown-item" href="#">
                            <div class="dropdown-icon"><i class="fa fa-poll"></i></div>
                            <span class="dropdown-content">Report</span>
                          </a>
                          <a class="dropdown-item" href="#">
                            <div class="dropdown-icon"><i class="fa fa-chart-pie"></i></div>
                            <span class="dropdown-content">Charts</span>
                          </a>
                          <a class="dropdown-item" href="#">
                            <div class="dropdown-icon"><i class="fa fa-chart-line"></i></div>
                            <span class="dropdown-content">Statistics</span>
                          </a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">
                            <div class="dropdown-icon"><i class="fa fa-cog"></i></div>
                            <span class="dropdown-content">Settings</span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="hstack gap-4 justify-content-center pb-3">
                      <div class="text-center">
                        <div class="d-flex align-items-center justify-content-center">
                          <span class="text-info fs-22 me-2"><i class="fas fa-arrow-circle-up"></i></span>
                          <h4 class="display-6 mb-0">28</h4>
                        </div>
                        <p class="text-muted mb-0">Invoice In</p>
                      </div>

                      <div class="text-center">
                        <div class="d-flex align-items-center justify-content-center">
                          <span class="text-danger fs-22 me-2"><i class="fas fa-arrow-circle-down"></i></span>
                          <h4 class="display-6 mb-0">32</h4>
                        </div>
                        <p class="text-muted mb-0">Invoice Out</p>
                      </div>
                    </div>
                    <div>
                      <div class="d-flex align-items-center justify-content-between mb-2">
                        <h5 class="fs-6 mb-0"><i class="fas fa-arrow-circle-up text-info me-2"></i>Invoice 1</h5>
                        <p class="text-muted mb-0">+1,235</p>
                      </div>
                      <div class="d-flex align-items-center justify-content-between mb-2">
                        <h5 class="fs-6 mb-0"><i class="fas fa-arrow-circle-down text-danger me-2"></i>Invoice 2
                        </h5>
                        <p class="text-muted mb-0">-152</p>
                      </div>
                      <div class="d-flex align-items-center justify-content-between mb-2">
                        <h5 class="fs-6 mb-0"><i class="fas fa-arrow-circle-down text-danger me-2"></i>Invoice 3
                        </h5>
                        <p class="text-muted mb-0">+13,487</p>
                      </div>
                      <div class="d-flex align-items-center justify-content-between mb-2">
                        <h5 class="fs-6 mb-0"><i class="fas fa-arrow-circle-up text-info me-2"></i>Invoice 4</h5>
                        <p class="text-muted mb-0">-1,523</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6">
                <div class="card" style="height: 416px; overflow: hidden auto;" data-simplebar="init">
                  <div class="card-header card-header-bordered">
                    <div class="card-icon text-muted"><i class="fa fa-user-tag fs14"></i></div>
                    <h3 class="card-title">User Feeds</h3>
                  </div>
                  <div class="card-body">
                    <div class="rich-list rich-list-flush">
                      <div class="flex-column align-items-stretch">
                        <div class="rich-list-item">
                          <div class="rich-list-prepend">
                            <div class="avatar avatar-xs">
                              <div class=""><img src="assets/images/users/avatar-1.png" alt="Avatar image"
                                  class="avatar-2xs" /></div>
                            </div>
                          </div>
                          <div class="rich-list-content">
                            <h4 class="rich-list-title mb-1">Airi Satou</h4>
                            <p class="rich-list-subtitle mb-0">Accountant</p>
                          </div>
                          <div class="rich-list-append"><button class="btn btn-sm btn-label-primary">Follow</button>
                          </div>
                        </div>
                      </div>
                      <div class="flex-column align-items-stretch">
                        <div class="rich-list-item">
                          <div class="rich-list-prepend">
                            <div class="avatar avatar-xs">
                              <div class=""><img src="assets/images/users/avatar-2.png" alt="Avatar image"
                                  class="avatar-2xs" /></div>
                            </div>
                          </div>
                          <div class="rich-list-content">
                            <h4 class="rich-list-title mb-1">Cedric Kelly</h4>
                            <p class="rich-list-subtitle mb-0">Senior Developer</p>
                          </div>
                          <div class="rich-list-append"><button class="btn btn-sm btn-label-primary">Follow</button>
                          </div>
                        </div>
                      </div>
                      <div class="flex-column align-items-stretch">
                        <div class="rich-list-item">
                          <div class="rich-list-prepend">
                            <div class="avatar avatar-xs">
                              <div class=""><img src="assets/images/users/avatar-4.png" alt="Avatar image"
                                  class="avatar-2xs" /></div>
                            </div>
                          </div>
                          <div class="rich-list-content">
                            <h4 class="rich-list-title mb-1">Brielle Williamson</h4>
                            <p class="rich-list-subtitle mb-0">Integration Specialist</p>
                          </div>
                          <div class="rich-list-append"><button class="btn btn-sm btn-label-primary">Follow</button>
                          </div>
                        </div>
                      </div>
                      <div class="flex-column align-items-stretch">
                        <div class="rich-list-item">
                          <div class="rich-list-prepend">
                            <div class="avatar avatar-xs">
                              <div class=""><img src="assets/images/users/avatar-6.png" alt="Avatar image"
                                  class="avatar-2xs" /></div>
                            </div>
                          </div>
                          <div class="rich-list-content">
                            <h4 class="rich-list-title mb-1">Sonya Frost</h4>
                            <p class="rich-list-subtitle mb-0">Software Engineer</p>
                          </div>
                          <div class="rich-list-append"><button class="btn btn-sm btn-label-primary">Follow</button>
                          </div>
                        </div>
                      </div>
                      <div class="flex-column align-items-stretch">
                        <div class="rich-list-item">
                          <div class="rich-list-prepend">
                            <div class="avatar avatar-xs">
                              <div class=""><img src="assets/images/users/avatar-5.png" alt="Avatar image"
                                  class="avatar-2xs" /></div>
                            </div>
                          </div>
                          <div class="rich-list-content">
                            <h4 class="rich-list-title mb-1">Aarya Jeck</h4>
                            <p class="rich-list-subtitle mb-0">Developer</p>
                          </div>
                          <div class="rich-list-append"><button class="btn btn-sm btn-label-primary">Follow</button>
                          </div>
                        </div>
                      </div>
                      <div class="flex-column align-items-stretch">
                        <div class="rich-list-item">
                          <div class="rich-list-prepend">
                            <div class="avatar avatar-xs">
                              <div class=""><img src="assets/images/users/avatar-7.png" alt="Avatar image"
                                  class="avatar-2xs" /></div>
                            </div>
                          </div>
                          <div class="rich-list-content">
                            <h4 class="rich-list-title mb-1">Saniya Miroja</h4>
                            <p class="rich-list-subtitle mb-0">UI-UX Designer</p>
                          </div>
                          <div class="rich-list-append"><button class="btn btn-sm btn-label-primary">Follow</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end row -->
          </div>
          <!-- end container-fluid -->
        </div>
        <!-- End Page-content -->

        <footer class="footer">
          <div class="container-fluid">
            <div class="row align-items-center">
              <div class="col-sm-6">
                <script>
                  document.write(new Date().getFullYear())
                </script> © Clivax.
              </div>
              <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                  Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="http://codebucks.in/"
                    target="_blank" class="text-muted">Codebucks</a>
                </div>
              </div>
            </div>
          </div>
        </footer>

      </div>
      <!-- end main content-->
    </div>
    <!-- end layout-wrapper -->


    <div class="custom-setting bg-primary pe-0 d-flex flex-column rounded-start">
      <button type="button" class="btn btn-wide border-0 text-white fs-20 avatar-sm rounded-end-0"
        id="light-dark-mode">
        <i class="mdi mdi-brightness-7 align-middle"></i>
        <i class="mdi mdi-white-balance-sunny align-middle"></i>
      </button>
      <button type="button" class="btn btn-wide border-0 text-white fs-20 avatar-sm" data-toggle="fullscreen">
        <i class="mdi mdi-arrow-expand-all align-middle"></i>
      </button>
      <button type="button" class="btn btn-wide border-0 text-white fs-16 avatar-sm" id="layout-dir-btn">
        <span>RTL</span>
      </button>
    </div>


    <!-- Rightbar Sidebar -->
    <div class="offcanvas offcanvas-end" id="offcanvas-rightsidabar">
      <div class="card h-100 rounded-0" data-simplebar="init">
        <div class="card-header bg-light">
          <h6 class="card-title text-uppercase">Activities</h6>
          <div class="card-addon">
            <button class="btn btn-label-danger" data-bs-dismiss="offcanvas">
              <i class="fa fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="">
            <h3 class="card-title">Company summary</h3>
            <div class="border rounded p-2">
              <p class="text-muted mb-2">Server Load</p>
              <h4 class="fs-16 mb-2">489</h4>
              <div class="progress progress-sm" style="height:4px;">
                <div class="progress-bar bg-success" style="width: 49.4%"></div>
              </div>
              <p class="text-muted mb-0 mt-1">49.4% <span>Avg</span></p>
            </div>
            <div class="border rounded p-2">
              <p class="text-muted mb-2">Members online</p>
              <h4 class="fs-16 mb-2">3,450</h4>
              <div class="progress progress-sm" style="height:4px;">
                <div class="progress-bar bg-danger" style="width: 34.6%"></div>
              </div>
              <p class="text-muted mb-0 mt-1">34.6% <span>Avg</span></p>
            </div>
            <div class="border rounded p-2">
              <p class="text-muted mb-2">Today's revenue</p>
              <h4 class="fs-16 mb-2">$18,390</h4>
              <div class="progress progress-sm" style="height:4px;">
                <div class="progress-bar bg-warning" style="width: 20%"></div>
              </div>
              <p class="text-muted mb-0 mt-1">$37,578 <span>Avg</span></p>
            </div>
            <div class="border rounded p-2">
              <p class="text-muted mb-2">Expected profit</p>
              <h4 class="fs-16 mb-2">$23,461</h4>
              <div class="progress progress-sm" style="height:4px;">
                <div class="progress-bar bg-info" style="width: 60%"></div>
              </div>
              <p class="text-muted mb-0 mt-1">$23,461 <span>Avg</span></p>
            </div>
          </div>

          <div class="mt-4">
            <h3 class="card-title">Latest log</h3>
            <div class="timeline">
              <div class="timeline-item">
                <div class="timeline-pin"><i class="marker marker-dot text-primary"></i></div>
                <div class="timeline-content">
                  <div class="d-flex justify-content-between">
                    <p class="mb-0">12 new users registered</p>
                    <span class="text-muted">Just now</span>
                  </div>
                </div>
              </div>
              <div class="timeline-item">
                <div class="timeline-pin"><i class="marker marker-dot text-success"></i></div>
                <div class="timeline-content">
                  <div class="d-flex justify-content-between">
                    <p class="mb-0">System shutdown <span class="badge badge-label-success">pending</span></p>
                    <span class="text-muted">2 mins</span>
                  </div>
                </div>
              </div>
              <div class="timeline-item">
                <div class="timeline-pin"><i class="marker marker-dot text-primary"></i></div>
                <div class="timeline-content">
                  <div class="d-flex justify-content-between">
                    <p class="mb-0">New invoice received</p>
                    <span class="text-muted">3 mins</span>
                  </div>
                </div>
              </div>
              <div class="timeline-item">
                <div class="timeline-pin"><i class="marker marker-dot text-danger"></i></div>
                <div class="timeline-content">
                  <div class="d-flex justify-content-between">
                    <p class="mb-0">New order received <span class="badge badge-label-danger">urgent</span></p>
                    <span class="text-muted">10 mins</span>
                  </div>
                </div>
              </div>
              <div class="timeline-item">
                <div class="timeline-pin"><i class="marker marker-dot text-warning"></i></div>
                <div class="timeline-content">
                  <div class="d-flex justify-content-between">
                    <p class="mb-0">Production server down</p>
                    <span class="text-muted">1 hrs</span>
                  </div>
                </div>
              </div>
              <div class="timeline-item">
                <div class="timeline-pin"><i class="marker marker-dot text-info"></i></div>
                <div class="timeline-content">
                  <div class="d-flex justify-content-between">
                    <p class="mb-0">System error <a href="#">check</a></p>
                    <span class="text-muted">2 hrs</span>
                  </div>
                </div>
              </div>
              <div class="timeline-item">
                <div class="timeline-pin"><i class="marker marker-dot text-secondary"></i></div>
                <div class="timeline-content">
                  <div class="d-flex justify-content-between">
                    <p class="mb-0">DB overloaded 80%</p>
                    <span class="text-muted">5 hrs</span>
                  </div>
                </div>
              </div>
              <div class="timeline-item">
                <div class="timeline-pin"><i class="marker marker-dot text-success"></i></div>
                <div class="timeline-content">
                  <div class="d-flex justify-content-between">
                    <p class="mb-0">Production server up</p>
                    <span class="text-muted">6 hrs</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="mt-4">
            <h3 class="card-title">Upcoming activities</h3>
            <div class="timeline timeline-timed">
              <div class="timeline-item">
                <span class="timeline-time">10:00</span>
                <div class="timeline-pin"><i class="marker marker-circle text-primary"></i></div>
                <div class="timeline-content">
                  <div>
                    <span>Meeting with</span>
                    <div class="avatar-group ms-2">
                      <div class="avatar avatar-circle">
                        <img src="assets/images/users/avatar-1.png" alt="Avatar image" class="avatar-2xs" />
                      </div>
                      <div class="avatar avatar-circle">
                        <img src="assets/images/users/avatar-2.png" alt="Avatar image" class="avatar-2xs" />
                      </div>
                      <div class="avatar avatar-circle">
                        <img src="assets/images/users/avatar-3.png" alt="Avatar image" class="avatar-2xs" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="timeline-item">
                <span class="timeline-time">12:45</span>
                <div class="timeline-pin"><i class="marker marker-circle text-warning"></i></div>
                <div class="timeline-content">
                  <p class="mb-0">Lorem ipsum dolor sit amit,consectetur eiusmdd tempor incididunt ut labore et
                    dolore magna elit enim at minim veniam quis nostrud</p>
                </div>
              </div>
              <div class="timeline-item">
                <span class="timeline-time">14:00</span>
                <div class="timeline-pin"><i class="marker marker-circle text-danger"></i></div>
                <div class="timeline-content">
                  <p class="mb-0">Received a new feedback on <a href="#">GoFinance</a> App product.</p>
                </div>
              </div>
              <div class="timeline-item">
                <span class="timeline-time">15:20</span>
                <div class="timeline-pin"><i class="marker marker-circle text-success"></i></div>
                <div class="timeline-content">
                  <p class="mb-0">Lorem ipsum dolor sit amit,consectetur eiusmdd tempor incididunt ut labore et
                    dolore magna.</p>
                </div>
              </div>
              <div class="timeline-item">
                <span class="timeline-time">17:00</span>
                <div class="timeline-pin"><i class="marker marker-circle text-info"></i></div>
                <div class="timeline-content">
                  <p class="mb-0">Make Deposit <a href="#">USD 700</a> o ESL.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- end card-->
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('dist/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('dist/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dist/assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('dist/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('dist/assets/libs/node-waves/waves.min.js') }}"></script>


    <!-- apexcharts -->
    <script src="{{ asset('dist/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <script src="{{ asset('dist/assets/js/pages/dashboard.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('dist/assets/js/app.js') }}"></script>
  </body>

</html>