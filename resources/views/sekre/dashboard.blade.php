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
              <i class="fas fa-archive fs-14 text-muted"></i>
            </div>
            <h4 class="card-title mb-0">Data Sekretariat</h4>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-sm-4">
                <div class="d-flex justify-content-between align-content-end shadow-lg p-3">
                  <div>
                    <p class="text-muted text-truncate mb-2">Jumlah Notula</p>
                    <h5 class="mb-0">{{ $total_notula }}</h5>
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
                <h3 class="card-title">Filter Periode</h3>
              </div>
              <div class="card-body">
                <form action="/sekre/dashboard/filtered" method="POST">
                  @csrf
                  <div class="d-flex">
                    <div class="col-sm-5 col-lg-5">
                      <label>Dari</label>
                      <input type="date" class="form-control" name="periode_mulai" value="{{ $tgl_mulai }}"
                        required>
                    </div>
                    <div class="col-sm-5 col-lg-1"></div>
                    <div class="col-sm-5 col-lg-5">
                      <label>sampai</label>
                      <input type="date" class="form-control" name="periode_selesai" value="{{ $tgl_selesai }}"
                        required>
                    </div>
                  </div>
                  <br>
                  <div class="col-sm-5 col-lg-6">
                    <button class="btn btn-warning">Refresh data</button>
                  </div>
              </div>
              </form>
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
              <canvas id="chart-st"></canvas>
            </div>
          </div>
        </div>
        <!-- end chart -->

        {{-- chart surat keputusan --}}
        <div class="col-xl-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title mb-0">Data Persebaran Surat Keputusan</h4>
            </div>

            <div class="card-body">
              <canvas id="chart-sk"></canvas>
            </div>
          </div>
        </div>
      </div>
      <!-- end chart -->
    </div>

    @include('layouts._footer')
  </div>
  <!-- end main content-->

  <script>
    const barlabels = @json($kode_dosen);
    const barcount_st = @json($st_dosen);
    const barcount_sk = @json($sk_dosen);

    const ctx = document.getElementById('chart-st');

    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: barlabels,
        datasets: [{
          label: 'Surat Tugas',
          data: barcount_st,
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
    const ctx2 = document.getElementById('chart-sk');

    new Chart(ctx2, {
      type: 'bar',
      data: {
        labels: barlabels,
        datasets: [{
          label: 'Surat Keputusan',
          data: barcount_sk,
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
