<?php 
/**
 * Events Post Type
 */

if (!defined('WPINC')) {
    header('Status: 403 Forbidden');
    header('HTTP/1.1 403 Forbidden');
    exit();
}

use PostTypes\PostType;
use PostTypes\Taxonomy;

$events = new PostType([
    'name' => 'events',
    'singular' => 'Event',
    'plural' => 'Events',
    'slug' => 'event',
], [
    'supports' => ['title', 'editor', 'thumbnail', 'revisions', 'comments',],
    'show_in_rest' => true,
]);

$events->taxonomy('event_type');
$events->taxonomy('event_tag');

$events->register();

$type = new Taxonomy('event_type', [
    "show_ui" => true,
    "show_in_quick_edit" => false,
    "meta_box_cb" => false,
], [
    "name" => "Event Categories",
    "menu_name" => "Event Category",
    "singular_name" => "Event Category",
    "parent_item" => "Event Categories",
    "not_found" => "No Categories Found",
]);

$tags = new Taxonomy('event_tag', [
    // "show_ui" => true,
    // "show_in_quick_edit" => false,
    // "meta_box_cb" => false,
    "heirarchical" => false,
], [
    "name" => "Event Tags",
    "menu_name" => "Event Tag",
    "singular_name" => "Event Tag",
    "parent_item" => "Event Tags",
    "not_found" => "No Tags Found",
]);

$type->register();
$tags->register();

// EOF
