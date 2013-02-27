<?php

/**
 * @file
 * Template.php - process theme data for your sub-theme.
 * 
 * Rename each function and instance of "drivingevalstheme" to match
 * your subthemes name, e.g. if you name your theme "drivingevalstheme" then the function
 * name will be "drivingevalstheme_preprocess_hook". Tip - you can search/replace
 * on "drivingevalstheme".
 */


/**
 * Override or insert variables for the html template.
 */
/* -- Delete this line if you want to use this function
function drivingevalstheme_preprocess_html(&$vars) {
}
function drivingevalstheme_process_html(&$vars) {
}
// */


/**
 * Override or insert variables for the page templates.
 *
 * The core AT theme rebuilds the primiary local tasks menu, rather than using
 * the ['tabs'] which theme_preprocess_page created. The cocktail module
 * modifies the 'tabs' array, so copy those modification here to where AT core
 * keeps them.
 */
/*
function drivingevalstheme_preprocess_page(&$vars) {
}
function drivingevalstheme_process_page(&$vars) {
}
// */


/**
 * Override or insert variables into the node templates.
 */
/* -- Delete this line if you want to use these functions
function drivingevalstheme_preprocess_node(&$vars) {
}
function drivingevalstheme_process_node(&$vars) {
}
// */


/**
 * Override or insert variables into the comment templates.
 */
/* -- Delete this line if you want to use these functions
function drivingevalstheme_preprocess_comment(&$vars) {
}
function drivingevalstheme_process_comment(&$vars) {
}
// */


/**
 * Override or insert variables into the block templates.
 */
/* -- Delete this line if you want to use these functions
function drivingevalstheme_preprocess_block(&$vars) {
}
function drivingevalstheme_process_block(&$vars) {
}
// */
