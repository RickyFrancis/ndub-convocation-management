<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" rel="stylesheet">
        <style>
        /* Basic styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            max-width: 1200px; /* Adjust as needed */
            margin: 0 auto;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -15px; /* Adjust padding as needed */
        }

        .col-3,
        .col-6 {
            padding: 0 15px; /* Adjust padding as needed */
        }

        img {
            width: 70px;
            height: 70px;
        }
        #img1 {
            width: 80px;
            height: 80px;
        }
        #img2 {
            width: 80px;
            height: 80px;
        }
        /* .image-container {
            display: flex;
            align-items: center;
        }
        
        .image-container img {
            width: 70px;
            height: 70px;
            margin-right: 10px;
        } 
        */
        h3 {
            font-size: 1.25rem;
            font-weight: bold;
            margin: 0;
        }

        h4 {
            font-size: 1.10rem;
            font-weight: normal; 
            margin: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px; /* Adjust margin as needed */
        }

        table td {
            border: 1px solid #000;
            padding: 5px;
        }

        /* First page signature css */
        .signature-grid-container {
            display: grid;
            grid-template-columns: auto auto auto auto;
            padding: 4px;
        }

        .signature-grid-item {
            padding: 4px;
            font-size: 11px;
            font-weight: bold;
        }

        /* Page break */
        .page-break {
            page-break-after: always;
        }

        li {
            padding-bottom: 10px; /* Adjust the value based on your preference */
        }

        .no-page-break {
            page-break-inside: avoid;
        }
    </style>
</head>

<body>
<!-- <button onclick="window.print()">Print</button> -->
<div class="no-page-break">
    <div class="container">
        <div class="row mt-2">
            <div class="image-container">
                <img id="img2" style="float:left;" src="data:image/png;base64,<?= base64_encode(file_get_contents(public_path('contents/admin/assets/img/convocation-logo.png'))) ?>" alt="">
                <img id="img1" style="float:right;" src="data:image/png;base64,<?=  base64_encode(file_get_contents(public_path('uploads/student/'.$student_photo))) ?>" alt="">
                    <div style="">
                        <p style="text-align: center;">
                            <span style="font-weight: bold; font-size: 22px;">NOTRE DAME UNIVERSITY BANGLADESH</span><br>
                            <span style="font-size: 16px;">2nd CONVOCATION REGISTRATION FORM</span><br>
                            <span style="font-size: 12px;">GPO BOX-7, 2/A, Arambagh, Motijheel, Dhaka 1000, Bangladesh</span><br>
                            <span style="font-size: 12px;">Phone: +880 2-41070719, +880 2-41070720</span><br>
                            <span style="font-size: 12px;">Email: info@ndub.edu.bd, Web: https://ndub.edu.bd/</span>
                        </p>
                    </div>
                </div>
            </div>
        </div style="margin-top: 30px;">

        
        <div class="row">
                <div class="table-responsive">
                <b style="font-size: 14px;">Student's Personal Information</b><br>
                    <table class="table table-bordered">
                        <tr>
                            <td colspan="4">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Name of the Student: {{ $name ? strtoupper($name) : ''}}
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Father's Name: {{$father_name ? $father_name : ''}}
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Mother's Name: {{$mother_name ? $mother_name : ''}}
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Phone No.: {{$phone ? $phone : ''}}
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Email Address: {{$email ? $email : ''}}
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Present Address: {{$present_address ? $present_address : ''}}
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Permanent Address: {{$permanent_address ? $permanent_address : ''}}
                                </span>
                            </td>
                        </tr>
                    </table>
            </div>
    </div>

    
    <div class="row">
        <div class="col-12 mt-2">
            <div class="table-responsive">
            <p style="font-size: 14px; font-weight: bold">Registered Program Details</p>
                <table class="table table-bordered">
                    <tr>
                        <td colspan="1">
                            <span class="text-left" style="font-size: 11px; font-weight: bold">
                            ID Number: {{$student_id ? $student_id : ''}}
                            </span>
                        </td>
                        <td colspan="2">
                            <span class="text-left" style="font-size: 11px; font-weight: bold">
                            Program: {{$program_name ? $program_name : ''}}
                            </span>
                        </td>
                        <td colspan="1">
                            <span class="text-left" style="font-size: 11px; font-weight: bold">
                            Batch: {{$batch_name ? $batch_name : ''}}
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <span class="text-left" style="font-size: 11px; font-weight: bold">
                            Major: {{$major ? $major : ''}}
                            </span>
                        </td>
                        <td colspan="2">
                            <span class="text-left" style="font-size: 11px; font-weight: bold">
                            Minor: {{$minor ? $minor : ''}}
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <span class="text-left" style="font-size: 11px; font-weight: bold">
                            Total Credits Earned: {{$credit_earned ? $credit_earned : ''}}
                            </span>
                        </td>
                        <td colspan="2">
                            <span class="text-left" style="font-size: 11px; font-weight: bold">
                            CGPA: {{$cgpa ? $cgpa : ''}}
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <span class="text-left" style="font-size: 11px; font-weight: bold">
                            Passing Trimester: {{$passing_trimester ? $passing_trimester : ''}}
                            </span>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 mt-2">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <td colspan="1">
                            <span class="text-left" style="font-size: 11px; font-weight: bold">
                            ID Number: {{$student_id1 ? $student_id1 : ''}}
                            </span>
                        </td>
                        <td colspan="2">
                            <span class="text-left" style="font-size: 11px; font-weight: bold">
                            Program: {{$program_name1 ? $program_name1 : ''}}
                            </span>
                        </td>
                        <td colspan="1">
                            <span class="text-left" style="font-size: 11px; font-weight: bold">
                            Batch: {{$batch_name1 ? $batch_name1 : ''}}
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <span class="text-left" style="font-size: 11px; font-weight: bold">
                            Major: {{$major1 ? $major1 : ''}}
                            </span>
                        </td>
                        <td colspan="2">
                            <span class="text-left" style="font-size: 11px; font-weight: bold">
                            Minor: {{$minor1 ? $minor1 : ''}}
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <span class="text-left" style="font-size: 11px; font-weight: bold">
                            Total Credits Earned: {{$credit_earned1 ? $credit_earned1 : ''}}
                            </span>
                        </td>
                        <td colspan="2">
                            <span class="text-left" style="font-size: 11px; font-weight: bold">
                            CGPA: {{$cgpa1 ? $cgpa1 : ''}}
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <span class="text-left" style="font-size: 11px; font-weight: bold">
                            Passing Trimester: {{$passing_trimester1 ? $passing_trimester1 : ''}}
                            </span>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    
    <div class="row">
            <div class="col-12 mt-2">
                <div class="table-responsive">
                <p style="font-size: 14px; font-weight: bold">Academic Background</p>
                    <table class="table table-bordered">
                        <tr>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Name of Degree/Certificate
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                School/College/University
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Board
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Division/GPA/CGPA
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Group
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Year
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                SSC/Equivalent
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                {{$ssc_institute ? $ssc_institute : ''}}
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                {{$ssc_board ? $ssc_board : ''}}
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                {{$ssc_result ? $ssc_result : ''}}
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                {{$ssc_group ? $ssc_group : ''}}
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                {{$ssc_passing_year ? $ssc_passing_year : ''}}
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                HSC/Equivalent
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                {{$hsc_institute ? $hsc_institute : ''}}
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                {{$hsc_board ? $hsc_board : ''}}
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                {{$hsc_result ? $hsc_result : ''}}
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                {{$hsc_group ? $hsc_group : ''}}
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                {{$hsc_passing_year ? $hsc_passing_year : ''}}
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Bachelor
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                {{$bachelor_institute ? $bachelor_institute : ''}}
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                {{$bachelor_board ? $bachelor_board : ''}}
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                {{$bachelor_result ? $bachelor_result : ''}}
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                {{$bachelor_group ? $bachelor_group : ''}}
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                {{$bachelor_passing_year ? $bachelor_passing_year : ''}}
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Master's
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                {{$masters_institute ? $masters_institute : ''}}
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                {{$masters_result ? $masters_result : ''}}
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                {{$masters_passing_year ? $masters_passing_year : ''}}
                                </span>
                            </td>
                        </tr>
                    </table>
            </div>
        </div>
    </div>

    <!-- First page signature start -->
    <!-- <div class="signature-grid-container"> -->
        
    </div>
    <!-- </div> -->
    <!-- <p style="text-align: center; font-size: 11px; margin-top: 80px;">1</p> -->
    <!-- Page break -->

    
    <!-- <div class="row">
            <div class="col-12 mt-2">
                <div class="table-responsive">
                <p style="font-size: 14px; font-weight: bold">Exam Controller’s Office:</p>
                    <table class="table table-bordered">
                        <tr>
                            <td colspan="2">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Total Credits Earned: {{$credit_earned ? $credit_earned : ''}}
                                </span>
                            </td>
                            <td colspan="2">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                CGPA: {{$cgpa ? $cgpa : ''}}
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Passing Trimester: {{$passing_trimester ? $passing_trimester : ''}}
                                </span>
                            </td>
                        </tr>
                    </table>
            </div>
        </div>
    </div> -->

    
    <div class="row">
            <div class="col-12 mt-2">
                <div class="table-responsive">
                <p style="font-size: 14px; font-weight: bold">Employment Status [If any, for Alumni Purpose]</p>
                    <table class="table table-bordered">
                        <tr>
                            <td colspan="2">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Name of the Organization: {{$organization_name ? $organization_name : ''}}
                                </span>
                            </td>
                            <td colspan="2">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Designation: {{$designation ? $designation : ''}}
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Office Address: {{$office_address ? $office_address : ''}}
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Telephone No.: {{$office_phone ? $office_phone : ''}}
                                </span>
                            </td>
                            <td colspan="2">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Mobile: {{$office_mobile ? $office_mobile : ''}}
                                </span>
                            </td>
                        </tr>
                    </table>
            </div>
        </div>
    </div>

    
    <div class="row">
        <div class="col-12 mt-2">
            <div class="table-responsive">
                <p style="font-size: 11px; font-weight: normal">
                <b style="font-size: 14px; font-weight: bold">Guest Details</b><br>
                Maximum two (2) persons are allowed. Once submitted, guest names will not be changed. Guests less than 15 years old are not allowed to be accompanied in the convocation ceremony. Depends on the availability of seats. First come first get basis.
                </p>
                    <table class="table table-bordered">
                        <tr>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Particulars
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Guest 1
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Guest 2
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Guest Photo
                                </span>
                            </td>
                            <td colspan="1">
                                @if($guest1_photo!='')
                                    <img id="img1" style="" src="data:image/png;base64,<?=  base64_encode(file_get_contents(public_path('uploads/guest/'.$guest1_photo))) ?>" alt="">
                                @else
                                @endif
                            </td>
                            <td colspan="1">
                                @if($guest2_photo!='')
                                    <img id="img1" style="" src="data:image/png;base64,<?=  base64_encode(file_get_contents(public_path('uploads/guest/'.$guest2_photo))) ?>" alt="">
                                @else
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Guest Name
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                {{$guest1_name ? $guest1_name : ''}}
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                {{$guest2_name ? $guest2_name : ''}}
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Relationship
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                {{$guest1_relationship ? $guest1_relationship : ''}}
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                {{$guest2_relationship ? $guest2_relationship : ''}}
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                National ID/Birth Certificate No.
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                {{$guest1_nid_or_birth_cert ? $guest1_nid_or_birth_cert : ''}}
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                {{$guest2_nid_or_birth_cert ? $guest2_nid_or_birth_cert : ''}}
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Present Address
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                {{$guest1_present_address ? $guest1_present_address : ''}}
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                {{$guest2_present_address ? $guest2_present_address : ''}}
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Permanent Address
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                {{$guest1_permanent_address ? $guest1_permanent_address : ''}}
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                {{$guest2_permanent_address ? $guest2_permanent_address : ''}}
                                </span>
                            </td>
                        </tr>
                    </table>
            </div>
        </div>
    </div>

    <div class="row">
            <div class="col-12 mt-2">
                <div class="table-responsive">

                <p style="font-size: 11px; font-weight: bold">Convocation Registration Fee for One Program Tk. 8,000/- (Eight Thousand) and for Two Programs Tk. 10,000/- (Ten Thousand) only.
            </p>
            <p style="font-size: 11px; font-weight: bold">Money Receipt No./Ref. No.: _________________________________________  Payment Date: ________________________________
            </p>
            <p style="font-size: 11px; font-weight: bold">I affirm the accuracy of the aforementioned information, attesting that it is indeed correct in its entirety.
            <br>
            <img id="signature" style="width:130px; height:50px;"  src="data:image/png;base64,<?=  base64_encode(file_get_contents(public_path('uploads/signature/'.$signature_photo))) ?>" alt="">
            <br>
            @php
                if($form_submission_date==''){
                    
                }elseif($form_submission_date!=''){
                    $date = strtotime($form_submission_date);
                    echo date('d/m/Y', $date);
                }
            @endphp <br>
            ____________________________<br>
            Student’s Signature & Date 
            </p>
                    <table class="table table-bordered">
                        <tr>
                            <td colspan="2">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Clearance from Respective Sections
                                </span>
                            </td>
                            <td colspan="2">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Authorized Signature with Date & Seal:
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Library (Room# 601)
                                </span>
                            </td>
                            <td colspan="2">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Accounts (Room# 208)
                                </span>
                            </td>
                            <td colspan="2">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Department (Office use only)
                                </span>
                            </td>
                            <td colspan="2">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Administrative (Office use only)
                                </span>
                            </td>
                            <td colspan="2">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                
                                </span>
                            </td>
                        </tr>
                    </table>
            </div>
        </div>
    </div>

    <p style="font-size: 11px; font-weight: normal">
    <b style="font-size: 14px; font-weight: bold">Attachments:</b><br>
    Please submit the following documents with the Registration Form:
    <ol style="font-size: 11px; font-weight: normal">
    <li>Bring <b>attested photocopies of all previous academic degrees,</b> and these documents are to be submitted.</li>
    <li>The <b>Provisional Certificate from NDUB received earlier is to be returned</b> at the time of receiving the Official Certificate.</li>
    <li>Four copies of <b>Passport-size color photographs in formal dress.</b> Write your name and ID on the backside of the photographs.</li>
    <li>Bring <b>‘Original Bank Slip’</b> or <b>‘Online Payment Receipt’</b> of Convocation Registration Fee.</li>
    <li>Bring one copy of a <b>Passport-size photo for each guest,</b> and <b>a photocopy of their NID Card or Birth Registration Certificate.</b></li>
    <!-- Add more sentences as needed -->
    </ol>
    </p>
        <div class="signature-grid-item" style="float:left; text-align: center;">
            <p>
                ____________________________<br>
                Registrar’s Signature & Date
            </p>
        </div>
        <div class="signature-grid-item" style="float:right; text-align: center;">
            <p>
                ____________________________<br>
                Deputy Controller of<br> 
                Examination’s Signature & Date
            </p>
        </div>
        <!-- <div class="signature-grid-item"></div>
        <div class="signature-grid-item"></div> -->
        
    <!-- </div> -->
    <!-- <p style="text-align: center; font-size: 11px; margin-top: 80px;">2</p> -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
