@extends('layouts.app')
  
@section('content')
<div class="container">
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
    <!-- Container wrapper -->
    <div class="container-fluid">
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navbar brand -->
       
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('manage.home') }}">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('manage.post') }}">Create Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Teams</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">My profile</a>
          </li>
          
        </ul>
        <!-- Left links -->
      </div>
      <!-- Collapsible wrapper 
      <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
</nav>
  <!-- Navbar -->
   
   
</div>
<section class="content" style="padding:20px 30%;">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Create Post</h3>
                </div>
                
                <form role="form" action="{{ route('createPost') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Category name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Category name"  required />
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="Post title" required />
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Post Video</label>
                                    <input type="file" name="video" class="form-control" placeholder="Video"  required />
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Discription</label>
                                    <textarea id="summernote" name="description"></textarea>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Create</button>

                    </div>
                </form>

                @if ($errors->any())
                    <div>
                        @foreach ($errors->all() as $error)
                            <li class="alert alert-danger">{{ $error }}</li>
                        @endforeach
                    </div>
                @endif

                @if(\Session::has('error'))
                    <div>
                        <li class="alert alert-danger">{!! \Session::get('error') !!}</li>
                    </div>
                @endif

                @if(\Session::has('success'))
                    <div>
                        <li class="alert alert-success">{!! \Session::get('success') !!}</li>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection


