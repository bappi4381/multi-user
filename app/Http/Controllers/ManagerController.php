<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\Post;

class ManagerController extends Controller
{
    public function managerHome()
    {
        return view('managerHome');
    }
    public function managePost(){
         return view ('manager.createPost');
    }

    public function createPost(Request $request)
    {
    
            $validator = $request->validate([
                'name'      => 'required',
                'title' => 'required',
                'video' => 'required|file|mimetypes:video/mp4',
                
            ]);
           
            $categori       = $request->file('video');
            $extention      = $categori  ->getClientOriginalName();
            $imageName      = 'categori_'.time().'.'.$extention;
            $path =  $categori->store('videos', ['disk' => 'my_files']);
            Post::create([
                'name' => $request->name,
                'title' => $request->title,
                'video' => $path,
                'description'=>  $request->description,
            ]);
            
            return redirect()->back()->with('success', 'Post has been created successfully.');
        
    }
   
}
