<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    <title>Forgot Password</title>
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card mt-5 shadow-lg p-5 responsive-container">
            <div class="row g-0">
              <div class="col-md-6">
                <div class="login-section card-body">
                  <h2 class="title-align-center">Forgot Password</h2>
                  <p class="text-muted title-align-center">
                    Silahkan masukkan email anda untuk reset password
                  </p>
                  <hr />
                  <form>
                    <div class="mb-3">
                      <label for="email" class="form-label"
                        >Email address</label
                      >
                      <input
                        type="email"
                        class="form-control"
                        id="email"
                        aria-describedby="emailHelp"
                      />
                    </div>
                    <button type="submit" class="btn btn-primary">
                      Submit
                    </button>
                  </form>
                  <div class="mt-3">
                    <a href="{{route('login')}}" class="text-decoration-none"
                      >Back to login</a
                    >
                  </div>
                </div>
              </div>
              <div class="col-md-6 d-none d-md-block text-center">
                <h4 class="text-center fw-bold text-uppercase"></h4>
                <img
                  src="{{ asset('images/Shrug-cuate.svg') }}"
                  class="img-fluid"
                  alt="team spirit"
                  style="margin: 0 auto"
                />
                <div class="text-start mt-2">
                  <a href="https://storyset.com/team"
                    >Team illustrations by Storyset</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>