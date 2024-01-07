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
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <hr>
                <h3 class="text-center">You are already registered for this program as a second program for convocation.</h3>
                <hr>
            </div>
        </div>
    </div>
@endsection