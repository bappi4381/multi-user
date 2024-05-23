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
</div>

<section class="py-5 ">
    <div class="container  ">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 ">
                        <h3 class="font-weight-bold pb-4">My profile</h3>
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label  class="form-label">User Name</label>
                                        <input type="text" class="form-control" value="" name="uname" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label  class="form-label">Full Name</label>
                                        <input type="text" class="form-control" value="" name="fname" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label  class="form-label">Email</label>
                                        <input type="email" class="form-control" value="" name="email" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label  class="form-label">Mobile Number</label>
                                        <input type="text" class="form-control" value="" name="mobile" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label  class="form-label">Company name</label>
                                        <input type="text" class="form-control" value="" name="company" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label  class="form-label">Designation</label>
                                        <input type="text" class="form-control" value="" name="designation" required>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Address</label>
                              <textarea class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Image</label>
                                <input type="file" class="form-control" value="" name="image" required>
                              </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="col-md-6 py-5 justify-content-end">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                              <div class="col-md-6">
                                <img src="..." class="img-fluid rounded-start" alt="...">
                          
                              </div>
                              <div class="col-md-6">
                                <div class="card-body">
                                  <h5 class="card-title text-left ">Full name</h5>
                                  <p class="card-text text-left ">Company name:</p>
                                  <p class="card-text text-left ">Designation:</p>
                                  <p class="card-text text-left ">Email:</p>
                                  <p class="card-text text-left ">Mobile:</p>
                                  <p class="card-text text-left ">Address:</p>
                                  <p class="card-text text-left "><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection