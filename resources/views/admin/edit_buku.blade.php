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
                    <h3>Edit Buku</h3>
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
                <div class="card-header">
                    <h4 class="card-title">Edit Buku</h4>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="basicInput">id buku</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="id buku">
                            </div>

                            <div class="form-group">
                                <label for="helpInputTop">id kategori</label>
                                <input type="text" class="form-control" id="helpInputTop">
                            </div>

                            <div class="form-group">
                                <label for="helperText">judul buku</label>
                                <input type="text" id="helperText" class="form-control" placeholder="judul buku">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="disabledInput">penulis</label>
                                <input type="text" class="form-control" id="" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="readonlyInput">penerbit</label>
                                <input type="text" id="helperText" class="form-control" placeholder="penerbit">
                            </div>

                            <div class="form-group">
                                <label for="disabledInput">tahun terbit</label>
                                <input type="text" class="form-control" id="" placeholder="Alamat">
                            </div>
                            <div class="form-group">
                                <label for="disabledInput">stok</label>
                                <input type="text" class="form-control" id="" placeholder="stok">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary me-md-2" type="button">Edit</button>
            </div>
        </section>
    </div>
@endsection
