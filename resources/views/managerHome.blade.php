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


@endsection