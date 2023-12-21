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

// Customer photo preview

function readCustomerURL(input) {

    if (input.files && input.files[0]) {
        
        var reader = new FileReader();
        reader.onload = function (e) {

            $('#customer_photo_review')
                .attr('src', e.target.result)
                .width(80)
                .height(80);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

// Supplier photo preview

function readSupplierURL(input) {

    if (input.files && input.files[0]) {
        
        var reader = new FileReader();
        reader.onload = function (e) {

            $('#supplier_photo_review')
                .attr('src', e.target.result)
                .width(80)
                .height(80);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

// Product photo preview

function readProductURL(input) {

    if (input.files && input.files[0]) {
        
        var reader = new FileReader();
        reader.onload = function (e) {

            $('#product_photo_review')
                .attr('src', e.target.result)
                .width(80)
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
