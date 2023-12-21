@extends('layouts.admin.dashboard')
@section('contents')
@if(Session::has('error'))
<script>
Swal.fire({
    position: 'center',
    icon: 'error',
    text: '{{Session::get('error')}}',
    toast: 'false',
    showConfirmButton: true,
    timer: '5000',
})

</script>
@endif

<div class="container">
    <div class="row">
        <div class="col-md-12">

        
            <form method="post" action="{{ route('update_customer') }}" enctype="multipart/form-data">    
            
            @csrf
            <div class="card">
            
                <div class="card-header">
                
                    <div class="row">
                        <div class="col-md-8">
                            <h4 class="card-title"><i class="fas fa-users"></i><b> Edit Customer Information</b></h4>
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
                <input type="hidden" name="id" value="{{$allData->id}}">
                <input type="hidden" name="slug" value="{{$allData->user_slug}}">
                <div class="form-group row mb-3 @error('name') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Name:<span class="text-danger">*</span></b></label>
                    
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="{{$allData->name}}" required>
                    
                    @error('name')
                    
                    
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    
                    </div>
                </div>

                <div class="form-group row mb-3 @error('email') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Email:<span class="text-danger">*</span></b></label>
                    
                    <div class="col-sm-6">
                    
                    
                    <input type="email" class="form-control" name="email" value="{{$allData->email}}" required>
                    @error('email')
                    
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    
                    </div>
                </div>

                <div class="form-group row mb-3 @error('phone') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Phone:<span class="text-danger">*</span></b></label>
                    
                    <div class="col-sm-6">
                    
                    
                    <input type="phone" class="form-control" name="phone" value="{{$allData->phone}}" required>
                    @error('phone')
                    
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    
                    </div>
                </div>
                         
                <div class="form-group row mb-3 @error('photo') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Photo:</b></label>
                    <div class="col-sm-6">
                    <input type="file" onchange="readCustomerURL(this);" class="form-control" name="photo" value="{{$allData->spot_photo}}">
                    @error('photo')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <br>
                    <img id="customer_photo_review" src="#" alt=""/>
                    </div>
                </div>

                </div>
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-md btn-primary">Edit</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>



@endsection


