<?php
/**
 * Template Name: Ideas
 * 
 */

get_header();
?>

<div class="container">
    <h1>Ideas</h1>

    <input @click="selectAll" type="checkbox" name="all">Select All
    <input type="checkbox" name="bike" value="Bike">Bike
    <input type="checkbox" name="car" value="Car">Car
    <input type="checkbox" name="boat" value="Boat">Boat
</div>

<?php
get_footer();