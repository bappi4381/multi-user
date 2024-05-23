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
<section class="py-5">
    <div class="container">
    <div class="row ">
        <div class="col-xl-4 col-sm-6 col-12">
            <div class="card">
              <div>
                 <div></div>
                 <div>
                    <h1>{{ $totalusers }}</h1>
                    <h5>Total user</h5>
                 </div>
              </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6 col-12">
            <div class="card">
                <div>
                    <div></div>
                    <div>
                       <h1>400</h1>
                       <h5>Total Team</h5>
                    </div>
                 </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6 col-12">
            <div class="card">
                <div>
                    <div></div>
                    <div>
                       <h1>400</h1>
                       <h5>Total Project</h5>
                    </div>
                 </div>
             
            </div>
        </div>
       
    </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="bg-black py-2"><h3 class="text-light font-weight-bold px-2">Total Users</h3></div>
        <div class="py-5">
            <table class=" class="table table-bordered " style="border-collapse: collapse; border-spacing: 0; width: 100%;"">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">User Type</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                   @foreach ($users as $user)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->type }}</td>
                    <td>
                        <a href="" class="btn btn-success">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    <td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
        
    </div>
</section>
@endsection