<?php
/**
 * sidebar.php
 *
 * The Siderbar
 *
 * @author pjh
 * @copyright 2014 - 2015
 * @link http://codex.wordpress.org/Function_Reference/get_sidebar
 * @since BigBooty 0.3.0
 */
?>

<div class="col-md-offset-1 col-md-4" id="sidebar">

    <?php if ( !dynamic_sidebar( 'page' ) ): ?>

    <h3>Sidebar (Page)</h3>
    <p>...</p>	

    <?php endif; ?>

</div>
