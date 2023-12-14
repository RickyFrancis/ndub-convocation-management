<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\registration;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

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
        $request->validate([
            //'name' => ['required', 'string', 'max:255'],
            //'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'ndub_id' => 'required|max:50|exists:registrations,ndub_id|unique:users,ndub_id',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ],[
            'ndub_id.exists'=>'Your NDUB ID is invalid, please open a support ticket for resolving this issue.',
            'ndub_id.unique'=>'Your account already registered with NDUB ID, please login or go to forget password.',
        ]);

        $user = User::create([
            //'name' => $request->name,
            //'email' => $request->email,
            'ndub_id' => $request->ndub_id,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
