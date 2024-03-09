@extends('layouting.main')

@section('content')
  <div id="layoutSidenav_content">
    <main>
      <div class="container-fluid px-4">
        <h1 class="mt-4">{{ $title }}</h1>
        <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
          <li class="breadcrumb-item active">{{ $title }}</li>
        </ol>

        <a href="{{ route('user.create') }}" class="btn btn-primary mb-4">Tambah User</a>

        @if (Session::has('success'))
          <div class="alert alert-success mb-3">
            {{ Session::get('success') }}
          </div>
        @endif

        <div class="card mb-4">
          <div class="card-body text-center">
            <table id="datatablesSimple" class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <?php $no = 1; ?>
              <tbody>
                @foreach ($data as $value)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->email }}</td>
                    <td>
                      <a href="" class="btn btn-sm btn-warning">Edit</a>
                      <a href="" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                @endforeach
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </main>
  </div>
@endsection

@section('script')
  <script>
    window.addEventListener('DOMContentLoaded', event => {

      const datatablesSimple = document.getElementById('datatablesSimple');
      if (datatablesSimple) {
        new simpleDatatables.DataTable(datatablesSimple);
      }
    });
  </script>
@endsection
