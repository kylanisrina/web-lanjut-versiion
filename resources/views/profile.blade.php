@extends('layouts.app3')
@section ('content')
<div class="card">
    <img src="{{ Storage::url($user->foto) }}" alt="Profile Picture" class="profile-img"></img>
    <div class="info">
        <h1 class="label">{{ $user->nama }} </h1>
        <h1 class="label">{{ $user->npm }}  </h1>
        <h1 class="label">{{ $user->nama_kelas  ?? 'Kelas tidak ditemukan' }}</h1>
    </div>
</div>
{{-- // jangan lupa kasih perintah php artisan storage:link --}}

@endsection
