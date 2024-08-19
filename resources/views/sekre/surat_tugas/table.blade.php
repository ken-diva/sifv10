@extends('layouts.base')
@section('content')
  <div class="main-content">

    <div class="page-content">
      <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
          <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
              <h4 class="mb-sm-0">Base</h4>

              <div class="page-title-right">
                <ol class="breadcrumb m-0">
                  <li class="breadcrumb-item"><a href="javascript: void(0);">Datatable</a></li>
                  <li class="breadcrumb-item active">Base</li>
                </ol>
              </div>

            </div>
          </div>
        </div>
        <!-- end page title -->

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Basic datatable</h4>
              </div>
              <div class="card-body">
                <p class="text-muted"><strong>Datatables</strong> has most features enabled by default, so all you need to
                  do to use it with your own tables is to call the construction function: <code>$().DataTable()</code>.
                  Searching, ordering and paging goodness will be immediately added to the table, as shown in this
                  example.</p>

                <table id="datatable" class="table table-hover table-bordered table-striped dt-responsive"
                  style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>No. Surat</th>
                      <th>Deskripsi</th>
                      <th style="text-align: center">Tgl Penetapan</th>
                      <th style="text-align: center">Evidence</th>
                      <th style="text-align: center">#</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($surat_tugas as $st)
                      <tr>
                        <td width="5%">{{ $loop->iteration }}</td>
                        <td width="15%">{{ $st['no_surat'] }}</td>
                        <td width='50%'>{{ $st['deskripsi'] }}</td>
                        <td style="text-align: center">{{ $st['periode_mulai'] }}</td>
                        <td>
                          @if (filter_var($st['evidence'], FILTER_VALIDATE_URL))
                            <a href="{{ $st['evidence'] }}" target="_blank">
                              <button class="btn btn-primary">
                                <i class="fas fa-link"></i>
                              </button>
                            </a>
                          @else
                            <a href="#">
                              <button class="btn btn-secondary" title="Link tidak valid" disabled><i
                                  class="fas fa-unlink "></i></button>
                            </a>
                          @endif
                        </td>
                        <td>
                          <a href="/sekre/st/detail/{{ $st['deskripsi'] }}" class="text-decoration-none">
                            <button class="btn btn-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="top"
                              title="Detail">
                              <i class=" far fa-eye "></i>
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
