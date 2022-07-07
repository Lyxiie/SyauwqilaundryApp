@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New User</h1>
</div>
<div class="col-lg-8">

    <form method="post" action="/dashboard/users" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name') }}">
          @error('name')
          <div class="invalid-feedback">
              {{ $message }}
          </div>

          @enderror
        </div>

        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" required value="{{ old('username') }}">
          @error('username')
          <div class="invalid-feedback">
              {{ $message }}
          </div>

          @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required value="{{ old('password') }}">
            @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>

            @enderror
          </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required value="{{ old('email') }}">
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>

            @enderror
        </div>

        <div class="mb-3">
            <label for="number" class="form-label">Number</label>
            <input type="text" class="form-control @error('number') is-invalid @enderror" id="number" name="number" required value="{{ old('number') }}">
            @error('number')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>



            <div class="mb-3">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city" required value="{{ old('city') }}">
                @error('city')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>

                @enderror
            </div>

              <div class="mb-3">
                <label for="province" class="form-label">Province</label>
                <input type="text" class="form-control @error('province') is-invalid @enderror" id="province" name="province" required value="{{ old('province') }}">
                @error('province')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>

                @enderror
            </div>

            <div class="mb-3">
                <label for="adminlass="form-label">Is Admin</label>
                <select class="form-select" name="is_admin">
                      <option value= 1 selected>Ya</option>
                      <option value= 0>Tidak</option>
                </select>
              </div>




        <button type="submit" class="btn btn-primary">Create User</button>
      </form>

</div>
@endsection
