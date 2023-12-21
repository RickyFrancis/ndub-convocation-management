@extends('layouts.admin.dashboard')
@section('contents')

<div class="container">
    <div class="row">
        <div class="col-md-3">

        <div class="card" style="width: 18rem;">
        <div class="card-body bg-primary text-white">
            <h5 class="card-title"><b>Account clearance</b></h5>
            <p class="card-text">
                <b>
                @php
                    if($user->account_clearance=='0'){
                        echo 'Done';
                    }elseif($user->account_clearance=='1'){
                        echo 'Pending';
                    }
                @endphp
                </b>
            </p>
            <p class="pt-1">
                <b>
                @php
                    if($user->account_clearance=='1'){
                        echo 'Due: '.$user->due_amount;
                    }
                @endphp
                </b>
            </p>
        </div>
        </div>
        </div>

        <div class="col-md-3">
        <div class="card" style="width: 18rem;">
        <div class="card-body bg-success text-white">
            <h5 class="card-title"><b>Library clearance</b></h5>
            <p class="card-text">
                <b>
                @php
                    if($user->library_clearance=='0'){
                        echo 'Done';
                    }elseif($user->library_clearance=='1'){
                        echo 'Pending<br>';
                    }
                @endphp
                </b>
            </p>
            <p class="pt-1">
                <b>
                ---
                </b>
            </p>
        </div>
        </div>
        </div>

        <div class="col-md-3">
        <div class="card" style="width: 18rem;">
        <div class="card-body bg-dark text-white">
            <h5 class="card-title"><b>Administrative clearance</b></h5>
            <p class="card-text">
                <b>
                @php
                    if($user->administrative_clearance=='0'){
                        echo 'Done';
                    }elseif($user->administrative_clearance=='1'){
                        echo 'Pending<br>';
                    }
                @endphp
                </b>
            </p>
            <p class="pt-1">
                <b>---
                </b>
            </p>
        </div>
        </div>
        </div>

        <div class="col-md-3">
        <div class="card" style="width: 18rem;">
        <div class="card-body bg-danger text-white">
            <h5 class="card-title"><b>Department clearance</b></h5>
            <p class="card-text">
                <b>
                @php
                    if($user->department_clearance=='0'){
                        echo 'Done';
                    }elseif($user->department_clearance=='1'){
                        echo 'Pending<br>';
                    }
                @endphp
                </b>
            </p>
            <p class="pt-1">
                <b>
                ---
                </b>
            </p>
        </div>
        </div>
        </div>

</div>
</div>
@endsection






