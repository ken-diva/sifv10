<!doctype html>
<html lang="en">

  <head>

    <meta charset="utf-8" />
    <title>{{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Codebucks" name="author" />

    @include('layouts._links')

  </head>

  <body class="m-0 overflow-hidden">
    <div class="container-fluid authentication-bg overflow-hidden">
      <div class="bg-overlay"></div>
      <div class="row align-items-center justify-content-center min-vh-100">
        <div class="col-10 col-md-6 col-lg-4 col-xxl-3">
          <div class="card mb-0">
            <div class="card-body">
              <div class="text-center">
                <a href="#" class="logo-dark">
                  <img src="{{ asset('dist/assets/images/logo/logo-fif-2.png') }}" alt="" height="50"
                    class="auth-logo logo-dark mx-auto">
                </a>
                <p class="mt-1 text-muted">Silahkan gunakan akun SSO anda.</p>

              </div>

              <div class="p-2">
                @if (session('status'))
                  <div class="alert alert-dismissible alert-outline-danger fade show">
                    <div class="alert-content"><strong>{{ session('status') }}</strong></div><button type="button"
                      class="btn-close" data-bs-dismiss="alert"></button>
                  </div>
                @endif
                <form action="/login" method="POST">
                  @csrf
                  <div class="input-group auth-form-group-custom mb-3">
                    <span class="input-group-text bg-primary bg-opacity-10 fs-16 " id="basic-addon1"><i
                        class="mdi mdi-account-outline auti-custom-input-icon"></i></span>
                    <input type="text" class="form-control" placeholder="Username" name="username"
                      aria-label="Username" aria-describedby="basic-addon1">
                  </div>

                  <div class="input-group auth-form-group-custom mb-3">
                    <span class="input-group-text bg-primary bg-opacity-10 fs-16" id="basic-addon2"><i
                        class="mdi mdi-lock-outline auti-custom-input-icon"></i></span>
                    <input type="password" class="form-control" id="userpassword" name="password" placeholder="Password"
                      aria-label="Username" aria-describedby="basic-addon1">
                  </div>

                  <div class="text-center">
                    <button class="btn btn-primary w-100" type="submit">Log In</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('dist/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('dist/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dist/assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('dist/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('dist/assets/libs/node-waves/waves.min.js') }}"></script>

    <script src="{{ asset('dist/assets/js/app.js') }}"></script>

  </body>

</html>
