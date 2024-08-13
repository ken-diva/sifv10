@extends('layouts.base')
@section('content')
  <div class="main-content">

    <div class="page-content">
      <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
          <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
              {{-- <h4 class="mb-sm-0">{{ $title }}</h4> --}}
              <h4 class="mb-sm-0">title</h4>

              @include('layouts._breadcrumb')

            </div>
          </div>
        </div>
        <!-- end page title -->

        <div class="row">
          <div class="col-xl-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Jumlah dosen per-prodi</h3>
              </div>
              <div class="card-body">
                <h6 class="text-muted mb-0">Total dosen saat ini: {{ $total_dosen }}</h6>
              </div>
              <div id="chart"></div>
            </div>
          </div>

          <div class="col-xl-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">JFA Dosen</h3>
              </div>
              <div class="card-body">
                <div id="chart2"></div>
              </div>
            </div>
          </div>
        </div>

      </div>

      @include('layouts._footer')
    </div>
    <!-- end main content-->

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <script>
      const barlabels = [
        'S1 Informatika',
        'S1 Teknologi Informasi',
        'S1 Rekayasa Perangkat Lunak',
        'S1 Sains Data', // data sains
        'S1 PJJ Informatika', // informatika pjj
        'S2 Informatika',
        'S2 F. Digital & Keamanan Cyber', // ilmu forensik
        'S3 Informatika',
      ];
      const bardata = @json($jumlah_dosen_perprodi);
      var options = {
        chart: {
          type: 'bar'
        },
        dataLabels: {
          enabled: false,
        },
        series: [{
          name: "Total",
          data: bardata
        }],
        xaxis: {
          categories: barlabels,
        },
      };

      var chart = new ApexCharts(document.querySelector("#chart"), options);
      chart.render();
    </script>

    <script>
      const pielabels = [
        'Guru Besar',
        'Lektor Kepala',
        'Lektor',
        'NJFA',
        'AA',
      ];
      const piedata = @json($jumlah_jfa);
      var options = {
        series: piedata,
        chart: {
          width: 400,
          type: 'pie',
        },
        labels: pielabels,
      };

      var chart2 = new ApexCharts(document.querySelector("#chart2"), options);
      chart2.render();
    </script>
  @endsection
