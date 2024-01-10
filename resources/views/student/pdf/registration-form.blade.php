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
    </style>
</head>

<body>
<!-- <button onclick="window.print()">Print</button> -->
    <div class="container">
        <div class="row mt-2">
            <div class="image-container">
                <img style="float:left;" src="data:image/png;base64,<?= base64_encode(file_get_contents(public_path('contents/admin/assets/img/form-ndub.png'))) ?>" alt="">
                <img style="float:right;" src="data:image/png;base64,<?= base64_encode(file_get_contents(public_path('contents/admin/assets/img/form-ndub.png'))) ?>" alt="">
                <div style="margin-left: 80px;">
                    <h3>NOTRE DAME UNIVERSITY BANGLADESH</h3>
                    <div style="margin-left: 20px;">
                    <h4>2nd CONVOCATION REGISTRATION FORM</h4>
                    </div>
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
                                Name Of the Student: {{$name ? $name : ''}}
                                </span>
                                <br>
                                <span class="text-left" style="font-size: 8px; font-weight: bold">
                                [Write in block letters matching
                                with SSC & HSC Certificates]
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                ID Number: {{$student_id ? $student_id : ''}}
                                </span>
                            </td>
                            <td colspan="2">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Program: {{$program ? $program : ''}}
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Batch:
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Major:
                                </span>
                            </td>
                            <td colspan="2">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Minor:
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Father's Name:
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Mother's Name:
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Phone No.: 
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Email Address: 
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Present Address: 
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Permanent Address: 
                                </span>
                            </td>
                        </tr>
                    </table>
            </div>
        </div>
    </div>
    <p style="font-size: 14px; font-weight: bold">Employment Status [If any, for Alumni Purpose]</p>
    <div class="row">
            <div class="col-12 mt-2">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <td colspan="2">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Name of the Organization:
                                </span>
                            </td>
                            <td colspan="2">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Designation:
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Office Address:
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Telephone No.:
                                </span>
                            </td>
                            <td colspan="2">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Mobile:
                                </span>
                            </td>
                        </tr>
                    </table>
            </div>
        </div>
    </div>

    <p style="font-size: 14px; font-weight: bold">Academic Background</p>
    <div class="row">
            <div class="col-12 mt-2">
                <div class="table-responsive">
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
                                
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                
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
                                
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                
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
                                
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                
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
                                
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Other's
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                
                                </span>
                            </td>
                        </tr>
                    </table>
            </div>
        </div>
    </div>

    <!-- First page signature start -->
    <!-- <div class="signature-grid-container"> -->
        <div class="signature-grid-item" style="float:left; text-align: center;">
            <p>
                ____________________________<br>
                Student’s Signature
            </p>
        </div>
        <!-- <div class="signature-grid-item"></div>
        <div class="signature-grid-item"></div> -->
        <div class="signature-grid-item" style="float:right; text-align: center;">
            <p>
                _____________<br>
                Date
            </p>
        </div>
    <!-- </div> -->
    <p style="text-align: center; font-size: 11px; margin-top: 80px;">1</p>
    <!-- Page break -->
    <div class="page-break"></div>

    <p style="font-size: 14px; font-weight: bold">Exam Controller’s Office:</p>
    <div class="row">
            <div class="col-12 mt-2">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <td colspan="2">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Total Credits Earned:
                                </span>
                            </td>
                            <td colspan="2">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                CGPA:
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Result Publication Date:
                                </span>
                            </td>
                            <td colspan="2">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                Passing Trimester:
                                </span>
                            </td>
                        </tr>
                    </table>
            </div>
        </div>
    </div>

    <p style="font-size: 14px; font-weight: bold">Guest Details</p>
    <p style="font-size: 11px; font-weight: normal">Maximum two (2) persons are allowed. Once submitted, guest names will not be changed. Guests less than 15 years old are not allowed to be accompanied in the convocation ceremony. Depends on the availability of seats. First come first get basis.
    </p>
    <div class="row">
            <div class="col-12 mt-2">
                <div class="table-responsive">
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
                                Guest Name
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                
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
                                
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                
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
                                
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                
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
                                
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                
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
                                
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="text-left" style="font-size: 11px; font-weight: bold">
                                
                                </span>
                            </td>
                        </tr>
                    </table>
            </div>
        </div>
    </div>
    <p style="font-size: 11px; font-weight: bold">Convocation Registration Fee for One Program Tk. 8,000/- (Eight Thousand) and for Two Programs Tk. 10,000/- (Ten Thousand) only.
    </p>
    <p style="font-size: 11px; font-weight: bold">Money Receipt No./Ref. No.: _________________________________________  Payment Date: ________________________________
    </p>
    <div class="row">
            <div class="col-12 mt-2">
                <div class="table-responsive">
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
                                Department
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
                                Administrative
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

    <p style="font-size: 14px; font-weight: bold">Attachments:</p>
    <p style="font-size: 11px; font-weight: normal">
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
    <!-- Second page signature start -->
    <!-- <div class="signature-grid-container"> -->
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
    <p style="text-align: center; font-size: 11px; margin-top: 80px;">2</p>

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
