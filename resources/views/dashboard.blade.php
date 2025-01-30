<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link
      href="//cdn.datatables.net/2.2.1/css/dataTables.dataTables.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <title>Dashboard - Tamu</title>
  </head>
  <body class="no-background">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('images/lldikti1.png') }}" alt="Logo" height="30" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"
                >Dashboard</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/user/buat-permohonan.html"
                >Buat Permohonan</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Profile</a>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Akun
              </a>
              <ul
                class="dropdown-menu dropdown-menu-end"
                aria-labelledby="navbarDropdown"
              >
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-item">Logout</button>
                  </form>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Dashboard Menu -->
    <div class="container mt-5">
      <h1>Dashboard</h1>
      <div class="table-responsive">
        <table id="example" class="table table-striped" style="width: 100%">
          <thead>
            <tr>
              <th>No</th>
              <th>Jenis Pengajuan</th>
              <th>Tgl Buat</th>
              <th>Tgl Pengajuan</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Perubahan Data Mahasiswa</td>
              <td>2023-01-01</td>
              <td>2023-01-05</td>
              <td><span class="badge bg-warning">Pending</span></td>
              <td>
                <a href="/user/detail-permohonan.html" class="btn btn-primary"
                  ><i class="bi bi-file-earmark-text"></i
                ></a>
                <a href="/user/edit-permohonan.html" class="btn btn-warning"
                  ><i class="bi bi-pen"></i
                ></a>
                <a
                  href="#"
                  class="btn btn-danger"
                  data-bs-toggle="modal"
                  data-bs-target="#deleteDataModal"
                  ><i class="bi bi-trash-fill"></i
                ></a>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Pengajuan B</td>
              <td>2023-02-01</td>
              <td>2023-02-05</td>
              <td><span class="badge bg-secondary">Draft</span></td>
              <td>
                <a href="/user/detail-permohonan.html" class="btn btn-primary"
                  ><i class="bi bi-file-earmark-text"></i
                ></a>
                <a href="/user/edit-permohonan.html" class="btn btn-warning"
                  ><i class="bi bi-pen"></i
                ></a>
                <a
                  href="#"
                  class="btn btn-danger"
                  data-bs-toggle="modal"
                  data-bs-target="#deleteDataModal"
                  ><i class="bi bi-trash-fill"></i
                ></a>
              </td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <th>No</th>
              <th>Jenis Pengajuan</th>
              <th>Tgl Buat</th>
              <th>Tgl Pengajuan</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
    <!-- Modal -->
    <div
      class="modal fade"
      id="deleteDataModal"
      tabindex="-1"
      aria-labelledby="deleteDataModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="deleteDataModalLabel">Hapus Data</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body text-center">
            <img
              src="{{ asset('images/No data-pana.svg') }}"
              alt="Delete Data"
              style="width: 400px"
              class="img-fluid mx-auto d-block"
            />
            <p>Apakah Anda yakin ingin menghapus data ini?</p>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Batal
            </button>
            <button type="button" class="btn btn-danger">Hapus</button>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer footer-expand bg-light footer-light pt-4 mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>Lokasi Kami</h3>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31857.20851193087!2d98.62040907207299!3d3.5526353714646217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312fbfdfdcb9e5%3A0xde7591a639c24c4d!2sKOPERTIS%20%2F%20LLDIKTI%20Wilayah%20I!5e0!3m2!1sid!2sid!4v1737705286793!5m2!1sid!2sid"
              width="330"
              height="180"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
            <p class="mb-0"><strong>Alamat:</strong></p>
            <p class="">
              Jl. Sempurna No.8, Tj. Sari, Kec. Medan Selayang, Kota Medan,
              Sumatera Utara 20132
            </p>
          </div>
          <div class="col-md-4">
            <h4>Jam Kerja:</h4>
            <ul class="list-unstyled">
              <li>Jadwal (Senin - Kamis) 07.30 s/d 16.00 WIB</li>
              <li>Jadwal (Jumat) 07.30 s/d 16.30 WIB</li>
            </ul>
            <h6 class="mb-1">Email:</h6>
            <ul class="list-unstyled mb-5">
              <li>suratmasuk.lldikti1@kemdikbud.go.id</li>
              <li>No telp : (061) 8214878</li>
            </ul>
            <h4 class><strong>Terhubung Dengan Kami</strong></h4>
            <ul class="list-unstyled">
              <li>
                Jadilah bagian dari kami yang bersemangat untuk meningkatkan
                kualitas perguruan tinggi di Sumatera Utara.
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h5><strong>Layanan Pengaduan</strong></h5>
            <ul class="list-unstyled">
              <li class="mb-3">
                <a href="#" class="text-dark"
                  ><img src="{{ asset('images/wbs.jpg') }}" width="300" alt=""
                /></a>
              </li>
              <li>
                <a href="#" class="text-dark"
                  ><img src="{{ asset('images/LAPOR.png') }}" width="300" alt=""
                /></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="text-center py-3">
          <p>&copy; 2023 Your Company. All rights reserved.</p>
        </div>
      </div>
    </footer>

    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.7.1.js"
      integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.datatables.net/2.2.1/css/dataTables.bootstrap5.css"></script>
    <script src="//cdn.datatables.net/2.2.1/js/dataTables.min.js"></script>
    <script>
      new DataTable("#example");
    </script>
  </body>
</html>