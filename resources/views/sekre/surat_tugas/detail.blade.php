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
            @foreach ($surat_tugas as $st)
              <div class="card">
                <div class="card-header justify-content-between">
                  <h3 class="card-title">Detail Surat Tugas</h3>
                  <h3 class="card-title">
                    @if (filter_var($st['evidence'], FILTER_VALIDATE_URL))
                      <a href="{{ $st['evidence'] }}" target="_blank">
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
                      <label class="form-label">No. Surat</label> <input type="text" class="form-control"
                        value="{{ $st['no_surat'] }}" disabled />
                    </div>
                    <div>
                      <label class="form-label">Mitra</label>
                      <textarea class="form-control" rows="3" disabled>{{ $st['mitra'] }}</textarea>
                    </div>
                    <div>
                      <label class="form-label">Deskripsi</label>
                      <textarea class="form-control" rows="3" disabled>{{ $st['deskripsi'] }}</textarea>
                    </div>
                    <div>
                      <label class="form-label">Tanggal Penetapan</label> <input type="text" class="form-control"
                        disabled value="{{ $st['tgl_penetapan'] }}" />
                    </div>
                    <div>
                      <label class="form-label">Periode Mulai</label> <input type="text" class="form-control" disabled
                        value="{{ $st['periode_mulai'] }}" />
                    </div>
                    <div>
                      <label class="form-label">Periode Selesai</label> <input type="text" class="form-control"
                        disabled value="{{ $st['periode_selesai'] }}" />
                    </div>
                    <div>
                      <p>Nama yang ditugaskan</p>
                      <ul>
                        <li>{{ $st['nama_lengkap'] }}</li>
                        @foreach ($daftar_anggota as $anggota)
                          <li>{{ $anggota['nama_lengkap'] }}</li>
                        @endforeach
                      </ul>
                      <hr>
                      <a href="/sekre/st/">
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
