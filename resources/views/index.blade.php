@extends('layouts.base')
@section('content')
  <!-- ============================================================== -->
  <!-- Start right Content here -->
  <!-- ============================================================== -->
  <div class="main-content">

    <div class="page-content">
      <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
          <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
              <h4 class="mb-sm-0">Starter page</h4>

              @include('layouts._breadcrumb')

            </div>
          </div>
        </div>
        <!-- end page title -->

      </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    @include('layouts._footer')
  </div>
  <!-- end main content-->
@endsection
