<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use App\Models\SupportTicket;
use Image;
use File;

class SupportTicketController extends Controller{
    public function add(): View{
        return view('support-ticket.add');
    }

    public function submit(Request $request){
        $this->validate($request,[
            'student_id' =>'required|max:255',
            'name' =>'required|max:255',
            'email' =>'required|max:255',
            'phone' =>'required|max:255',
            'details' =>'required|max:255',
        ],[
        ]);

        $insert = SupportTicket::create([
            'student_id' => $request->student_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'details' => $request->details,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($insert){
            Session::flash('success','Submitted successfully!');
            return redirect()->route('add');
        }else{
            Session::flash('error','Submission failed!');
            return redirect()->route('add');
        }

    }
}
