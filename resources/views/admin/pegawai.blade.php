@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <ul class="list-group">
                <a href="../admin" class="list-group-item list-group-item-action">Dashboard</a>
                <a href="../admin/pegawai" class="list-group-item list-group-item-action active">Pegawai</a>
                <a href="../admin/dapur" class="list-group-item list-group-item-action">Dapur</a>
                <a href="../admin/akuntansi" class="list-group-item list-group-item-action">Akuntansi</a>
                <a href="../admin/pelayanan" class="list-group-item list-group-item-action">Pelayanan</a>
            </ul>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Pegawai</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Posisi</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Jhonarendra</td>
                                <td>jhonarendra@gmail.com</td>
                                <td>Akuntan</td>
                                <td>
                                    <a class="btn btn-primary" href="">Edit</a>
                                    <a class="btn btn-danger" href="">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Jhonarendra</td>
                                <td>jhonarendra@gmail.com</td>
                                <td>Akuntan</td>
                                <td>
                                    <a class="btn btn-primary" href="">Edit</a>
                                    <a class="btn btn-danger" href="">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Jhonarendra</td>
                                <td>jhonarendra@gmail.com</td>
                                <td>Akuntan</td>
                                <td>
                                    <a class="btn btn-primary" href="">Edit</a>
                                    <a class="btn btn-danger" href="">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Jhonarendra</td>
                                <td>jhonarendra@gmail.com</td>
                                <td>Akuntan</td>
                                <td>
                                    <a class="btn btn-primary" href="">Edit</a>
                                    <a class="btn btn-danger" href="">Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
