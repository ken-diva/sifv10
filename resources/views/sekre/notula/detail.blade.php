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

        <div class="row">
          <div class="col-md-8">
            @foreach ($notula as $no)
              <div class="card">
                <div class="card-header justify-content-between">
                  <h3 class="card-title">Detail Notula</h3>
                  <h3 class="card-title">
                    @if (filter_var($no['evidence'], FILTER_VALIDATE_URL))
                      <a href="{{ $no['evidence'] }}" target="_blank">
                        <button class="btn btn-warning">Evidence</button>
                      </a>
                    @else
                      <a href="#">
                        <button class="btn btn-secondary" data-bs-toggle="tooltip" title="Link tidak tersedia"><i
                            class="fas fa-unlink "></i></button>
                      </a>
                    @endif
                  </h3>
                </div>
                <div class="card-body">
                  <div class="d-grid gap-3">
                    <div>
                      <label>Tanggal</label>
                      <input type="text" class="form-control" value="{{ $no['tanggal'] }}" disabled>
                    </div>
                    <div>
                      <label>Jenis Rapat</label>
                      <input type="text" class="form-control" value="{{ $no['jenis_rapat'] }}" disabled>
                    </div>
                    <div>
                      <label>Agenda</label>
                      <textarea rows="10" class="form-control" disabled>{{ $no['agenda'] }}</textarea>
                    </div>
                    <hr>
                    <a href="/sekre/notula/">
                      <button class="btn btn-primary">Kembali</button>
                    </a>
                  </div>
                </div>
              </div>
          </div>
          @endforeach
        </div>
      </div>
      <!-- end row -->
    </div> <!-- container-fluid -->
  </div>
  <!-- End Page-content -->

  </div>
@endsection
