<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\GraduateList;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Carbon;

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
        //$trimmed_student_id = str_replace([' ', '-'], '', trim($request->student_id));
        //dd($trimmed_student_id);
        $request->validate([
            //'name' => ['required', 'string', 'max:255'],
            //'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'student_id' => 'required|max:50|exists:graduate_lists,student_id|unique:users,student_id',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'student_program_choice' => ['required'],
        ],[
            'student_id.exists'=>'Your student ID is invalid, please open a support ticket for resolving this issue.',
            'student_id.unique'=>'Your account already registered with this student ID, please login or go to forget password.',
            'student_program_choice.required'=>'Please choose one option.',
        ]);

        $graduate_lists_info = GraduateList::where('student_id', $request->student_id)->first();
        
        $user = User::create([
            //'name' => $request->name,
            //'email' => $request->email,
            'student_id' => $request->student_id,
            'graduate_lists_id' => $graduate_lists_info->id,
            'email' => $graduate_lists_info->email,
            'student_program_choice' => $request->student_program_choice,
            'role_id' => '3',
            'password' => Hash::make($request->password),
        ]);

        $update = GraduateList::where('id', $graduate_lists_info->id)->update([
            'student_program_choice' => $request->student_program_choice,
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
