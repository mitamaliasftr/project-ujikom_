<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Nginep Login</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/logo-mini.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth" style=" background-color: #ffef61">
                <div class="row flex-grow">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            <div class="brand-logo">
                                <img src="assets/images/logo.png">
                            </div>
                            <h4>Hallo! Selamat datang</h4>
                            <h6 class="font-weight-light">Silahkan Login untuk melanjutkan.</h6>
                            <form action="{{ route('cekLogin') }}" method="POST" class="pt-3" novalidate>
                                @csrf
                                <div class="form-group">
                                    <input type="username"
                                        class="form-control @error('username') is-invalid @enderror form-control-lg"
                                        id="username" name="username" placeholder="Username"
                                        value="{{ old('username') }}">
                                    @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password"
                                        class="form-control @error('password') is-invalid @enderror form-control-lg"
                                        id="password" name="password" placeholder="Password"
                                        value="{{ old('password') }}">
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                @error('nofound')
                                <div class="row mb-3">
                                    <div class="col-12 text-center text-danger">
                                        {{ $message }}
                                    </div>
                                </div>
                                @enderror
                                <div class="mt-3 text-center">
                                    <button type="submit" class="btn btn-block btn-gradient-warning text-dark btn-lg font-weight-medium auth-form-btn"
                                        href="dashboard">LOGIN</button>
                                </div>
                                <div class="text-center mt-4 font-weight-light"> Belum punya akun? <a href="register"
                                        class="text-primary">Buat yuk!</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
</body>

</html>