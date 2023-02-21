@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Ubah Password</h1>
  </div>

  <div class="col-lg-8">
      <form method="post" action="/dashboard/updatepass" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="current password" class="form-label">Current Password</label>
          <input type="text" class="form-control @error('current password') is-invalid @enderror" id="current password" 
          name="current password" required autofocus value="{{ old('current password') }}">
          @error('current password')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="new password" class="form-label">New Password</label>
          <input type="text" class="form-control @error('new password') is-invalid @enderror" id="new password" 
          name="new password" required value="{{ old('new password') }}">
          @error('new password')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="konfirmasi password" class="form-label">Konfirmasi Password</label>
          <input type="text" class="form-control @error('konfirmasi password') is-invalid @enderror" id="konfirmasi password" 
          name="konfirmasi password" required value="{{ old('konfirmasi password') }}">
          @error('konfirmasi password')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Ubah</button>
      </form>
  </div>

@endsection

