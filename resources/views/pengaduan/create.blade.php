@extends('admin.layouts.master')

@section('content')
    <div class="container">

        <div class="card shadow mb-4 my-5">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Pengaduan</h6>
            </div>

            <form action="{{ route('pengaduan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">



                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                        <div class="mb-4 mt-5">
                            <label for="tgl">Tanggal Pengaduan</label>
                            <input id="tgl" type="date" name="tgl_pengaduan"
                                class="form-control @error('tgl_pengaduan') is-invalid @enderror">

                            @error('tgl_pengaduan')
                                <span>{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="isi">Isi Laporan</label>
                            <textarea id="isi" name="isi_laporan" class="form-control @error('isi_laporan') is-invalid @enderror"
                                cols="30" rows="5"></textarea>

                            @error('isi_laporan')
                                <span>{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label>Foto</label>
                            <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror">

                            @error('foto')
                                <span>{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-danger">Reset</button>


                    </div>
                </div>

            </form>
        </div>

    </div>
@endsection
