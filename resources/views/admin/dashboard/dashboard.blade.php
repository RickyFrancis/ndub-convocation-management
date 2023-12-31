@extends('layouts.admin.dashboard')
@section('dashboard_content')
@if(Session::has('success'))
    <script>
    Swal.fire({
        position: 'center',
        icon: 'success',
        text: '{{Session::get('success')}}',
        showConfirmButton: true,
        timer: '5000',
    })
    </script>
    @endif
    @if(Session::has('error'))
    <script>
    Swal.fire({
        position: 'center',
        icon: 'error',
        text: '{{Session::get('error')}}',
        showConfirmButton: true,
        timer: '5000',
    })
    </script>
    @endif
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <hr>
            <h3 class="text-center">Information</h3>
            <hr>
            </div>

            <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-12 col-md-9">
                            <h4 class="card-title"><i class="fab fa-gg-circle"></i><b> My Information</b></h4>
                        </div>
                        <div class="col-12 col-md-3 text-center">
                            @php
                            use Illuminate\Support\Facades\Crypt;
                            $graduate_list_id =  Crypt::encryptString($user->id);
                            @endphp
                            <a class="btn btn-info" href="{{ route('edit_user_information', ['id' => $graduate_list_id]) }}" title="Edit">Edit Information</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dt-responsive view_table">
                        <thead class="thead-dark">
                        </thead>
                        <tbody>
                        <tr>
                        <td><b>Name</b></td>
                        <td>:</td>
                        <td>{{$user->name ? $user->name : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Student ID</b></td>
                        <td>:</td>
                        <td>{{$user->student_id ? $user->student_id : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Program</b></td>
                        <td>:</td>
                        <td>
                            @if($user->program_id!='')
                            {{$user->programInfo->program_name ? $user->programInfo->program_name : ''}}
                            @endif
                        </td>
                        </tr>
                        <tr>
                        <td><b>Batch</b></td>
                        <td>:</td>
                        <td>
                            @if($user->batch_id!='')
                            {{$user->batchInfo->batch_name ? $user->batchInfo->batch_name : ''}}
                            @endif
                        </td>
                        </tr>
                        <tr>
                        <td><b>Department</b></td>
                        <td>:</td>
                        <td>
                            @if($user->department_id!='')
                            {{$user->departmentInfo->department_name ? $user->departmentInfo->department_name : ''}}
                            @endif
                        </td>
                        </tr>
                        <tr>
                        <td><b>Major</b></td>
                        <td>:</td>
                        <td>{{$user->major ? $user->major : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Minor</b></td>
                        <td>:</td>
                        <td>{{$user->minor ? $user->minor : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Admission year</b></td>
                        <td>:</td>
                        <td>{{$user->admission_year ? $user->admission_year : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Admission semester</b></td>
                        <td>:</td>
                        <td>{{$user->admission_semester ? $user->admission_semester : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Academic year </b></td>
                        <td>:</td>
                        <td><b>From:</b> {{$user->academic_year_from ? $user->academic_year_from : ''}} <b>To:</b> {{$user->academic_year_to ? $user->academic_year_to : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Result publish date</b></td>
                        <td>:</td>
                        <td>{{$user->result_publish_date ? $user->result_publish_date : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Passing semester</b></td>
                        <td>:</td>
                        <td>{{$user->passing_trimester ? $user->passing_trimester : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Credit earned</b></td>
                        <td>:</td>
                        <td>{{$user->credit_earned ? $user->credit_earned : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>CGPA</b></td>
                        <td>:</td>
                        <td>{{$user->cgpa ? $user->cgpa : ''}}</td>
                        </tr>
                        <tr>
                        <td></td>
                        <td></td>
                        <td><div class="text-bold"><h4>Academic Background</h4></div></td>
                        </tr>
                        <tr>
                        <td><b>SSC institute</b></td>
                        <td>:</td>
                        <td>{{$user->ssc_institute ? $user->ssc_institute : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>SSC board</b></td>
                        <td>:</td>
                        <td>{{$user->ssc_board ? $user->ssc_board : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>SSC result</b></td>
                        <td>:</td>
                        <td>{{$user->ssc_result ? $user->ssc_result : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>SSC group</b></td>
                        <td>:</td>
                        <td>{{$user->ssc_group ? $user->ssc_group : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>SSC passing year</b></td>
                        <td>:</td>
                        <td>{{$user->ssc_passing_year ? $user->ssc_passing_year : ''}}</td>
                        </tr>
                        <!-- HSC -->
                        <tr>
                        <td><b>HSC institute</b></td>
                        <td>:</td>
                        <td>{{$user->hsc_institute ? $user->hsc_institute : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>HSC board</b></td>
                        <td>:</td>
                        <td>{{$user->hsc_board ? $user->hsc_board : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>HSC result</b></td>
                        <td>:</td>
                        <td>{{$user->hsc_result ? $user->hsc_result : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>HSC group</b></td>
                        <td>:</td>
                        <td>{{$user->hsc_group ? $user->hsc_group : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>HSC passing year</b></td>
                        <td>:</td>
                        <td>{{$user->hsc_passing_year ? $user->hsc_passing_year : ''}}</td>
                        </tr>
                        <!-- Bachelor -->
                        <tr>
                        <td><b>Bachelor institute</b></td>
                        <td>:</td>
                        <td>{{$user->bachelor_institute ? $user->bachelor_institute : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Bachelor board</b></td>
                        <td>:</td>
                        <td>{{$user->bachelor_board ? $user->bachelor_board : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Bachelor result</b></td>
                        <td>:</td>
                        <td>{{$user->bachelor_result ? $user->bachelor_result : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Bachelor group</b></td>
                        <td>:</td>
                        <td>{{$user->bachelor_group ? $user->bachelor_group : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Bachelor passing year</b></td>
                        <td>:</td>
                        <td>{{$user->bachelor_passing_year ? $user->bachelor_passing_year : ''}}</td>
                        </tr>
                        <!-- Masters -->
                        <tr>
                        <td><b>Masters institute</b></td>
                        <td>:</td>
                        <td>{{$user->masters_institute ? $user->masters_institute : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Masters board</b></td>
                        <td>:</td>
                        <td>{{$user->masters_board ? $user->masters_board : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Masters result</b></td>
                        <td>:</td>
                        <td>{{$user->masters_result ? $user->masters_result : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Masters group</b></td>
                        <td>:</td>
                        <td>{{$user->masters_group ? $user->masters_group : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Masters passing year</b></td>
                        <td>:</td>
                        <td>{{$user->masters_passing_year ? $user->masters_passing_year : ''}}</td>
                        </tr>
                        <tr>
                        <td></td>
                        <td></td>
                        <td><div class="text-bold"><h4>Personal Information</h4></div></td>
                        </tr>
                        <tr>
                        <td><b>Father name</b></td>
                        <td>:</td>
                        <td>{{$user->father_name ? $user->father_name : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Mother name</b></td>
                        <td>:</td>
                        <td>{{$user->mother_name ? $user->mother_name : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Phone</b></td>
                        <td>:</td>
                        <td>{{$user->phone ? $user->phone : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Email</b></td>
                        <td>:</td>
                        <td>{{$user->email ? $user->email : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Blood group</b></td>
                        <td>:</td>
                        <td>{{$user->blood_group ? $user->blood_group : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>NID</b></td>
                        <td>:</td>
                        <td>{{$user->nid ? $user->nid : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Birth certificate no</b></td>
                        <td>:</td>
                        <td>{{$user->birth_certificate_no ? $user->birth_certificate_no : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Date of birth</b></td>
                        <td>:</td>
                        <td>{{$user->dob ? $user->dob : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Present address</b></td>
                        <td>:</td>
                        <td>{{$user->present_address ? $user->present_address : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Permanent address</b></td>
                        <td>:</td>
                        <td>{{$user->permanent_address ? $user->permanent_address : ''}}</td>
                        </tr>
                        <tr>
                        <td></td>
                        <td></td>
                        <td><div class="text-bold"><h4>Employment Status (If any)</h4></div></td>
                        </tr>
                        <tr>
                        <td><b>Organization name</b></td>
                        <td>:</td>
                        <td>{{$user->organization_name ? $user->organization_name : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Designation</b></td>
                        <td>:</td>
                        <td>{{$user->designation ? $user->designation : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Office address</b></td>
                        <td>:</td>
                        <td>{{$user->office_address ? $user->office_address : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Office phone</b></td>
                        <td>:</td>
                        <td>{{$user->office_phone ? $user->office_phone : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Office mobile</b></td>
                        <td>:</td>
                        <td>{{$user->office_mobile ? $user->office_mobile : ''}}</td>
                        </tr>
                        <tr>
                        <td></td>
                        <td></td>
                        <td><div class="text-bold"><h4>Guest Details</h4></div></td>
                        </tr>
                        <tr>
                        <td><b>Guest 1 name</b></td>
                        <td>:</td>
                        <td>{{$user->guest1_name ? $user->guest1_name : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Guest 1 relationship</b></td>
                        <td>:</td>
                        <td>{{$user->guest1_relationship ? $user->guest1_relationship : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Guest 1 NID</b></td>
                        <td>:</td>
                        <td>{{$user->guest1_nid ? $user->guest1_nid : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Guest 1 present address</b></td>
                        <td>:</td>
                        <td>{{$user->guest1_present_address ? $user->guest1_present_address : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Guest 1 permanent address</b></td>
                        <td>:</td>
                        <td>{{$user->guest1_permanent_address ? $user->guest1_permanent_address : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Guest 2 name</b></td>
                        <td>:</td>
                        <td>{{$user->guest2_name ? $user->guest2_name : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Guest 2 relationship</b></td>
                        <td>:</td>
                        <td>{{$user->guest2_relationship ? $user->guest2_relationship : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Guest 2 NID</b></td>
                        <td>:</td>
                        <td>{{$user->guest2_nid ? $user->guest2_nid : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Guest 2 present address</b></td>
                        <td>:</td>
                        <td>{{$user->guest2_present_address ? $user->guest2_present_address : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Guest 2 permanent address</b></td>
                        <td>:</td>
                        <td>{{$user->guest2_permanent_address ? $user->guest2_permanent_address : ''}}</td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
                <div class="card-footer">
               
                </div>
            </div>
        </div>
        </div>

        <!-- Photo Section -->

        <div class="row">
            <div class="col-md-12">
            <hr>
            <h3 class="text-center">Photo</h3>
            <hr>
            </div>

            <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-12 col-md-9">
                            <h4 class="card-title"><i class="fab fa-gg-circle"></i><b> Photo</b></h4>
                        </div>
                        <div class="col-12 col-md-3 text-center">
                            <a class="btn btn-info" href="{{ route('user_photo_upload', ['id' => $graduate_list_id]) }}" title="Edit">Upload Photo</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dt-responsive view_table">
                        <thead class="thead-dark">
                        </thead>
                        <tbody>
                        <tr>
                        <td><b>Student photo</b></td>
                        <td>:</td>
                        <td>
                        @if($user->student_photo!='')
                            <img src="{{asset('uploads/student/'.$user->student_photo)}}" alt="student photo" class="img-fluid" height="65px" width="65px">
                        @else
                            <!-- <img src="{{asset('contents/admin/assets')}}/img/avatar.png" alt="User photo" class="img-fluid" height="65px" width="65px"> -->
                        @endif
                        </td>
                        </tr>
                        <tr>
                        <td><b>Guest 1 photo</b></td>
                        <td>:</td>
                        <td>
                        @if($user->guest1_photo!='')
                            <img src="{{asset('uploads/guest/'.$user->guest1_photo)}}" alt="Guest 1 photo" class="img-fluid" height="65px" width="65px">
                        @else
                            <!-- <img src="{{asset('contents/admin/assets')}}/img/avatar.png" alt="User photo" class="img-fluid" height="65px" width="65px"> -->
                        @endif
                        </td>
                        </tr>
                        <tr>
                        <td><b>Guest 2 photo</b></td>
                        <td>:</td>
                        <td>
                        @if($user->guest2_photo!='')
                            <img src="{{asset('uploads/guest/'.$user->guest2_photo)}}" alt="Guest 2 photo" class="img-fluid" height="65px" width="65px">
                        @else
                            <!-- <img src="{{asset('contents/admin/assets')}}/img/avatar.png" alt="User photo" class="img-fluid" height="65px" width="65px"> -->
                        @endif
                        </td>
                        </tr>
                        <tr>
                        <td><b>SSC certificate photo</b></td>
                        <td>:</td>
                        <td>
                        @if($user->ssc_certificate_photo!='')
                            <img src="{{asset('uploads/ssc/'.$user->ssc_certificate_photo)}}" alt="SSC certificate photo" class="img-fluid" height="65px" width="65px">
                        @else
                            <!-- <img src="{{asset('contents/admin/assets')}}/img/avatar.png" alt="User photo" class="img-fluid" height="65px" width="65px"> -->
                        @endif
                        </td>
                        </tr>
                        <tr>
                        <td><b>HSC certificate photo</b></td>
                        <td>:</td>
                        <td>
                        @if($user->hsc_certificate_photo!='')
                            <img src="{{asset('uploads/hsc/'.$user->hsc_certificate_photo)}}" alt="HSC certificate photo" class="img-fluid" height="65px" width="65px">
                        @else
                            <!-- <img src="{{asset('contents/admin/assets')}}/img/avatar.png" alt="User photo" class="img-fluid" height="65px" width="65px"> -->
                        @endif
                        </td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
                <div class="card-footer">
               
                </div>
            </div>
        </div>
        </div>

    </div>
@endsection
