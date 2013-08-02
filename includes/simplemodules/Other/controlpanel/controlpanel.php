<?php

hbm_create('Control Panel', array(
    'description' => 'Add control panel button to the menu.',
    'version' => '1.1'
));

hbm_add_config_option('Url');

hbm_client_route('/', function($request) {

header("Location: ".hbm_get_config_option('Url'));

/*echo "<h1>Loading WebPanel...</h1>
<script language='javascript'>
window.location='https://webadmin.hostovat.eu/';
</script>";*/

});

hbm_register_module_link('client.mainmenu');

?>