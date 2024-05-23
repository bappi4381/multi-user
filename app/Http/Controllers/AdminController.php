<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
        return view('admin.project');
    }
    public function adminProfile()
    {
        return view('admin.profile');
    }

}
