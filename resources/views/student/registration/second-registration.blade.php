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
@if($user->registration_complete_status==0)
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="{{ route('student_second_registration_submit') }}" enctype="multipart/form-data">    
            @csrf
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-8">
                            <h4 class="card-title"><h4><i class="fab fa-gg-circle"></i>
                                <b>
                                @if($user->second_program_grad_list_id=='')
                                    @if($user->bachelor_program_status==1)
                                        Register for Master's Program
                                    @elseif($user->master_program_status==1)
                                        Register for Bachelor's Program
                                    @endif
                                @endif
                                </b>
                            </h4></h4>
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

                <input type="hidden" name="grad_list_id" value="{{$gradId}}">

                <div class="form-group row mb-3 @error('student_id') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Student ID:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="student_id" value="{{old('student_id')}}" required>
                    @error('student_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('program') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Program:<span
                                class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                        <select name="program" id="program" class="form-control" required>
                            <option value="">Select your program</option>
                            @forelse ($programs as $program )
                            @if($user->bachelor_program_status==1)
                                @if($program->is_program_from_master==1)
                            <option value="{{ $program->program_id }}">{{ $program->program_name }}
                            </option>
                                @endif
                            @endif
                            @if($user->master_program_status==1)
                                @if($program->is_program_from_master==0)
                            <option value="{{ $program->program_id }}">{{ $program->program_name }}
                            </option>
                                @endif
                            @endif
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
                            <option value="{{ $batch->batch_id }}">{{ $batch->batch_name }}
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
                            <option value="{{ $department->department_id }}">{{ $department->department_name }}
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
                    <label class="col-sm-3 col-form-label"><b>Major: (If Applicable)<span class="text-danger"></span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="major" value="{{old('major')}}" placeholder="According to the transcript">
                    @error('major')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('minor') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Minor: (If Applicable)<span class="text-danger"></span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="minor" value="{{old('minor')}}" placeholder="According to the transcript">
                    @error('minor')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('admission_year') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Admission Year:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="admission_year" value="{{old('admission_year')}}" placeholder="According to the transcript" required>
                    @error('admission_year')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('admission_semester') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Admission Trimester/Semester:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="admission_semester" value="{{old('admission_semester')}}" placeholder="According to the transcript" required>
                    @error('admission_semester')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('passing_year') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Passing Year<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="passing_year" value="{{old('passing_year')}}" placeholder="According to the transcript" required>
                    @error('passing_year')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('passing_trimester') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Passing Trimester/Semester:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="passing_trimester" value="{{old('passing_trimester')}}" placeholder="According to the transcript" required>
                    @error('passing_trimester')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('credit_earned') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Total Credits Earned:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="credit_earned" value="{{old('credit_earned')}}" placeholder="According to the transcript" required>
                    @error('credit_earned')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('cgpa') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>CGPA:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="cgpa" value="{{old('cgpa')}}" placeholder="According to the transcript" required>
                    @error('cgpa')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-md btn-primary">Register</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>

@endif
@endsection