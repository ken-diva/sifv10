@extends('layouts.base')
@section('content')
  <div class="main-content">

    <div class="page-content">
      <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
          <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
              <h4 class="mb-sm-0">{{ $title }}</h4>

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
                    <h5 class="mb-0">0</h5>
                  </div>
                </div>
              </div>

              <div class="col-sm-4">
                <div class="d-flex justify-content-between align-content-end shadow-lg p-3">
                  <div>
                    <p class="text-muted text-truncate mb-2">Jumlah Surat Tugas</p>
                    <h5 class="mb-0">{{ $total_st }}</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="d-flex justify-content-between align-content-end shadow-lg p-3">
                  <div>
                    <p class="text-muted text-truncate mb-2">Jumlah SK</p>
                    <h5 class="mb-0">{{ $total_sk }}</h5>
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

        {{-- chart surat tugas --}}
        <div class="row">
          <div class="col-xl-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title mb-0">Data Persebaran Surat Tugas</h4>
              </div>

              <div class="card-body">
                <div id="chart"></div>
              </div>
            </div>
          </div>
          <!-- end chart -->

          {{-- chart surat keputusan --}}
          <div class="row">
            <div class="col-xl-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title mb-0">Data Persebaran Surat Keputusan</h4>
                </div>

                <div class="card-body">
                  <div id="chart2"></div>
                </div>
              </div>
            </div>
            <!-- end chart -->

          </div>
        </div>
      </div>

      @include('layouts._footer')
    </div>
    <!-- end main content-->

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <script>
      const barlabels = @json($kode_dosen);
      const barcount_st = @json($st_dosen);
      const barcount_sk = @json($sk_dosen);
      const count_barlabels = barlabels.length;

      console.log(count_barlabels);

      options = {
        chart: {
          type: 'bar'
        },
        dataLabels: {
          enabled: false,
        },
        colors: ['#0bb82b'],
        series: [{
          name: "Total ST",
          data: barcount_st
        }],
        xaxis: {
          categories: barlabels,
          tickAmount: count_barlabels / 4,
        },

      }

      var chart = new ApexCharts(document.querySelector("#chart"), options);

      chart.render();
    </script>

    <script>
      options = {
        chart: {
          type: 'bar'
        },
        dataLabels: {
          enabled: false,
        },
        colors: ['#0bb82b'],
        series: [{
          name: "Total SK",
          data: barcount_sk
        }],
        xaxis: {
          categories: barlabels,
          tickAmount: count_barlabels / 4,
        },

      }

      var chart = new ApexCharts(document.querySelector("#chart2"), options);

      chart.render();
    </script>
  @endsection
