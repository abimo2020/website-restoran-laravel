@extends('layouts.pelanggan')

@section('title', 'Buat Reservasi')

@section('foto_pelanggan', $pelanggan['foto_pelanggan'])
@section('nama_pelanggan', $pelanggan['nama_pelanggan'])
@section('email_pelanggan', $pelanggan['email_pelanggan'])

@section('content')
                    
@foreach ($reservasi as $pelanggan )
                    <div class="col-lg-6">
                        <div class="card" style="background: #f5f5f5">
                                <div class="basic-form">
                                    <form method="POST" action="{{ URL('pelanggan/testimoni-create') }}">
                                        @method('PATCH')
                                        {{ csrf_field() }}

                                        <div class="form-group">
                                            <label for="testimoni">Testimoni</label>
                                            <input type="text" class="form-control" id="testimoni" placeholder="" name="testimoni">
                                        </div>
                                        <div style="text-align: right;">
                                            <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah testimoni sudah benar?')">Lanjutkan</button>
                                            <a class="btn btn-danger" href="{{URL('pelanggan')}}">Batal</a>
                                        </div>
                                    </form>
                                </div>
                        </div>
                    </div>
@endforeach
@endsection
