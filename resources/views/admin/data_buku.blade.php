@extends('layout.app')
@section('konten')
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>DataBuku</h3>
                    <p class="text-subtitle text-muted">A sortable, searchable, paginated table without dependencies thanks
                        to simple-datatables.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="card-title ">
                        Data Buku
                    </h5>
                    <a href="{{ url('admin/buku/create') }}" class="btn btn-primary">Tambah Data Buku</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive datatable-minimal">
                        <table class="table table-striped" id="table2">
                            <thead>
                                <tr>
                                    <th>id buku</th>
                                    <th>id kategori</th>
                                    <th>judul buku</th>
                                    <th>penulis</th>
                                    <th>penerbit</th>
                                    <th>tahun terbit</th>
                                    <th>stok</th>
                                    <th>Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>061</td>
                                    <td>0061</td>
                                    <td>kams</td>
                                    <td>Shanti</td>
                                    <td>(016977) 8208</td>
                                    <td>2023</td>
                                    <td>2</td>
                                    <td>
                                        <a href="{{ url('admin/buku/edit') }}" class="btn btn-primary">Edit</a>
                                        <a href="delete_user.html" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </section>
    </div>
@endsection
