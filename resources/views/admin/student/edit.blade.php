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
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="{{ route('update_user_information') }}" enctype="multipart/form-data">    
            @csrf
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-8">
                            <h4 class="card-title"><h4><i class="fab fa-gg-circle"></i><b> Edit Information</b></h4></h4>
                        </div>
                        <div class="col-md-4 text-right">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-7">
                    </div>
                    <div class="col-md-2"></div>
                </div>

                <input type="hidden" name="id" value="{{$user->id}}">

                <div class="form-group row mb-3 @error('program') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Program:<span
                                class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                        <select name="program" id="program" class="form-control" required>
                            <option value="">Select your program</option>
                            @forelse ($programs as $program )
                            <option value="{{ $program->program_id }}" @if ( $user->program_id ==
                                $program->program_id) selected @endif >{{ $program->program_name }}
                            </option>
                            @empty
                            No program found
                            @endforelse
                        </select>
                        @error('program')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('batch') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Batch:<span
                                class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                        <select name="batch" id="batch" class="form-control" required>
                            <option value="">Select your batch</option>
                            @forelse ($batchs as $batch )
                            <option value="{{ $batch->batch_id }}" @if ( $user->batch_id ==
                                $batch->batch_id) selected @endif >{{ $batch->batch_name }}
                            </option>
                            @empty
                            No batch found
                            @endforelse
                        </select>
                        @error('batch')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('department') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Department:<span
                                class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                        <select name="department" id="department" class="form-control" required>
                            <option value="">Select your department</option>
                            @forelse ($departments as $department )
                            <option value="{{ $department->department_id }}" @if ( $user->department_id ==
                                $department->department_id) selected @endif >{{ $department->department_name }}
                            </option>
                            @empty
                            No department found
                            @endforelse
                        </select>
                        @error('department')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('major') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Major:<span class="text-danger"></span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="major" value="{{$user->major}}">
                    @error('major')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('minor') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Minor:<span class="text-danger"></span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="minor" value="{{$user->minor}}">
                    @error('minor')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('academic_year_from') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Academic year (from):<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="academic_year_from" value="{{$user->academic_year_from}}" required>
                    @error('academic_year_from')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('academic_year_to') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Academic year (to):<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="academic_year_to" value="{{$user->academic_year_to}}" required>
                    @error('academic_year_to')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('admission_year') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Admission year:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="admission_year" value="{{$user->admission_year}}" required>
                    @error('admission_year')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('admission_semester') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Admission semester:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="admission_semester" value="{{$user->admission_semester}}" required>
                    @error('admission_semester')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('credit_earned') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Credit earned:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="credit_earned" value="{{$user->credit_earned}}" required>
                    @error('credit_earned')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('cgpa') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>CGPA:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="cgpa" value="{{$user->cgpa}}" required>
                    @error('cgpa')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('passing_trimester') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Passing semester:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="passing_trimester" value="{{$user->passing_trimester}}" required>
                    @error('passing_trimester')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('father_name') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Father name:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="father_name" value="{{$user->father_name}}" required>
                    @error('father_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('mother_name') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Mother name:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="mother_name" value="{{$user->mother_name}}" required>
                    @error('mother_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('phone') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Phone:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="phone" value="{{$user->phone}}" required>
                    @error('phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('blood_group') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Blood group:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="blood_group" value="{{$user->blood_group}}" required>
                    @error('blood_group')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('nid') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>NID:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="nid" value="{{$user->nid}}" required>
                    @error('nid')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('birth_certificate_no') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Birth certificate number:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="birth_certificate_no" value="{{$user->birth_certificate_no}}" required>
                    @error('birth_certificate_no')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('dob') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Date of birth:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="date" class="form-control" name="dob" value="{{$user->dob}}" required>
                    @error('dob')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('present_address') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Present address:<span
                                class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                        <textarea type="text" class="form-control" name="present_address" required>{{ $user->present_address }}</textarea>
                        @error('present_address')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('permanent_address') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Permanent address:<span
                                class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                        <textarea type="text" class="form-control" name="permanent_address" required>{{ $user->permanent_address }}</textarea>
                        @error('permanent_address')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <hr>
                <div class="text-center text-bold"><h4>Employment Status (If any)</h4></div>
                <hr>
                <div class="form-group row mb-3 @error('organization_name') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b> Name of the Organization:<span class="text-danger"></span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="organization_name" value="{{$user->organization_name}}">
                    @error('organization_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('designation') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Designation:<span class="text-danger"></span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="designation" value="{{$user->designation}}">
                    @error('designation')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('office_address') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Office address:<span
                                class="text-danger"></span></b></label>
                    <div class="col-sm-6">
                        <textarea type="text" class="form-control" name="office_address">{{ $user->office_address }}</textarea>
                        @error('office_address')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('office_phone') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Office telephone:<span class="text-danger"></span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="office_phone" value="{{$user->office_phone}}">
                    @error('office_phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('office_mobile') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Office mobile:<span class="text-danger"></span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="office_mobile" value="{{$user->office_mobile}}">
                    @error('office_mobile')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
                <hr>
                <div class="text-center text-bold"><h4>Guest Details</h4></div>
                <hr>
                <div class="form-group row mb-3 @error('guest1_name') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Guest 1 name:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="guest1_name" value="{{$user->guest1_name}}" required>
                    @error('guest1_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('guest1_relationship') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Guest 1 relationship:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="guest1_relationship" value="{{$user->guest1_relationship}}" required>
                    @error('guest1_relationship')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('guest1_nid') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Guest 1 NID:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="guest1_nid" value="{{$user->guest1_nid}}" required>
                    @error('guest1_nid')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('guest1_present_address') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Guest 1 present address:<span
                                class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                        <textarea type="text" class="form-control" name="guest1_present_address" required>{{ $user->guest1_present_address }}</textarea>
                        @error('guest1_present_address')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('guest1_permanent_address') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Guest 1 permanent address:<span
                                class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                        <textarea type="text" class="form-control" name="guest1_permanent_address" required>{{ $user->guest1_permanent_address }}</textarea>
                        @error('guest1_permanent_address')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('guest2_name') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Guest 2 name:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="guest2_name" value="{{$user->guest2_name}}" required>
                    @error('guest2_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('guest2_relationship') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Guest 2 relationship:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="guest2_relationship" value="{{$user->guest2_relationship}}" required>
                    @error('guest2_relationship')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('guest2_nid') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Guest 2 NID:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="guest2_nid" value="{{$user->guest2_nid}}" required>
                    @error('guest2_nid')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('guest2_present_address') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Guest 2 present address:<span
                                class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                        <textarea type="text" class="form-control" name="guest2_present_address" required>{{ $user->guest2_present_address }}</textarea>
                        @error('guest2_present_address')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('guest2_permanent_address') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Guest 2 permanent address:<span
                                class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                        <textarea type="text" class="form-control" name="guest2_permanent_address" required>{{ $user->guest2_permanent_address }}</textarea>
                        @error('guest2_permanent_address')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <hr>
                <div class="text-center text-bold"><h4>Academic Background</h4></div>
                <hr>
                <div class="form-group row mb-3 @error('ssc_institute') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>SSC/Equivalent institute:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="ssc_institute" value="{{$user->ssc_institute}}" required>
                    @error('ssc_institute')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('ssc_board') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>SSC/Equivalent board:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="ssc_board" value="{{$user->ssc_board}}" required>
                    @error('ssc_board')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('ssc_result') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>SSC/Equivalent result:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="ssc_result" value="{{$user->ssc_result}}" required>
                    @error('ssc_result')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('ssc_group') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>SSC/Equivalent group:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="ssc_group" value="{{$user->ssc_group}}" required>
                    @error('ssc_group')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('ssc_passing_year') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>SSC/Equivalent year:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="ssc_passing_year" value="{{$user->ssc_passing_year}}" required>
                    @error('ssc_passing_year')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
                <!-- HSC -->
                <div class="form-group row mb-3 @error('hsc_institute') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>HSC/Equivalent institute:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="hsc_institute" value="{{$user->hsc_institute}}" required>
                    @error('hsc_institute')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('hsc_board') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>HSC/Equivalent board:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="hsc_board" value="{{$user->hsc_board}}" required>
                    @error('hsc_board')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('hsc_result') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>HSC/Equivalent result:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="hsc_result" value="{{$user->hsc_result}}" required>
                    @error('hsc_result')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('hsc_group') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>HSC/Equivalent group:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="hsc_group" value="{{$user->hsc_group}}" required>
                    @error('hsc_group')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('hsc_passing_year') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>HSC/Equivalent year:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="hsc_passing_year" value="{{$user->hsc_passing_year}}" required>
                    @error('hsc_passing_year')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
                <!-- Bachelor -->
                <div class="form-group row mb-3 @error('bachelor_institute') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Bachelor institute:<span class="text-danger"></span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="bachelor_institute" value="{{$user->bachelor_institute}}">
                    @error('bachelor_institute')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('bachelor_board') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Bachelor board:<span class="text-danger"></span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="bachelor_board" value="{{$user->bachelor_board}}">
                    @error('bachelor_board')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('bachelor_result') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Bachelor result:<span class="text-danger"></span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="bachelor_result" value="{{$user->bachelor_result}}">
                    @error('bachelor_result')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('bachelor_group') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Bachelor group:<span class="text-danger"></span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="bachelor_group" value="{{$user->bachelor_group}}">
                    @error('bachelor_group')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('bachelor_passing_year') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Bachelor year:<span class="text-danger"></span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="bachelor_passing_year" value="{{$user->bachelor_passing_year}}">
                    @error('bachelor_passing_year')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
                <!-- Masters -->
                <div class="form-group row mb-3 @error('masters_institute') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Masters institute:<span class="text-danger"></span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="masters_institute" value="{{$user->masters_institute}}">
                    @error('masters_institute')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('masters_board') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Masters board:<span class="text-danger"></span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="masters_board" value="{{$user->masters_board}}">
                    @error('masters_board')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('masters_result') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Masters result:<span class="text-danger"></span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="masters_result" value="{{$user->masters_result}}">
                    @error('masters_result')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('masters_group') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Masters group:<span class="text-danger"></span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="masters_group" value="{{$user->masters_group}}">
                    @error('masters_group')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('masters_passing_year') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Masters year:<span class="text-danger"></span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="masters_passing_year" value="{{$user->masters_passing_year}}">
                    @error('masters_passing_year')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                </div>
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-md btn-primary">Update</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>

@endsection