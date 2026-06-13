

@extends('layouts.dashboard')
@section('title')
Department
@endsection
@section('page_title') 
  <h1> Create Department</h1>
@endsection
@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('Department.index') }}"> Department</a></li>
<li class="breadcrumb-item active">Create Department</li>
@endsection

@section('content')
  <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create <small>Form</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/department/store" method="POST">
                @csrf
                @include('Department.form')
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
@endsection
