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
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Data Notula</h4>
              </div>
              <div class="card-body">
                <p class="text-muted">Total Notula: {{ $total_notula }}</p>

                <table id="datatable" class="table table-hover table-bordered table-striped dt-responsive"
                  style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Tanggal</th>
                      <th>Jenis Rapat</th>
                      <th>Agenda</th>
                      <th style="text-align: center">Evidence</th>
                      <th style="text-align: center">#</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($notula as $no)
                      <tr>
                        <td width="5%">{{ $loop->iteration }}</td>
                        <td width="15%">{{ $no['tanggal'] }}</td>
                        <td width="15%">{{ $no['jenis_rapat'] }}</td>
                        <td style="white-space:pre-line">{!! $no['agenda'] !!}</td>
                        <td width='8%' style="text-align: center">
                          @if (filter_var($no['evidence'], FILTER_VALIDATE_URL))
                            <a href="{{ $no['evidence'] }}" target="_blank">
                              <button class="btn btn-sm btn-primary">
                                <i class="fas fa-link"></i> Evidence
                              </button>
                            </a>
                          @else
                            <a href="#">
                              <button class="btn btn-sm btn-secondary" title="Link tidak valid" disabled>
                                <i class="fas fa-unlink "></i>
                              </button>
                            </a>
                          @endif
                        </td>
                        <td width='5%'>
                          <a href="/sekre/notula/detail/{{ $no['agenda'] }}" class="text-decoration-none">
                            <button class="btn btn-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="top"
                              title="Detail"><i class=" far fa-eye "></i>
                            </button>
                          </a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div> <!-- end col -->
        </div>
        <!-- end row -->
      </div>
      <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <!-- Required datatable js -->
    <script src="{{ asset('dist/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dist/assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>

    <!-- Responsive examples -->
    <script src="{{ asset('dist/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('dist/assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>

    <!-- Datatable init js -->
    <script src="{{ asset('dist/assets/js/pages/datatables-base.init.js') }}"></script>

  </div>
@endsection
