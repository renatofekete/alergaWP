<h1>Banneri</h1>
<php settings_errors(); ?>
<form method="POST" action="options.php">
	<?php settings_fields('alergaBanneri'); ?>
	<?php do_settings_sections('alerga_banneri') ?>
	<?php submit_button(); ?>
</form>