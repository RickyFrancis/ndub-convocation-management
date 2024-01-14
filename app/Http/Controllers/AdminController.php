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

class AdminController extends Controller{
    public function allStudent(){
        $all = GraduateList::all();
        return view('admin.student.all', compact('all'));
    }

    public function viewStudent($encryptedId){
        try {
            $id = Crypt::decryptString($encryptedId);
        } catch (DecryptException $e) {
        }

        $user = GraduateList::where('id', $id)->first();

        if($user->child_account_status=='0'){
            return view('admin.student.view', compact('user'));
        }elseif($user->child_account_status=='1'){
            //return view('student.dashboard.second-program-dashboard', compact('user'));
        }
    }

    public function editStudent($encryptedId): View{
        try {
            $id = Crypt::decryptString($encryptedId);
        } catch (DecryptException $e) {
        }

        $programs = Program::all();
        $batchs = Batch::all();

        $user = GraduateList::where('id', $id)->first();
        return view('admin.student.edit', compact('user', 'programs', 'batchs'));
    }

    public function updateStudent(Request $request): RedirectResponse{
        $this->validate($request,[
            'name'=>'required|max:50',
            'email'=>'required|max:50',
            'program'=>'required',
            'batch'=>'required',
            'admission_year'=>'required|max:50',
            'admission_semester'=>'required|max:50',
            'credit_earned'=>'required|max:255|numeric',
            'cgpa'=>'required|max:4|numeric',
            'passing_trimester'=>'required|max:50',
            'passing_year'=>'required|max:50',
            'father_name'=>'required|max:50',
            'mother_name'=>'required|max:50',
            'phone'=>'required|max:50',
            'blood_group'=>'required|max:50',
            'nid_or_birth_cert_no'=>'required|max:50',
            'nid1_or_birth_cert2_status'=>'required',
            'dob'=>'required',
            'present_address'=>'required|max:100',
            'permanent_address'=>'required|max:100',
            'organization_name'=>'required|max:50',
            'designation'=>'required|max:50',
            'office_phone'=>'required|max:50',
            'office_mobile'=>'required|max:50',
            'office_address'=>'required|max:100',
            'guest1_name'=>'required|max:50',
            'guest1_relationship'=>'required|max:50',
            'guest1_nid_or_birth_cert'=>'required|max:50',
            'guest1_nid1_or_birth_cert2_status'=>'required',
            'guest1_present_address'=>'required|max:100',
            'guest1_permanent_address'=>'required|max:100',
            'guest2_name'=>'max:50',
            'guest2_relationship'=>'max:50',
            'guest2_nid_or_birth_cert'=>'max:50',
            'guest2_present_address'=>'max:100',
            'guest2_permanent_address'=>'max:100',
            'ssc_institute'=>'required|max:50',
            'ssc_board'=>'required|max:50',
            'ssc_result'=>'required|max:50',
            'ssc_group'=>'required|max:50',
            'ssc_passing_year'=>'required|max:50',
            'hsc_institute'=>'required|max:50',
            'hsc_board'=>'required|max:50',
            'hsc_result'=>'required|max:50',
            'hsc_group'=>'required|max:50',
            'hsc_passing_year'=>'required|max:50',
            'bachelor_institute'=>'required|max:50',
            'bachelor_board'=>'max:50',
            'bachelor_result'=>'required|max:50',
            'bachelor_group'=>'max:50',
            'bachelor_passing_year'=>'required|max:50',
            'masters_institute'=>'max:50',
            'masters_result'=>'max:50',
            'masters_passing_year'=>'max:50',
        ],[
            'nid1_or_birth_cert2_status.required'=>'Please choose the option for the number you are entering (NID/Birth Certificate).',
            'guest1_nid1_or_birth_cert2_status.required'=>'Please choose the option for the number you are entering (NID/Birth Certificate).',
        ]);
        $loggedUser = Auth::user()->id;
        $update = GraduateList::where('id', $request->id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
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
            'father_name'=>$request->father_name,
            'mother_name'=>$request->mother_name,
            'phone'=>$request->phone,
            'blood_group'=>$request->blood_group,
            'nid_or_birth_cert_no'=>$request->nid_or_birth_cert_no,
            'nid1_or_birth_cert2_status'=>$request->nid1_or_birth_cert2_status,
            'dob'=>$request->dob,
            'present_address'=>$request->present_address,
            'permanent_address'=>$request->permanent_address,
            'organization_name'=>$request->organization_name,
            'designation'=>$request->designation,
            'office_address'=>$request->office_address,
            'office_phone'=>$request->office_phone,
            'office_mobile'=>$request->office_mobile,
            'guest1_name'=>$request->guest1_name,
            'guest1_relationship'=>$request->guest1_relationship,
            'guest1_nid_or_birth_cert'=>$request->guest1_nid_or_birth_cert,
            'guest1_nid1_or_birth_cert2_status'=>$request->guest1_nid1_or_birth_cert2_status,
            'guest1_present_address'=>$request->guest1_present_address,
            'guest1_permanent_address'=>$request->guest1_permanent_address,
            'guest2_name'=>$request->guest2_name,
            'guest2_relationship'=>$request->guest2_relationship,
            'guest2_nid_or_birth_cert'=>$request->guest2_nid_or_birth_cert,
            'guest2_nid1_or_birth_cert2_status'=>$request->guest2_nid1_or_birth_cert2_status,
            'guest2_present_address'=>$request->guest2_present_address,
            'guest2_permanent_address'=>$request->guest2_permanent_address,
            'ssc_institute'=>$request->ssc_institute,
            'ssc_board'=>$request->ssc_board,
            'ssc_result'=>$request->ssc_result,
            'ssc_group'=>$request->ssc_group,
            'ssc_passing_year'=>$request->ssc_passing_year,
            'hsc_institute'=>$request->hsc_institute,
            'hsc_board'=>$request->hsc_board,
            'hsc_result'=>$request->hsc_result,
            'hsc_group'=>$request->hsc_group,
            'hsc_passing_year'=>$request->hsc_passing_year,
            'bachelor_institute'=>$request->bachelor_institute,
            'bachelor_board'=>$request->bachelor_board,
            'bachelor_result'=>$request->bachelor_result,
            'bachelor_group'=>$request->bachelor_group,
            'bachelor_passing_year'=>$request->bachelor_passing_year,
            'masters_institute'=>$request->masters_institute,
            'masters_result'=>$request->masters_result,
            'masters_passing_year'=>$request->masters_passing_year,
            'edit_start_status'=>1,
            'updated_by'=>$loggedUser,
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($update){
            Session::flash('success','Information successfully updated!');
            return redirect()->route('all_student');
        }else{
            Session::flash('error','Information edit process failed!');
            return redirect()->route('admin_edit_student_information');
        }
    }

    public function editStudentEmail($encryptedId): View{
        try {
            $id = Crypt::decryptString($encryptedId);
        } catch (DecryptException $e) {
        }

        $user = GraduateList::where('id', $id)->first();
        return view('admin.student.edit-email', compact('user'));
    }

    public function updateStudentEmail(Request $request): RedirectResponse{
        $this->validate($request,[
            'email'=>'required|max:50',
        ],[
        ]);
        $loggedUser = Auth::user()->id;
        $update = GraduateList::where('id', $request->id)->update([
            'email'=>$request->email,
            'updated_by'=>$loggedUser,
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);

        if($update){
            Session::flash('success','Email successfully updated!');
            return redirect()->route('all_student');
        }else{
            Session::flash('error','Email edit process failed!');
            return redirect()->route('admin_edit_student_information');
        }
    }
}
