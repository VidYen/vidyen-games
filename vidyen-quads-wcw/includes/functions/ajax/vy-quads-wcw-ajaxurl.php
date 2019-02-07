<?php

/*** Fix for the ajaxurl not found with custom template sites ***/
add_action('wp_head', 'vy_quads_wcw_ajaxurl');

function vy_quads_wcw_ajaxurl()
{
   echo '<script type="text/javascript">
           var ajaxurl = "' . admin_url('admin-ajax.php') . '";
         </script>';
}
