<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return view('user.user_dashboard');
    }

    public function AllUser()
    {
        // $users = User::role('user')->get();
        $users = User::where('role', 'user')->get();

        return view('backend.user.all_users', compact('users'));
    }

}
