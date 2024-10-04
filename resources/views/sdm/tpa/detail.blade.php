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
          <div class="col-md-12">
            @foreach (json_decode($data) as $d)
              <div class="card">
                <div class="card-body">
                  <div class="row row-cols-1 row-cols-md-2 g-3 mb-3">
                    <div class="col-md-2">
                      <div class="card portlet border">
                        @if ($d->photourl != null)
                          <img src="{{ $d->photourl }}" class="img-fluid rounded-start" alt="Photo Here!">
                        @else
                          <img src="{{ asset('dist/assets/images/faces/user.png') }}" class="img-fluid rounded-start"
                            alt="No Image!">
                        @endif
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="card">
                        <div class="card-header card-header-bordered">
                          <h4 class="card-title">Informasi Detail</h4>
                        </div>
                        <div class="card-body">
                          <table class="table mb-0">
                            <tr>
                              <td width="40%">Nama Lengkap</td>
                              <td>{{ $d->fronttitle . ' ' . ucwords(strtolower($d->name)) . ' ' . $d->backtitle }}</td>
                            </tr>
                            <tr>
                              <td>NIP</td>
                              <td>{{ $d->nip }}</td>
                            </tr>
                            <tr>
                              <td>Unit Kerja</td>
                              <td>{{ $d->unitname }}</td>
                            </tr>
                            <tr>
                              <td>Tanggal Masuk</td>
                              <td>{{ $d->workstartdate }}</td>
                            </tr>
                            <tr>
                              <td>Masa Kerja</td>
                              <td>{{ $masa_kerja }}</td>
                            </tr>
                            <tr>
                              <td>Status</td>
                              <td>{{ $d->status }}</td>
                            </tr>
                            <tr>
                              <td>Status Kepegawaian</td>
                              <td>TPA {{ ucwords(strtolower(substr($d->employmentstatus, '3'))) }}</td>
                            </tr>
                            <tr>
                              <td>Email</td>
                              <td>{{ $d->email }}</td>
                            </tr>
                            <tr>
                              <td width="40%">Pendidikan Terakhir</td>
                              <td>{{ $d->educationdegree }}</td>
                            </tr>
                            <tr>
                              <td>Program Studi Pendidikan Terakhir</td>
                              <td>{{ ucwords(strtolower($d->educationprogram)) }}</td>
                            </tr>
                            <tr>
                              <td>Institusi Pendidikan Terakhir</td>
                              <td>{{ ucwords(strtolower($d->institutionname)) }}</td>
                            </tr>
                            <tr>
                              <td>Tanggal Lulus</td>
                              <td>{{ $d->graduatedate }}</td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <a href="/sdm/data-tpa" class="text-decoration-none">
                    <button class="btn btn-secondary">Back</button>
                  </a>
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
