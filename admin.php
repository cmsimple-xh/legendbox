<?php

/**
 * Back-end Legendbox.
 * Copyright (c) 2015 svasti@svasti.de
 */


if (!defined('CMSIMPLE_XH_VERSION')) {
    header('HTTP/1.0 403 Forbidden');
    exit;
}


/**
 * Plugin administration
 */
initvar('legendbox');
if ($legendbox) {
    initvar('admin');
    initvar('action');

    $o .= print_plugin_admin('on');
	$o .= plugin_admin_common($action, $admin, $plugin);

    if(!$admin || $admin == 'plugin_main') {
        $o .= '<h1>Legendbox</h1> <p>Version '
            . $plugin_cf['legendbox']['version']
            . ' &nbsp; &nbsp; &copy; 2014-15 by <a href="http://svasti.de" target="_blank">svasti</a></p>'
            . $plugin_tx['legendbox']['shorthelp'];
        $o .= legendbox('','Grey','grey');
        $o .= legendbox('','Blue','blue');
        $o .= legendbox('','Red','red');
        $o .= legendbox('','Green','green');
        $o .= '<div style="clear:both;height:1em"></div>'
            . $plugin_tx['legendbox']['compatibility']
            . '<p>{{{legendbox \'\', \'Test\', \'background: #ffe; padding: 1em\', \'color: red; font-weight: bold;\');}}}</p>';
        $o .= legendbox('', 'Test', 'background: #ffe; padding: 1em', 'color: red; font-weight: bold;');
    }
}

?>
