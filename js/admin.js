jQuery(document).ready(function($) {
    var mediaUploader;
	// Logo
	$('#upload_headerLogo').on('click', function(e) {
		e.preventDefault();
		if( mediaUploader ) {
			mediaUploader.open();
			return;
		}
		mediaUploader = wp.media.frames.file_frame = wp.media({
			title: 'Choose Header Logo',
			button: {
				text: 'Choose Logo'
			},
			multiple: false
		});

		mediaUploader.on('select', function() {

			attachment = mediaUploader.state().get('selection').first().toJSON();
			$('#headerLogo_image').val(attachment.url);
			$('#headerLogo_preview').css('background-image','url(' + attachment.url + ')')
		});
			mediaUploader.open();
	});
	// Main Banner
	$('#upload_mainBanner').on('click', function(e) {
		e.preventDefault();
		if( mediaUploader ) {
			mediaUploader.open();
			return;
		}
		mediaUploader = wp.media.frames.file_frame = wp.media({
			title: 'Choose Main Banner',
			button: {
				text: 'Choose Banner'
			},
			multiple: false
		});

		mediaUploader.on('select', function() {

			attachment = mediaUploader.state().get('selection').first().toJSON();
			$('#mainBanner_image').val(attachment.url);
			$('#mainBanner_preview').css('background-image','url(' + attachment.url + ')')
		});
			mediaUploader.open();
	});
});