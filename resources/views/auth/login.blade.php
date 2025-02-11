<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ULT - LOGIN</title>
    <link rel="icon" href="{{ asset('images/icon-pages.png') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- import font awesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5 shadow-lg p-5 responsive-container">
                    <div class="row g-0">
                        <div class="col-md-6">
                            <div class="login-section card-body">
                                <h2 class="title-align-center">Login</h2>
                                <p class="text-muted title-align-center">
                                    Silahkan Login di aplikasi Unit Layanan Terpadu
                                </p>
                                <hr />
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            aria-describedby="emailHelp" autocomplete="off" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="password" name="password"
                                                autocomplete="off" />
                                            <button class="btn btn-outline-secondary" type="button"
                                                id="togglePassword">
                                                <i class="bi bi-eye-slash" id="togglePasswordIcon"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="mb-3 form-check d-flex justify-content-between">
                                        <div>
                                            <input type="checkbox" class="form-check-input" id="remember"
                                                name="remember" />
                                            <label class="form-check-label" for="remember">Remember me</label>
                                        </div>
                                        <div>
                                            <a href="{{ route('password.request') }}"
                                                class="text-decoration-none">Forgot Password?</a>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100">
                                        Login
                                    </button>
                                    <div class="mt-3 d-flex justify-content-center">
                                        <span>Tidak memiliki akun?</span><a href="{{ route('register') }}"
                                            class="text-decoration-none">Register</a>
                                    </div>
                                </form>
                            </div>

                        </div>
                        <div class="col-md-6 d-none d-md-block">
                            <h4 class="text-center fw-bold text-uppercase">
                                selamat datang di lldikti wilayah I
                                <span class="text-warning">sumatera utara</span>
                            </h4>
                            <img src="{{ asset('images/Back to back-pana.svg') }}" class="img-fluid"
                                alt="team spirit" />
                            <a href="https://storyset.com/team">Team illustrations by Storyset</a>
                            <!-- make a social media link -->
                            <div class="social-media">
                                <a href="#" class="btn btn-primary">
                                    <i class="bi bi-facebook"></i>
                                </a>
                                <a href="#" class="btn btn-danger">
                                    <i class="bi bi-google"></i>
                                </a>
                                <a href="#" class="btn btn-info">
                                    <i class="bi bi-twitter"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-12 mt-3">
                <p class="text-white text-center">
                    &copy; 2021 All rights reserved |
                    <a href="https://www.instagram.com//" class="text-decoration-none text-white">LLDIKTI
                        WILAYAH 1 SUMATERA UTARA </a>
                </p>
            </div>
        </div>
        <script src="{{ asset('js/script.js') }}"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
        <script>
            @if (session('status'))
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: '{{ session('status') }}',
                });
            @elseif ($errors->any())
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: '{{ $errors->first() }}',
                });
            @endif


            //fitur password visibility
            document.getElementById('togglePassword').addEventListener('click', function() {
                const passwordInput = document.getElementById('password');
                const passwordIcon = document.getElementById('togglePasswordIcon');
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    passwordIcon.classList.remove('bi-eye-slash');
                    passwordIcon.classList.add('bi-eye');
                } else {
                    passwordInput.type = 'password';
                    passwordIcon.classList.remove('bi-eye');
                    passwordIcon.classList.add('bi-eye-slash');
                }
            });
        </script>
</body>

</html>
