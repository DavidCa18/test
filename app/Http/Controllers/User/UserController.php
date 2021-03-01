<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    { 

        $request->validate([
            'name' => 'required|string|max:255',
            'surnames' => 'required|string|max:255',
            'address' => 'required|string|max:255'
        ]);

        $user = Auth::user();
        $user->name = $request->name;
        $user->surnames = $request->surnames;
        $user->address = $request->address;
        $user->save();

        return redirect()->back()->with('notification', 'Información Actualizada Correctamente!');
    }

}
