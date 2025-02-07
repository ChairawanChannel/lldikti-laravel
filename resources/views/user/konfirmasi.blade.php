<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/css/style.css" />
    <title>Konfirmasi - Buat Permohonan</title>
</head>

<body class="no-background">
    <!-- Navbar -->
    @include('partials.navbar')
    <!-- Konfirmasi permohonan -->
    <div class="container mt-5">
        <div class="card shadow-lg p-5">
            <h2 class="title-align-center">Konfirmasi Permohonan</h2>
            <p class="text-muted title-align-center">
                Silahkan konfirmasi data permohonan anda sebelum mengirim.
            </p>
            <hr />
            <div class="d-flex justify-content-between mb-4">
                <div class="text-center mx-2">
                    <span class="badge bg-secondary">1</span>
                    <p class="small text-muted">Pilih Jenis Permohonan</p>
                </div>
                <div class="text-center mx-2">
                    <span class="badge bg-secondary">2</span>
                    <p class="small text-muted">Upload Dokumen</p>
                </div>
                <div class="text-center mx-2">
                    <span class="badge bg-primary">3</span>
                    <p class="small text-muted">Konfirmasi</p>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Jenis Permohonan</label>
                <p class="form-control-plaintext">
                    <i class="bi bi-file-earmark-text"></i> Jenis Permohonan Anda
                </p>
            </div>
            <div class="mb-3">
                <label class="form-label">Dokumen Pengajuan</label>
                <p class="form-control-plaintext">
                    <i class="bi bi-file-earmark-arrow-up"></i> Dokumen Pengajuan Anda
                    <a href="#"><i class="bi bi-download"></i></a>
                </p>
            </div>
            <div class="mb-3">
                <label class="form-label">Dokumen Pendukung</label>
                <p class="form-control-plaintext">
                    <i class="bi bi-file-earmark-arrow-up"></i> Dokumen Pendukung Anda
                    <a href="#"><i class="bi bi-download"></i></a>
                </p>
            </div>
            <div class="d-flex justify-content-between">
                <a href="{{ route('isi-form') }}" class="btn btn-secondary">Kembali</a>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#confirmModal">
                    Kirim
                </button>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmModalLabel">
                        Konfirmasi Pengiriman
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="/assets/images/Business analytics-amico.svg" alt="Confirmation Image" width="300"
                        class="img-fluid mb-3" />
                    <p>Apakah Anda yakin ingin membuat permohonan?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Batal
                    </button>
                    <form action="{{ route('submit-form') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">Ya, Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
