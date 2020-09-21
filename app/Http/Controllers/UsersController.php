<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{


    public function create()
    {
        $this->authorize('viewAny' , Auth::user());

        return view('users.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role_id' => 'required'
        ]);

        User::create([
            'name' => $validateData['name'],
            'email' => $validateData['email'],
            'password' => Hash::make($validateData['password']),
            'role_id' => $validateData['role_id'],
        ]);

        return redirect()->back();
    }
}
