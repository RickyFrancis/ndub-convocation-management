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
            <form method="post" action="{{ route('student_photo_update') }}" enctype="multipart/form-data">    
            @csrf
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-8">
                            <h4 class="card-title"><h4><i class="fab fa-gg-circle"></i><b> Upload Photo</b></h4></h4>
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

                <div class="text-danger text-bold mb-4">
                    *The file size should be a maximum of 2048 kilobytes (2MB).<br>
                    *Only JPG images are allowed.<br>
                    *Maximum dimensions: Height 1000px, Width 1000px.<br>
                    *Only for student signature photo: Height 80px, Width 300px.
                </div>
                
                <div class="form-group row mb-3 @error('student_photo') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Student Photo:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="file" onchange="readStudentURL(this);" class="form-control" name="student_photo" value="" required>
                    @error('student_photo')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <br>
                    <img id="student_photo_review" src="#" alt=""/>
                    </div>
                </div>

                <div class="form-group row mb-3 @error('student_nid_or_birth_cert_photo') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Student NID/Birth Certificate Photo:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="file" onchange="readStudentNidURL(this);" class="form-control" name="student_nid_or_birth_cert_photo" value="" required>
                    @error('student_nid_or_birth_cert_photo')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <br>
                    <img id="student_nid_or_birth_cert_photo_review" src="#" alt=""/>
                    </div>
                </div>

                <div class="form-group row mb-3 @error('student_signature_photo') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Student Signature Photo:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="file" onchange="readStudentSignatureURL(this);" class="form-control" name="student_signature_photo" value="" required>
                    @error('student_signature_photo')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <br>
                    <img id="student_signature_photo_review" src="#" alt=""/>
                    </div>
                </div>

                <div class="form-group row mb-3 @error('guest1_photo') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Guest 1 Photo:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="file" onchange="readGuest1URL(this);" class="form-control" name="guest1_photo" value="" required>
                    @error('guest1_photo')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <br>
                    <img id="guest1_photo_review" src="#" alt=""/>
                    </div>
                </div>

                <div class="form-group row mb-3 @error('guest1_nid_or_birth_cert_photo') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Guest 1 NID/Birth Certificate Photo:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="file" onchange="readGuest1nidURL(this);" class="form-control" name="guest1_nid_or_birth_cert_photo" value="" required>
                    @error('guest1_nid_or_birth_cert_photo')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <br>
                    <img id="guest1_nid_or_birth_cert_photo_review" src="#" alt=""/>
                    </div>
                </div>
                @if($user->guest2_name!='')
                <div class="form-group row mb-3 @error('guest2_photo') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Guest 2 Photo:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="file" onchange="readGuest2URL(this);" class="form-control" name="guest2_photo" value="" required>
                    @error('guest2_photo')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <br>
                    <img id="guest2_photo_review" src="#" alt=""/>
                    </div>
                </div>

                <div class="form-group row mb-3 @error('guest2_nid_or_birth_cert_photo') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Guest 2 NID/Birth Certificate Photo:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="file" onchange="readGuest2nidURL(this);" class="form-control" name="guest2_nid_or_birth_cert_photo" value="" required>
                    @error('guest2_nid_or_birth_cert_photo')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <br>
                    <img id="guest2_nid_or_birth_cert_photo_review" src="#" alt=""/>
                    </div>
                </div>
                @endif
                <div class="form-group row mb-3 @error('ssc_certificate_photo') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>SSC Certificate Photo:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="file" onchange="readSSCcertPhotoURL(this);" class="form-control" name="ssc_certificate_photo" value="" required>
                    @error('ssc_certificate_photo')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <br>
                    <img id="ssc_certificate_photo_review" src="#" alt=""/>
                    </div>
                </div>

                <div class="form-group row mb-3 @error('hsc_certificate_photo') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>HSC Certificate Photo:<span class="text-danger">*</span></b></label>
                    <div class="col-sm-6">
                    <input type="file" onchange="readHSCcertPhotoURL(this);" class="form-control" name="hsc_certificate_photo" value="" required>
                    @error('hsc_certificate_photo')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <br>
                    <img id="hsc_certificate_photo_review" src="#" alt=""/>
                    </div>
                </div>

                </div>
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-md btn-primary">Upload</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>

@endif
@endsection