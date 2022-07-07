@extends('dashboard.layouts.main')
@section('container')

{{-- section profile --}}
<section class="profile" id="profile">
    <div class="max-width">
        <h2 class="title">Profile</h2>
        <div class="profile-content">
            <div class="column left">
                <img src="/img/image1.jpg" class="">
            </div>
            <div class="column right">
                <div class="text"> {{ auth()->user()->name }} | <span class="{{ (auth()->user()->is_admin === 1) ? 'typing' : 'typings' }}"></span></div>
                    <p><span data-feather="phone" class="icon-profile"></span> {{ auth()->user()->number }}</p>
                    <p><span data-feather="at-sign" class="icon-profile"></span> {{ auth()->user()->email }}</p>
                    <p><span data-feather="map-pin" class="icon-profile"></span> {{ auth()->user()->city }}, {{ auth()->user()->province }}</p>

                {{-- <a href="/dashboard/profile/create">Tambah Profil</a> --}}
                <a href="/dashboard/profile/{{ auth()->user()->id }}/edit">Edit Profile</a>
            </div>
        </div>
        @if (session()->has('successProfile'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('successProfile') }}
        </div>
        @endif
        <center><div class="line" ></div></center>
    </div>
</section>


@endsection
