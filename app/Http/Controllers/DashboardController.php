<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

use App\Models\Template;
use App\Models\User;
use App\Models\DocumentsCoverletter;

class DashboardController extends Controller
{
    public function dashboard()
    {
        if (Auth::check() && Auth::user()->level == 'admin') {
            return redirect(route('dashboard.admin.templates'));
        }
        else if (Auth::check() && Auth::user()->level == 'user') {
            return redirect(route('dashboard.user.documents'));
        }
        else {
            return redirect(route('home'));
        }
    }

    public function userDocuments(){
        $page = "documents";
        $covDocuments = DocumentsCoverletter::where('id_user', Auth::user()->id)->get();
        return view('dashboard.user.documents', compact('page', 'covDocuments'));
    }
    public function updateDocCov(String $id){
        $covDocuments = DocumentsCoverletter::findOrFail($id);
        $template = Template::findOrFail($covDocuments->id_template);
        $alltemplates = Template::where('type', 'COV')->get();
        return view('coverletter.editor.cov_editor', compact('covDocuments', 'template', 'alltemplates'));
    }


    public function userFavorites(){
        $page = "favorites";
        return view('dashboard.user.favorites', compact('page'));
    }

    public function userProfile(){
        $page = "profile";
        if (Auth::check() && Auth::user()->level == 'admin') {
            return view('dashboard.admin.profile', compact('page'));
        } 
        else if (Auth::check() && Auth::user()->level == 'user') {
            return view('dashboard.user.profile', compact('page'));
        }
        else {
            return redirect(route('home'));
        }
    }

    public function userSetting(){
        $page = "setting";
        if (Auth::check() && Auth::user()->level == 'admin') {
            return view('dashboard.admin.setting', compact('page'));
        } 
        else if (Auth::check() && Auth::user()->level == 'user') {
            return view('dashboard.user.setting', compact('page'));
        }
        else {
            return redirect(route('home'));
        }
    }
    public function btnDarkMode(Request $request){
        $user = Auth::user();
        if($user->dark_mode == 0){
            $user->dark_mode = 1;
        } else {
            $user->dark_mode = 0;
        }
        $result = $user->save();
        $page = "setting";
        return redirect()->back();
    }

    public function help(){
        $page = "help";
        if (Auth::check() && Auth::user()->level == 'admin') {
            return view('dashboard.admin.help', compact('page'));
        } 
        else if (Auth::check() && Auth::user()->level == 'user') {
            return view('dashboard.user.help', compact('page'));
        }
        else {
            return redirect(route('home'));
        }
    }


    // admin
    public function manageTemplates()
    {
        if (Auth::check() && Auth::user()->level == 'admin') {
            $page = "templates";
            $templates = Template::latest('id')->get();
            return view('dashboard.admin.templates', compact('page', 'templates'));
        }
    }
    public function manageUsers()
    {
        if (Auth::check() && Auth::user()->level == 'admin') {
            $page = "users";
            $users = User::where('level', 'user')->get();
            return view('dashboard.admin.users', compact('page', 'users'));
        }
    }
    public function editUser(String $id)
    {
        if (Auth::check() && Auth::user()->level == 'admin') {
            $page = "users";
            $user = User::findOrFail($id);
            return view('dashboard.admin.edit_user', compact('page', 'user'));
        }
    }

}
