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
                <h4 class="card-title">Data TPA FIF</h4>
              </div>
              <div class="card-body">
                <p class="text-muted">Jumlah TPA saat ini: {{ $total_tpa }} TPA.</p>

                <table id="datatable" class="table table-hover table-bordered table-striped dt-responsive"
                  style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>NIP</th>
                      <th>Nama</th>
                      <th>Status</th>
                      <th>Unit</th>
                      <th>#</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach (json_decode($data) as $d)
                      <tr>
                        <td width="5%">{{ $loop->iteration }}</td>
                        <td>{{ $d->nip }}</td>
                        <td>{{ $d->fronttitle . ' ' . ucwords(strtolower($d->name)) . ' ' . $d->backtitle }}</td>
                        <td>
                          @if ($d->status == 'Aktif')
                            <span class="badge bg-success">{{ $d->status }}</span>
                          @else
                            <span class="badge bg-warning">{{ $d->status }}</span>
                          @endif
                        </td>
                        <td width="40%">{{ ucwords(strtolower($d->unitname)) }}</td>
                        <td width='5%'>
                          <a href="/sdm/profile-tpa/{{ $d->name }}/{{ $d->unitname }}/{{ $d->employmentstatus }}"
                            class="text-decoration-none">
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
