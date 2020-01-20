<?php
// Require the Composer autoloader.
// require __DIR__ . '/vendor/autoload.php';

// Import PostTypes.
use PostTypes\PostType;
use PostTypes\Taxonomy;

$names = [
    'name'     => 'decks',
    'singular' => 'Deck',
    'plural'   => 'Decks',
    'slug'     => 'decks',
];

$options = [
    'has_archive' => false,
    'show_in_rest' => false,
    'supports' => ['title', 'editor', 'thumbnail', 'taxonomy', 'revisions', 'comments',],
];

$labels = [
    'add_new_item' => __( 'Add New Deck' ),
];

// Create a dec post type.
$decks = new PostType( $names, $options );

$decks->taxonomy('deck_type');

$decks->register();

$deck = new Taxonomy('deck_type', [
    "show_ui" => true,
    "show_in_quick_edit" => true,
    "meta_box_cb" => false,
], [
    "name" => "Categories",
    "menu_name" => "Category",
    "singular_name" => "Category",
    "parent_item" => "Categories",
    "not_found" => "No Categories Found",
]);
$deck->posttype( 'decks' );

$deck->register();