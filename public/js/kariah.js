
var table;
$(document).ready(function() {

    table = $('#datatables').DataTable({
    	select: 'single', 
        order: [[ 0, 'desc' ]],
        columnDefs: [
        	{ name: 'id', targets: 0, width: "5%"},
		    { name: 'name', targets: 1, width: "15%"},
		    { name: 'ic', targets: 2, width: "10%"},
        	{ name: 'telno', targets: 3, width: "10%"},
        	{ name: 'alamat', targets: 4, width: "30%"},
        	{ name: 'action', targets: 5, width: "10%", "data": null,
		      render: function(data, type, row, meta) {
		        return `
		        	<div class="btn-group">
	        			<button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modal" onclick="edit_form('`+row[0]+`','`+meta.row+`')">Edit</button>
	        			<button type="button" class="btn btn-danger btn-sm" onclick="delete_form('`+row[0]+`')">Delete</button>
	        		</div>
		        `;
		      }	
        	},
		]

    }).on('select', function ( e, dt, type, indexes ) {
	    // if ( type === 'row' ) {
	    //     var data = table.row( indexes ).data();
	    //     $("#form_delete input[name='id']").val(data[0]);
	    // }
	});

    $("#datatables_length").append(`
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal" onclick="add_form()">Add</button>
    `);

});

function add_form(){
	emptyFormdata('#formdata');
    $("#formdata input[name='oper']").val('add');
    $("#image_file").attr('required',true);
}

function edit_form(id,index){
	emptyFormdata('#formdata');
	populateFormdata('#formdata',table.rows(index).data().toArray()[0]);
    $("#formdata input[name='id']").val(id);
    $("#formdata input[name='oper']").val('edit');
    // $("#image_file").prop('required',false);
}

function delete_form(id){
	var r = confirm("Are you sure you want to delete this record");
    if (r == true){ 
    	$("#formdata input[name='id']").val(id);
    	$("#formdata input[name='oper']").val('del');
    	$("#formdata").submit();
    }
}

function populateFormdata(form,rowdata){
	$('#name').val(rowdata[1]);
	$('#ic').val(rowdata[2]);
	$('#telno').val(rowdata[3]);
	$('#alamat').val(rowdata[4]);
}