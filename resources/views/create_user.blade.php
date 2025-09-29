@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Untuk Pengguna baru</h1>

  <form action="{{ route('user.store') }}" method="POST">
    @csrf

    <label for="nama">Nama:</label><br>
    <input type="text" id="nama" name="nama"><br><br>

    <label for="npm">NPM:</label><br>
    <input type="text" id="npm" name="npm"><br><br>

    <label for="kelas">Kelas:</label><br>
    <select name="kelas_id" id="kelas_id" class="form-select">
        @foreach ($kelas as $kelasItem)
            <option value="{{ $kelasItem->id }}">
                {{ str_replace('Kelas ', '', $kelasItem->nama_kelas) }}
            </option>
        @endforeach
    </select><br><br>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection
