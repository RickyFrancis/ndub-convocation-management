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

class PdfController extends Controller{
    public function registrationFormPDF($encryptedId){
        try {
            $id = Crypt::decryptString($encryptedId);
        } catch (DecryptException $e) {
        }
        // For PDF
        $data = GraduateList::where('id', $id)
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

    public function studentCopyPDF($encryptedId){
        try {
            $id = Crypt::decryptString($encryptedId);
        } catch (DecryptException $e) {
        }
        // For PDF
        $data = GraduateList::where('id', $id)
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
