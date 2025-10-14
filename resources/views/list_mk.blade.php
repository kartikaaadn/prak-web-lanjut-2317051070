@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4 text-center">{{ $title }}</h1>

    <div class="text-end mb-3">
        <a href="{{ route('matakuliah.create') }}" class="btn btn-success btn-sm">Tambah Mata Kuliah</a>
    </div>

    <table class="table table-hover align-middle shadow-sm rounded">
        <thead class="table-dark text-center">
            <tr>
                <th>ID</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mks as $mk)
            <tr>
                <td>{{ $mk->id }}</td>
                <td>{{ $mk->nama_mk }}</td>
                <td>{{ $mk->sks }}</td>
                <td class="text-center">
                    <a href="{{ route('matakuliah.edit', $mk->id) }}" class="btn btn-outline-warning btn-sm px-3 rounded-pill me-2">Edit</a>
                    <form action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-outline-danger btn-sm px-3 rounded-pill delete-btn">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div id="confirmModal" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; 
    background: rgba(0,0,0,0.5); align-items:center; justify-content:center; z-index:9999;">
    <div style="background:white; padding:20px; border-radius:8px; text-align:center; min-width:300px;">
        <p>Yakin ingin menghapus data mata kuliah ini?</p>
        <button id="confirmYes" class="btn btn-danger btn-sm me-2">Ya, hapus</button>
        <button id="confirmNo" class="btn btn-secondary btn-sm">Batal</button>
    </div>
</div>

{{-- Notif --}}
<div id="toast" style="display:none; position:fixed; top:20px; left:50%; transform:translateX(-50%);
    padding:10px 20px; border-radius:5px; color:white; z-index:9999;"></div>

<script>
let currentForm = null;
document.querySelectorAll('.delete-btn').forEach(btn => {
    btn.onclick = () => {
        currentForm = btn.closest('form');
        document.getElementById('confirmModal').style.display = 'flex';
    };
});

document.getElementById('confirmYes').onclick = () => {
    if(currentForm) currentForm.submit();
};
document.getElementById('confirmNo').onclick = () => {
    document.getElementById('confirmModal').style.display = 'none';
};
function showToast(message, type='success') {
    const toast = document.getElementById('toast');
    toast.innerText = message;
    toast.style.background = type === 'success' ? '#28a745' : '#dc3545';
    toast.style.display = 'block';
    setTimeout(()=>{ toast.style.display='none'; }, 1800);
}
@if(session('success'))
showToast("{{ session('success') }}", 'success');
@endif

@if(session('error'))
showToast("{{ session('error') }}", 'error');
@endif
</script>
@endsection