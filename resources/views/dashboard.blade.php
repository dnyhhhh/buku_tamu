@extends('layouts.app')

@section('content')
<div class="landing-page">
<div class="container">
    <div class="row justify-content-center">
            <!-- Main content -->
            <div class="col-md-16" id="main-content">
            <!-- Main content -->
            <div class="d-flex justify-content-between">
            <h1 class="title">Buku Tamu</h1>
            <a href="{{ route('buku_tamu.create') }}" class="btn btn-primary mb-2 mt-2" style="background-color: gold; color:black;">Tambah Data</a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Nama Partner</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Ucapan</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($guestbookEntries as $entry)
                            <tr>
                                <td>{{ $entry->name }}</td>
                                <td>{{ $entry->partner }}</td>
                                <td>{{ $entry->email }}</td>
                                <td>{{ $entry->alamat }}</td>
                                <td>{{ $entry->message }}</td>
                                <td>{{ $entry->created_at }}</td>
                                <td>
                                    <a href="{{ route('buku_tamu.edit', $entry->id) }}" class="btn btn-sm btn-info">Edit</a>
                                    <form action="{{ route('buku_tamu.destroy', $entry->id) }}" method="POST" style="display: inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"  class="btn btn-sm btn-danger">Hapus</button>
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
