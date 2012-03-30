<?php get_header(); ?>

<?php get_sidebar('home'); ?>

<section id="home" class="content">
<div class="wrap">

	<?php echo get_template_part('loop'); ?>
		
</div>	
</section>
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>