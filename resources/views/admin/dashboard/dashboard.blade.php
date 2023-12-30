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
                        <td><b>minor</b></td>
                        <td>:</td>
                        <td>{{$user->minor ? $user->minor : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Major</b></td>
                        <td>:</td>
                        <td>{{$user->major ? $user->major : ''}}</td>
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
                        <td><b>Academic year</b></td>
                        <td>:</td>
                        <td>{{$user->academic_year ? $user->academic_year : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Result publish date</b></td>
                        <td>:</td>
                        <td>{{$user->result_publish_date ? $user->result_publish_date : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Passing trimester</b></td>
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
                        <td><b>SSC passing year</b></td>
                        <td>:</td>
                        <td>{{$user->ssc_passing_year ? $user->ssc_passing_year : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>SSC result</b></td>
                        <td>:</td>
                        <td>{{$user->ssc_result ? $user->ssc_result : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>HSC passing year</b></td>
                        <td>:</td>
                        <td>{{$user->hsc_passing_year ? $user->hsc_passing_year : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>HSC result</b></td>
                        <td>:</td>
                        <td>{{$user->hsc_result ? $user->hsc_result : ''}}</td>
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
