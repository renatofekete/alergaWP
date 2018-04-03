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
	// Aside Banner
	$('#upload_asideBanner').on('click', function(e) {
		e.preventDefault();
		if( mediaUploader ) {
			mediaUploader.open();
			return;
		}
		mediaUploader = wp.media.frames.file_frame = wp.media({
			title: 'Choose Aside Banner',
			button: {
				text: 'Choose Banner'
			},
			multiple: false
		});

		mediaUploader.on('select', function() {

			attachment = mediaUploader.state().get('selection').first().toJSON();
			$('#asideBanner_image').val(attachment.url);
			$('#asideBanner_preview').css('background-image','url(' + attachment.url + ')')
		});
			mediaUploader.open();
	});
});