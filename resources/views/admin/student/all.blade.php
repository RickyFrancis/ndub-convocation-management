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
                            
                            <h4 class="card-title"><i class="fa fa-users"></i><b> All Student</b></h4>
                        </div>
                        <div class="col-md-4 text-right">
                        </div>
                    </div>

                </div>       
                <div class="card-body">
                    
                    <div class="table-responsive">
                    <table id="studenttableinfo" class="table table-bordered table-striped">
                        <thead class="bg-dark text-white">
                        <tr>
                            <th>#</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Photo</th>
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
                            <td>
                                @php
                                    $photo = $user->student_photo;
                                @endphp
                                @if($photo!='')
                                    <img src="{{asset('uploads/student/'.$user->student_photo)}}" alt="User photo" class="img-fluid" height="65px" width="65px">
                                @else
                                    <!-- <img src="{{asset('contents/admin/assets')}}/img/avatar.png" alt="User photo" class="img-fluid" height="65px" width="65px"> -->
                                @endif
                            </td>
                            <td>
                                @php
                                    if($user->registration_complete_status==0){
                                        
                                    }if($user->registration_complete_status==1){
                                        if($user->child_account_status=='1' && $user->parent_account_status=='0'){
                                @endphp
                                        <a class="btn btn-sm btn-primary text-white font-weight-bold" title="This Student Completed Registration">
                                        @php
                                            echo 'Registered as 2nd';
                                        @endphp
                                        <a>
                                @php
                                        }elseif($user->parent_account_status=='1' && $user->child_account_status=='0'){
                                @endphp
                                        <a class="btn btn-sm btn-success text-white font-weight-bold" title="This Student Completed Registration">
                                        @php
                                            echo 'Registered';
                                        @endphp
                                        <a>
                                @php
                                        }
                                    }
                                @endphp
                            </td>
                            <td>
                                @php
                                    $graduate_list_id =  Crypt::encryptString($user->id);
                                @endphp
                                {{--  --}}
                                @php
                                if($user->child_account_status=='1'){
                                        $graduate_second_list_id =  Crypt::encryptString($user->second_program_grad_list_id);
                                @endphp
                                <a class="btn btn-warning" href="{{ route('admin_view_student_information', ['id' => $graduate_second_list_id]) }}" title="View Student Information">View</a>
                                @php
                                    }elseif($user->parent_account_status=='0' || $user->parent_account_status=='1'){
                                @endphp
                                <a class="btn btn-warning" href="{{ route('admin_view_student_information', ['id' => $graduate_list_id]) }}" title="View Student Information">View</a>
                                @php
                                    }
                                @endphp
                                @if($user->registration_complete_status==1)
                                <a class="btn btn-info mt-2" href="{{ route('admin_edit_student_information', ['id' => $graduate_list_id]) }}" title="Edit Student Information">Edit</a>
                                <!-- <a class="btn btn-danger text-white" id="delete" data-toggle="modal" data-target="#deleteModal" data-id="{{$user->user_slug}}" title="Delete">Delete</a> -->
                                <!-- Show PDF download option -->
                                    <a class="btn btn-danger btn-sm text-white mt-2" href="{{ route('adminRegistrationFormPDF', ['id' => $graduate_list_id]) }}" title="Download Form">Registration Form</a>
                                    <a class="btn btn-danger btn-sm text-white mt-2" href="{{ route('adminStudentCopyPDF', ['id' => $graduate_list_id]) }}" title="Download Student Copy">Student Copy</a>
                                @endif
                                @if($user->registration_complete_status==0)
                                <a class="btn btn-info mt-2" href="{{ route('admin_edit_student_email', ['id' => $graduate_list_id]) }}" title="Edit Student Email">Edit Email</a>
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
