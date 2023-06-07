@extends('layouts.app')

@section('content')

    <div class="landing-page">
    <div class="container col-md-6" style="margin-top: 20px;">
        <h1 class="text-center" style="color: gold;">Edit Data Buku Tamu</h1>
        <form action="{{ route('buku_tamu.update', $data->id) }}" method="POST" style="background-color: rgba(255, 255, 255, 0.8); border-radius: 10px; padding: 20px;">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name" style="color: black;">Nama:</label>
                <input type="text" name="name" value="{{ $data->name }}" id="name" class="form-control" style="background-color: white;">
            </div>
            <div class="form-group">
                <label for="partner" style="color: black;">Nama partner:</label>
                <input type="text" name="partner" value="{{ $data->partner }}" id="partner" class="form-control" style="background-color: white;">
            </div>
            <div class="form-group">
                <label for="email" style="color: black;">Email:</label>
                <input type="email" name="email" value="{{ $data->email }}" id="email" class="form-control" style="background-color: white;">
            </div>
            <div class="form-group">
                <label for="alamat" style="color: black;">Alamat:</label>
                <textarea name="alamat" id="alamat" rows="5" class="form-control" style="background-color: white;">{{ $data->alamat }}</textarea>
            </div>
            <div class="form-group">
                <label for="message" style="color: black;">Ucapan:</label>
                <textarea name="message" id="message" rows="5" class="form-control" style="background-color: white;">{{ $data->message }}</textarea>
            </div>
            <a href="{{ route('buku_tamu.index') }}" class="btn btn-primary mt-2" style="background-color: grey; color:black">Kembali</a>
            <button type="submit" class="btn btn-primary mt-2" style="background-color: black;">Perbarui</button>
        </form>
    </div>
    </div>
@endsection
