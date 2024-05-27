@extends('layouts.app')
  
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card card-body">
                <table class="table table-bordered table-hover">
                    <tr>
                        <td class="text-start"><h1 class="fw-bolder text-danger">{{$post->name}}<h1></td>
                    </tr>
                    <tr>

                        <td class="text-start"><h3 class="fw-bold">{{$post->title}}</h3></td>
                    </tr>
                    <tr>
                        <td class="text-start">
                            <video width="640" height="360" controls>
                                <source src="{{ asset($post->video) }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                           
                        </td>
                    </tr>
                    <tr>
                        <td class="text-start">{!! $post->description !!}</td>
                    </tr>

                    <tr>
                       <td>
                            <a href="" class="btn btn-success">Published</a>
                            <a href="" class="btn btn-danger">Unpublished</a>

                            
                        </td>
                        <td>
                            <a href="{{ route('admin.project') }}" class="btn btn-success">Back</a> 
                        </td>
                    </tr>
                    
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

