<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\Role;
use App\Models\stands;
use App\Models\Exhibitor;
use Illuminate\Http\RedirectResponse

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'full_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'compagny_name' => 'required',
            'web_site' => 'required',
            'password' => 'required',
            'type_stand' => 'required',
            'number_cell' => 'required',
            'stand_number' => 'required',
            'images1' => 'required',
            'images2' => 'required',
            'images3' => 'required',
            'price' => 'required',
            'additionnal_request' => 'required'
        ]);
    
        $user = User::create([
            'name' => $data['full_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        
        $exhibitor = Exhibitor::create([
            'full_name' => $data['full_name'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'compagny_name' => $data['compagny_name'],
            'web_site' => $data['web_site'],
            'user_id' => $user->id
        ]);

        

        
        $user = User::query()->where('email', $data['email'])->first();
        $userId = $user->id;
        $nomImage1 = "/p1.png";
        $nomImage2 = "/p2.png";
        $nomImage3 = "/p3.png";
        if (isset($data['images1'], $data['images2'], $data['images3'])) {

            $dossier ='';
            $number = request('stand_number')+1;
            if(request('type_stand')== "classic stand"){
                $dossier = "c$number";
                $nomImage1 = "/c1.png";
                $nomImage2 = "/c2.png";
                $nomImage3 = "/c3.png";
            }
            if(request('type_stand')== "moderne stand"){
                $dossier = "m$number";
                $nomImage1 = "/m1.png";
                $nomImage2 = "/m2.png";
                $nomImage3 = "/m3.png";
            }
            if(request('type_stand')== "prestige stand"){
                $dossier = "p$number";
                $nomImage1 = "/p1.png";
                $nomImage2 = "/p2.png";
                $nomImage3 = "/p3.png";
            }
            $path = $request->file('images1')->storeAs("public/$dossier/",$nomImage1);
            $path = $request->file('images2')->storeAs("public/$dossier/",$nomImage2);
            $path = $request->file('images3')->storeAs("public/$dossier/",$nomImage3);
        }

        $stand = Stands::create([
            'type_stand' => $data['type_stand'],
            'number_cell' => $data['number_cell'],
            'stand_number' => $data['stand_number'],
            'price' => $data['price'],
            'additionnal_request' => $data['additionnal_request'],
            'images1' => $nomImage1,
            'images2' => $nomImage2,
            'images3' => $nomImage3,
            'exhibitor_id' => $exhibitor->id
        ]);
        
        
        $role = Role::find(1);

        $user->roles()->attach($role);

        return view('dashboard');
    }
}
