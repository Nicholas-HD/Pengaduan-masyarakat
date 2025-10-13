@extends('admin.layouts.master')

@section('content')
    <div class="container">
        @if (Session::has('message'))
            <div class="alert alert-succsess">
                {{ Session::get('message') }}
            </div>
        @endif

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">

                <div class="card">
                    <div class="card-header"><b>Detail Pengaduan</b></div>
                    <div class="card-body">
                        <div class="form-group">

                            <center><img src="{{ asset('image') }}/{{ $pengaduan->image }}" width="500"
                                    class="text-center " alt=""></center><br>
                            Nama Pelapor : <b>{{ $pengaduan->user->name }}</b><br>
                            NIK : <b>{{ $pengaduan->user->nik }} </b><br>
                            Isi laporan : <b>{{ $pengaduan->isi_laporan }}</b><br>
                            Tanggal Pengaduan : <b>{{ $pengaduan->tgl_pengaduan }}</b> <br>

                            Tanggapan : @if (empty($pengaduan->tanggapan->tanggapan))
                                <b>Belum ada tanggapan</b>
                            @else
                                <b>{{ $pengaduan->tanggapan->tanggapan }}</b>
                            @endif

                        </div>





                        @if (empty($pengaduan->tanggapan->tanggapan))
                            <div class="form-group">
                                <a href="{{ route('tanggapan.show', [$pengaduan->id]) }}">
                                    <button class="btn btn-primary">Beri Tanggapan</button></a>
                            </div>
                        @else   
                            <div class="form-group">
                                <a href="{{ route('tanggapan.edit',[$pengaduan->id]) }}">
                                    <button class="btn btn-primary">Update Tanggapan</button></a>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection