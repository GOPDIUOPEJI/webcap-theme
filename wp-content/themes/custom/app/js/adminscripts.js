jQuery(function($){
	/*
	 * Select/Upload image(s) event
	 */
	$(document).ready(function(){
		if(!$('img.true_pre_image').attr('src')){
			$('#image_placeholder').css('display', 'block');
		}
	});
	$('body').on('click', '.upload_image_button', function(e){
		e.preventDefault();
 
    		var button = $(this),
    		    custom_uploader = wp.media({
			title: 'Insert image',
			library : {
				// uncomment the next line if you want to attach image to the current post
				// uploadedTo : wp.media.view.settings.post.id, 
				type : 'image'
			},
			button: {
				text: 'Use this image' // button label text
			},
			multiple: false // for multiple image selection set to true
		}).on('select', function() { // it also has "open" and "close" events 
			var attachment = custom_uploader.state().get('selection').first().toJSON();
			$(button).removeClass('button').html('<img class="true_pre_image" src="' + attachment.url + '" style="max-width:95%;display:block;" />').next().val(attachment.id).next().show();
			$('#header_image').val($('.true_pre_image').attr('src'));
			$('#image_placeholder').css('display', 'none');
		})
		.open();
	});
 
	/*
	 * Remove image event
	 */
	$('body').on('click', '.remove_image_button', function(){
		$(this).hide().prev().val('').prev().addClass('button').html('Upload image');
		$('#image_placeholder').css('display', 'block');
		return false;
	});

	$('form#update-theme-options').on('submit', function(e) {
		var data = $(this).serializeArray();
	    e.preventDefault();
	    $.ajax({
	         type: 'POST',
	         url: '../wp-content/themes/custom/Ajax.php',
	         data: data,
	         success: function(msg){
			    
		    }
		});
	});
 
});
