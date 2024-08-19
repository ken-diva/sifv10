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
          <div class="col-xl-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Jumlah dosen per-prodi</h3>
              </div>
              <div class="card-body">
                <h6 class="text-muted mb-0">Total dosen saat ini: {{ $total_dosen }}</h6>
                <canvas id="chart-dosen"></canvas>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xl-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">JFA Dosen</h3>
              </div>
              <div class="card-body">
                <canvas id="pie-jfa"></canvas>
              </div>
            </div>
          </div>
        </div>

      </div>

      @include('layouts._footer')
    </div>
    <!-- end main content-->

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
      const ctx = document.getElementById('chart-dosen');

      new Chart(ctx, {
        type: 'bar',
        data: {
          labels: barlabels,
          datasets: [{
            label: 'Jumlah dosen per-prodi',
            data: bardata,
            borderWidth: 1
          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });
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
      const ctx2 = document.getElementById('pie-jfa');

      new Chart(ctx2, {
        type: 'pie',
        data: {
          labels: barlabels,
          datasets: [{
            label: 'JFA',
            data: piedata,
            borderWidth: 1
          }]
        },
        options: {
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });
    </script>
  @endsection
