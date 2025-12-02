@extends('layouts.app')

@section('content')
    <h1>📝 Todo List</h1>

    @if(session('sukses'))
        <div class="alert alert-success">{{ session('sukses') }}</div>
    @endif

    <a href="{{ route('todos.create') }}" class="btn btn-primary">➕ Tambah Todo Baru</a>

    <div style="margin-top: 20px;">
        @forelse($todos as $todo)
            <div style="border: 1px solid #ddd; padding: 15px; margin: 10px 0; border-radius: 5px; background: {{ $todo->selesai ? '#f0f0f0' : 'white' }}">
                <h3 style="display: inline-block; {{ $todo->selesai ? 'text-decoration: line-through; color: #888;' : '' }}">
                    {{ $todo->Tugas }}
                </h3>

                @if($todo->deskripsi)
                    <p style="color: #666; margin: 10px 0;">{{ $todo->deskripsi }}</p>
                @endif

                <div style="margin-top: 10px;">
                    <form action="{{ route('todos.toggle', $todo) }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn {{ $todo->selesai ? 'btn-warning' : 'btn-success' }}">
                            {{ $todo->selesai ? '↩️ Belum Selesai' : '✅ Selesai' }}
                        </button>
                    </form>

                    <a href="{{ route('todos.edit', $todo) }}" class="btn btn-primary">✏️ Edit</a>

                    <form action="{{ route('todos.destroy', $todo) }}" method="POST" style="display: inline;" onsubmit="return confirm('Yakin hapus?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">🗑️ Hapus</button>
                    </form>
                </div>
            </div>
        @empty
            <p style="text-align: center; color: #888; margin-top: 50px;">Belum ada todo. Yuk tambah!</p>
        @endforelse
    </div>
@endsection
