@extends('layout.app')
@section('konten')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Tambah Data Buku</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            {{-- <li class="breadcrumb-item"><a href="{{ route('admin.beranda') }}">Dashboard</a></li> --}}
                            <li class="breadcrumb-item"><a href="{{ url('data_buku') }}">Data Buku</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create Data Buku</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section id="basic-vertical-layouts">
            <div class="row match-height">
                <div class="col-md-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tambah Buku</h4>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-vertical" action="{{ route('buku.store') }}" method="post"
                                    enctype="multipart/form-data">
                                    <div class="form-body">
                                        <div class="row">
                                            @csrf
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Judul Buku</label>
                                                    <input type="text" id="first-name-vertical" class="form-control"
                                                        name="judul" placeholder="Judul Buku">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Penulis</label>
                                                    <input type="text" id="first-name-vertical" class="form-control"
                                                        name="penulis" placeholder="Penulis">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Penerbit</label>
                                                    <input type="text" id="first-name-vertical" class="form-control"
                                                        name="penerbit" placeholder="Penerbit">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="email-id-vertical">Tahun terbit</label>
                                                    <input type="date" id="email-id-vertical" class="form-control"
                                                        name="tahun_terbit" placeholder="Tahun Terbit">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first-name-vertical">Deskripsi</label>
                                                    <input type="text" id="first-name-vertical" class="form-control"
                                                        name="deskripsi" placeholder="Deskripsi">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="formFile" class="form-label">Gambar Buku</label>
                                                    <input class="form-control mb-3" name="gambar" type="file"
                                                        id="formFile" class="@error('image') is-invalid @enderror">
                                                </div>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <label for="formFile" class="form-label"><b>Kategori</b></label> <br>
                                               
                                                    <select name="id_kategori" class="form-select" aria-label="Default select example" id="id_kategori">
                                                        <option selected="Open this select menu"></option>
                                                        @foreach ($kategori as $item)
                                                        <option value="{{ $item->id }}">{{ $item->nm_kategori }}</option>
                                                @endforeach
                                            </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="first-name-vertical">Stok</label>
                                                <input type="number" id="first-name-vertical" class="form-control"
                                                    name="stok" placeholder="Stok">
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Tambah</button>
                                        </div>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>
@endsection
