<?php
/**===================================
 * @name Legendbox
 * @version 0.3.2
 * @copyright 2014-2015 by svasti
 * ===================================
 */
function legendbox($plugin='', $legend='Legendbox', $boxcss='', $legendcss='')
{
    global $plugin_cf;

    $boxcss = !$boxcss
            ? ' class="legendbox legendbox_'.$plugin_cf['legendbox']['legendbox_default_style'].'"'
            : (strpos($boxcss,':')
               ? ' style="'.$boxcss.'"'
               :' class="legendbox legendbox_'.$boxcss.'"');


    $legendcss = $legendcss? ' style="'.$legendcss.'"':'';

    $o = "\n\n<!-- L E G E N D B O X   S T A R T -->\n"
        . '<fieldset '. $boxcss . '>'
        . '<legend'.$legendcss.'>'. $legend. '</legend>';

    $o .= $plugin
        ? evaluate_scripting('{{{PLUGIN:'.$plugin.';}}}')
        : '<h5>Legendbox Plugin</h5><p>Putting a plugin
          call into a box with a legend on top.</p>';

    $o .= '</fieldset>'
        . "\n<!-- L E G E N D B O X   E N D -->\n\n";

    return $o;
}