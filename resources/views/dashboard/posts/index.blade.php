@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Posts</h1>
  </div>

  <div class="row justify-content-start mb-3">
    <div class="col-md-6">
        <form action="/dashboard/posts">
        <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search..."  name="search" value="{{ request('search') }}">
            <button class="btn btn-primary" type="submit">Search</button>
        </div>
      </form>
    </div>
</div>

  @if (session()->has('success'))   
  <div class="alert alert-success col-lg-8" role="alert">
      {{ session('success') }}
  </div>
  @endif
  
  <div class="table-responsive col-lg-8">
    <a href="/dashboard/posts/create" class="btn btn-primary">Create new post</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Judul</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th> 
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
            
        <tr>
          <td>{{ $loop->iteration  }}</td>
          <td>{{ $post->title }}</td>
          <td>{{ $post->category->name }}</td>
          <td>
            <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection

