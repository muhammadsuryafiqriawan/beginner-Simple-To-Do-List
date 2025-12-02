<?php

namespace App\Http\Controllers;

use App\Models\ToDo;
use Illuminate\Http\Request;

class ToDoController extends Controller
{
    // Menampilkan Semua To-Do
    public function index()
    {
        // Mengambil semua to-do dari database
        $todos = ToDo::latest()->get();
        // Mengembalikan view dengan data to-do
        return view('todos.index', compact('todos'));
    }
    // Menampilkan Formulir untuk Membuat To-Do Baru
    public function create()
    {
        // Mengembalikan view untuk formulir pembuatan to-do baru
        return view('todos.create');
    }
    // Menyimpan To-Do Baru
    public function store(Request $minta)
    {
        // Validasi data yang diterima dari formulir
        $minta->validate([
            'Tugas' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'tanggal_selesai' => 'nullable|date',
        ]);

        // Membuat to-do baru di database
        ToDo::create($minta->all());

        // Redirect ke halaman daftar to-do dengan pesan sukses
        return redirect()->route('todos.index')
                            ->with('sukses', 'To-Do List berhasil dibuat!.');
    }
    // Menampilkan Formulir untuk Mengedit To-Do yang Ada
    public function edit(ToDo $todo)
    {
        // Mengembalikan view untuk formulir pengeditan to-do dengan data yang ada
        return view('todos.edit', compact('todo'));
    }
    // Memperbarui To-Do yang Ada
    public function update(request $minta, ToDo $todo)
    {
        // Validasi data yang diterima dari formulir
        $minta->validate([
            'Tugas' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'tanggal_selesai' => 'nullable|date',
        ]);
        // Memperbarui to-do di database
        $todo->update($minta->all());

        // Redirect ke halaman daftar to-do dengan pesan sukses
        return redirect()->route('todos.index')
                         ->with('sukses', 'To-Do List berhasil diupdate!.');
    }
    // Menghapus To-Do
    public function destroy(ToDo $todo)
    {
        // Menghapus to-do dari database
        $todo->delete();

        // Redirect ke halaman daftar to-do dengan pesan sukses
        return redirect()->route('todos.index')
                         ->with('sukses', 'To-Do List berhasil dihapus!.');
    }
    // Mengubah Status Penyelesaian To-Do
    public function toggle(ToDo $todo)
    {
        // Mengubah status 'selesai' dari to-do
        $todo->update(['selesai' => !$todo->selesai]);
        // Redirect ke halaman daftar to-do dengan pesan sukses
        return redirect()->route('todos.index')
                         ->with('sukses', 'Status To-Do List berhasil diubah!.');
    }
}
