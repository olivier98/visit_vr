<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Visitor;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class VisitorController extends Controller
{
    public function store(Request $request)
    {
        
        

        $data = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'zip_code' => 'required',
            'city' => 'required',
            'interest' => 'required',
            'password' => 'required',

        ]);

        // dd($data);

        $user = User::create([
            'name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        
        $visitor = Visitor::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'zip_code' => $request->zip_code,
            'city' => $request->city,
            'interest' => $request->interest,
            'user_id' => $user->id
        ]);

        // $user = User::query()->where('email', $data['email'])->first();
        // $role = Role::find(2);

        // $user->roles()->attach($role);

        $role = config('roles.models.role')::where('name', '=', 'Visitor')->first();  //choose the default role upon user creation.
        $user->attachRole($role);

        return redirect()->route('home');
    
    }
}
