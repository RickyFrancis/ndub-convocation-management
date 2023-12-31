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
            <form method="post" action="{{ route('user_second_registration_submit') }}" enctype="multipart/form-data">    
            @csrf
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-8">
                            <h4 class="card-title"><h4><i class="fab fa-gg-circle"></i><b> Second program registration</b></h4></h4>
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
                            <option value="{{ $program->program_id }}">{{ $program->program_name }}
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
                    <label class="col-sm-3 col-form-label"><b>Major:<span class="text-danger"></span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="major" value="{{old('major')}}">
                    @error('major')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('minor') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Minor:<span class="text-danger"></span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="minor" value="{{old('minor')}}">
                    @error('minor')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('academic_year_from') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Academic year (from):<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="academic_year_from" value="{{old('academic_year_from')}}" required>
                    @error('academic_year_from')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('academic_year_to') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Academic year (to):<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="academic_year_to" value="{{old('academic_year_to')}}" required>
                    @error('academic_year_to')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('admission_year') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Admission year:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="admission_year" value="{{old('admission_year')}}" required>
                    @error('admission_year')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('admission_semester') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Admission semester:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="admission_semester" value="{{old('admission_semester')}}" required>
                    @error('admission_semester')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('credit_earned') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Credit earned:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="credit_earned" value="{{old('credit_earned')}}" required>
                    @error('credit_earned')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('cgpa') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>CGPA:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="cgpa" value="{{old('cgpa')}}" required>
                    @error('cgpa')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>

                <div class="form-group row mb-3 @error('passing_trimester') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Passing semester:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="passing_trimester" value="{{old('passing_trimester')}}" required>
                    @error('passing_trimester')
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

@endsection