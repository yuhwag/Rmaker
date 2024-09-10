<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;

use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required|min:8',
        ]);

        $user = new User();
        $user->id = time();
        $user->level = 'user';
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = $request->password;
        
        $result = $user->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'image' => 'image',
                'firstname' => '',
                'lastname' => '',
                'email' => 'required',
                'phone' => '',
                'address' => '',
            ]
        );

        $update = User::findOrFail($id);
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = time().$file->getClientOriginalName();

            $file->move(public_path('/user/uploads'), $file_name);
            //delete old image
            if(!is_null($update->image)){
                if(File::exists(public_path('/user/uploads/' . $update->image))){
                    unlink(public_path('/user/uploads/' . $update->image));
                }
            }
            $update->image = $file_name;
        }
        $update->firstname = $request->firstname;
        $update->lastname = $request->lastname;
        $update->email = $request->email;
        $update->phone = $request->phone;
        $update->address = $request->address;

        $result = $update->save();
        Session::flash('success', 'Updated user successfully');
        if(Auth::user()->id == $id) {
            return redirect()->back();
        }
        else {
            return redirect()->route('dashboard.admin.users');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteAvatar(String $id)
    {
        $user = User::findOrFail($id);
        $user->image = null;
        $result = $user->save();

        return redirect()->route('dashboard.user.profile');
    }
}
