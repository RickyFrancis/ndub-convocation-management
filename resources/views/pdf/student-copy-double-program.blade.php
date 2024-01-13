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
            width: 135px;
            height: 144px;
        }
        #img2 {
            width: 120px;
            height: 120px;
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
    </style>
</head>

<body>
<!-- <button onclick="window.print()">Print</button> -->
    <div class="container">
        <div class="row mt-2">
            <div class="image-container">
                <img id="img2" style="float:left;" src="data:image/png;base64,<?= base64_encode(file_get_contents(public_path('contents/admin/assets/img/form-ndub.png'))) ?>" alt="">
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
        </div>
        <br><br>
        <div class="row" style="margin-top: 30px;">
            <div class="col-12 mt-2">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <td colspan="4">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Name Of the Student: {{$name ? $name : ''}}
                                </span>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

    <p style="font-size: 14px; font-weight: bold">Registered Program Details</p>
    <div class="row" style="margin-top: 30px;">
        <div class="col-12 mt-2">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <td colspan="4">
                            <span class="text-left" style="font-size: 11px; font-weight: bold">
                            ID Number: {{$student_id ? $student_id : ''}}
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <span class="text-left" style="font-size: 11px; font-weight: bold">
                            Program: {{$program_name ? $program_name : ''}}
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <span class="text-left" style="font-size: 11px; font-weight: bold">
                            Batch: {{$batch_name ? $batch_name : ''}}
                            </span>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 30px;">
        <div class="col-12 mt-2">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <td colspan="4">
                            <span class="text-left" style="font-size: 11px; font-weight: bold">
                            ID Number: {{$student_id1 ? $student_id1 : ''}}
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <span class="text-left" style="font-size: 11px; font-weight: bold">
                            Program: {{$program_name1 ? $program_name1 : ''}}
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <span class="text-left" style="font-size: 11px; font-weight: bold">
                            Batch: {{$batch_name1 ? $batch_name1 : ''}}
                            </span>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <span class="text-left" style="font-size: 11px; font-weight: bold">
        Please, keep this slip safely. Without this student slip ‘Original Certificate’ will not be delivered.
    </span>
<br><br>
<p style="font-size: 14px; font-weight: bold">Instructions:</p>
    <ol style="font-size: 11px; font-weight: normal; text-align:justify">
    <li>The student is required to <b>keep this ‘Student Copy’ safely until receiving the Official Certificate</b> so that it can be shown when necessary.</li>
    <li>Graduates must pay the registration fee, for One Program Tk. 8,000/- (Eight Thousand) and for Two Programs Tk. 10,000/- (Ten Thousand) in any branch of <b>Mercantile Bank Limited</b> or by <b>Rocket</b> as well as <b>Nexus Pay.</b></li>
    <li><b>‘Original Bank Slip’</b> or <b>‘Online Payment Receipt’</b> of Convocation Registration Fee, photocopies of the Provisional Certificate, Transcript and NID, along with the Convocation Registration Form, must be submitted to the office.</li>
    <li><b>Provisional Certificate</b> (not a photocopy) & <b>Student ID Card</b> must be <b>returned at the time of Registration.</b> Otherwise, the <b>Original Certificate will not be provided.</b></li>
    <li><b>Attendance</b> in the <b>Convocation Rehearsal</b> is <b>Compulsory.</b></li>
    <li>For <b>Physically Challenged Guest,</b> students must inform the NDUB authority for rendering special support.</b></li>
    <li>The student must show this <b>‘Student Copy’</b> at the time of receiving <b>Gown, Entry Passes, Food Coupons along with Security Rules and Regulations.</b></li>
    <li>To receive the official certificate the graduate must be present in person.</li>

    <div class="row">
            <div class="col-12 mt-2">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <td colspan="5">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                To be filled by the Office:
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: normal">
                                Gown Receiving Information
                                </span>
                            </td>
                            <td colspan="3">
                                <span class="text-center" style="font-size: 11px; font-weight: normal; text-align:center;">
                                
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-center" style="font-size: 11px; font-weight: bold; text-align:center;">
                                <br><br>
                                <p>
                                    __________________<br>
                                    Signature and Date
                                </p>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: normal;">
                                Gown Returning Information
                                </span>
                            </td>
                            <td colspan="3">
                                <span class="text-center" style="font-size: 11px; font-weight: normal; text-align:center;">
                                
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-center" style="font-size: 11px; font-weight: bold; text-align:center;">
                                <br><br>
                                <p>
                                    __________________<br>
                                    Signature and Date
                                </p>
                                </span>
                            </td>
                        </tr>
                    </table>
            </div>
        </div>
    </div>
    <!-- Add more sentences as needed -->
    </ol>
    

    <!-- Second page signature start -->
    <!-- <div class="signature-grid-container"> -->
        <br><br>
        <div class="signature-grid-item" style="float:right; text-align: center;">
            <p>
                ____________________________<br>
                Authorized Signature & Date
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
