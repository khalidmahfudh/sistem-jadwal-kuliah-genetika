@extends('layouts.app')

@section('title','Edit Users | Sistem Penjadwalan Kuliah')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home/dashboard"><i class="fas fa-igloo mr-2"></i>Home</a></li>
              <li class="breadcrumb-item"><a href="/manageusers"></i>Manage Users</a></li>
              <li class="breadcrumb-item active">Edit User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- /.row -->
            <div class="row">
                <div class="col-6">
                    <div class="card text-choThem">
                        <div class="card-header bg-greenTheme">
                            <h3 class="card-title text-whiteTheme">Form Edit User</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            <form method="post" action="/manageusers/{{ $user->id_user }}">
                                @method('patch')
                                @csrf
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Nama User" value="{{ $user->name }}">
                                    @error('nama')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input name="username" type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username User" value="{{ $user->username }}">
                                    @error('username')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input name="email" type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="emailuser@gmai.com" value="{{ $user->email }}">
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email" class="d-block">Status</label>
                                    <div class="icheck-greenTheme d-inline ml-2">
                                        <input type="radio" name="role_id" id="r-status1" value="1" {{ $user->role_id == 1 ? "checked" : "" }}>
                                        <label for="r-status1">
                                            Admin
                                        </label>
                                    </div>
                                    <div class="icheck-greenTheme d-inline ml-2">
                                        <input type="radio" name="role_id" id="r-status2" value="2" {{ $user->role_id == 2 ? "checked" : "" }}>
                                        <label for="r-status2">
                                            Operator
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="d-block">Aktif</label>
                                    <div class="icheck-greenTheme d-inline ml-2">
                                        <input type="radio" name="is_active" id="r-aktif1" value="1" {{ $user->is_active == 1 ? "checked" : "" }}>
                                        <label for="r-aktif1">
                                            Aktif
                                        </label>
                                    </div>
                                    <div class="icheck-greenTheme d-inline ml-2">
                                        <input type="radio" name="is_active" id="r-aktif2" value="2" {{ $user->is_active == 2 ? "checked" : "" }}>
                                        <label for="r-aktif2">
                                            Non Aktif
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="password">Password Baru</label>
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" id="password" name="password">
                                            @error('password')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col">
                                            <label for="password_confirmation">Ulangi Password Baru</label>
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Repeat Password" id="password_confirmation" name="password_confirmation">
                                        </div>
                                    </div>
                                </div>
                                <p class="text-maroon mt-n3"><i><b>*Dilakukan Saat User Lupa Password</b></i></p>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <a href="/manageusers" class="btn btn-outline-greenTheme">Kembali</a>
                            <button type="submit" class="btn btn-greenTheme float-right">Edit User</button>
                        </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>

        <!-- Main row -->
        <div class="row">
          
  </div>
  <!-- /.content-wrapper -->
  @endsection