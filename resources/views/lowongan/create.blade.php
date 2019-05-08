{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome HRD Dot co.id</p>
    <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('lowongan.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Nama Lowongan:</label>
              <input type="text" class="form-control" name="nama_lowongan"/>
          </div>
          <div class="form-group">
              <label for="price">Skill:</label>
              <input type="text" class="form-control" name="skill"/>
          </div>
          <div class="form-group">
              <label for="quantity">Job Desc:</label>
              <input type="text" class="form-control" name="job_desc"/>
          </div>
           <div class="form-group">
              <label for="quantity">Status:</label><br>
              <label class="radio-inline" style="color: black">
                <input type="radio" name="status" value="1">Published</label>
              <label class="radio-inline" style="color: black">
                <input type="radio" name="status" value="0">Unpublished</label>
          </div>
          <button type="submit" class="btn btn-primary">Create Lowongan</button>
      </form>
  </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop