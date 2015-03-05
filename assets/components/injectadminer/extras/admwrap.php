<?php
function adminer_object() {
	include_once "./plugins/plugin.php";
	foreach (glob("plugins/*.php") as $filename) {
	    include_once "./$filename";
	}
	$plugins = array(
	    new AdminerFrames,
	);
	return new AdminerPlugin($plugins);
}
include "../../../../core/components/injectadminer/extras/adminer.php";
?>