var dt;
$(document).ready(function(){
    // Validate search form and search the result
    $("#search_form").validate({
        rules: {
          'name' : {
            required: true,
            maxlength: 20
          },
          'type_id' : {
            required: true,
          },
          'price' : {
            required: true,
          }
        },
        messages: {
            'name': {
                required: "Please enter item name",
                maxlength: "Maximum 20 characters are allowed",
            },
            'type_id': {
                required: "Please select type",
            },
            'type_id': {
                required: "Please enter maximum price",
            },
        },
        errorElement : 'div',
        errorPlacement: function(error, element) { 
            error.insertAfter(element);
        },
        submitHandler: function (form) {
            dt.ajax.reload(null, false);
            return false;
        }
    });
    // Items data table listing
	if ($('#item_dt').length > 0) {
        dt = $('#item_dt').DataTable({
            'sDom' : 'rt<"bottom"p>',
            "processing": true,
            responsive : true,
            "serverSide": true,
            "order": [[0, 'DESC']], //Initial no order.
            "ajax": {
                "url": base_url + "/items/processdt",
                "type": "POST",
                "data" : function ( d ) {
                    $('.search_form').serializeArray().map(function(x){d[x.name] = x.value;});
                }
            },
            columnDefs: [
                { orderable: false, targets: [0,-1] }
            ],
            "columns": [
                { "data": "name" },
                { "data": "type" },
                { "data": "price" },
            ]
        });

        // If you want to stop the searching on pagination click than enable this code
        /*dt.on( 'preDraw', function (e, settings) {
            if(!$("#search_form").valid()){
                return false;
            }
        });*/
        

        // If you want to search for result on keyup or change event than enable this code
        /*$('body').on('change keyup', '.filter_input', function(){
            dt.ajax.reload(null, false);
        });*/

        
        
    }
});
