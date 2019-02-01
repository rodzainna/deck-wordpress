<?php
/**
 * The template for displaying home page
 *
 * @package year-of-tolerance
 */

get_header();

/**
 * Home hero template
 */
get_template_part('template-parts/home', 'hero');

/**
 * Home about template
 */
get_template_part('template-parts/home', 'about');

/**
 * Home about logo template
 */
get_template_part('template-parts/home', 'about-logo');

/**
 * Home objectives template
 */
get_template_part('template-parts/home', 'objectives');

/**
 * Home social template
 */
get_template_part('template-parts/home', 'social');

get_footer();