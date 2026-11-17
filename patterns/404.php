<?php
/**
 * Title: 404
 * Slug: lei/404
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.05em","textTransform":"uppercase"}},"textColor":"secondary","fontSize":"tiny"} -->
<p class="has-secondary-color has-text-color has-tiny-font-size" style="letter-spacing:0.05em;text-transform:uppercase"><?php esc_html_e( '404', 'lei' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"style":{"typography":{"fontWeight":"400","letterSpacing":"-0.03em"}},"fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-xx-large-font-size" style="font-weight:400;letter-spacing:-0.03em"><?php esc_html_e( 'Page not found', 'lei' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}},"typography":{"lineHeight":"1.6"}},"textColor":"secondary","fontSize":"normal"} -->
<p class="has-secondary-color has-text-color has-normal-font-size" style="margin-top:var(--wp--preset--spacing--20);line-height:1.6"><?php esc_html_e( 'The page you are looking for does not exist. It may have been moved or deleted.', 'lei' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/"><?php esc_html_e( 'Go to homepage', 'lei' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->