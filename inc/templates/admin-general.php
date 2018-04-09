<h1>Alerga Info</h1>
<php settings_errors(); ?>
<form method="POST" action="options.php">
	<?php settings_fields('alergaInfo'); ?>
	<?php do_settings_sections('alerga_admin_page') ?>
	<?php submit_button(); ?>
</form>