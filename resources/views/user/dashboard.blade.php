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
    <title>Dashboard - Tamu</title>
</head>

<body class="no-background">
    @include('partials.navbar')
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
                            <a href="/user/detail-permohonan.html" class="btn btn-primary"><i
                                    class="bi bi-file-earmark-text"></i></a>
                            <a href="/user/edit-permohonan.html" class="btn btn-warning"><i class="bi bi-pen"></i></a>
                            <a href="#" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#deleteDataModal"><i class="bi bi-trash-fill"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Pengajuan B</td>
                        <td>2023-02-01</td>
                        <td>2023-02-05</td>
                        <td><span class="badge bg-secondary">Draft</span></td>
                        <td>
                            <a href="/user/detail-permohonan.html" class="btn btn-primary"><i
                                    class="bi bi-file-earmark-text"></i></a>
                            <a href="/user/edit-permohonan.html" class="btn btn-warning"><i class="bi bi-pen"></i></a>
                            <a href="#" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#deleteDataModal"><i class="bi bi-trash-fill"></i></a>
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
    <div class="modal fade" id="deleteDataModal" tabindex="-1" aria-labelledby="deleteDataModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteDataModalLabel">Hapus Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="{{ asset('images/No data-pana.svg') }}" alt="Delete Data" style="width: 400px"
                        class="img-fluid mx-auto d-block" />
                    <p>Apakah Anda yakin ingin menghapus data ini?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Batal
                    </button>
                    <button type="button" class="btn btn-danger">Hapus</button>
                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.2.1/css/dataTables.bootstrap5.css"></script>
    <script src="//cdn.datatables.net/2.2.1/js/dataTables.min.js"></script>
    <script>
        new DataTable("#example");
    </script>
</body>

</html>
