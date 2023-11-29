<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MasterController extends Controller
{
    public function index()
    {
        return view('admin_panel.pages.index');
    }

    public function adminLoginPage()
    {
        // return view('admin_panel.pages.login');

        if (!Auth::check()) {
            return view('admin_panel.pages.login');
        } elseif (Auth::user()->user_type == 0) {
            return view('admin_panel.pages.index');
        }
    }

    public function admin_profile()
    {
        $user_info = User::where('id', Auth::id())->first();

        return view('admin_panel.pages.profile.profile', compact(['user_info']));
    }

    public function admin_change_pass()
    {
        $user_info = User::where('id', Auth::id())->first();
        return view('admin_panel.pages.profile.password_change', compact(['user_info']));
    }
}
