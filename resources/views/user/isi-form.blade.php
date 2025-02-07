<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="//cdn.datatables.net/2.2.1/css/dataTables.dataTables.min.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <title>Dashboard - Buat Permohonan</title>
</head>

<body>

    <body class="no-background">
        <!-- Navbar -->
        @include('partials.navbar')
        <!-- form permohonan dengan 3 step, 1 pilih jenis premohonan -->
        <div class="container mt-5">
            <div class="card shadow-lg p-5">
                <h2 class="title-align-center">Upload Dokumen</h2>
                <p class="text-muted title-align-center">
                    Silahkan upload dokumen untuk melengkapi permohonan anda.
                </p>
                <hr />
                <div class="d-flex justify-content-between mb-4">
                    <div class="text-center mx-2">
                        <span class="badge bg-secondary">1</span>
                        <p class="small text-muted">Pilih Jenis Permohonan</p>
                    </div>
                    <div class="text-center mx-2">
                        <span class="badge bg-primary">2</span>
                        <p class="small text-muted">Upload Dokumen</p>
                    </div>
                    <div class="text-center mx-2">
                        <span class="badge bg-secondary">3</span>
                        <p class="small text-muted">Konfirmasi</p>
                    </div>
                </div>
                <form action="{{ route('isi-form') }}" method="POST">
                    @csrf
                    <!-- New fields for Perubahan Data Mahasiswa -->
                    <div class="mb-3">
                        <label for="dokumen-pengajuan" class="form-label">Dokumen Pengajuan <span
                                class="text-danger">*</span></label>
                        <a href="#" class="form-label"><i class="p-1 bi bi-download"></i></a>
                        <input type="file" class="form-control" id="dokumen-pengajuan" accept=".pdf" />
                    </div>
                    <div class="mb-3">
                        <label for="dokumen-pendukung" class="form-label">Dokumen Pendukung <span
                                class="text-danger">*</span></label>
                        <a href="#" class="form-label"><i class="p-1 bi bi-download"></i></a>
                        <input type="file" class="form-control" id="dokumen-pendukung" accept=".pdf" />
                    </div>
                    <input type="hidden" name="status" value="draft">
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('buat-permohonan') }}" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary">Selanjutnya</button>
                    </div>
                </form>
            </div>
        </div>

        @include('partials.footer')

        <script src="{{ asset('js/main.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
            crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/2.2.1/css/dataTables.bootstrap5.css"></script>
        <script src="//cdn.datatables.net/2.2.1/js/dataTables.min.js"></script>
        <script>
            new DataTable("#example");
        </script>
    </body>
</body>

</html>
