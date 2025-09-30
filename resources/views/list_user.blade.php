@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-[#C7D2FE] py-8">
    <div class="w-full max-w-4xl mx-auto">
        <h1 class="text-center text-3xl font-bold mb-6 bg-gradient-to-r from-blue-500 to-pink-500 text-transparent bg-clip-text">
            Daftar Mahasiswa Ilmu Komputer
        </h1>

        <!-- Tombol Tambah Pengguna -->
        </div>
        <div style="text-align:right; margin-bottom:1rem;">
            <a href="{{ route('user.create') }}" class="btn btn-success" style="background:#00b7efff; color:white; padding:0.5rem 1.2rem; border-radius:4px; text-decoration:none;">+ Tambahkan User</a>
        </div>



        <!-- Tabel dengan warna biru muda -->
        <div class="bg-blue-100 rounded-lg shadow overflow-hidden">
            @include('component/user_table', ['users' => $users])
        </div>
    </div>
</div>
@endsection
