<?php get_header();?>

<?php

    while(have_posts()){
        the_posts();
        //the_content(), the_title(): wherever apppropriate
        
    }

?>

<?php get_footer();?>


















