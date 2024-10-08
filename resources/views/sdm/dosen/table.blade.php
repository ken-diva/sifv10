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
                <p class="card-title">Jumlah Dosen saat ini: {{ $total_dosen }} dosen.</p>
              </div>
              <div class="card-body">
                {{-- <p class="text-muted">Jumlah Dosen saat ini: {{ $total_dosen }} dosen.</p> --}}
                <p class="text-muted">Filter Data</p>
                <div class="mb-5">

                  <form class="row row-cols-lg-auto g-3 align-items-end" action="/sdm/data-dosen-filtered" method="POST">
                    @csrf
                    <div class="col-12">
                      <label for="inlinejfa">JFA</label>
                      <select class="form-select" id="inlinejfa" name="jfa">
                        <option value="all" selected>--- All ---</option>
                        <option value="GB">Guru Besar</option>
                        <option value="LK">Lektor Kepala</option>
                        <option value="L">Lektor</option>
                        <option value="NJFA">NJFA</option>
                        <option value="AA">Asisten Ahli</option>
                      </select>
                    </div>
                    <div class="col-12">
                      <label for="inlineprodi">Program Studi</label>
                      <select class="form-select" id="inlineprodi" name="prodi">
                        <option value="all" selected>--- All ---</option>
                        <option value="S1 INFORMATIKA">S1 Informatika</option>
                        <option value="S1 TEKNOLOGI INFORMASI">S1 Teknologi Informasi</option>
                        <option value="S1 REKAYASA PERANGKAT LUNAK">S1 Rekayasa Perangkat Lunak</option>
                        <option value="S1 DATA SAINS">S1 Sains Data</option>
                        <option value="S1 INFORMATIKA PJJ">S1 PJJ Informatika</option>
                        <option value="S2 INFORMATIKA">S2 Informatika</option>
                        <option value="S2 ILMU FORENSIK">S2 F. Digital & Keamanan Siber</option>
                        <option value="S3 INFORMATIKA">S3 Informatika</option>
                      </select>
                    </div>
                    <div class="col-12"><button type="submit" class="btn btn-primary">Refresh</button></div>
                  </form>

                </div>

                <table id="datatable" class="table table-hover table-bordered table-striped dt-responsive"
                  style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>NIP</th>
                      <th>Nama</th>
                      <th>Kode Dosen</th>
                      <th>Status</th>
                      <th>Email</th>
                      <th>#</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach (json_decode($data) as $d)
                      <tr>
                        <td width="5%">{{ $loop->iteration }}</td>
                        <td>{{ $d->nip }}</td>
                        <td>{{ $d->fronttitle . ' ' . ucwords(strtolower($d->name)) . ' ' . $d->backtitle }}</td>
                        <td>{{ $d->lecturercode }}</td>
                        <td>
                          @if ($d->status == 'Aktif')
                            <span class="badge bg-success">{{ $d->status }}</span>
                          @else
                            <span class="badge bg-warning">{{ $d->status }}</span>
                          @endif
                        </td>
                        <td>{{ $d->email }}</td>
                        <td width='5%'>
                          <a href="/sdm/profile-dosen/{{ $d->name }}" class="text-decoration-none">
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
