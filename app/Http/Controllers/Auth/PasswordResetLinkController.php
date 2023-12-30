<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\View\View;
use App\Models\User;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     */
    public function create(): View
    {
        return view('auth.forgot-password');
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $trimmed_student_id = str_replace([' ', '-'], '', trim($request->student_id));
        //dd($trimmed_student_id);
        $request->validate([
            // 'email' => ['required', 'email'],
            'student_id' => 'required|max:50|exists:users,student_id',
        ],[
            'student_id.exists'=>'Your student ID is invalid, please open a support ticket for resolving this issue.']);

        $user_info = User::where('student_id', $trimmed_student_id)->first();

        //dd($graduate_lists_id);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        // $status = Password::sendResetLink(
        //     $request->only('email')
        // );

        // return $status == Password::RESET_LINK_SENT
        //             ? back()->with('status', __($status))
        //             : back()->withInput($request->only('email'))
        //                     ->withErrors(['email' => __($status)]);

        $status = Password::sendResetLink(
            $user_info->only('email'));

        return $status ==  Password::RESET_LINK_SENT
                     ? back()->with('status', __('Your password reset link sent to this email: '.$user_info->email.', If you think this not your email then open a support ticket for resolving the issue.'))
                     : back()->withInput($user_info->only('email'))
                             ->withErrors(['student_id' => __($status)]);
        
    }
}
