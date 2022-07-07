@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit user</h1>
</div>

<div class="col-lg-8">

    <form method="post" action="/dashboard/users/{{ $user->id }}" class="mb-5" enctype="multipart/form-data">
        <input type="hidden" name="oldPassword" value="{{ $user->password }}">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name', $user->name) }}">
          @error('name')
          <div class="invalid-feedback">
              {{ $message }}
          </div>

          @enderror
        </div>

        <div class="mb-3">
            <label for="username" class="form-label">username</label>
            <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" required autofocus value="{{ old('username', $user->username) }}">
            @error('username')
            <div class="invalid-feedback">
                {{ $message }}
            </div>

            @enderror
        </div>

        <div class="mb-3">
            <label for="number" class="form-label">number</label>
            <input type="text" class="form-control @error('number') is-invalid @enderror" id="number" name="number" required autofocus value="{{ old('number', $user->number) }}">
            @error('number')
            <div class="invalid-feedback">
                {{ $message }}
            </div>

            @enderror
        </div>

        <div class="mb-3">
            <label for="city" class="form-label">city</label>
            <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city" required autofocus value="{{ old('city', $user->city) }}">
            @error('city')
            <div class="invalid-feedback">
                {{ $message }}
            </div>

            @enderror
        </div>

        <div class="mb-3">
            <label for="province" class="form-label">province</label>
            <input type="text" class="form-control @error('province') is-invalid @enderror" id="province" name="province" required autofocus value="{{ old('province', $user->province) }}">
            @error('province')
            <div class="invalid-feedback">
                {{ $message }}
            </div>

            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required autofocus value="{{ old('email', $user->email) }}">
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>

            @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autofocus>
            @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>

            @enderror
        </div>


        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>

</div>
@endsection
