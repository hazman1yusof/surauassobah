$('.custom-file-input').on('change', function() { 
   let fileName = $(this).val().split('\\').pop(); 
   $(this).next('.custom-file-label').addClass("selected").html(fileName); 
});

function emptyFormdata(form){
	$(form).trigger('reset');
	$('.custom-file-label').html('Choose File'); 
}
