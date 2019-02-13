
var table;
$(document).ready(function() {

    table = $('#datatables').DataTable({
    	select: 'single', 
        order: [[ 0, 'desc' ]],
        columnDefs: [
        	{ name: 'id', targets: 0},
        	{ name: 'month', targets: 1},
          { name: 'penceramah', targets: 2},
          { name: 'tajuk', targets: 3},
          { name: 'ms', targets: 4},
          { name: 'waktu', targets: 5},
          { name: 'tarikh', targets: 6},
          { name: 'linkyoutube', targets: 7},
		      { name: 'linkfacebook', targets: 8 },
        	{ name: 'action', targets: 9, "data": null,
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
}

function edit_form(id,index){
	emptyFormdata('#formdata');
	populateFormdata('#formdata',table.rows(index).data().toArray()[0]);
    $("#formdata input[name='id']").val(id);
    $("#formdata input[name='oper']").val('edit');
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
	$('#socmed_name').val(rowdata[1]);
	$('#socmed_desc').val(decodeEntities(rowdata[2]));
}

var decodeEntities = (function() {
  // this prevents any overhead from creating the object each time
  var element = document.createElement('div');

  function decodeHTMLEntities (str) {
    if(str && typeof str === 'string') {
      // strip script/html tags
      str = str.replace(/<script[^>]*>([\S\s]*?)<\/script>/gmi, '');
      str = str.replace(/<\/?\w(?:[^"'>]|"[^"]*"|'[^']*')*>/gmi, '');
      element.innerHTML = str;
      str = element.textContent;
      element.textContent = '';
    }

    return str;
  }

  return decodeHTMLEntities;
})();