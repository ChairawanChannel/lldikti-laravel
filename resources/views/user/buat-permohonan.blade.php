<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="icon" href="{{ asset('images/icon-pages.png') }}" />

    <title>Dashboard - Tamu</title>
</head>

<body class="no-background">
    @include('partials.navbar')
    <!-- form permohonan dengan 3 step, 1 pilih jenis premohonan -->
    <div class="container mt-5">
        <div class="card shadow-lg p-5">
            <h2 class="title-align-center">Buat Permohonan</h2>
            <p class="text-muted title-align-center">
                Silahkan pilih jenis permohonan yang ingin diajukan
            </p>
            <hr />
            <div class="d-flex justify-content-between mb-4">
                <div class="text-center mx-2">
                    <span class="badge bg-primary">1</span>
                    <p class="small text-muted">Pilih Jenis Permohonan</p>
                </div>
                <div class="text-center mx-2">
                    <span class="badge bg-secondary">2</span>
                    <p class="small text-muted">Isi Formulir</p>
                </div>
                <div class="text-center mx-2">
                    <span class="badge bg-secondary">3</span>
                    <p class="small text-muted">Konfirmasi</p>
                </div>
            </div>
            <form>
                <div class="mb-3">
                    <label for="jenispermohonan" class="form-label">Jenis Permohonan <span
                            class="text-danger">*</span></label>
                    <select class="form-select" id="jenispermohonan" required>
                        <option selected>Pilih Jenis Permohonan</option>
                        <option value="1">Perubahan Data Mahasiswa</option>
                    </select>
                </div>
                <a href="/user/isi-formulir.html" type="submit" class="btn btn-primary w-100">Lanjut</a>
            </form>
        </div>
    </div>
    @include('partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
