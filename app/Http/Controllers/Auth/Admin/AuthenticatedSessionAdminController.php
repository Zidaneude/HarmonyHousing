<?php

namespace App\Http\Controllers\Auth\Admin;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\LoginAdminRequest;



class AuthenticatedSessionAdminController extends Controller
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
        return view('auth.connexion-admin');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LoginAdminRequest $request)
    {
        $request->authenticate();
        $request->session()->regenerate();
        $pre=Auth::guard('admin')->user()->nom;
        toastr()->success('Heureux de vous revoir '.$pre);
       // return redirect()->intended(RouteServiceProvider::DASHBORD_ADMIN);
        $admin=Auth::guard('admin')->user();
        return view('dashboard.dashboard-admin',['locataire'=>$admin]) ;
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $ad=Auth::guard('admin')->user()->nom;
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        toastr()->success(' Au revoir '.$ad.' à la prochaine !');
        return redirect('/');
    } 
}
