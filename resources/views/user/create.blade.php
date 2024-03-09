@extends('layouting.main')

@section('content')
  <div id="layoutSidenav_content">
    <main>
      <div class="container-fluid px-4">
        <h1 class="mt-4">{{ $title }}</h1>
        <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
          <li class="breadcrumb-item active">{{ $title }}</li>
        </ol>

        <a href="{{ route('user') }}" class="btn btn-secondary mb-4">Kembali</a>

        <div class="card mb-4">
          <div class="card-body">
            <form action="{{ route('user.store') }}" method="post">
              @csrf
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama :</label>
                <input type="name" name="name" class="form-control" id="exampleFormControlInput1">
                @error('name')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleFormControlInput2">
                @error('email')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput3" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleFormControlInput3">
                @error('password')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
          </div>
        </div>
      </div>
    </main>
  @endsection
