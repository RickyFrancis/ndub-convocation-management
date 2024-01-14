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
@php
    use Illuminate\Support\Facades\Crypt;
@endphp
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    
                    <div class="row">
                        <div class="col-md-8">
                            
                            <h4 class="card-title"><i class="fa fa-users"></i><b> All Support Ticket</b></h4>
                        </div>
                        <div class="col-md-4 text-right">
                        </div>
                    </div>

                </div>       
                <div class="card-body">
                    
                    <div class="table-responsive">
                    <table id="studenttableinfo" class="table table-bordered table-striped table-hover dt-responsive">
                        <thead class="bg-dark text-white">
                        <tr>
                            <th>#</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Details</th>
                            <th>Status</th>
                            <th>Manage</th>
                        </tr>

                        </thead>
                        <tbody>
                        @php
                            $c=1;
                        @endphp
                        
                        @foreach($all as $user)
                        <tr>
                            <td>{{$c++}}</td>
                            <td>{{$user->student_id ? $user->student_id : ''}}</td>
                            <td>{{$user->name ? $user->name : ''}}</td>
                            <td>{{$user->email ? $user->email : ''}}</td>
                            <td>{{$user->phone ? $user->phone : ''}}</td>
                            <td>{{$user->details ? $user->details : ''}}</td>
                            <td>
                                @php
                                    if($user->registration_complete_status==0){
                                        
                                    }if($user->registration_complete_status==1){
                                @endphp
                                        <span class="btn btn-success">
                                        @php
                                            echo 'Registered';
                                        @endphp
                                        <span>
                                @php
                                    }
                                @endphp
                            </td>
                            <td>
                                @php
                                    $graduate_list_id =  Crypt::encryptString($user->id);
                                @endphp
                                <a class="btn btn-info" href="{{ route('admin_edit_student_information', ['id' => $graduate_list_id]) }}" title="Edit">Edit</a>
                                <!-- <a class="btn btn-danger text-white" id="delete" data-toggle="modal" data-target="#deleteModal" data-id="{{$user->user_slug}}" title="Delete">Delete</a> -->
                                @if($user->registration_complete_status==1)
                                <!-- Show PDF download option -->
                                    <a class="btn btn-danger btn-sm text-white mt-2" href="{{ route('adminRegistrationFormPDF', ['id' => $graduate_list_id]) }}" title="Download Form">Download Registration Form</a>
                                    <a class="btn btn-danger btn-sm text-white mt-2" href="{{ route('adminStudentCopyPDF', ['id' => $graduate_list_id]) }}" title="Download Student Copy">Download Student Copy</a>
                                @endif
                            </td>
                        </tr>
                        @endforeach
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

<!-- delete modal start -->
<!-- <div id="deleteModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    
    <form method="post" action="{{ url('delete_customer') }}">

    @csrf


    <div class="modal-content">
        <div class="modal-header modal_header">
            <h5 class="modal-title mt-0" id="myModalLabel"></h5>
        </div>
        <div class="modal-body modal_card">
          Are you want to delete this customer?
          
          <input type="hidden" id="modal_id" name="modal_id">
        
        </div>
        
        
        <div class="modal-footer">


            <button type="submit" class="btn btn-md btn-danger text-white waves-effect waves-light">Yes</button>
            <button type="button" class="btn btn-md btn-info waves-effect" data-dismiss="modal">No</button>
        
        </div>
    
    </div>
    
    </form>
  
</div>

</div> -->

<script>
    $('#studenttableinfo').DataTable({
        ordering:  false,
        searching: true,
        paging: true,
        select: true,
        //pageLength: 10
    });
</script>

@endsection
