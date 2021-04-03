<div class="container">
    <div class="row">
    <?php
        if(function_exists('dynamic_sidebar')) {
            ob_start();
            dynamic_sidebar('footer-sidebar');
            $content_sidebar = ob_get_contents();
            ob_end_clean();
            $content_sidebar = str_replace('<ul', '<ol class="list-unstyled mb-0"', $content_sidebar);
            $content_sidebar = str_replace('</ul>', '</ol>', $content_sidebar);
            echo $content_sidebar;
        }  
    ?>
    </div>
</div>