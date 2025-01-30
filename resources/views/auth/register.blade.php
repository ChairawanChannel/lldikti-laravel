<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ULT - LOGIN</title>
    <link rel="icon" href="{{ asset('images/icon-pages.png') }}" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 mb-5">
          <div class="card mt-5 shadow-lg p-5 responsive-container">
            <div class="row">
              <div class="col-md-6">
                <div class="login-section card-body">
                  <h2 class="title-align-center">Register</h2>
                  <p class="text-muted title-align-center">
                    Silahkan buat akun anda di aplikasi Unit Layanan Terpadu
                  </p>
                  <hr />
                  <form>
                    <div class="mb-3 d-flex">
                      <!-- make a radio button -->
                      <div class="form-check form-check-inline">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="role"
                          id="pts"
                          value="pts"
                        />PTS
                      </div>
                      <div class="form-check form-check-inline">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="role"
                          id="umum"
                          value="umum"
                        />Umum
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="namalengkap" class="form-label"
                        >Nama Lengkap</label
                      >
                      <input
                        type="text"
                        class="form-control"
                        id="namalengkap"
                        aria-describedby="emailHelp"
                      />
                    </div>
                    <div class="mb-3">
                      <label for="notelp" class="form-label">
                        Nomor Telepon
                      </label>
                      <input type="text" class="form-control" id="notelp" />
                    </div>

                    <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input
                        type="email"
                        class="form-control"
                        id="email"
                        aria-describedby="emailHelp"
                      />
                    </div>
                    <div class="mb-3 pts-only">
                      <label for="namapts" class="form-label"
                        >Nama PTS (PTS ONLY)</label
                      >
                      <input type="text" class="form-control" id="namapts" />
                    </div>
                    <div class="mb-3 pts-only">
                      <label for="jabatan" class="form-label"
                        >Jabatan (PTS ONLY)</label
                      >
                      <input type="text" class="form-control" id="jabatan" />
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input
                        type="password"
                        class="form-control"
                        id="password"
                      />
                    </div>
                    <div class="mb-3">
                      <label for="confirmpassword" class="form-label"
                        >Confirm Password</label
                      >
                      <input
                        type="password"
                        class="form-control"
                        id="confirmpassword"
                      />
                    </div>
                    <button type="submit" class="btn btn-primary w-100">
                      Buat Akun
                    </button>
                    <div class="mt-3 d-flex justify-content-center">
                      <span>Sudah punya akun?</span
                      ><a href="{{ route('login')}}" class="text-decoration-none"
                        >Login</a
                      >
                    </div>
                  </form>
                </div>
              </div>
              <div
                class="col-md-6 d-none d-md-flex flex-column align-items-center justify-content-center mt-5"
              >
                <img
                  src="{{ asset('images/Hacker-amico.svg') }}"
                  class="img-fluid"
                  alt="team spirit"
                />
                <div class="w-100 d-flex flex-column align-items-start mt-3">
                  <a href="https://storyset.com/team"
                    >Team illustrations by Storyset</a
                  >
                  <div class="social-media mt-3">
                    <a href="#" class="btn btn-primary me-2">
                      <i class="bi bi-facebook"></i>
                    </a>
                    <a href="#" class="btn btn-danger me-2">
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
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const ptsRadio = document.getElementById("pts");
        const umumRadio = document.getElementById("umum");
        const ptsFields = document.querySelectorAll(".pts-only");

        function togglePtsFields() {
          if (ptsRadio.checked) {
            ptsFields.forEach((field) => {
              field.style.display = "block";
              setTimeout(() => {
                field.style.opacity = 1;
              }, 10);
            });
          } else {
            ptsFields.forEach((field) => {
              field.style.opacity = 0;
              setTimeout(() => {
                field.style.display = "none";
              }, 300);
            });
          }
        }

        ptsRadio.addEventListener("change", togglePtsFields);
        umumRadio.addEventListener("change", togglePtsFields);

        togglePtsFields(); // Initial check
      });
    </script>
  </body>
</html>