<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */
?>
<?php get_header(); ?> 
<div class="page-content">
        <div class="grid_16 alpha">
          <div class="content-bar">
            <!--post start-->
             <?php get_template_part('loop', 'index'); ?>
            <!--End Post-->
           </div>
        </div>
        <div class="grid_8 omega">
   		<!--Start Sidebar-->
            <?php get_sidebar(); ?>
          <!--End Sidebar-->  
        </div>
      </div>
<?php get_footer(); ?>