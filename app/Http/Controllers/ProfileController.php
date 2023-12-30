<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\GraduateList;
use App\Models\Batch;
use App\Models\Program;
use App\Models\Department;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Image;
use File;

class ProfileController extends Controller
{

    public function dashboard(){
        $user = GraduateList::where('id', Auth::user()->graduate_lists_id)->first();
        //dd($GraduateList);
        return view('admin.dashboard.dashboard', compact('user'));
    }

    /**
     * Display the user's profile form.
     */
    public function edit($encryptedId): View
    {
        try {
            $id = Crypt::decryptString($encryptedId);
            //dd($id);
        } catch (DecryptException $e) {
           
        }
        $departments = Department::all();
        $programs = Program::all();
        $batchs = Batch::all();

        $user = GraduateList::where('id', $id)->first();
        return view('admin.student.edit', compact('user', 'departments', 'programs', 'batchs'));
        // return view('student.edit', [
        //     'user' => $request->user(),
        // ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request): RedirectResponse
    {
        $this->validate($request,[
            'program'=>'required',
            'batch'=>'required',
            'department'=>'required',
            'academic_year_from'=>'required|max:255',
            'academic_year_to'=>'required|max:255',
            'admission_year'=>'required|max:255',
            'admission_semester'=>'required|max:255',
            'credit_earned'=>'required|max:255|numeric',
            'cgpa'=>'required|max:4|numeric',
            'passing_trimester'=>'required|max:255',
            'father_name'=>'required|max:255',
            'mother_name'=>'required|max:255',
            'phone'=>'required|max:255',
            'blood_group'=>'required|max:255',
            'nid'=>'required|max:255',
            'birth_certificate_no'=>'required|max:255',
            'dob'=>'required',
            'present_address'=>'required',
            'permanent_address'=>'required',
            'guest1_name'=>'required|max:255',
            'guest1_relationship'=>'required|max:255',
            'guest1_nid'=>'required|max:255',
            'guest1_present_address'=>'required',
            'guest1_permanent_address'=>'required',
            'guest2_name'=>'required|max:255',
            'guest2_relationship'=>'required|max:255',
            'guest2_nid'=>'required|max:255',
            'guest2_present_address'=>'required',
            'guest2_permanent_address'=>'required',
            'ssc_institute'=>'required|max:255',
            'ssc_board'=>'required|max:255',
            'ssc_result'=>'required|max:5|numeric',
            'ssc_group'=>'required|max:255',
            'ssc_passing_year'=>'required|max:255',
            'hsc_institute'=>'required|max:255',
            'hsc_board'=>'required|max:255',
            'hsc_result'=>'required|max:5|numeric',
            'hsc_group'=>'required|max:255',
            'hsc_passing_year'=>'required|max:255',
        ]);
        //dd($request);
        $loggedUser = Auth::user()->id;
        $update = GraduateList::where('id', $request->id)->update([
            'program_id'=>$request->program,
            'batch_id'=>$request->batch,
            'department_id'=>$request->department,
            'major'=>$request->major,
            'minor'=>$request->minor,
            'academic_year_from'=>$request->academic_year_from,
            'academic_year_to'=>$request->academic_year_to,
            'admission_year'=>$request->admission_year,
            'admission_semester'=>$request->admission_semester,
            'credit_earned'=>$request->credit_earned,
            'cgpa'=>$request->cgpa,
            'passing_trimester'=>$request->passing_trimester,
            'father_name'=>$request->father_name,
            'mother_name'=>$request->mother_name,
            'phone'=>$request->phone,
            'blood_group'=>$request->blood_group,
            'nid'=>$request->nid,
            'birth_certificate_no'=>$request->birth_certificate_no,
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
            'guest1_nid'=>$request->guest1_nid,
            'guest1_present_address'=>$request->guest1_present_address,
            'guest1_permanent_address'=>$request->guest1_permanent_address,
            'guest2_name'=>$request->guest2_name,
            'guest2_relationship'=>$request->guest2_relationship,
            'guest2_nid'=>$request->guest2_nid,
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
            'masters_board'=>$request->masters_board,
            'masters_result'=>$request->masters_result,
            'masters_group'=>$request->masters_group,
            'masters_passing_year'=>$request->masters_passing_year,
            'edit_start_status'=>'1',
            'updated_by'=>$loggedUser,
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);
        
        if($update){
            Session::flash('success','Information successfully updated!');
            return redirect()->route('dashboard');
        }else{
            Session::flash('error','Information edit process failed!');
            return redirect()->route('edit_user_information');
        }
        // $request->user()->fill($request->validated());

        // if ($request->user()->isDirty('email')) {
        //     $request->user()->email_verified_at = null;
        // }

        // $request->user()->save();

        // return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
