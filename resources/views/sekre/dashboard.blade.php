@extends('layouts.base')
@section('content')
  <!-- ============================================================== -->
  <!-- Start right Content here -->
  <!-- ============================================================== -->
  <div class="main-content">

    <div class="page-content">
      <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
          <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
              <h4 class="mb-sm-0">Dashboard Sekpim</h4>

              @include('layouts._breadcrumb')

            </div>
          </div>
        </div>
        <!-- end page title -->

        <div class="card">
          <div class="card-header">
            <div class="card-icon">
              <i class="fas fa-cart-plus fs-14 text-muted"></i>
            </div>
            <h4 class="card-title mb-0">Data Sekretariat</h4>
            {{-- <div class="dropdown card-addon">
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
            </div> --}}
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-sm-4">
                <div class="d-flex justify-content-between align-content-end shadow-lg p-3">
                  <div>
                    <p class="text-muted text-truncate mb-2">Jumlah Notula</p>
                    <h5 class="mb-0">95</h5>
                  </div>
                </div>
              </div>

              <div class="col-sm-4">
                <div class="d-flex justify-content-between align-content-end shadow-lg p-3">
                  <div>
                    <p class="text-muted text-truncate mb-2">Jumlah Surat Tugas</p>
                    <h5 class="mb-0">335</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="d-flex justify-content-between align-content-end shadow-lg p-3">
                  <div>
                    <p class="text-muted text-truncate mb-2">Jumlah SK</p>
                    <h5 class="mb-0">87</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xl-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Basic</h3>
              </div>
              <div class="card-body">
                <p class="text-muted mb-0">filter disini</p>
              </div>
            </div>
          </div>
        </div>

        {{-- chart --}}
        <div class="row">
          <div class="col-xl-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title mb-0">Basic Column Charts</h4>
              </div><!-- end card header -->

              <div class="card-body">
                <div id="column_chart" data-colors='["--bs-danger", "--bs-primary", "--bs-success"]' class="apex-charts"
                  dir="ltr"></div>
              </div><!-- end card-body -->
            </div><!-- end card -->
          </div>
          <!-- end col -->

        </div>

        {{-- testing --}}
        <div class="row">
          <div class="col-xl-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title mb-0">Testing Apex</h4>
              </div><!-- end card header -->

              <div class="card-body">
                <div id="chart"></div>
              </div><!-- end card-body -->
            </div><!-- end card -->
          </div>
          <!-- end col -->

        </div>
        <!-- end row -->
      </div>
      <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    @include('layouts._footer')
  </div>
  <!-- end main content-->

  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script>
    options = {
      chart: {
        type: 'bar'
      },
      series: [{
        data: [{
          x: 'category A',
          y: 10
        }, {
          x: 'category B',
          y: 18
        }, {
          x: 'category C',
          y: 13
        }]
      }]
    }

    var chart = new ApexCharts(document.querySelector("#chart"), options);

    chart.render();
  </script>

  {{-- @include('layouts._apexchart') --}}
@endsection
