{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome HRD Dot co.id</p>
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Lowongan</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Nama Lowongan</th>
                  <th>Job Description</th>
                  <th>Skill</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                @foreach($lowongans as $lowongan)
                <tr>
                  <td>{{$lowongan->id}}</td>
                  <td>{{$lowongan->nama_lowongan}}</td>
                  <td>{{$lowongan->job_desc}}</td>
                  <td>{{$lowongan->skill}}</td>
                  <td>
                    @if($lowongan->status == 1)
                        <span class="label label-success">Published</span>
                    @else
                        <span class="label label-danger">Unpublished</span>
                    @endif
                    
                  </td>
                  <td>
                    <form action="{{ route('lowongan.destroy', $lowongan->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                  </td>
                </tr>
                @endforeach  
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop