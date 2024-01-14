// Data Table
$(document).ready( function () {
    $('#alltableinfo').DataTable({
        ordering:  false,
        searching: true,
        paging: true,
        select: true,
        //pageLength: 10
    });
} );

// Report data table

$('#reporttableinfo').DataTable({
    ordering:  true,
    searching: true,
    paging: true,
    select: true,
    //pageLength: 10
});

//Report search form submit code start
$(document).ready(function(){
    $('#search').click(function() {
      var from = $('#datepickerFrom').val();
      var to = $('#datepickerTo').val();
      var base_url = window.location.origin;
      var url = base_url+'/admin/report/search/'+from+'/'+to;
      location.href = url;
    });
  });

$.ajaxSetup({
    headers:{
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

//Student data table


$('#studenttableinfo').DataTable({
        ordering:  false,
        searching: true,
        paging: true,
        select: true,
        //pageLength: 10
    });


// Student photo preview

function readStudentURL(input) {

    if (input.files && input.files[0]) {
        
        var reader = new FileReader();
        reader.onload = function (e) {

            $('#student_photo_review')
                .attr('src', e.target.result)
                .width(80)
                .height(80);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

// Student NID photo preview

function readStudentNidURL(input) {

    if (input.files && input.files[0]) {
        
        var reader = new FileReader();
        reader.onload = function (e) {

            $('#student_nid_or_birth_cert_photo_review')
                .attr('src', e.target.result)
                .width(120)
                .height(80);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

// Student Signature photo preview

function readStudentSignatureURL(input) {

    if (input.files && input.files[0]) {
        
        var reader = new FileReader();
        reader.onload = function (e) {

            $('#student_signature_photo_review')
                .attr('src', e.target.result)
                .width(300)
                .height(80);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

// Guest 1 photo preview

function readGuest1URL(input) {

    if (input.files && input.files[0]) {
        
        var reader = new FileReader();
        reader.onload = function (e) {

            $('#guest1_photo_review')
                .attr('src', e.target.result)
                .width(80)
                .height(80);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

// Guest 1 NID photo preview

function readGuest1nidURL(input) {

    if (input.files && input.files[0]) {
        
        var reader = new FileReader();
        reader.onload = function (e) {

            $('#guest1_nid_or_birth_cert_photo_review')
                .attr('src', e.target.result)
                .width(120)
                .height(80);
        };

        reader.readAsDataURL(input.files[0]);
    }
}


// Guest 2 photo preview

function readGuest2URL(input) {

    if (input.files && input.files[0]) {
        
        var reader = new FileReader();
        reader.onload = function (e) {

            $('#guest2_photo_review')
                .attr('src', e.target.result)
                .width(80)
                .height(80);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

// Guest 2 NID photo preview

function readGuest2nidURL(input) {

    if (input.files && input.files[0]) {
        
        var reader = new FileReader();
        reader.onload = function (e) {

            $('#guest2_nid_or_birth_cert_photo_review')
                .attr('src', e.target.result)
                .width(120)
                .height(80);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

// SSC certificate photo preview

function readSSCcertPhotoURL(input) {

    if (input.files && input.files[0]) {
        
        var reader = new FileReader();
        reader.onload = function (e) {

            $('#ssc_certificate_photo_review')
                .attr('src', e.target.result)
                .width(120)
                .height(80);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

// HSC certificate photo preview

function readHSCcertPhotoURL(input) {

    if (input.files && input.files[0]) {
        
        var reader = new FileReader();
        reader.onload = function (e) {

            $('#hsc_certificate_photo_review')
                .attr('src', e.target.result)
                .width(120)
                .height(80);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

// Delete modal

$(document).on("click", "#delete", function () {
    var deleteID = $(this).data('id');
    $(".modal_card #modal_id").val( deleteID );
});
