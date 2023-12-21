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

        
            <form method="post" action="{{ route('submit_send_email') }}" enctype="multipart/form-data">    
            
            @csrf
            <div class="card">
            
                <div class="card-header">
                
                    <div class="row">
                        <div class="col-md-8">
                            <h4 class="card-title"><i class="fas fa-users"></i><b> Email</b></h4>
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
                <div class="form-group row mb-3 @error('details') is-invalid @enderror">
                    <label class="col-sm-3 col-form-label"><b>Write Email:<span class="text-danger">*</span></b></label>
                    
                    <div class="col-sm-6">
                    
                    
                    <textarea class="form-control" name="details" rows="3" cols="12" required>{{$allData->spot_details}}</textarea>
                    @error('details')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
                             
                </div>
                
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-md btn-primary">Send Email</button>
                
                </div>
            </div>

            </form>

        
        </div>
    </div>
</div>




@endsection

