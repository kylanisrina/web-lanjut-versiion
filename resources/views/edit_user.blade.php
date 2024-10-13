@extends('layouts.app4')
<div class="decoration extra-small" style="top: 5%; left: 5%; animation: float 4s ease-in-out infinite;">⭐</div>
<div class="decoration medium" style="top: 15%; right: 10%; animation: float 6s ease-in-out infinite;">🌙</div>
<div class="decoration large" style="bottom: 10%; left: 15%; animation: float 5s ease-in-out infinite;">❤️</div>
<div class="decoration small" style="top: 30%; left: 20%; animation: float 7s ease-in-out infinite;">⭐</div>
<div class="decoration medium" style="bottom: 20%; right: 15%; animation: float 5.5s ease-in-out infinite;">❤️</div>
<div class="decoration extra-small" style="top: 50%; right: 5%; animation: float 4.5s ease-in-out infinite;">🌙</div>
<div class="decoration extra-large" style="bottom: 40%; left: 10%; animation: float 6.5s ease-in-out infinite;">⭐</div>
<div class="decoration medium" style="top: 60%; right: 20%; animation: float 5s ease-in-out infinite;">❤️</div>
<div class="decoration small" style="bottom: 15%; right: 10%; animation: float 4s ease-in-out infinite;">🌙</div>
<div class="decoration medium" style="top: 10%; left: 30%; animation: float 6s ease-in-out infinite;">⭐</div>
<div class="decoration extra-small" style="top: 70%; left: 5%; animation: float 5.5s ease-in-out infinite;">❤️</div>
<div class="decoration small" style="bottom: 30%; right: 25%; animation: float 4.5s ease-in-out infinite;">⭐</div>
<div class="decoration large" style="top: 40%; left: 40%; animation: float 7s ease-in-out infinite;">🌙</div>
<div class="decoration medium" style="bottom: 50%; right: 35%; animation: float 5s ease-in-out infinite;">❤️</div>
<div class="decoration extra-small" style="top: 80%; left: 45%; animation: float 4s ease-in-out infinite;">⭐</div>
<div class="decoration small" style="top: 25%; right: 40%; animation: float 6s ease-in-out infinite;">🌙</div>
<div class="decoration extra-large" style="bottom: 60%; left: 50%; animation: float 5.5s ease-in-out infinite;">❤️</div>
<div class="decoration medium" style="top: 55%; right: 45%; animation: float 4.5s ease-in-out infinite;">⭐</div>
<div class="decoration small" style="bottom: 70%; left: 55%; animation: float 7s ease-in-out infinite;">🌙</div>
<div class="decoration large" style="top: 75%; right: 50%; animation: float 5s ease-in-out infinite;">❤️</div>
<div class="decoration extra-small" style="bottom: 80%; left: 60%; animation: float 4s ease-in-out infinite;">⭐</div>
<div class="decoration medium" style="top: 85%; right: 55%; animation: float 6s ease-in-out infinite;">🌙</div>
<div class="decoration small" style="bottom: 85%; left: 65%; animation: float 5.5s ease-in-out infinite;">❤️</div>
<div class="decoration extra-large" style="top: 90%; right: 60%; animation: float 4.5s ease-in-out infinite;">⭐</div>
<div class="decoration medium" style="bottom: 90%; left: 70%; animation: float 7s ease-in-out infinite;">🌙</div>
@section('content')
<div>
    <a href="{{ route('user.list') }}" class="btn-list-user">List User</a>

    <form action="{{ route('user.update', $user['id']) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="container">
            <h1 class="text-center">Input Data</h1>
            <div class="konten-2">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" value="{{ old('nama', $user->nama) }}"
                    placeholder="Nama anda">
            </div>

            <div class="konten-2">
                <label for="npm" class="form-label">NPM</label>
                <input type="text" class="form-control" name="npm" id="npm" value="{{ old('npm', $user->npm) }}"
                    placeholder="NPM anda">
            </div>

            <div class="konten-2">
                <label for="kelas" class="form-label">Kelas</label>
                <select class="form-select" name="kelas_id" id="kelas_id">
                    @foreach ($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}" {{ $kelasItem->id == $user->kelas_id ? 'selected' : '' }}>
                        {{ $kelasItem->nama_kelas }}
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="konten-2">
                <label for="foto" class="form-label">Foto</label>
                <input class="form-control" type="file" id="foto" name="foto">
                @if ($user->foto)
                <img src="{{ Storage::url($user->foto) }}" alt="Profile Picture" class="profile-img"></img>
                @endif
            </div>

            <button type="submit" class="btn-submit">Submit</button>
            <a href="{{ route('user.list') }}" class="btn-kembali">Kembali</a>
        </div>
    </form>
</div>


@endsection
