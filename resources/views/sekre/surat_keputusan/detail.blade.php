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
            @foreach ($surat_keputusan as $sk)
              <div class="card">
                <div class="card-header justify-content-between">
                  <h3 class="card-title">Detail Surat Keputusan</h3>
                  <h3 class="card-title">
                    @if (filter_var($sk['evidence'], FILTER_VALIDATE_URL))
                      <a href="{{ $sk['evidence'] }}" target="_blank">
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
                      <label class="form-label">No. Surat</label>
                      <input type="text" class="form-control" value="{{ $sk['no_surat'] }}" disabled />
                    </div>
                    <div>
                      <label>Nama/Judul SK</label>
                      <textarea rows="3" class="form-control" disabled>{{ ucwords(strtolower(preg_replace('/\s+/', ' ', $sk['judul_sk']))) }}</textarea>
                    </div>
                    <div>
                      <label class="form-label">Tanggal Penetapan</label>
                      <input type="text" class="form-control" disabled value="{{ $sk['tgl_penetapan'] }}" />
                    </div>
                    <div>
                      <label class="form-label">Periode Mulai</label>
                      <input type="text" class="form-control" value="{{ $sk['periode_mulai'] }}" disabled>
                    </div>
                    <div>
                      <label class="form-label">Periode Selesai</label>
                      <input type="text" class="form-control" value="{{ $sk['periode_selesai'] }}" disabled>
                    </div>
                    <div>
                      <p>Nama yang ditugaskan</p>
                      <table class="table table-sm mb-0">
                        @if (empty($daftar_anggota))
                          No Data.
                        @else
                          <tr>
                            <th>Jabatan pada SK</th>
                            <th>Nama</th>
                          </tr>
                          @foreach ($daftar_anggota as $anggota)
                            <tr>
                              <td>{{ $anggota['jabatan'] }}</td>
                              <td>{{ $anggota['nama_lengkap'] }}</td>
                            </tr>
                          @endforeach
                        @endif
                      </table>
                      <hr>
                      <a href="/sekre/sk/">
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
