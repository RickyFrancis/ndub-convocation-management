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
            <form method="post" action="{{ route('admin_update_student_email') }}" enctype="multipart/form-data">    
            @csrf
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-8">
                            <h4 class="card-title"><h4><i class="fab fa-gg-circle"></i><b> Edit Email</b></h4></h4>
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

                <div class="form-group row mb-3">
                    <label class="col-sm-3 col-form-label"><b>Student ID:</b></label>
                    <div class="col-sm-6">
                    {{$user->student_id ? $user->student_id : ''}}
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label class="col-sm-3 col-form-label"><b>Name:</b></label>
                    <div class="col-sm-6">
                    {{$user->name ? $user->name : ''}}
                    </div>
                </div>
                
                <div class="form-group row mb-3 @error('email') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Email:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="email" value="{{$user->email}}" required>
                    @error('email')
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