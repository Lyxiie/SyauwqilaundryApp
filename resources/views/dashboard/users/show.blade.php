@extends('dashboard.layouts.main')
@section('container')

{{-- section profile --}}
<section class="profile">
    <div class="max-width">
        <h2 class="rinci">Rincian Data Pegawai</h2>
        <div class="profile-content">
            <div class="column left">
                <img src="/img/image1.jpg" class="">
            </div>
            <div class="column right">
                <div class="text"> {{ $user->name }} | <span class="{{ ($user->is_admin === 1) ? 'typing' : 'typings' }}"></span></div>
                    <p><span data-feather="user" class="icon-profile"></span> {{ $user->username }}</p>
                    <p><span data-feather="phone" class="icon-profile"></span> {{ $user->number }}</p>
                    <p><span data-feather="at-sign" class="icon-profile"></span> {{ $user->email }}</p>
                    <p><span data-feather="map-pin" class="icon-profile"></span> {{ $user->city }}, {{ $user->province }}</p>
                </div>
        </div>
    </div>
</section>


@endsection
