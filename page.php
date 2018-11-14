<?php get_header(); ?>
<?php global $post; ?>
<?php $slug = $post->post_name; ?>
<?php include("$slug/hero.php"); ?>
<?php include("$slug/tent.php"); ?>
<?php get_footer(); ?>
