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
              <a class="nav-link" href="{{ route('admin.home') }}">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.team') }}">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.project') }}">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.profile') }}">My profile</a>
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