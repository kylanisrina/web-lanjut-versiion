@extends('layouts.app3')
@section ('content')
<div class="card">
    <img src="{{ Storage::url($user->foto) }}" alt="Profile Picture" class="profile-img"></img>
    <div class="info">
        <h1 class="label">{{ $user->nama }} </h1>
        <h1 class="label">{{ $user->npm }}  </h1>
        <h1 class="label">{{ $nama_kelas  ?? 'Kelas tidak ditemukan' }}</h1>
        <a href="{{ route('user.list') }}" class="btn-kembali">Kembali ke List</a>
    </div>
</div>
{{-- // jangan lupa kasih perintah php artisan storage:link --}}
{{-- pokoknya jangan lupa jalanin ini perintah yaa jangan sampe lupa --}}
@endsection
