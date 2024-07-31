<!doctype html>
<html lang="en">

  <head>

    <meta charset="utf-8" />
    <title>Starter page | Clivax - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Codebucks" name="author" />

    {{-- links and scripts --}}
    @include('layouts._links')

  </head>

  <body>

    <!-- Begin page -->
    <div id="layout-wrapper">


      <!-- Start topbar -->
      <header id="page-topbar">
        <div class="navbar-header">

          <!-- Logo -->

          <!-- Start Navbar-Brand -->
          <div class="navbar-logo-box">
            <a href="index.html" class="logo logo-dark">
              <span class="logo-sm">
                <img src="{{ asset('dist/assets/images/logo/logo-fif-2-small.png') }}" alt="logo-sm-dark"
                  height="20">
              </span>
              <span class="logo-lg">
                <img src="{{ asset('dist/assets/images/logo/logo-fif-2-small.png') }}" alt="logo-dark" height="35">
              </span>
            </a>

            <button type="button" class="btn btn-sm top-icon sidebar-btn" id="sidebar-btn">
              <i class="mdi mdi-menu-open align-middle fs-19"></i>
            </button>
          </div>
          <!-- End navbar brand -->

          <!-- Start menu -->
          <div class="d-flex justify-content-between menu-sm px-3 ms-auto">
            <div class="d-flex align-items-center gap-2"></div>

            <div class="d-flex align-items-center gap-2">
              <div class="d-inline-block text-end">
                <span>nama disini</span>
                <br>
                <span>unit/jabatan disini</span>
              </div>
              <div class="dropdown d-none d-lg-block">
                <button type="button" class="btn btn-sm top-icon p-0" id="page-header-user-dropdown"
                  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img class="rounded avatar-2xs p-0" src="{{ asset('dist/assets/images/users/avatar-6.png') }}"
                    alt="Header Avatar">
                </button>
                <div class="dropdown-menu dropdown-menu-start dropdown-menu-animated">
                  {{-- <div class="dropdown-divider"></div> --}}
                  <a href="/logout" class="dropdown-item">
                    <div class="dropdown-icon"><span class="mdi mdi-logout"></span></div>
                    <span class="dropdown-content">Logout</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- End menu -->
        </div>
      </header>
      <!-- End topbar -->

      @include('layouts._sidebar')

      @yield('content')

    </div>
    <!-- END layout-wrapper -->

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
                        <img src="{{ asset('dist/assets/images/users/avatar-1.png') }}" alt="Avatar image"
                          class="avatar-2xs" />
                      </div>
                      <div class="avatar avatar-circle">
                        <img src="{{ asset('dist/assets/images/users/avatar-2.png') }}" alt="Avatar image"
                          class="avatar-2xs" />
                      </div>
                      <div class="avatar avatar-circle">
                        <img src="{{ asset('dist/assets/images/users/avatar-3.png') }}" alt="Avatar image"
                          class="avatar-2xs" />
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

  </body>

</html>
