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
                    <h3>Tambah User</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create User</h4>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="basicInput">Username</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="Username">
                            </div>

                            <div class="form-group">
                                <label for="helpInputTop">Password</label>
                                <input type="text" class="form-control" id="helpInputTop">
                            </div>

                            <div class="form-group">
                                <label for="helperText">Email</label>
                                <input type="text" id="helperText" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="disabledInput">Nama</label>
                                <input type="text" class="form-control" id="" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="readonlyInput">No telp</label>
                                <input type="text" class="form-control" id="basicInput" placeholder="no telp">
                            </div>

                            <div class="form-group">
                                <label for="disabledInput">Alamat</label>
                                <input type="text" class="form-control" id="" placeholder="Alamat">
                            </div>
                            <button type="button" class="btn btn-primary">Tambah</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
