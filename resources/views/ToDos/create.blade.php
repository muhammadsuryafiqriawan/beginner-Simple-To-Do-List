@extends('layouts.app')

@section('content')
    <h1>➕ Tambah Todo Baru</h1>

    <form action="{{ route('todos.store') }}" method="POST">
        @csrf

        <label>Judul Todo:</label>
        <input type="text" name="Tugas" value="{{ old('Tugas') }}" required>
        @error('Tugas')
            <span style="color: red;">{{ $message }}</span>
        @enderror

        <label>Deskripsi (opsional):</label>
        <textarea name="deskripsi" rows="4">{{ old('deskripsi') }}</textarea>

        <div style="margin-top: 20px;">
            <button type="submit" class="btn btn-success">💾 Simpan</button>
            <a href="{{ route('todos.index') }}" class="btn btn-danger">❌ Batal</a>
        </div>
    </form>
@endsection
