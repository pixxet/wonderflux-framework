<?php
/*
 * Core Wonderflux index template
 * Customise this in your child theme by:
 * - Using hooks and your own functions
 * - Using the 'loop' template part 'loop-index.php' (location specific) or 'loop.php' (fallback if location specific file not available)
 * - Using the 'loop-content' template part 'loop-content-index.php' or 'loop-content.php' (fallback if location specific file not available)
 * - Copying this file to your child theme and customising - it will over-ride this file
 * @package Wonderflux
 */
get_header();
wfmain_before_wrapper(); //WF display hook

wfmain_before_all_container(); //WF display hook
wfmain_before_index_container(); //WF display hook
?>

<div class="container" id="main-content">

	<?php // Main content
	wfmain_before_all_content(); //WF display hook
	wfmain_before_index_content(); //WF display hook

	get_template_part( 'loop', 'index' );

	wfmain_after_index_content(); //WF display hook
	wfmain_after_all_content(); //WF display hook

	wfx_get_sidebar(''); //WF WordPress get_sidebar function replacement

	// Display hooks for after main content and sidebar
	wfmain_after_index_main_content(); //WF display hook
	wfmain_after_all_main_content(); //WF display hook
	?>

</div>

<?php
wfmain_after_index_container(); //WF display hook
wfmain_after_all_container(); //WF display hook

wfmain_after_wrapper(); //WF display hook

get_footer();
?>