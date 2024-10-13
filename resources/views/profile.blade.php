@extends('layouts.app3')
@section ('content')
    <div class="card">
        <img src="/asset/images/ming.jpg" alt="Profile Picture" class="profile-img">
        <div class="info">
            <h1 class="label">{{$nama}}</h1>
            <h1 class="label">{{ $npm }}</h1>
            <h1 class="label">{{ $nama_kelas }}</h1>
        </div>
    </div>

@endsection
