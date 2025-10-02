@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="fw-bold text-primary m-0">📋 List Users</h1>
        <a href="{{ route('user.create') }}" class="btn btn-lg btn-primary shadow-sm rounded-pill">
            ➕ Add Users
        </a>
    </div>

    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body">
            <table class="table table-hover align-middle text-center">
                <thead class="table-primary">
                    <tr>
                        <th scope="col" style="width: 50px;">id</th>
                        <th scope="col" style="width: 100px;">Nama</th>
                        <th scope="col" style="width: 100px;">NPM</th>
                        <th scope="col" style="width: 100px;">Kelas</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td class="text-start">{{ $user->nama }}</td> {{-- Isi rata kiri --}}
                            <td>{{ $user->nim }}</td>
                            <td>
                                <span class="badge bg-success px-3 py-2 rounded-pill">
                                    {{ $user->nama_kelas }}
                                </span>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted">
                                Upss tidak ada data pengguna 
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection