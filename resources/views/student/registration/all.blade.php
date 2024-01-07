@extends('layouts.admin.dashboard')
@section('contents')
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


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    
                    <div class="row">
                        <div class="col-md-8">
                            
                            <h4 class="card-title"><i class="fa fa-users"></i><b> All Customer</b></h4>
                        </div>
                        <div class="col-md-4 text-right">
                        </div>
                    </div>

                </div>       
                <div class="card-body">
                    
                    <div class="table-responsive">
                    <table id="alltableinfo" class="table table-bordered table-striped table-hover dt-responsive">
                        
                        <thead class="bg-primary text-white">
                        <tr>
                            
                            <th>#</th>
                            
                            
                            <th>Name</th>
                            <th>Email</th>
                            
                            <th>Phone</th>
                            <th>Photo</th>
                            
                            <th>Manage</th>
                        </tr>

                        </thead>
                        <tbody>
                        
                        @php
                            $c=1;
                        
                        @endphp
                        
                        
                        @foreach($all as $data)
                        <tr>
                            <td>{{$c++}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->phone}}</td>
                            <td>
                                @php
                                    $photo = $data->photo;
                                @endphp
                                @if($photo!='')
                                    <img src="{{asset('uploads/customer/'.$data->photo)}}" alt="User photo" class="img-fluid" height="65px" width="65px">
                                @else
                                    <img src="{{asset('contents/admin/assets')}}/img/avatar.png" alt="User photo" class="img-fluid" height="65px" width="65px">
                                @endif
                    
                            </td>
                            <td>
                                
                                <a class="btn btn-info" href="{{ route('edit_customer', ['slug' => $data->user_slug]) }}" title="Edit">Edit</a>
                                @if($data->ban_status_on=='0')
                                <a class="btn btn-warning" href="{{ route('ban_customer', ['slug' => $data->user_slug]) }}" title="Ban">Ban</a>
                                @elseif($data->ban_status_on=='1')
                                <a class="btn btn-unban-color" href="{{ route('unban_customer', ['slug' => $data->user_slug]) }}" title="Unban">Unban</a>
                                
                                @endif
                                <a class="btn btn-email-color" href="{{ route('send_email_customer', ['slug' => $data->user_slug]) }}" title="Send Email">Send Email</a>
                                
                                <a class="btn btn-danger text-white" id="delete" data-toggle="modal" data-target="#deleteModal" data-id="{{$data->user_slug}}" title="Delete">Delete</a>
                
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
<div id="deleteModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    
    <form method="post" action="{{ route('delete_customer') }}">

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


</div>


@endsection






