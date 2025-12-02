@extends('layouts.app')

@section('content')
    <h1>✏️ Edit Todo</h1>

    <form action="{{ route('todos.update', $todo) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Judul Todo:</label>
        <input type="text" name="Tugas" value="{{ old('Tugas', $todo->Tugas) }}" required>
        @error('Tugas')
            <span style="color: red;">{{ $message }}</span>
        @enderror

        <label>Deskripsi:</label>
        <textarea name="deskripsi" rows="4">{{ old('deskripsi', $todo->deskripsi) }}</textarea>

        <div style="margin-top: 20px;">
            <button type="submit" class="btn btn-success">💾 Update</button>
            <a href="{{ route('todos.index') }}" class="btn btn-danger">❌ Batal</a>
        </div>
    </form>
@endsection
