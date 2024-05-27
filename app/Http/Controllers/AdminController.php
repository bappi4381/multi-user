<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
class AdminController extends Controller
{
    public function adminHome()
    {
        $users=User::all();
        $totalusers = User::select('count(*) as allcount')->count();
        return view('adminHome',compact("totalusers","users"));
    }
    public function adminTeam()
    {
        return view('admin.team');
    }
    public function adminProject()
    {
        $posts=Post::all();
        return view('admin.project',compact("posts"));
    }
    public function adminProfile()
    {

        return view('admin.profile');
    }

    public function detail($id)
    {
        $post = Post::find($id);
        return view('admin.details',compact("post"));
    }
    

}
