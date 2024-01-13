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

class ConvocationRegistrationController extends Controller{
    public function dashboard(){
        $user = GraduateList::where('id', Auth::user()->graduate_lists_id)->first();

        if($user->child_account_status=='0'){
            return view('student.dashboard.dashboard', compact('user'));
        }elseif($user->child_account_status=='1'){
            return view('student.dashboard.second-program-dashboard', compact('user'));
        }
    }

    /**
     * 
     */
    public function edit($encryptedId): View{
        try {
            $id = Crypt::decryptString($encryptedId);
        } catch (DecryptException $e) {
        }

        $programs = Program::all();
        $batchs = Batch::all();

        $user = GraduateList::where('id', $id)->first();
        return view('student.registration.edit', compact('user', 'programs', 'batchs'));
    }

    /**
     * 
     */
    public function update(Request $request): RedirectResponse{
        $this->validate($request,[
            'name'=>'required|max:50',
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
            return redirect()->route('dashboard');
        }else{
            Session::flash('error','Information edit process failed!');
            return redirect()->route('edit_student_information');
        }
    }

    public function photoUpload($encryptedId){
        try {
            $id = Crypt::decryptString($encryptedId);
        } catch (DecryptException $e) {
        }
        
        $user = GraduateList::where('id', $id)->first();
        return view('student.registration.photo-upload', compact('user'));
    }

    public function photoUpdate(Request $request): RedirectResponse{
        $user = GraduateList::where('id', $request->id)->first();
        $loggedUser = Auth::user()->id;

        if($user->guest2_name==''){
            $this->validate($request,[
                'student_photo' => 'required|image|mimes:jpg|max:2048|dimensions:max_width=1000,max_height=1000',
                'student_nid_or_birth_cert_photo' => 'required|image|mimes:jpg|max:2048|dimensions:max_width=1000,max_height=1000',
                'student_signature_photo' => 'required|image|mimes:jpg|max:2048|dimensions:width=300,height=80',
                'guest1_photo' => 'required|image|mimes:jpg|max:2048|dimensions:max_width=1000,max_height=1000',
                'guest1_nid_or_birth_cert_photo' => 'required|image|mimes:jpg|max:2048|dimensions:max_width=1000,max_height=1000',
                //'guest2_photo' => 'required|image|mimes:jpg|max:2048|dimensions:max_width=1000,max_height=1000',
                'ssc_certificate_photo' => 'required|image|mimes:jpg|max:2048|dimensions:max_width=1000,max_height=1000',
                'hsc_certificate_photo' => 'required|image|mimes:jpg|max:2048|dimensions:max_width=1000,max_height=1000',
            ]);

            if($request->hasFile('student_photo')){
                $image1 = $request->file('student_photo');
                $imageName1 = 'student_'.$loggedUser.'_'.time().'.'.$image1->getClientOriginalExtension();
                Image::make($image1)->save('uploads/student/'.$imageName1);
            }
            
            if($request->hasFile('guest1_photo')){
                $image2 = $request->file('guest1_photo');
                $imageName2 = 'guest1_'.$loggedUser.'_'.time().'.'.$image2->getClientOriginalExtension();
                Image::make($image2)->save('uploads/guest/'.$imageName2);
            }
    
            if($request->hasFile('guest1_nid_or_birth_cert_photo')){
                $image3 = $request->file('guest1_nid_or_birth_cert_photo');
                $imageName3 = 'guest1_nid_birth_'.$loggedUser.'_'.time().'.'.$image3->getClientOriginalExtension();
                Image::make($image3)->save('uploads/nid-or-birth-certificate/'.$imageName3);
            }
            
            if($request->hasFile('ssc_certificate_photo')){
                $image4 = $request->file('ssc_certificate_photo');
                $imageName4 = 'ssc_certificate_'.$loggedUser.'_'.time().'.'.$image4->getClientOriginalExtension();
                Image::make($image4)->save('uploads/ssc/'.$imageName4);
            }
    
            if($request->hasFile('hsc_certificate_photo')){
                $image5 = $request->file('hsc_certificate_photo');
                $imageName5 = 'hsc_certificate_'.$loggedUser.'_'.time().'.'.$image5->getClientOriginalExtension();
                Image::make($image5)->save('uploads/hsc/'.$imageName5);
            }

            if($request->hasFile('student_nid_or_birth_cert_photo')){
                $image8 = $request->file('student_nid_or_birth_cert_photo');
                $imageName8 = 'student_nid_birth_'.$loggedUser.'_'.time().'.'.$image8->getClientOriginalExtension();
                Image::make($image8)->save('uploads/nid-or-birth-certificate/'.$imageName8);
            }

            if($request->hasFile('student_signature_photo')){
                $image9 = $request->file('student_signature_photo');
                $imageName9 = 'student_signature_photo_'.$loggedUser.'_'.time().'.'.$image9->getClientOriginalExtension();
                Image::make($image9)->save('uploads/signature/'.$imageName9);
            }

            $update = GraduateList::where('id', $request->id)->update([
                'student_photo'=>$imageName1,
                'guest1_photo'=>$imageName2,
                'guest1_nid_or_birth_cert_photo'=>$imageName3,
                'ssc_certificate_photo'=>$imageName4,
                'hsc_certificate_photo'=>$imageName5,
                'nid_or_birth_cert_photo'=>$imageName8,
                'signature_photo'=>$imageName9,
                'photo_upload_status'=>1,
                'updated_by'=>$loggedUser,
                'updated_at'=>Carbon::now()->toDateTimeString(),
            ]);
        }

        if($user->guest2_name!=''){
            $this->validate($request,[
                'student_photo' => 'required|image|mimes:jpg|max:2048|dimensions:max_width=1000,max_height=1000',
                'student_nid_or_birth_cert_photo' => 'required|image|mimes:jpg|max:2048|dimensions:max_width=1000,max_height=1000',
                'student_signature_photo' => 'required|image|mimes:jpg|max:2048|dimensions:width=300,height=80',
                'guest1_photo' => 'required|image|mimes:jpg|max:2048|dimensions:max_width=1000,max_height=1000',
                'guest1_nid_or_birth_cert_photo' => 'required|image|mimes:jpg|max:2048|dimensions:max_width=1000,max_height=1000',
                'guest2_photo' => 'required|image|mimes:jpg|max:2048|dimensions:max_width=1000,max_height=1000',
                'guest2_nid_or_birth_cert_photo' => 'required|image|mimes:jpg|max:2048|dimensions:max_width=1000,max_height=1000',
                'ssc_certificate_photo' => 'required|image|mimes:jpg|max:2048|dimensions:max_width=1000,max_height=1000',
                'hsc_certificate_photo' => 'required|image|mimes:jpg|max:2048|dimensions:max_width=1000,max_height=1000',
            ]);

            if($request->hasFile('student_photo')){
                $image1 = $request->file('student_photo');
                $imageName1 = 'student_'.$loggedUser.'_'.time().'.'.$image1->getClientOriginalExtension();
                Image::make($image1)->save('uploads/student/'.$imageName1);
            }
            
            if($request->hasFile('guest1_photo')){
                $image2 = $request->file('guest1_photo');
                $imageName2 = 'guest1_'.$loggedUser.'_'.time().'.'.$image2->getClientOriginalExtension();
                Image::make($image2)->save('uploads/guest/'.$imageName2);
            }
    
            if($request->hasFile('guest1_nid_or_birth_cert_photo')){
                $image3 = $request->file('guest1_nid_or_birth_cert_photo');
                $imageName3 = 'guest1_nid_birth_'.$loggedUser.'_'.time().'.'.$image3->getClientOriginalExtension();
                Image::make($image3)->save('uploads/nid-or-birth-certificate/'.$imageName3);
            }
            
            if($request->hasFile('ssc_certificate_photo')){
                $image4 = $request->file('ssc_certificate_photo');
                $imageName4 = 'ssc_certificate_'.$loggedUser.'_'.time().'.'.$image4->getClientOriginalExtension();
                Image::make($image4)->save('uploads/ssc/'.$imageName4);
            }
    
            if($request->hasFile('hsc_certificate_photo')){
                $image5 = $request->file('hsc_certificate_photo');
                $imageName5 = 'hsc_certificate_'.$loggedUser.'_'.time().'.'.$image5->getClientOriginalExtension();
                Image::make($image5)->save('uploads/hsc/'.$imageName5);
            }
    
            // If guest 2 name have value
    
            if($request->hasFile('guest2_photo')){
                $image6 = $request->file('guest2_photo');
                $imageName6 = 'guest2_'.$loggedUser.'_'.time().'.'.$image6->getClientOriginalExtension();
                Image::make($image6)->save('uploads/guest/'.$imageName6);
            }
    
            if($request->hasFile('guest2_nid_or_birth_cert_photo')){
                $image7 = $request->file('guest2_nid_or_birth_cert_photo');
                $imageName7 = 'guest2_nid_birth_'.$loggedUser.'_'.time().'.'.$image7->getClientOriginalExtension();
                Image::make($image7)->save('uploads/nid-or-birth-certificate/'.$imageName7);
            }

            if($request->hasFile('student_nid_or_birth_cert_photo')){
                $image8 = $request->file('student_nid_or_birth_cert_photo');
                $imageName8 = 'student_nid_birth_'.$loggedUser.'_'.time().'.'.$image8->getClientOriginalExtension();
                Image::make($image8)->save('uploads/nid-or-birth-certificate/'.$imageName8);
            }

            if($request->hasFile('student_signature_photo')){
                $image9 = $request->file('student_signature_photo');
                $imageName9 = 'student_signature_photo_'.$loggedUser.'_'.time().'.'.$image9->getClientOriginalExtension();
                Image::make($image9)->save('uploads/signature/'.$imageName9);
            }
            //
            $update = GraduateList::where('id', $request->id)->update([
                'student_photo'=>$imageName1,
                'guest1_photo'=>$imageName2,
                'guest1_nid_or_birth_cert_photo'=>$imageName3,
                'ssc_certificate_photo'=>$imageName4,
                'hsc_certificate_photo'=>$imageName5,
                'guest2_photo'=>$imageName6,
                'guest2_nid_or_birth_cert_photo'=>$imageName7,
                'nid_or_birth_cert_photo'=>$imageName8,
                'signature_photo'=>$imageName9,
                'photo_upload_status'=>1,
                'updated_by'=>$loggedUser,
                'updated_at'=>Carbon::now()->toDateTimeString(),
            ]);
        }
        
        if($update){
            Session::flash('success','Photo successfully uploaded!');
            return redirect()->route('dashboard');
        }else{
            Session::flash('error','Photo upload process failed!');
            return redirect()->route('student_photo_upload');
        }
    }
    
    public function formSubmit(Request $request): RedirectResponse{
        $submitStatus = GraduateList::where('id', $request->modal_id)->first();

        if($submitStatus->student_program_choice==1){
            if($submitStatus->edit_start_status==1 && $submitStatus->photo_upload_status==1){
            
                $loggedUser = Auth::user()->id;
                
                $update1 = GraduateList::where('id', $request->modal_id)->update([
                    'registration_complete_status'=>1,
                    'updated_by'=>$loggedUser,
                    'form_submission_date'=>Carbon::now()->toDateTimeString(),
                    'updated_at'=>Carbon::now()->toDateTimeString(),
                ]);
                $second_program_grad_list_id = GraduateList::where('id', $request->modal_id)->value('second_program_grad_list_id');
                
                if($second_program_grad_list_id!=''){
                    $update2 = GraduateList::where('id', $second_program_grad_list_id)->update([
                        'registration_complete_status'=>1,
                        'updated_by'=>$loggedUser,
                        'form_submission_date'=>Carbon::now()->toDateTimeString(),
                        'updated_at'=>Carbon::now()->toDateTimeString(),
                    ]);
                }
                
                if($update1){
                    Session::flash('success','Convocation registration submitted successfully!');
                    return redirect()->route('dashboard');
                }else{
                    Session::flash('error','Convocation registration process failed!');
                    return redirect()->route('dashboard');
                }

            }else{
                Session::flash('error','Please fill in all required information fields for final submission!');
                return redirect()->route('dashboard');
            }
        }elseif($submitStatus->student_program_choice==3){
            if($submitStatus->edit_start_status==1 && $submitStatus->photo_upload_status==1 && $submitStatus->second_program_info_complete_status==1){
            
                $loggedUser = Auth::user()->id;
                
                $update1 = GraduateList::where('id', $request->modal_id)->update([
                    'registration_complete_status'=>1,
                    'updated_by'=>$loggedUser,
                    'form_submission_date'=>Carbon::now()->toDateTimeString(),
                    'updated_at'=>Carbon::now()->toDateTimeString(),
                ]);
                $second_program_grad_list_id = GraduateList::where('id', $request->modal_id)->value('second_program_grad_list_id');
                
                if($second_program_grad_list_id!=''){
                    $update2 = GraduateList::where('id', $second_program_grad_list_id)->update([
                        'registration_complete_status'=>1,
                        'updated_by'=>$loggedUser,
                        'form_submission_date'=>Carbon::now()->toDateTimeString(),
                        'updated_at'=>Carbon::now()->toDateTimeString(),
                    ]);
                }
                
                if($update1){
                    Session::flash('success','Convocation registration submitted successfully!');
                    return redirect()->route('dashboard');
                }else{
                    Session::flash('error','Convocation registration process failed!');
                    return redirect()->route('dashboard');
                }

            }else{
                Session::flash('error','Please fill in all required information fields for final submission!');
                return redirect()->route('dashboard');
            }
        }
            
    }

    public function registrationFormPDF(){
        // For PDF
        $data = GraduateList::where('id', Auth::user()->graduate_lists_id)
        ->with(['programInfo', 'batchInfo', 'secondProgramInfo'])
        ->first();

        if($data->student_program_choice==3){
                $data1 = GraduateList::where('id', $data->second_program_grad_list_id)
            ->with(['programInfo', 'batchInfo', 'secondProgramInfo'])
            ->first();

            $user1 = [
                'student_photo'=>$data->student_photo,
                'name'=>$data->name,
                'program_name'=>$data->programInfo->program_name,
                'student_id'=>$data->student_id,
                'batch_name'=>$data->batchInfo->batch_name,
                'major'=>$data->major,
                'minor'=>$data->minor,
                'admission_year'=>$data->admission_year,
                'admission_semester'=>$data->admission_semester,
                'credit_earned'=>$data->credit_earned,
                'cgpa'=>$data->cgpa,
                'email'=>$data->email,
                'passing_trimester'=>$data->passing_trimester,
                'passing_year'=>$data->passing_year,
                'father_name'=>$data->father_name,
                'mother_name'=>$data->mother_name,
                'phone'=>$data->phone,
                'blood_group'=>$data->blood_group,
                'nid_or_birth_cert_no'=>$data->nid_or_birth_cert_no,
                'dob'=>$data->dob,
                'result_publish_date'=>$data->result_publish_date,
                'present_address'=>$data->present_address,
                'permanent_address'=>$data->permanent_address,
                'organization_name'=>$data->organization_name,
                'designation'=>$data->designation,
                'office_address'=>$data->office_address,
                'office_phone'=>$data->office_phone,
                'office_mobile'=>$data->office_mobile,
                'form_submission_date'=>$data->form_submission_date,
                'signature_photo'=>$data->signature_photo,
                'guest1_name'=>$data->guest1_name,
                'guest1_relationship'=>$data->guest1_relationship,
                'guest1_nid_or_birth_cert'=>$data->guest1_nid_or_birth_cert,
                'guest1_present_address'=>$data->guest1_present_address,
                'guest1_permanent_address'=>$data->guest1_permanent_address,
                'guest1_photo'=>$data->guest1_photo,
                'guest2_name'=>$data->guest2_name,
                'guest2_relationship'=>$data->guest2_relationship,
                'guest2_nid_or_birth_cert'=>$data->guest2_nid_or_birth_cert,
                'guest2_present_address'=>$data->guest2_present_address,
                'guest2_permanent_address'=>$data->guest2_permanent_address,
                'guest2_photo'=>$data->guest2_photo,
                'ssc_institute'=>$data->ssc_institute,
                'ssc_board'=>$data->ssc_board,
                'ssc_result'=>$data->ssc_result,
                'ssc_group'=>$data->ssc_group,
                'ssc_passing_year'=>$data->ssc_passing_year,
                'hsc_institute'=>$data->hsc_institute,
                'hsc_board'=>$data->hsc_board,
                'hsc_result'=>$data->hsc_result,
                'hsc_group'=>$data->hsc_group,
                'hsc_passing_year'=>$data->hsc_passing_year,
                'bachelor_institute'=>$data->bachelor_institute,
                'bachelor_board'=>$data->bachelor_board,
                'bachelor_result'=>$data->bachelor_result,
                'bachelor_group'=>$data->bachelor_group,
                'bachelor_passing_year'=>$data->bachelor_passing_year,
                'masters_institute'=>$data->masters_institute,
                'masters_result'=>$data->masters_result,
                'masters_passing_year'=>$data->masters_passing_year,
                'student_photo1'=>$data1->student_photo,
                'name1'=>$data1->name,
                'program_name1'=>$data1->programInfo->program_name,
                'student_id1'=>$data1->student_id,
                'batch_name1'=>$data1->batchInfo->batch_name,
                'major1'=>$data1->major,
                'minor1'=>$data1->minor,
                'admission_year1'=>$data1->admission_year,
                'admission_semester1'=>$data1->admission_semester,
                'credit_earned1'=>$data1->credit_earned,
                'cgpa1'=>$data1->cgpa,
                'email1'=>$data1->email,
                'passing_trimester1'=>$data1->passing_trimester,
                'passing_year1'=>$data1->passing_year,
            ];
            $pdf = Pdf::loadView('pdf.registration-form-double-program', $user1)->setOptions(['defaultFont' => 'sans-serif'])->setPaper('A4');
            return $pdf->download('Registration Form.pdf');
        }

        $user = [
            'student_photo'=>$data->student_photo,
            'name'=>$data->name,
            'program_name'=>$data->programInfo->program_name,
            'student_id'=>$data->student_id,
            'batch_name'=>$data->batchInfo->batch_name,
            'major'=>$data->major,
            'minor'=>$data->minor,
            'admission_year'=>$data->admission_year,
            'admission_semester'=>$data->admission_semester,
            'credit_earned'=>$data->credit_earned,
            'cgpa'=>$data->cgpa,
			'email'=>$data->email,
            'passing_trimester'=>$data->passing_trimester,
            'passing_year'=>$data->passing_year,
            'father_name'=>$data->father_name,
            'mother_name'=>$data->mother_name,
            'phone'=>$data->phone,
            'blood_group'=>$data->blood_group,
            'nid_or_birth_cert_no'=>$data->nid_or_birth_cert_no,
            'dob'=>$data->dob,
            'result_publish_date'=>$data->result_publish_date,
            'present_address'=>$data->present_address,
            'permanent_address'=>$data->permanent_address,
            'organization_name'=>$data->organization_name,
            'designation'=>$data->designation,
            'office_address'=>$data->office_address,
            'office_phone'=>$data->office_phone,
            'office_mobile'=>$data->office_mobile,
            'form_submission_date'=>$data->form_submission_date,
            'signature_photo'=>$data->signature_photo,
            'guest1_name'=>$data->guest1_name,
            'guest1_relationship'=>$data->guest1_relationship,
            'guest1_nid_or_birth_cert'=>$data->guest1_nid_or_birth_cert,
            'guest1_present_address'=>$data->guest1_present_address,
            'guest1_permanent_address'=>$data->guest1_permanent_address,
            'guest1_photo'=>$data->guest1_photo,
            'guest2_name'=>$data->guest2_name,
            'guest2_relationship'=>$data->guest2_relationship,
            'guest2_nid_or_birth_cert'=>$data->guest2_nid_or_birth_cert,
            'guest2_present_address'=>$data->guest2_present_address,
            'guest2_permanent_address'=>$data->guest2_permanent_address,
            'guest2_photo'=>$data->guest2_photo,
            'ssc_institute'=>$data->ssc_institute,
            'ssc_board'=>$data->ssc_board,
            'ssc_result'=>$data->ssc_result,
            'ssc_group'=>$data->ssc_group,
            'ssc_passing_year'=>$data->ssc_passing_year,
            'hsc_institute'=>$data->hsc_institute,
            'hsc_board'=>$data->hsc_board,
            'hsc_result'=>$data->hsc_result,
            'hsc_group'=>$data->hsc_group,
            'hsc_passing_year'=>$data->hsc_passing_year,
            'bachelor_institute'=>$data->bachelor_institute,
            'bachelor_board'=>$data->bachelor_board,
            'bachelor_result'=>$data->bachelor_result,
            'bachelor_group'=>$data->bachelor_group,
            'bachelor_passing_year'=>$data->bachelor_passing_year,
            'masters_institute'=>$data->masters_institute,
            'masters_result'=>$data->masters_result,
            'masters_passing_year'=>$data->masters_passing_year,
        ];

        $pdf = Pdf::loadView('pdf.registration-form-single-program', $user)->setOptions(['defaultFont' => 'sans-serif'])->setPaper('A4');
        return $pdf->download('Registration Form.pdf');
    }

    public function studentCopyPDF(){
        // For PDF
        $data = GraduateList::where('id', Auth::user()->graduate_lists_id)
        ->with(['programInfo', 'batchInfo', 'secondProgramInfo'])
        ->first();

        if($data->student_program_choice==3){
                $data1 = GraduateList::where('id', $data->second_program_grad_list_id)
            ->with(['programInfo', 'batchInfo', 'secondProgramInfo'])
            ->first();

            $user1 = [
                'student_photo'=>$data->student_photo,
                'name'=>$data->name,
                'program_name'=>$data->programInfo->program_name,
                'student_id'=>$data->student_id,
                'batch_name'=>$data->batchInfo->batch_name,
                'major'=>$data->major,
                'minor'=>$data->minor,
                'admission_year'=>$data->admission_year,
                'admission_semester'=>$data->admission_semester,
                'credit_earned'=>$data->credit_earned,
                'cgpa'=>$data->cgpa,
                'email'=>$data->email,
                'passing_trimester'=>$data->passing_trimester,
                'passing_year'=>$data->passing_year,
                'father_name'=>$data->father_name,
                'mother_name'=>$data->mother_name,
                'phone'=>$data->phone,
                'blood_group'=>$data->blood_group,
                'nid_or_birth_cert_no'=>$data->nid_or_birth_cert_no,
                'dob'=>$data->dob,
                'result_publish_date'=>$data->result_publish_date,
                'present_address'=>$data->present_address,
                'permanent_address'=>$data->permanent_address,
                'organization_name'=>$data->organization_name,
                'designation'=>$data->designation,
                'office_address'=>$data->office_address,
                'office_phone'=>$data->office_phone,
                'office_mobile'=>$data->office_mobile,
                'guest1_name'=>$data->guest1_name,
                'guest1_relationship'=>$data->guest1_relationship,
                'guest1_nid_or_birth_cert'=>$data->guest1_nid_or_birth_cert,
                'guest1_present_address'=>$data->guest1_present_address,
                'guest1_permanent_address'=>$data->guest1_permanent_address,
                'guest1_photo'=>$data->guest1_photo,
                'guest2_name'=>$data->guest2_name,
                'guest2_relationship'=>$data->guest2_relationship,
                'guest2_nid_or_birth_cert'=>$data->guest2_nid_or_birth_cert,
                'guest2_present_address'=>$data->guest2_present_address,
                'guest2_permanent_address'=>$data->guest2_permanent_address,
                'guest2_photo'=>$data->guest2_photo,
                'ssc_institute'=>$data->ssc_institute,
                'ssc_board'=>$data->ssc_board,
                'ssc_result'=>$data->ssc_result,
                'ssc_group'=>$data->ssc_group,
                'ssc_passing_year'=>$data->ssc_passing_year,
                'hsc_institute'=>$data->hsc_institute,
                'hsc_board'=>$data->hsc_board,
                'hsc_result'=>$data->hsc_result,
                'hsc_group'=>$data->hsc_group,
                'hsc_passing_year'=>$data->hsc_passing_year,
                'bachelor_institute'=>$data->bachelor_institute,
                'bachelor_board'=>$data->bachelor_board,
                'bachelor_result'=>$data->bachelor_result,
                'bachelor_group'=>$data->bachelor_group,
                'bachelor_passing_year'=>$data->bachelor_passing_year,
                'masters_institute'=>$data->masters_institute,
                'masters_result'=>$data->masters_result,
                'masters_passing_year'=>$data->masters_passing_year,
                'student_photo1'=>$data1->student_photo,
                'name1'=>$data1->name,
                'program_name1'=>$data1->programInfo->program_name,
                'student_id1'=>$data1->student_id,
                'batch_name1'=>$data1->batchInfo->batch_name,
                'major1'=>$data1->major,
                'minor1'=>$data1->minor,
                'admission_year1'=>$data1->admission_year,
                'admission_semester1'=>$data1->admission_semester,
                'credit_earned1'=>$data1->credit_earned,
                'cgpa1'=>$data1->cgpa,
                'email1'=>$data1->email,
                'passing_trimester1'=>$data1->passing_trimester,
                'passing_year1'=>$data1->passing_year,
            ];
            $pdf = Pdf::loadView('pdf.student-copy-double-program', $user1)->setOptions(['defaultFont' => 'sans-serif'])->setPaper('A4');
            return $pdf->download('Student Copy.pdf');
        }

        $user = [
            'student_photo'=>$data->student_photo,
            'name'=>$data->name,
            'program_name'=>$data->programInfo->program_name,
            'student_id'=>$data->student_id,
            'batch_name'=>$data->batchInfo->batch_name,
            'major'=>$data->major,
            'minor'=>$data->minor,
            'admission_year'=>$data->admission_year,
            'admission_semester'=>$data->admission_semester,
            'credit_earned'=>$data->credit_earned,
            'cgpa'=>$data->cgpa,
			'email'=>$data->email,
            'passing_trimester'=>$data->passing_trimester,
            'passing_year'=>$data->passing_year,
            'father_name'=>$data->father_name,
            'mother_name'=>$data->mother_name,
            'phone'=>$data->phone,
            'blood_group'=>$data->blood_group,
            'nid_or_birth_cert_no'=>$data->nid_or_birth_cert_no,
            'dob'=>$data->dob,
            'result_publish_date'=>$data->result_publish_date,
            'present_address'=>$data->present_address,
            'permanent_address'=>$data->permanent_address,
            'organization_name'=>$data->organization_name,
            'designation'=>$data->designation,
            'office_address'=>$data->office_address,
            'office_phone'=>$data->office_phone,
            'office_mobile'=>$data->office_mobile,
            'guest1_name'=>$data->guest1_name,
            'guest1_relationship'=>$data->guest1_relationship,
            'guest1_nid_or_birth_cert'=>$data->guest1_nid_or_birth_cert,
            'guest1_present_address'=>$data->guest1_present_address,
            'guest1_permanent_address'=>$data->guest1_permanent_address,
            'guest1_photo'=>$data->guest1_photo,
            'guest2_name'=>$data->guest2_name,
            'guest2_relationship'=>$data->guest2_relationship,
            'guest2_nid_or_birth_cert'=>$data->guest2_nid_or_birth_cert,
            'guest2_present_address'=>$data->guest2_present_address,
            'guest2_permanent_address'=>$data->guest2_permanent_address,
            'guest2_photo'=>$data->guest2_photo,
            'ssc_institute'=>$data->ssc_institute,
            'ssc_board'=>$data->ssc_board,
            'ssc_result'=>$data->ssc_result,
            'ssc_group'=>$data->ssc_group,
            'ssc_passing_year'=>$data->ssc_passing_year,
            'hsc_institute'=>$data->hsc_institute,
            'hsc_board'=>$data->hsc_board,
            'hsc_result'=>$data->hsc_result,
            'hsc_group'=>$data->hsc_group,
            'hsc_passing_year'=>$data->hsc_passing_year,
            'bachelor_institute'=>$data->bachelor_institute,
            'bachelor_board'=>$data->bachelor_board,
            'bachelor_result'=>$data->bachelor_result,
            'bachelor_group'=>$data->bachelor_group,
            'bachelor_passing_year'=>$data->bachelor_passing_year,
            'masters_institute'=>$data->masters_institute,
            'masters_result'=>$data->masters_result,
            'masters_passing_year'=>$data->masters_passing_year,
        ];

        $pdf = Pdf::loadView('pdf.student-single-program', $user)->setOptions(['defaultFont' => 'sans-serif'])->setPaper('A4');
        return $pdf->download('Student Copy.pdf');
    }

}