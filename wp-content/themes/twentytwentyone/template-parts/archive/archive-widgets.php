<?php
/**
 * Displays the footer widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

if (is_active_sidebar('archive-1')): ?>
    <div class="container widget-title">
        <?php dynamic_sidebar('archive-1'); ?>
    </div>
    <?php
endif;