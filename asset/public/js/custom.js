jQuery( document ).ready( function( $ ){

	var modalContainer = $( '#modal_form' );
	var modalContent = modalContainer.find('.modal-body');
	
	function get_ids( ids ){
		var data = [];
		$.each( ids, function(key,value) {
			if($(this).attr('checked')){
				data.push($(this).val());
			}
		});
		return data;
	}

	$( '#show_add_item' ).click( function(){
		modalContainer.modal( 'show' );
		var member_form_uri = $(this).data('url');
			$.get( member_form_uri, function(response){
				modalContainer.find('.modal-title').html('Register Member');
				modalContent.html( response );
			});
	});

	$( '.edit_item' ).click( function(){		
		
		var ids = get_ids( $('.item_id') );
		if( ids.length == 1 ){
			var member_form_uri = $(this).data('url')+'/'+ids['0'];
			modalContainer.modal( 'show' );
			$.get( member_form_uri, function(response){
				modalContainer.find('.modal-title').html('Register Member');
				modalContent.html( response );
			});
		}else{
			alert('Please select only 1 item.')
		}
	});
	
	/*
	 * Delete Members
	 * 
	 */
	$( '.delete_item' ).click( function(){
		var ids = $('.item_id');		
		var delete_url = $(this).data('url');
		var data = get_ids(ids);

		// stop process if there is no selected item
		if( data.length < 1 ) return;

		// show confirm modal box
		var confirmation = confirm('Are You Sure you want to delete this items?');

		if( !confirmation ) return;

		$.ajax({
			url: delete_url,
			data: {ids: data},
			type: 'POST',
			success: function(response){
				$.each( data, function(key,value){
					$('#item-'+value).parent().parent().fadeOut( function(){
						$(this).remove();
					})
				});
			},
			done: function(done){
				console.log(done)
			},
			error: function(error){
				console.log(error)
			}
		})
	});

	$(document).on( 'click', '#save_setting_modal', function(){
		modalContent.find('form').submit();
	});
	
	$( document ).on( 'submit', '.modal-body form#submit', function(e){
		e.preventDefault();
		var error = 0;
		var inputs = $( this ).find('.required');
			$.each( inputs, function(key,value){
				if( $( this).val() == '' ){
					$( this ).addClass('error');
					error++;
				}else{
					$( this ).removeClass('error')
				}
			});
			
			if( error == 0 ){
				// submit to the form
				var url = $(this).attr('action');
				var data = $( this ).serialize();
				$('#save_setting_modal').html('Loading...');
				$.post( url, data, function( response ){
					alert( response.message );
					$('#save_setting_modal').html('Save Changes');
				},'json') ;
			}
	});
	
	$( '.form_submit' ).submit( function(e){
		e.preventDefault();
		var url = $(this).attr('action');
		var data = $( this ).serialize();
		$('.login-message').html('').addClass('hide')
		$.post( url, data, function( response ){
			$('.login-message').html( response.message ).removeClass('hide');
			 if( response.code == 200 ){
				window.location.reload();
			 }
		},'json') ;
	});

	$(document).on('change', '.first_name, .last_name', function(){
		$( '.display_name' ).val( $('.first_name').val() + ' ' +  $('.last_name').val())
	});
	
	var table = $('.dataTable');

	if( table.length ){
		$('.dataTable').dataTable({
        	"aLengthMenu": [[5, 15, 20, -1], [5, 10, 20, "All"]]
    	});
	}
	

    $('.btn-google').click( function(e){
		e.preventDefault();		
		var url = 'https://accounts.google.com/o/oauth2/auth?scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile&state=profile&redirect_uri=http://localhost/asset/authentication/login&response_type=code&client_id=174495117957-68rdrgkac326kfaqskr3cpbu8uge5cg5.apps.googleusercontent.com&approval_prompt=force';
		window.location  = url;
    });
	
});