<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rules;

class GererRolesController extends Controller
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
        $admin=Admin::all();
        return view('gestion.gerer-roles', ['admin'=>$admin]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.Admin::class],
            'password' => ['required'],
        ]);
        $confirm_password=$request->confirm_password;
        $password=$request->password;
        
        if($confirm_password== $password){
         
            $admin = Admin::create([
                'nom' => $request->nom,
                'prenom' =>$request->prenom,
                'email' => $request->email,
                'sexe' => $request->gender,
                'telephone' => $request->telephone,
                'password' => Hash::make($request->password),
    
            ]);
    
            event(new Registered($admin));
     
            Auth::login($admin);
    
            return view('dashboard.dashboard-admin');
        }else{

        }

     
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
        //dd($request->all());
        $locataire = Admin::findOrFail($request->id);

    $rules = [
        'email' => ['required', 'string', 'email', 'max:255',],
        'password' => ['required', Rules\Password::defaults()],
    ];

    $locataire->update([
        'email' => $request->email,
        'password' =>$request->password
        
    ]);
    $locataire->save();
    return redirect('/gestion.gerer-roles')->with('success', 'Informations mises à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ad = Admin::findOrFail($id);
        $ad->delete();
    
       return redirect('/gerer-roles')->with('success', 'compte supprimer avec succèss');
    }
}
