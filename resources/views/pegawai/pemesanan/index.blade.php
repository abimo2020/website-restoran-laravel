@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3 mb-3">
            <div class="card mb-3" style="max-width: 20rem;">
                <div class="card-header">Profil</div>
                <div class="card-body">
                    <div style="text-align: center">
                        <img src="" style="width: 100px;height: 100px;border-radius: 50%;" />
                        <h4 class="card-title">
                            {{$pegawai['nama_pegawai']}}
                        </h4>
                        <p class="card-text">
                            {{$pegawai['email_pegawai']}}<br />
                            {{$pegawai['jabatan_pegawai']}}
                        </p>
                    </div>
                </div>
            </div>
            <ul class="list-group">
                <a href="{{URL('pegawai')}}" class="list-group-item list-group-item-action">Dashboard</a>
                <a href="{{URL('pegawai/reservasi')}}" class="list-group-item list-group-item-action">Reservasi</a>
                <a href="{{URL('pegawai/pemesanan')}}" class="list-group-item list-group-item-action active">Pemesanan</a>
                <a href="{{URL('pegawai/pelanggan')}}" class="list-group-item list-group-item-action">Pelanggan</a>
                <a href="{{URL('pegawai/pegawai')}}" class="list-group-item list-group-item-action">Pegawai</a>
                <a href="{{URL('pegawai/restoran')}}" class="list-group-item list-group-item-action">Restoran</a>
                <a href="{{URL('pegawai/hidangan')}}" class="list-group-item list-group-item-action">Hidangan</a>
                <a href="{{URL('pegawai/pengaturan')}}" class="list-group-item list-group-item-action">Pengaturan</a>
            </ul>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Pemesanan</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{URL('pegawai/pemesanan/create')}}" class="btn btn-success">Tambah Pemesanan</a>

                    <table class="table table-bordered table-responsive mt-3">
                        <thead>
                            <tr>
                                <th scope="col">ID Pemesanan</th>
                                <th scope="col">Nama Pelanggan</th>
                                <th scope="col">Restoran</th>
                                <th scope="col">Tanggal Pemesanan</th>
                                <th scope="col">Nama Pegawai</th>
                                <th scope="col">Total Pemesanan</th>
                                <th scope="col">Status</th>
                                <th scope="col">Tanggal Diperbarui</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pemesanan as $pemesanan)
                            <tr>
                                <td>{{$pemesanan->id_pemesanan}}</td>
                                <td>{{$pemesanan->nama_pelanggan}}</td>
                                <td>{{$pemesanan->nama_restoran}}</td>
                                <td>{{$pemesanan->created_at}}</td>
                                <td>{{$pemesanan->nama_pegawai}}</td>
                                <td>{{$pemesanan->total_pemesanan}}</td>
                                <td>{{$pemesanan->status_pemesanan}}</td>
                                <td>{{$pemesanan->updated_at}}</td>
                                <td>
                                    <a href="{{URL('pegawai/pemesanan/'.$pemesanan->id_pemesanan)}}" class="btn btn-primary">Rincian</a>
                                    <a href="{{URL('pegawai/pemesanan/'.$pemesanan->id_pemesanan.'/edit')}}" class="btn btn-success">Edit</a>
                                    <form action="{{URL('pegawai/pemesanan/'.$pemesanan->id_pemesanan)}}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE')}}
                                        <input type="submit" class="btn btn-danger" value="Hapus">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
