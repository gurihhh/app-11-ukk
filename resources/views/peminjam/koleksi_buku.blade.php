@extends('layout.app1')
@section('konten1')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Koleksi</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Koleksi</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="page-content"></div>
        <section class="row">
            <div class="col-12 col-lg-12">
                <div class="card"></div>
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                    </div>
                    <div class="form-outline" data-mbd-input-init>
                        <input type="search" id="form1" class="form-control mt-3" placeholder="Search....." aria-label="search"/>
                    </div>
                </div>  
                </div>
                    </div>
                <div class="card-body">
                    <div class="table-responsive datatable-minimal">
                        <table class="table table-striped" id="table2">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Judul Buku</th>
                                    <th>Penulis</th>
                                    <th>Penerbit</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Romance</td>
                                    <td>guuuu</td>
                                    <td>Guruh</td>
                                    <td>
                                        <a href="" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </section>
    </div>
    <script>
        import { Input, initMDB} from "mdb-ui-kit";

        initMDB({ Input });
    </script>
@endsection
