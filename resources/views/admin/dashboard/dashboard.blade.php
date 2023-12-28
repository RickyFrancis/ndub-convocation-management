@extends('layouts.admin.dashboard')
@section('dashboard_content')
    <br>
    <div class="container-fluid">
        <!-- <div class="row">
            <div class="col-md-12">
            <hr>
            <h3 class="text-center">Clearance Status</h3>
            <hr>
            </div>
        
            <div class="col-md-3">
                <div class="card" style="width: 16rem;">
                    <div class="card-body bg-primary text-white">
                        <h5 class="card-title"><b>Account clearance</b></h5>
                        <p class="card-text">
                            <b>
                                @php
                                    if ($user->account_clearance == '0') {
                                        echo 'Done';
                                    } elseif ($user->account_clearance == '1') {
                                        echo 'Pending';
                                    }
                                @endphp
                            </b>
                        </p>
                        <p class="pt-1">
                            <b>
                                @php
                                    if ($user->account_clearance == '1') {
                                        echo 'Due: ' . number_format($user->due_amount);
                                    }
                                @endphp
                            </b>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card" style="width: 16rem;">
                    <div class="card-body bg-success text-white">
                        <h5 class="card-title"><b>Library clearance</b></h5>
                        <p class="card-text">
                            <b>
                                @php
                                    if ($user->library_clearance == '0') {
                                        echo 'Done';
                                    } elseif ($user->library_clearance == '1') {
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
                <div class="card" style="width: 16rem;">
                    <div class="card-body bg-dark text-white">
                        <h5 class="card-title"><b>Administrative clearance</b></h5>
                        <p class="card-text">
                            <b>
                                @php
                                    if ($user->administrative_clearance == '0') {
                                        echo 'Done';
                                    } elseif ($user->administrative_clearance == '1') {
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
                <div class="card" style="width: 16rem;">
                    <div class="card-body bg-danger text-white">
                        <h5 class="card-title"><b>Department clearance</b></h5>
                        <p class="card-text">
                            <b>
                                @php
                                    if ($user->department_clearance == '0') {
                                        echo 'Done';
                                    } elseif ($user->department_clearance == '1') {
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

        </div> -->

        <div class="row">
            <div class="col-md-12">
            <hr>
            <h3 class="text-center">Information</h3>
            <hr>
            </div>

            <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-8">
                            <!-- <h4 class="card-title"><i class="fab fa-gg-circle"></i><b> View Information</b></h4> -->
                        </div>
                        <div class="col-md-4 text-right">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dt-responsive view_table">
                        <thead class="thead-dark">
                        </thead>
                        <tbody>
                        <tr>
                        <td><b>Name</b></td>
                        <td>:</td>
                        <td>{{$user->name ? $user->name : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Student ID</b></td>
                        <td>:</td>
                        <td>{{$user->student_id ? $user->student_id : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Program</b></td>
                        <td>:</td>
                        <td>{{$user->program ? $user->program : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Batch</b></td>
                        <td>:</td>
                        <td>{{$user->batch ? $user->batch : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Department</b></td>
                        <td>:</td>
                        <td>{{$user->department ? $user->department : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Major</b></td>
                        <td>:</td>
                        <td>{{$user->major ? $user->major : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>minor</b></td>
                        <td>:</td>
                        <td>{{$user->minor ? $user->minor : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Major</b></td>
                        <td>:</td>
                        <td>{{$user->major ? $user->major : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Admission year</b></td>
                        <td>:</td>
                        <td>{{$user->admission_year ? $user->admission_year : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Admission semester</b></td>
                        <td>:</td>
                        <td>{{$user->admission_semester ? $user->admission_semester : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Academic year</b></td>
                        <td>:</td>
                        <td>{{$user->academic_year ? $user->academic_year : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Result publish date</b></td>
                        <td>:</td>
                        <td>{{$user->result_publish_date ? $user->result_publish_date : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Passing trimester</b></td>
                        <td>:</td>
                        <td>{{$user->passing_trimester ? $user->passing_trimester : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Credit earned</b></td>
                        <td>:</td>
                        <td>{{$user->credit_earned ? $user->credit_earned : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>CGPA</b></td>
                        <td>:</td>
                        <td>{{$user->cgpa ? $user->cgpa : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>SSC passing year</b></td>
                        <td>:</td>
                        <td>{{$user->ssc_passing_year ? $user->ssc_passing_year : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>SSC result</b></td>
                        <td>:</td>
                        <td>{{$user->ssc_result ? $user->ssc_result : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>HSC passing year</b></td>
                        <td>:</td>
                        <td>{{$user->hsc_passing_year ? $user->hsc_passing_year : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>HSC result</b></td>
                        <td>:</td>
                        <td>{{$user->hsc_result ? $user->hsc_result : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Father name</b></td>
                        <td>:</td>
                        <td>{{$user->father_name ? $user->father_name : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Mother name</b></td>
                        <td>:</td>
                        <td>{{$user->mother_name ? $user->mother_name : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Phone</b></td>
                        <td>:</td>
                        <td>{{$user->phone ? $user->phone : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Email</b></td>
                        <td>:</td>
                        <td>{{$user->email ? $user->email : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Blood group</b></td>
                        <td>:</td>
                        <td>{{$user->blood_group ? $user->blood_group : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>NID</b></td>
                        <td>:</td>
                        <td>{{$user->nid ? $user->nid : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Birth certificate no</b></td>
                        <td>:</td>
                        <td>{{$user->birth_certificate_no ? $user->birth_certificate_no : ''}}</td>
                        </tr>
                        <tr>
                        <td><b>Date of birth</b></td>
                        <td>:</td>
                        <td>{{$user->dob ? $user->dob : ''}}</td>
                        </tr>
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
@endsection
