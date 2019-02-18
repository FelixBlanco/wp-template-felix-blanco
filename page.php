<?php 
   $templates = get_page_templates();
   foreach ( $templates as $template_name => $template_filename ) {
       echo "$template_name ($template_filename)<br />";
   }
?>