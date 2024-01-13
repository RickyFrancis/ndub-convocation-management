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
use App\Models\GraduateList;
use App\Models\User;
use App\Models\Batch;
use App\Models\Program;
use App\Models\Department;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Image;
use File;
use Barryvdh\DomPDF\Facade\Pdf;

class SecondProgramRegistrationController extends Controller{
    public function add($encryptedId): View{
        try {
            $gradId = Crypt::decryptString($encryptedId);
            $user = GraduateList::where('id', $gradId)->first();
        } catch (DecryptException $e) {
        }

        $programs = Program::all();
        $batchs = Batch::all();

        return view('student.registration.second-registration', compact('gradId', 'programs', 'batchs', 'user'));
    }

    public function submit(Request $request){
        $this->validate($request,[
            'student_id' =>'required|max:50|exists:graduate_lists,student_id|unique:users,student_id',
            'program'=>'required',
            'batch'=>'required',
            'admission_year'=>'required|max:50',
            'admission_semester'=>'required|max:50',
            'credit_earned'=>'required|max:255|numeric',
            'cgpa'=>'required|max:4|numeric',
            'passing_trimester'=>'required|max:50',
            'passing_year'=>'required|max:50',
        ],[
            'student_id.exists'=>'Your student ID is invalid, please open a support ticket for resolving this issue.',
            'student_id.unique'=>'Your account already registered with this student ID, please open a support ticket for resolving this issue.',
        ]);
        $graduate_lists_info = GraduateList::where('student_id', $request->student_id)->first();
        $parent_grad_lists_info = GraduateList::where('id', $request->grad_list_id)->first();
        $userPassword = User::where('graduate_lists_id', $request->grad_list_id)->value('password');
        
        $userCreated = User::create([
            //'name' => $request->name,
            //'email' => $request->email,
            'student_id' => $request->student_id,
            'graduate_lists_id' => $graduate_lists_info->id,
            'email' => $graduate_lists_info->email,
            'role_id' => '3',
            'password' => $userPassword,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);

        $loggedUser = Auth::user()->id;

        $update1 = GraduateList::where('id', $graduate_lists_info->id)->update([
            'program_id'=>$request->program,
            'batch_id'=>$request->batch,
            'major'=>$request->major,
            'minor'=>$request->minor,
            'admission_year'=>$request->admission_year,
            'admission_semester'=>$request->admission_semester,
            'credit_earned'=>$request->credit_earned,
            'cgpa'=>$request->cgpa,
            'passing_trimester'=>$request->passing_trimester,
            'passing_year'=>$request->passing_year,
            'second_program_grad_list_id'=>$parent_grad_lists_info->id,
            //'edit_start_status'=>'1',
            'child_account_status'=>'1',
            'updated_by'=>$loggedUser,
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);
        
        $update2 = GraduateList::where('id', $request->grad_list_id)->update([
            'second_program_grad_list_id'=>$graduate_lists_info->id,
            'parent_account_status'=>1,
        ]);
        
        if($userCreated && $update1 && $update2){
            Session::flash('success','Information successfully submitted!');
            return redirect()->route('dashboard');
        }else{
            Session::flash('error','Information submission process failed!');
            return redirect()->route('student_second_registration');
        }
    }

    public function edit($encryptedId){
        try {
            $gradId = Crypt::decryptString($encryptedId);
        } catch (DecryptException $e) {
        }

        $programs = Program::all();
        $batchs = Batch::all();

        $second_program_grad_list_id = GraduateList::where('id', $gradId)->value('second_program_grad_list_id');

        $user = GraduateList::where('id', $second_program_grad_list_id)->first();
        return view('student.registration.second-registration-edit', compact('user', 'programs', 'batchs'));
    }

    /**
     * 
     */
    public function update(Request $request): RedirectResponse{
        $this->validate($request,[
            'program'=>'required',
            'batch'=>'required',
            'admission_year'=>'required|max:50',
            'admission_semester'=>'required|max:50',
            'credit_earned'=>'required|max:255|numeric',
            'cgpa'=>'required|max:4|numeric',
            'passing_trimester'=>'required|max:50',
            'passing_year'=>'required|max:50',
        ]);
        $loggedUser = Auth::user()->id;
        $update = GraduateList::where('id', $request->id)->update([
            'program_id'=>$request->program,
            'batch_id'=>$request->batch,
            'major'=>$request->major,
            'minor'=>$request->minor,
            'admission_year'=>$request->admission_year,
            'admission_semester'=>$request->admission_semester,
            'credit_earned'=>$request->credit_earned,
            'cgpa'=>$request->cgpa,
            'passing_trimester'=>$request->passing_trimester,
            'passing_year'=>$request->passing_year,
            'edit_start_status'=>1,
            'updated_by'=>$loggedUser,
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($update){
            Session::flash('success','Information successfully updated!');
            return redirect()->route('dashboard');
        }else{
            Session::flash('error','Information edit process failed!');
            return redirect()->route('edit_student_information');
        }
    }
}